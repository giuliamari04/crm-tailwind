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
public $activities;
public $industries;
public $nameFilter = '';
public $industryFilter='';
    public function render()
    {
        $this->user = auth()->user();
        $this->clients = Client::where('user_id', auth()->user()->id)->get();
        $this->activities = Activity::whereIn('client_id', $this->clients->pluck('id'))->get();
        $this->industries = Client::pluck('industry')->unique()->filter();

        return view('livewire.home-client',[
           'clients'=> $this->clients,
            'activities'=>$this->activities,
            'industries'=>$this->industries,
        ]);
    }
}
