<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        factory(App\User::class, 50)->create()->each(function($u) {
            $u->save();
        });
    }
}
