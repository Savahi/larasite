<?php
Class UsersTableSeeder extends Seeder {
 
    public function run()
    {
     // DB::table('users')->delete();
  
     User::create( array(
         'email' => 'admin@admin.admin',
         'password' => Hash::make('admin'),
         'name' => 'Admin') );
    }
 
}
