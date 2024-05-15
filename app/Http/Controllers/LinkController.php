<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function generate(){
        return View('site.generate');
    }

    public function list(){
        return View('site.list');
    }
}
