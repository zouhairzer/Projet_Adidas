<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\products;

class ProductsController extends Controller
{
    // public function product()
    // {
    //     return view('adidass.products');
    // }

    public function product()
    {
        $products = DB::table('products')->join('categories', 'products.cat_id', '=', 'categories.id')
                                            ->select('categories.name', 'products.*')
                                            ->paginate(2);
        $category = category::all();
        return view('adidass.products',compact('products','category')); 

    }

    public function ajouter(){

        $categories = category::all();
        return view('adidass.inputProduct',compact('categories'));
        
    }

    public function ajouter_Product(Request $request){

        // dd($request);

        $request->validate([
            'description' => 'required',
            'prix' => 'required',
            'cat_id' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);

        $uploadFile = 'images/';
        $uploadFileName = uniqid(). '.' .$request->file('image')->getClientOriginalExtension();
        $request->file('image')->move($uploadFile,$uploadFileName);
        
        
        
        $product = new products(); 
        $product-> description= $request->description; 
        $product-> prix = $request->prix; 
        $product->cat_id = $request->cat_id;
        $product-> image = $uploadFileName; 

        

        $product->save();
        
        // dd($product);

        return redirect('/products')->with('status','success');
    }


}
