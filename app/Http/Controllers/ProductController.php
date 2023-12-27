<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function addProduct()
    {
        $product=Product::all();
        $url=url('/insert');
        $title="Add Product";
        $data=compact('product','url','title');
        return view('product.addproduct')->with($data);
    }
    public function insert(Request $request)
    {
        $product=new Product();
        $product->Product=$request['Product'];
        $product->Price=$request['Price'];
        $product->save();
        return redirect('/viewproduct')->withSuccess('Product Added !!');
    }
    public function viewproduct()
    {
        $product=Product::all();
        $data=compact('product');
        return view('product.productview')->with($data);
    }
    public function destroy($id)
    {
        $product=Product::where('id',$id)->first();
        $product->delete();
        return redirect('/viewproduct')->withSuccess('Product Deleted');
    }
    public function productedit($id)
    {
        $product = Product::find($id);
        
        if(is_null($product))
        {
            return redirect('/addproduct');
        }
        else
        {
            $url=url('/productupdate').'/'.$id;
            $title="Update Product";
            $data=compact('product','url','title');
            return view('product.addproduct')->with($data);
        }
    }
    public function productupdate($id,Request $request)
    {
        $product = Product::find($id);
        $product->Product=$request['Product'];
        $product->Price=$request['Price'];
        $product->save();
        return redirect('/viewproduct')->withSuccess('Product Updated');
    }

}
