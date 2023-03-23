<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    public function homepage(){
        $title = 'Products';
        $letterhead = 'Tutti i prodotti di cui hai bisogno';
        $button = 'Go to shopping';
        return view('welcome',['title'=>$title, 'letterhead'=>$letterhead, 'button'=>$button]);
    }


    public function prodotti(){
        $title = 'Prodotti';
        $letterhead = 'Scegli tra varie categorie';
        $categories = [
            ['name'=>'elettrodomestici'],
            ['name'=>'cultura'],
            ['name'=>'gaming'],
            ['name'=>'musica'],
        ];

        $products = [
            ['name'=>'Chitarra','img'=>'/img/chitarra.jpeg'],
            ['name'=>'Tv','img'=>'/img/tv.jpeg'],
            ['name'=>'Playstation5','img'=>'/img/playstation5.jpeg'],
        ];
        return view('prodotti',['title'=>$title, 'letterhead'=>$letterhead, 'categories'=>$categories,'products'=>$products]);
    }

    public function dettaglioProdotti($name){
        $products = [
            ['name'=>'Chitarra','img'=>'/img/chitarra.jpeg','description'=>'chitarra fantastica per suonare i puff'],
            ['name'=>'Tv','img'=>'/img/tv.jpeg','description'=>'tv per vedere meglio gli anime'],
            ['name'=>'Playstation5','img'=>'/img/playstation5.jpeg','description'=>'goditi pomeriggi di gaming con i tuoi amici'],
        ];
        foreach ($products as $product) {
            if($product['name'] == $name){
                
                return view('dettagliop',['product'=>$product]);
            }
        }
    }

    public function chiSiamo(){
        $title = 'Chi siamo';
        $letterhead = 'I nostri operatori';
        return view('chi-siamo',['title'=>$title, 'letterhead'=>$letterhead]);
    }
}
        
