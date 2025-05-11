<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\categories2s;
use App\Models\products;


class ProductsController extends Controller
{
    public function Index()
    {
        $catogries7=DB::table('categories2s')->get();
        //$products=products::with('categoy')->get();
        $products=DB::table('products')
<<<<<<< HEAD
        ->join('categories2s','products.categories_id','=','categories2s.id')
        ->select('categories2s.name as categories_name','products.name as name','products.price','products.categories_id','products.stocke','products.image','products.id','products.descreption')
=======
        ->join('categories2s','products.categories2_id','=','categories2s.id')
        ->select('categories2s.name as categories_name','products.name as name','products.price','products.categories2_id','products.stock','products.image','products.id','products.descreption')
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
        ->get();

        //dd($products);

        return view ('products.index',['catogries7'=>$catogries7,'products'=>$products]);
    }




    public function Create(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string',
            'descreption' => 'nullable|string|max:1000',
            'price' => 'required',
<<<<<<< HEAD
            'stocke' => 'required',
            'categories_id' => 'required',
=======
            'stock' => 'required',
            'categories2_id' => 'required',
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
            'image' => 'required|image|mimes:jpeg,png,jpg,pdf,gif',
        ]);
       // الحصول على الملف
       $image=$request->file('image');
          // تخزين الملف في ال storage 
       $path= $image->store('images','public');
     
     
        $arr=[
            'name'=>$request->name,
            'descreption'=>$request->descreption,
            'price'=>$request->price,
<<<<<<< HEAD
            'stocke'=>$request->stocke,
            'categories_id'=>$request->categories_id,
=======
            'stock'=>$request->stock,
            'categories2_id'=>$request->categories2_id,
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
            'image'=>Storage::url($path),
           ];


<<<<<<< HEAD
=======
          
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61

           $items=products::Create($arr); // Insert 
           $items->save();
           return redirect()->route('products.index');

    
      
    }


    public function Delete($id)
    {
        $item=products::find($id); // search 

        if($item)
        {
            $item->delete();
        }

        return redirect()->route('products.index');
    }


    public function Edit($id)
    {
        $item=products::find($id); // search 
        $catogries7=categories2s::All();
        return view ('products.Edit',['products'=>$item,'categories2s'=>$catogries7]);
    
    }


    public function Update(Request $request)
    {
        
       
        $validated = $request->validate([
            'name' => 'required|string',
            'descreption' => 'nullable|string|max:1000',
            'price' => 'required',
<<<<<<< HEAD
            'stocke' => 'required',
            'categories_id' => 'required',
=======
            'stock' => 'required',
            'categories2_id' => 'required',
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
            'image' => 'required|image|mimes:jpeg,png,jpg,pdf,gif',
        ]);
      
        $data=products::find($request->id);
          // الحصول على الملف
       $image=$request->file('image');
       // تخزين الملف في ال storage 
       $path= $image->store('images','public');
      
        $data->update([
            'name'=>$request->name,
            'descreption'=>$request->descreption,
            'price'=>$request->price,
<<<<<<< HEAD
            'stocke'=>$request->stocke,
            'categories_id'=>$request->categories_id,
=======
            'stock'=>$request->stock,
            'categories2_id'=>$request->categories2_id,
>>>>>>> 19d803a68700d6d6c0dc59a59edfc9bb4f680a61
            'image'=>Storage::url($path),

        ]);


          return redirect()->route('products.index');
    }

    public function Logout(Request $request){
        Auth:logout();
        return redirect('login');
    
    }
}

   




