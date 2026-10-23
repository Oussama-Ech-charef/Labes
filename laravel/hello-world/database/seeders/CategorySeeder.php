<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ([
            'Technology' => 'Articles about software, tools, and digital products.',
            'Design' => 'Articles about visual design and user experience.',
            'Lifestyle' => 'Articles about everyday life and personal interests.',
        ] as $name => $description) {
            Category::firstOrCreate(
                ['name' => $name],
                ['desc' => $description],
            );
        }
    }
}
