<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return "this is an index function of contrlloer ";
    }

    public function example(){
        return "this is an exmple 1 of cntorller post";
    }
    public function apple(){
        return "i want to eat apple ";
    }
    
    public function apple1($id){
        return "this an apple i want to eat $id";
    }
}
