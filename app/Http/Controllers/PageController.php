<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('page.trangchu');
    }
    public function getLoaiSp(){
        return view('page.loai_sanpham');
    }
    public function geChitiet(){			
        return view('page.chitiet_sanpham');			
        }			
    
}
