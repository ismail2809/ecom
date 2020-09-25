<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $products = Product::all();
        return view('catalogue.index',compact('products'));
    }

    public function new()
    {   
        return view('product.new');
    }
    public function store(Request $request)
    {
        //dd($request);
        $produit                 = new Product();
        $produit->titre          = $request->titre;        
        $produit->type           = $request->type;        
        $produit->description    = $request->description;        
        $produit->prix_achat     = $request->prix_achat;           
        $produit->prix_vente     = $request->prix_vente;           
        $produit->prix_promotion = $request->prix_promotion;           
        
        $images=array();
        if($files=$request->file('image')){

            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('product',$name);
                $images[]=$name; 
            }
        }
        $produit->image = json_encode($images);             
        $produit->save();

        return view('product.new');
    }

    public function show($id){
        $product = Product::find($id);
        //dd($product);
        return view('product.détail',compact('product'));

    }
}
