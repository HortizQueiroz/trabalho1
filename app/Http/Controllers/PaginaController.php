<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    
    public function sobre()
    {
        $endereco = "R: Cessi Vale Moreira,   Número:250,   Bairro:Nova Pirapora ";
        $historia = "Empresa criada para dispor os melhores produtos para os nossos clientes.";
        return view('sobre')->with('End', $endereco)->with('Historia',$historia);
        //return view('sobre')->withEmail($dado);
    
    }
    public function contato()
    {
        $dado = "htz@htz.com";
        $Telefone = "38 3741-4077";
        return view('contato')->with('email', $dado)->with('Telefone',$Telefone);
        
    
    }
    public function produtos()
    {
        $produto1 = "chuteira";
        $preco = "130R$";
        return view('produtos')->with('Produto', $produto1)->with('Pre',$preco);
        
    
    }
}
