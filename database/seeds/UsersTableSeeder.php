<?php
use App\user;
use Illuminate\Support\Facades\Hash;
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
        $user = User::where('email','mdshamsulhuda.shamim98@gmail.com')->first();

        if(!$user){
            User::create([
                'name'=>'shamim',
                'email'=>'mdshamsulhuda.shamim98@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('password')
            ]);
        }
    }
}
