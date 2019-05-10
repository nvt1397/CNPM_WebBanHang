<?php

use Illuminate\Database\Seeder;

class TrademarkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = new App\Trademark();
        $t1->name = 'Adidas';
        $t1->save();

        $t2 = new App\Trademark();
        $t2->name = 'Nike';
        $t2->save();

        $t3 = new App\Trademark();
        $t3->name = 'Bitis';
        $t3->save();
    }
}
