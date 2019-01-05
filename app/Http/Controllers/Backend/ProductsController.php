<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Models\Product;
use App\Models\ProductImage;
use Image;
use File;
use Input;

class ProductsController extends Controller
{
     public function __construct()
  {
    $this->middleware('auth:admin');
  }
  public function index()
  {
    $products = Product::orderBy('id', 'desc')->get();
    return view('backend.pages.product.index')->with('products', $products);
  }

  public function create()
  {
    return view('backend.pages.product.create');
  }

  public function edit($id)
  {
    $product = Product::find($id);
    return view('backend.pages.product.edit')->with('product', $product);
  }


  public function store(Request $request)
  {

    $request->validate([
      'title'         => 'required|max:150',
      'book_condition'     => 'required',
      'description'     => 'required',
      'price'             => 'required|numeric',
      'quantity'             => 'required|numeric',
      'category_id'             => 'required|numeric',
      'brand_id'             => 'required|numeric',
        'pdf'  => 'mimes:pdf',
        'file' => 'max:20480',
    ]);



    $product = new Product;

    $product->title = $request->title;
    $product->book_condition = $request->book_condition;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->rent_charge = $request->rent_charge;
    $product->quantity = $request->quantity;

    $product->slug = str_slug($request->title);
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->admin_id = 1;
    $product->save();

    //ProductImage Model insert image

    // if ($request->hasFile('product_image')) {
    //   //insert that image
    //   $image = $request->file('product_image');
    //   $img = time() . '.'. $image->getClientOriginalExtension();
    //   $location = public_path('images/products/' .$img);
    //   Image::make($image)->save($location);
    //
    //   $product_image = new ProductImage;
    //   $product_image->product_id = $product->id;
    //   $product_image->image = $img;
    //   $product_image->save();
    // }
    if (count($request->product_image) > 0) {
      foreach ($request->product_image as $image) {

        //insert that image
        //$image = $request->file('product_image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/products/' .$img);
        Image::make($image)->save($location);

        $product_image = new ProductImage;
        $product_image->product_id = $product->id;
        $product_image->image = $img;
        $product_image->save();

      }
         if ($request->upload_file) {
       
       $destinationPath = 'images/products/';
    $files = $request->file('upload_file'); // will get all files

    //this statement will loop through all files.
       
           
        $file_name = $files->getClientOriginalName(); //Get file original name
        $files->move($destinationPath , $file_name); // move files to destination folder
    
        $product_image->pdf = $file_name;
        $product_image->save();
        
       
    }
    }
      //pdf save
       
  
    
      
      
    return redirect()->route('admin.product.create');
  }
  public function update(Request $request, $id)
  {

    $request->validate([
      'title'         => 'required|max:150',
      'book_condition'     => 'required',
      'description'     => 'required',
      'price'             => 'required|numeric',
      'quantity'             => 'required|numeric',
      'category_id'             => 'required|numeric',
      'brand_id'             => 'required|numeric',
    ]);

    $product = Product::find($id);

    $product->title = $request->title;
    $product->book_condition = $request->book_condition;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->rent_charge = $request->rent_charge;
    $product->quantity = $request->quantity;
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->save();

    return redirect()->route('admin.products');
  }

  public function delete($id)
  {
    $product = Product::find($id);
    if (!is_null($product)) {
      $product->delete();
    }
    session()->flash('success', 'Product has deleted successfully !!');
    return back();

  }
}
