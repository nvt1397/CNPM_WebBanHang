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
        $p->name = 'Giày thể thao addias';
        $p->price = 1500000;
        $p->img_link = 'img/category/s-p1.jpg';
        $p->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p->save();

        $p2 = new Product();
        $p2->name = 'Adidas Prophere shoes - New 2018';
        $p2->price = 2500000;
        $p2->img_link = 'img/product/adidas1.jpeg';
        $p2->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p2->save();

        $p3 = new Product();
        $p3->name = 'Adidas Ultra Boost Sneakers - A61';
        $p3->price = 1900000;
        $p3->img_link = 'img/product/adidas2.jpeg';
        $p3->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p3->save();

        $p4 = new Product();
        $p4->name = 'Adidas Ultra Boost Sneakers - A15';
        $p4->price = 1900000;
        $p4->img_link = 'img/product/adidas2.jpeg';
        $p4->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p4->save();
        
        $p4 = new Product();
        $p4->name = 'Adidas Ultra Boost Sneakers - A04';
        $p4->price = 2900000;
        $p4->img_link = 'img/product/adidas3.jpeg';
        $p4->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p4->save();

        $p5 = new Product();
        $p5->name = "Adidas Questar Boost Women's Running shoes - A02";
        $p5->price = 3900000;
        $p5->img_link = 'img/product/adidas4.jpeg';
        $p5->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p5->save();    
        
        $p6 = new Product();
        $p6->name = "Adidas Questar Boost Women's Running shoes - A03";
        $p6->price = 1290000;
        $p6->img_link = 'img/product/adidas5.jpeg';
        $p6->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p6->save();
        
        $p7 = new Product();
        $p7->name = "Adidas Ultra Boost - A06";
        $p7->price = 1490000;
        $p7->img_link = 'img/product/adidas6.jpeg';
        $p7->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p7->save();

        $p8 = new Product();
        $p8->name = "Giày Nike Pegasuc 35 nữ - N02";
        $p8->price = 2490000;
        $p8->img_link = 'img/product/adidas7.jpeg';
        $p8->description = 'Đặng Anh Văn: Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for something that can make your interior look awesome, and at the same time give you the pleasant warm feeling during the winter.';
        $p8->save();
    }
}
