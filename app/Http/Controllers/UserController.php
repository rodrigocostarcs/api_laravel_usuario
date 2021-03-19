<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private $array = ['error'=>'', 'result'=>[]];

    public function enderecos() {
        $enderecos = User::all();

        foreach($enderecos as $endereco) {
            $this->array['result'][] = [
                'id' => $endereco->id,
                'endereco' => $endereco->endereco
            ];
        }

        return $this->array;
    }


    public function enderecoId($id) {

        $user = User::find($id);

        if($user) {
            $this->array['result'] = $user->endereco;
        } else {
            $this->array['error'] = 'ID não encontrado';
        }

        return $this->array;
    }

    public function cidades() {
        $cidades = User::all();

        foreach($cidades as $cidade) {
            $this->array['result'][] = [
                'id' => $cidade->id,
                'cidade' => $cidade->cidade
            ];
        }

        return $this->array;
    }


    public function cidadeId($id) {

        $user = User::find($id);

        if($user) {
            $this->array['result'] = $user->cidade;
        } else {
            $this->array['error'] = 'ID não encontrado';
        }

        return $this->array;
    }


}
