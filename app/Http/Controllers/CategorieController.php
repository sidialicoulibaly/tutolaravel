<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use DateTime;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        return view('categories.index');
    }
    public function store(Request $request){
       $validate=$request->validate([
            'name'=>'required|min:3|max:50',
            'price'=>'required|numeric',
            'description'=>'required|min:5|max:250',
       ],
      [
        'name.required'=>'le nom est obligatoire',
        'name.min'=>'le nom doit contenir au moins 3 caractéres',
        'name.max'=>'le nom doit contenir au plus 50 caractéres',
        'price.required'=>'le prix est obligatoire',  
        'price.numeric'=>'le prix doit être un nombre',
        'description.required'=>'la description est obligatoire',
        'description.min'=>'la description doit contenir au moins 5 caractéres',
        'description.max'=>'la description doit contenir au plus 255 caractéres',
        
      ]);
            $name = $request->input('name');
            $price = $request->input('price');
            $description = $request->input('description');
        

      categorie::create([
        'name'=> $name,
        'price'=> $price,
        'description'=> $description
        ]);
      return redirect('index');
    }
    public function liste(){
        $categories = categorie::get();
        $date=new DateTime();
        return view('categories.liste', [
          'categories'=>$categories,
          'date'=>$date,
        ]);         
         }
}
