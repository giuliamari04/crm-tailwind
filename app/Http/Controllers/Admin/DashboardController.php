<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Client;
use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(User $user)
    {
        $user = auth()->user();
        $clients = Client::where('user_id', auth()->user()->id)->get();
        $clientsCount = Client::where('user_id', $user->id)->count();
        $activitiesCount = Activity::whereIn('client_id', $clients->pluck('id'))->count();

        return view('admin.dashboard', compact('user','clients','clientsCount','activitiesCount'));
    }
}
