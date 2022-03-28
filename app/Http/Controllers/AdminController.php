<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(["auth"]);
    }
    public function index(){
        $products = Product::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index',  ["products" => $products]);
    }
}
