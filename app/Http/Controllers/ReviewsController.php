<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsController extends Controller
{
    public function Barang(){
        $data=[
            'barang'=>Review::all()
        ];
        return view ('review', $data);
    }
    public function Detail($id){
        $detail = Review::find($id);
        return view('detail', compact('detail'));
    }
}
