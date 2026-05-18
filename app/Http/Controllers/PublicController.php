<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PublicController extends Controller{
public $products=[
    ['nomeprodotto'=>'Latte','Categoria'=>'Alimentari','Prezzo'=>'1.90€','Img'=>'https://picsum.photos/500'],
    ['nomeprodotto'=>'Rinazina','Categoria'=>'Farmaco','Prezzo'=>'8.90€','Img'=>'https://picsum.photos/501'],
    ['nomeprodotto'=>'Sgrassatore','Categoria'=>'Detersivi','Prezzo'=>'3.90€','Img'=>'https://picsum.photos/502'],
    ['nomeprodotto'=>'Candele','Categoria'=>'Automobili','Prezzo'=>'7.50€','Img'=>'https://picsum.photos/503'],
    ['nomeprodotto'=>'Occhiali','Categoria'=>'Ottica','Prezzo'=>'120.50€','Img'=>'https://picsum.photos/504']
];

function Homepage(){
         return view('Homepage');
    }

function prodotti(){
    return view('Products',['prodotti'=>$this->products]);
}

function productdetail($nomeprodotto){
    foreach($this->products as $prodotto){
        if($prodotto['nomeprodotto']==$nomeprodotto){
            return view('detail.productdetail',['prodotto'=>$prodotto]);
        }
    }
}
}
