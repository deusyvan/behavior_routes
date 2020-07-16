<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return '<h1>Listagem do usuario com o codigo 1</h1>';
    }

    public function getData(Request $request)
    {
        return '<h1>Disparou ação do GET</h1>';
    }

    public function postData(Request $request)
    {
        var_dump($request);
        return '<h1>Disparou ação do POST</h1>';
    }

    public function testPut(Request $request)
    {
        echo "<h1>Usuário de edição é o de código 1</h1>";
        var_dump($request);
        return '<h1>Disparou ação do PUT</h1>';
    }
}

