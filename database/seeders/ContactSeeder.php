<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'address' => 'Jl. Arjasa',
            'phone_number' => '089271623',
            'email' => 'milla@gmail.com',
            'facebook' => 'milla@gmail.com',
            'instagram' => 'milla@gmail.com',
            'url' => 'milla@gmail.com',
            'web' => 'milla@gmail.com',
        ]);
    }
}
