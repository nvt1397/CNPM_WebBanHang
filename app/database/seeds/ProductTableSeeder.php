<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Product();
        $p->name = 'Giày thể thao addidas';
        $p->price = 145.12;
        $p->img_link = 'img/category/s-p1.jpg';
        $p->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p->save();
    }
}
