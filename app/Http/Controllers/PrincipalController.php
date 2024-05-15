<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        return View('site.principal');
    }

    public function redirect(){
        
    }

    public function contact(){
        return View('site.contato');
    }
}
