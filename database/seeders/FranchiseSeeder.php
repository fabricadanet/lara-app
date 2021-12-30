<?php

namespace Database\Seeders;

use App\Models\Franchise;
use Illuminate\Database\Seeder;

class FranchiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Franchise::create([
            "name" => "Imobiliária 1",
            "description" => "Descrição 1",
            "address_id" => 1,
            "user_id" => 1,
            "logo" => "logo1.png",
            "website" => "www.franchise1.com",
            "phone" => "123456789",
            "email" => "franchise1@email.com",
            "whatsapp" => "123456789",
            "facebook" => "franchise1",
            "twitter" => "franchise1",
            "instagram" => "franchise1",
            "youtube" => "franchise1",
            "linkedin" => "franchise1",
            "telegram" => "franchise1",
            "status" => "active",
        ]);

        Franchise::create([
            "name" => "Imobiliária 2",
            "description" => "Descrição 2",
            "address_id" => 1,
            "user_id" => 1,
            "logo" => "logo1.png",
            "website" => "www.franchise2.com",
            "phone" => "123456789",
            "email" => "franchise2@email.com",
            "whatsapp" => "123456789",
            "facebook" => "franchise1",
            "twitter" => "franchise1",
            "instagram" => "franchise1",
            "youtube" => "franchise1",
            "linkedin" => "franchise1",
            "telegram" => "franchise1",
            "status" => "active",
        ]);

        Franchise::create([
            "name" => "Imobiliária 3",
            "description" => "Descriçao 3",
            "address_id" => 1,
            "user_id" => 1,
            "logo" => "logo1.png",
            "website" => "www.franchise3.com",
            "phone" => "123456789",
            "email" => "franchise3@email.com",
            "whatsapp" => "123456789",
            "facebook" => "franchise1",
            "twitter" => "franchise1",
            "instagram" => "franchise1",
            "youtube" => "franchise1",
            "linkedin" => "franchise1",
            "telegram" => "franchise1",
            "status" => "active",
        ]);
    }
}
