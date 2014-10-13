<?php

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->first_name = 'Jacob';
        $user->last_name = 'Ernst';
        $user->save();
    }

}
