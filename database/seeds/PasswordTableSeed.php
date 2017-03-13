<?php

use Illuminate\Database\Seeder;

class PasswordTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(\App\Password::class, 100)->create()->each(function ($u) {

      });
    }
}
