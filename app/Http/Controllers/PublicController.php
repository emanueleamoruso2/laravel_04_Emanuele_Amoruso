<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class PublicController extends Controller{
public $products=[
    ['name'=>'Latte','category'=>'Alimentari','price'=>'1.90€','Img'=>'https://picsum.photos/500'],
    ['name'=>'Rinazina','category'=>'Farmaco','price'=>'8.90€','Img'=>'https://picsum.photos/501'],
    ['name'=>'Sgrassatore','category'=>'Detersivi','price'=>'3.90€','Img'=>'https://picsum.photos/502'],
    ['name'=>'Candele','category'=>'Automobili','price'=>'7.50€','Img'=>'https://picsum.photos/503'],
    ['name'=>'Occhiali','category'=>'Ottica','price'=>'120.50€','Img'=>'https://picsum.photos/504']
];

function Homepage(){
         return view('Homepage');
    }

function prodotti(){
    return view('Products',['products'=>$this->products]);
}

function productdetail($name){
    foreach($this->products as $product){
        if($product['name']==$name){
            return view('detail.productdetail',['product'=>$product]);
        }
    }
}
}
