<?php

namespace App\Http\Controllers\Loja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    private $dados = [];

    public function testApp()
    {
        // headTitulo
        $this->dados['headTitulo'] = "Home-Loja";
        $this->dados['headDescricao'] = "Home";
        $this->dados['headFoto'] = asset('/img/imgs/fb-mredis.jpg');

        return view('loja/pages/home', $this->dados);

    }
}
