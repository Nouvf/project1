<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories2s;
use App\Models\products;


class ProductsController extends Controller
{
    public function Index()
    {
        $catogries7=categories2s::All();
        $products=products::All();
        return view ('products.index',['catogries7'=>$catogries7,'products'=>$products]);
    }

    public function Create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string' ,
            'descreption' => 'nullable|string|max:1000',
            'price' => 'required',
            'stock' => 'required',
            'categories2_id' => 'required',
            'image' => 'nullable',




  
          ]);
        $arr=[
            'name'=>$request->name,
            'descreption'=>$request->descreption,
            'price'=>$request->price,
            'stock'=>$request->stock,
            'categories2_id'=>$request->categories2_id,
            'image'=>$request->image,
           ];
           $items=products::Create($arr);
           $items->save();
           return redirect()->route('products.index');


       
        
    }
    public function Delete($id)
    {
      $item=products::find($id);
      if ($item)
      {
        $item->delete();
      }
      return redirect()->route('products.index');
    }

    public function Edit($id)
    {
        $item=products::find($id);
        return view('products.Edit',['products'=>$item]);
    }
}
