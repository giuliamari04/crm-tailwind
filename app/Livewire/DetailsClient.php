<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Client;
use App\Models\User;
use App\Models\Activity;


class DetailsClient extends Component
{
    public $user;
    public $clients;
    public $clientsFiltered;
    public $activities;
    public $industries;
    public $industryFilter = [];
    public $nameFilter = '';
    public $nameRFilter = '';

    public function mount($id)
    {
         $this->user = auth()->user();
        $this->clients = Client::where('id',$id)->get();
        $this->activities = Activity::where('client_id',$id)->get();
    }
    public function render()
    {


        return view('livewire.details-client',[
            'clients' => $this->clients,
            'activities'=>$this->activities,
        ]);
    }

    public function redirectToDetailPage($clientId)
    {
        return redirect()->route('admin.client.show', ['id' => $clientId]);
    }
}
