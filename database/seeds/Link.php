<?php

use Illuminate\Database\Seeder;

class Link extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Link::class, 3)->create();
    }
}
