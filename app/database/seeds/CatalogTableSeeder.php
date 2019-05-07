<?php

use Illuminate\Database\Seeder;

class CatalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = new App\Catalog();
        $c1->name = "Giày thể thao nam";
        $c1->save();

        $c2 = new App\Catalog();
        $c2->name = "Giày thể thao nữ";
        $c2->save();

        $c3 = new App\Catalog();
        $c3->name = "Giày bệt nam";
        $c3->save();

        $c4 = new App\Catalog();
        $c4->name = "Giày bệt nữ";
        $c4->save();

        $c5 = new App\Catalog();
        $c5->name = "Dép quai hậu";
        $c5->save();

        $c6 = new App\Catalog();
        $c6->name = "Giày dép trẻ em";
        $c6->save();
    }
}
