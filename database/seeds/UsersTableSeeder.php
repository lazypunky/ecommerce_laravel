<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin=array(
          array(
            'name'=> 'Admin Ecommerce',
            'email'=>'admin@ecommerce.test',
            'password'=> Hash::make('admin123'),
            'role' => 'admin',
            'status'=>'active'
          ),
          
          array(
            'name'=> 'Admin2 Ecommerce',
            'email'=>'admin2@ecommerce.test',
            'password'=> Hash::make('admin123'),
            'role' => 'admin',
            'status'=>'active'
          ),

          array(
            'name'=> 'Vendor Ecommerce',
            'email'=>'vendor@ecommerce.test',
            'password'=> Hash::make('vendor123'),
            'role' => 'vendor',
            'status'=>'active'
          )
        );


        foreach($admin as $ind_user){
          $user = User::where('email', $ind_user['email'])->first();
            if(!$user){
                $user = new User();
            }
            
          $user->fill($ind_user);
          $user->save();
        }
    }
}
