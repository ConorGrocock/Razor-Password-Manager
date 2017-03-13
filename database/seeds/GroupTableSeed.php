<?php

use Illuminate\Database\Seeder;

class GroupTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\Group::class, 5)->create()->each(function ($u) {
        $u->users()->attach('1');
      });
    }
}
