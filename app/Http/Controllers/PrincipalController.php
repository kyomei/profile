<?php

namespace profile\Http\Controllers;
    
class PrincipalController extends Controller {
    
    public function index()
    {
       return view('home');
    }
}
