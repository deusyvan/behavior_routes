<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

    public function testPatch(Request $request)
    {
        echo "<h1>Usuário de edição é o de código 1</h1>";
        var_dump($request);
        return '<h1>Disparou ação do PATCH</h1>';
    }

    public function testMatch(Request $request)
    {
        echo "Disparou a ação do PUT/PATCH";
        echo "<h1>Usuário de edição é o de código 2</h1>";
        var_dump($request);
    }

    public function destroy()
    {
        return '<h1>Disparou ação de DELETE para o registro 1</h1>';
    }

    public function any()
    {
        return '<h1>Qualquer verbalização aceita</h1>';
    }

    public function userComments($id, Request $request, $comment = null)
    {
        echo 'Controller: User Método: userComments';
        var_dump($id, $comment, $request);
    }

    public function inspect()
    {
        $route = Route::current();//Rota atual
        $name = Route::currentRouteName();//Nome da rota
        $action = Route::currentRouteAction();//ação da rota

        var_dump($route, $name, $action);

    }
}

