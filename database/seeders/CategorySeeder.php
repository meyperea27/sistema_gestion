<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['nombre' => 'Electrónica', 'descripcion' => 'Dispositivos electrónicos y gadgets']);
        Category::create(['nombre' => 'Ropa', 'descripcion' => 'Vestimenta para hombres y mujeres']);
        Category::create(['nombre' => 'Hogar', 'descripcion' => 'Artículos para el hogar y decoración']);
    }
}
