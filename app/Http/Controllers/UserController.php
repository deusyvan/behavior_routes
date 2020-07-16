<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return '<h1>Listagem do usuario com o codigo 1</h1>';
    }

    public function getData()
    {
        return '<h1>Disparou ação do GET</h1>';
    }
}
