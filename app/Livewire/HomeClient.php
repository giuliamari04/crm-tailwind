<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\User;
use App\Models\Activity;
use Livewire\WithPagination;

class HomeClient extends Component
{
    use WithPagination;

    public $user;
    public $clients;
    public $clientsFiltered;
    public $activities;
    public $industries;
    public $industryFilter = [];
    public $nameFilter = '';
    public $nameRFilter = '';

    public function render()
    {
        $this->user = auth()->user();
        $this->clients = Client::where('user_id', $this->user->id)->get();
        $this->activities = Activity::whereIn('client_id', $this->clients->pluck('id'))->get();
        $this->industries = Client::where('user_id', $this->user->id)->pluck('industry')->unique()->filter();

        // If no industry filter is applied, show all clients for the authenticated user
        if (empty($this->industryFilter)) {
            $this->clientsFiltered = Client::where('user_id', $this->user->id)
                ->when($this->nameFilter, function ($query) {
                    $query->where('name', 'like', '%' . $this->nameFilter . '%');
                })
                ->get();
        } else {
            $this->clientsFiltered = Client::where('user_id', $this->user->id)
                ->when($this->industryFilter, function ($query) {
                    $query->whereIn('industry', $this->industryFilter);
                })
                ->when($this->nameFilter, function ($query) {
                    $query->where('name', 'like', '%' . $this->nameFilter . '%');
                })
                ->get();
        }

        return view('livewire.home-client', [
            'clientsFiltered' => $this->clientsFiltered,
            'activities' => $this->activities,
            'industries' => $this->industries,
        ]);
    }
    public function RefreshClients(){
        $this->render();
    }

    public function redirectToDetailPage($clientId)
    {
        return redirect()->route('admin.clients.show', ['id' => $clientId]);
    }

}
