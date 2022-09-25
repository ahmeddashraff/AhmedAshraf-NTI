<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index()
   {
        $products = Product::all();
        return view('products.index',compact('products'));
   }

   public function create()
   {
        $brands = Brand::select('id','name_en')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en')->orderBy('name_en')->get();
        return view('products.create',compact('brands','subcategories'));
   }
   public function edit($id)
   {
        $product = Product::findOrFail($id);
        $brands = Brand::select('id','name_en')->orderBy('name_en')->get();
        $subcategories = Subcategory::select('id','name_en')->orderBy('name_en')->get();
        return view('products.edit',compact('product','brands','subcategories'));
   }

   public function store(Request $request)
   {
        $request->validate([
            'name_en'=>['required','string','between:2,512'],
            'name_ar'=>['required','string','between:2,512'],
            'price'=>['required','numeric','between:1,99999.99'],
            'quantity'=>['nullable','integer','between:1,999'],
            'code'=>['required','integer','digits:6','unique:products'],
            'status'=>['nullable','in:1,0'],
            'brand_id'=>['nullable','integer','exists:brands,id'],
            'subcategory_id'=>['required','integer','exists:subcategories,id'],
            'details_en'=>['required','string'],
            'details_ar'=>['required','string'],
            'image'=>['required','mimes:png,jpg,jpeg','max:1024']
        ]);
        $imageName = $request->file('image')->hashName();
        $request->file('image')->move(public_path('images\products'),$imageName);
        $data = $request->except('_token','image');
        $data['image'] = $imageName;
        Product::create($data);
        return redirect()->route('dashboard.products')->with('success','Product Created Successfully');
   }
}
