<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Supplier;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('home',['p'=>$product]);
        //return view('home',['p'=>$product,'category'=>$category,'supplier'=>$supplier]);
    }

    public function none(){
        echo 'ahihi';
    }

    public function GetSearch(Request $req){
         $product = Product::where('name','like','%'.$req->key.'%')->get();
         //foreach ($product as $p) echo $p->name;
         return view('search',compact('product'));
    }

    public function GetCategory($cat){
        $p = Product::where('category_id',$cat)->get();
        //foreach ($p as $pro) echo $pro->name;
        return view('category',compact('p'));
    }

    public function GetSupplier($sup){
        $p = Product::where('supplier_id',$sup)->get() ;
        return view('supplier',compact('p'));
    }
}
