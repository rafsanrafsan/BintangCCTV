<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use App\Models\Supplier;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin Bintang CCTV',
            'username' => 'admin',
            'email' => 'bintangcctvcileungsi@gmail.com',
            'password' => bcrypt('bintangcctvcileungsi')
        ]);

        Item::create([
            'item_name' => 'DVR Dahua 4ch',
            'category' => 'DVR',
            'merk' => 'Dahua',
            'stock' => '20',
            'fund' => '400000',
            'price' => '650000'

        ]);

        Item::create([
            'item_name' => 'Camera Dahua Outdoor',
            'category' => 'CCTV',
            'merk' => 'Dahua',
            'stock' => '20',
            'fund' => '200000',
            'price' => '300000'

        ]);

        Item::create([
            'item_name' => 'Power Supply 10A',
            'category' => 'PSU',
            'merk' => 'Hikvision',
            'stock' => '40',
            'fund' => '200000',
            'price' => '250000'

        ]);

        Supplier::create([
            'supplier_name' => '3 Naga Securindo',
            'contact' => '081365476553',
            'address' => 'Jakarta Utara'
        ]);

        Supplier::create([
            'supplier_name' => 'CCTV 21',
            'contact' => '08515284723',
            'address' => 'Jakarta Utara'
        ]);

        Supplier::create([
            'supplier_name' => 'Atria',
            'contact' => '081365476553',
            'address' => 'Bekasi'
        ]);

        Customer::create([
            'name' => 'Billisani',
            'phone' => '081315825842',
            'address' => 'Pondok Tanamas Cibitung'
        ]);

        Customer::create([
            'name' => 'Rafsanjani',
            'phone' => '081315825842',
            'address' => 'Cileungsi'
        ]);

        Customer::create([
            'name' => 'Jodi',
            'phone' => '081315242323',
            'address' => 'Harapan Indah Bekasi'
        ]);

    }
}
