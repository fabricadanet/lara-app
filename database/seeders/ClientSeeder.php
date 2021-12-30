<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'user_id' => 1,
            'address_id' => 1,
            'type_client'=> 1,
            'name' => 'José Saldanha',
            'email' => 'email@email.com',
            'phone' => '12345678',
            'whatsapp' => '12345678',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'description' => 'Descrição do cliente'
        ]);
        Client::create([
            'user_id' => 1,
            'address_id' => 1,
            'type_client'=> 1,
            'name' => 'José Saldanha',
            'email' => 'email@email.com',
            'phone' => '12345678',
            'whatsapp' => '12345678',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'description' => 'Descrição do cliente'
        ]);
        Client::create([
            'user_id' => 1,
            'address_id' => 1,
            'type_client'=> 1,
            'name' => 'José Saldanha',
            'email' => 'email@email.com',
            'phone' => '12345678',
            'whatsapp' => '12345678',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'description' => 'Descrição do cliente'
        ]);
        Client::create([
            'user_id' => 1,
            'address_id' => 1,
            'type_client'=> 1,
            'name' => 'José Saldanha',
            'email' => 'email@email.com',
            'phone' => '12345678',
            'whatsapp' => '12345678',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'description' => 'Descrição do cliente'
        ]);
        Client::create([
            'user_id' => 1,
            'address_id' => 1,
            'type_client'=> 1,
            'name' => 'José Saldanha',
            'email' => 'email@email.com',
            'phone' => '12345678',
            'whatsapp' => '12345678',
            'facebook' => 'facebook',
            'instagram' => 'instagram',
            'description' => 'Descrição do cliente'
        ]);

    }
}
