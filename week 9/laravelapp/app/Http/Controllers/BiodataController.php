<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index(){
    	 $nama = 'Novian Nurrohman';           
    	 $materi = ["Web Design", "Web Programming", "Digital Marketing","Graphic Design"];         
    	 return view('biodata' , ['nama' => $nama, 'materi' => $materi]); 
    }
}
