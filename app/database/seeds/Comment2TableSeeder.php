<?php

use Illuminate\Database\Seeder;

class Comment2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 2; $i++) {
            $comment2 = new App\Comment2();
            $comment2->user_id = 1;
            $comment2->cmt1_id = 3;
            $comment2->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo';
            $comment2->save();
        }
    }
}
