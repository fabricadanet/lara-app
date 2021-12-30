<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Address::create([
            'street' => 'Rua das Flores',
            'number' => '123',
            'complement' => 'Apto. 101',
            'district' => 'Jardim das Flores',
            'city' => 'São Paulo',
            'state' => 'SP',
            'zip_code' => '01234-567',
            'country' => 'Brasil',
        ]);
    }
}
