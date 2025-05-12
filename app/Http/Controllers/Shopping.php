<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Support\Facades\DB;
class Shopping extends Controller
{


    public function List($categories_id)
    {
        $data=DB::table('products')
        ->where('categories_id','=',$categories_id)
        ->where('categories_id','=',$categories_id)
        ->get();


        return view('shopping.list',['products'=>$data]);
    }

      public function GetCategories()
      {

        $data=DB::table('categories2s')->get();
        return view('Shopping.welcome',['categories2s'=>$data]);
      }
      

      public function Pay(Request $requesst)
      {
        $costumers=[
          'name'=>$requesst->name,
          'phone'=>$requesst->phone,

        ];
        DB::table('costumers')->insert($costumers);
        $cart=[
          'id_products'=>session()->get('products_id'),
          'id_costumers'=>$requesst->phone,

        ];
        DB::table('cart')->insert($cart);
        return view('shopping.invoice');
      }

       public function Checkout()
       {
        return view('shopping.checkout');
       }

      public function AddToCart(){
        $count=session()->get('count',0);
        $count++;
        session()->put('count',$count);
        session()->put('products_id',1);
        return redirect()->back();

      }

    public function Details($id)
    {
        $data=DB::table('products')
        ->where('id','=',$id)
        ->first();

        return view('shopping.details',['product'=>$data]);
    }
}


