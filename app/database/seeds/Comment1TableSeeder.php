<?php

use Illuminate\Database\Seeder;

class Comment1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $comment = new App\Comment1();
            $comment->user_id = 1;
            $comment->product_id = 1;
            $comment->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo';
            $comment->save();
        }
    }
}
