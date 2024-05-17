<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Client;
class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = file_get_contents(__DIR__ . '/data/clients.json');
        $clients = json_decode($clients, true);

        foreach ($clients as $clientData) {
            $newClient = new Client();
            $newClient->user_id = $clientData['user_id'];
            $newClient->name = $clientData['name'];
            $newClient->email = $clientData['email'];
            $newClient->phone_number = $clientData['phone_number'];
            $newClient->industry = $clientData['industry'];
            $newClient->address = $clientData['address'];
            $newClient->city = $clientData['city'];
            $newClient->postal_code = $clientData['postal_code'];
            $newClient->province = $clientData['province'];
            $newClient->country = $clientData['country'];
            $newClient->website = $clientData['website'];
            $newClient->social_media = $clientData['social_media'];
            $newClient->description = $clientData['description'];
            $newClient->imageLogo = $clientData['imageLogo'];
            $newClient->p_iva = $clientData['p_iva'];
            $newClient->date_start = $clientData['date_start'];
            $newClient->date_end = $clientData['date_end'];
            $newClient->status = $clientData['status'];
            $newClient->save();
        }
    }
}
