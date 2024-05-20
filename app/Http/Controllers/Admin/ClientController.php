<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Client;
use App\Models\Activity;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $clients = Client::where('user_id', auth()->user()->id)->get();
        $activities = Activity::whereIn('client_id', $clients->pluck('id'))->get();
        $industries = Client::pluck('industry')->unique()->filter();
        return view('admin.clients.index',compact('user','clients','activities','industries'));
    }

    public function show($id){
        $user = auth()->user();
        $clients = Client::findOrFail($id);
        $activities = Activity::whereIn('client_id', $clients->pluck('id'))->get();
        return view('admin.clients.show', compact('user','clients', 'activities'));
    }
}
