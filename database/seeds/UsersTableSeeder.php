<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        factory(Laravel\User::class, 50)->create()->each(function($u) {
        	$u->save();
        });
    }
}
