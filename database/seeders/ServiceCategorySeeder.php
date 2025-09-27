<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                'name' => 'AC',
                'slug' => 'ac',
                'image' => '1521969345.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Beauty',
                'slug' => 'beauty',
                'image' => '1521969358.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plumbing',
                'slug' => 'plumbing',
                'image' => '1521969409.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Electrical',
                'slug' => 'electrical',
                'image' => '1521969419.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Shower Filter',
                'slug' => 'shower-filter',
                'image' => '1521969430.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Cleaning',
                'slug' => 'home-cleaning',
                'image' => '1521969446.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carpentry',
                'slug' => 'carpentry',
                'image' => '1521969454.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pest Control',
                'slug' => 'pest-control',
                'image' => '1521969464.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chimney Hob',
                'slug' => 'chimney-hob',
                'image' => '1521969490.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Water Purifier',
                'slug' => 'water-purifier',
                'image' => '1521972593.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Computer Repair',
                'slug' => 'computer-repair',
                'image' => '1521969512.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tv',
                'slug' => 'tv',
                'image' => '1521969522.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Car',
                'slug' => 'car',
                'image' => '1521969576.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Document',
                'slug' => 'document',
                'image' => '1521974355.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Movers & Packers',
                'slug' => 'movers-packers',
                'image' => '1521969599.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Geyser',
                'slug' => 'geyser',
                'image' => '1521969558.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Home Automation',
                'slug' => 'home-automation',
                'image' => '1521969622.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laundry',
                'slug' => 'laundry',
                'image' => '1521969624.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Painting',
                'slug' => 'painting',
                'image' => '1521972643.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Refrigerator',
                'slug' => 'refrigerator',
                'image' => '1521969536.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            



        ]);
    }
}
