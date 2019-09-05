<?php

use Illuminate\Database\Seeder;
use App\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'      => 'teste',
            'email'     => 'teste@teste.com',
            'password'  => bcrypt('123456789'),
            'sobrenome' => 'testando',
            'cep' => 123,
            'endereco' => 'rua tal',
            'numero' => 1,
            'complemento' => 2,
            'bairro' => 'bairro tal',
            'data_nascimento' =>date(now()),
            'estado' => "sao paulo",
            'cidade' => 'sao paulo',
            'nivel_user' => 0,
            'telefone' => 12345678
        ]);
    }
}
