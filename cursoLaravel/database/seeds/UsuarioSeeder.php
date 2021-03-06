<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name' => "kaue",
            'email' => "admin@gmail.com",
            'password' => bcrypt("123456"),

            'name' => "Carolina",
            'email' => "carol@gmail.com",
            'password' => bcrypt("45678"),
        ];

        if(User::where('email','=', $dados['email'])->count()) {
            $usuario = User::where('email','=', $dados['email'])->first();
            $usuario->update($dados);
            echo "usuario alterado!";
        }else{
            User::create($dados);
            echo "usuario criado!";
        }
    }
}
