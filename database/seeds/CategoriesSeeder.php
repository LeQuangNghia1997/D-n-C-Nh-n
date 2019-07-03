<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->id = 1;
        $category->name = "Món Khai Vị";
        $category->slug = "khaivi";
        $category->desc = "";
        $category->image = "";
        $category->save();

        $category = new Category();
        $category->id = 2;
        $category->name = "Món Chính";
        $category->slug = "monchinh";
        $category->desc = "";
        $category->image = "";
        $category->save();

        $category = new Category();
        $category->id = 3;
        $category->name = "Món Tráng Miệng";
        $category->slug = "montrangmieng";
        $category->desc = "";
        $category->image = "";
        $category->save();


    }
}
