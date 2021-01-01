<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'mostak@du.ac.bd')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Mostak Ahmed";
            $user->email = "mostak@du.ac.bd";
            $user->password = Hash::make('12345678');
            $user->save();

        }
                
    }
}
