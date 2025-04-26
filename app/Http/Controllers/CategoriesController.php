<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories2s;
class CategoriesController extends Controller
{
    public function Index()
    { 
        $get_items=categories2s::All(); //Read

        return view ('categories.index',['catogriess'=>$get_items]);
    }
    

    public function Create(Request $request)
    {
        $validated = $request->validate([
          'categ_name' => 'required|string' ,
          'categ_descreption' => 'nullable|string|max:1000',

        ]);
       $arr=[
        'name'=>$request->categ_name,
        'description'=>$request->categ_descreption
       ];

       $items=categories2s::Create($arr);
       $items->save();

       return redirect()->route('categories.index');


    }
     public function Delete($id)
     {
        $data=categories2s::find($id);
        if($data)
        {
            $data->delete();
        }
        return redirect()->route('categories.index');
     }

     public function Edit($id)
     {
        $data=categories2s::find($id);
        return view ('categories.edit',['catogriess'=>$data]);  
     }

     public function Update(Request $request)
     {
       $data=categories2s::find($request->$id); 
       $data->Update([
        'name'=>$request->categ_name,
        'description'=>$request->categ_descreption

       ]);
       return redirect()->route('categories.index');
     }
}
