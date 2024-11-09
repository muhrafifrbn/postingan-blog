<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $webDesign = "Web Design";
        $ui = "UI UX";
        $machineLearning = "Machine Learning";
        $dataStructur = "Data Structure";

        Category::create([
            "name" => $webDesign,
            "slug" => Str::slug($webDesign),
        ]);

        Category::create([
            "name" => $ui,
            "slug" => Str::slug($ui),
        ]);

        Category::create([
            "name" => $machineLearning,
            "slug" => Str::slug($machineLearning),
        ]);

        Category::create([
            "name" => $dataStructur,
            "slug" => Str::slug($dataStructur),
        ]);

       

       
    }
}
