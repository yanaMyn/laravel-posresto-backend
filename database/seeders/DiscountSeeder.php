<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Discount::create([
            "name" => "New Year Discount",
            "description" => "New Year Discount 2023",
            "type" => "percentage",
            "value" => 10,
            "status" => "active",
            "expired_date" => "2022-01-31"
        ]);

        \App\Models\Discount::create([
            "name" => "New Year Discount 2",
            "description" => "New Year Discount 2023",
            "type" => "percentage",
            "value" => 15,
            "status" => "active",
            "expired_date" => "2023-01-31"
        ]);

        \App\Models\Discount::create([
            "name" => "New Year Discount 3",
            "description" => "New Year Discount 2023",
            "type" => "percentage",
            "value" => 20,
            "status" => "active",
            "expired_date" => "2024-01-31"
        ]);
    }
}
