<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Commande;
use Session;

class CommandeController extends Controller
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

    public function commander_product($id,Request $request)
    {   //dd($id); 
        $product = Product::find($id);
        $qte =Session::get('qte_commande');

        return view('commande.new',compact('product','qte'));
    }

    public function commander_product_qte(Request $request,$id)
    {  
        $product = Product::find($id);
        $qte = $request->qte; 
        Session::put('qte_commande',$qte);

        return view('commande.new',compact('product','qte'));
    }

    public function commande_store(Request $request)
    {
         //dd($request);
        $commande              = new Commande();
        $commande->produit_id  = $request->produit_id;        
        $commande->nom         = $request->nom;        
        $commande->tel         = $request->telephone;              
        $commande->adresse     = $request->adresse;           
        $commande->ville       = $request->ville;       
        $commande->prix        = $request->prix;            
        $commande->qte         = (int)$request->qte;            
        
        $commande->save();

        return view('commande.message');
    }
}
