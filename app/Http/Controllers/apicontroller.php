<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicledetails;
use App\Models\Product;
use App\Models\Labour;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class apicontroller extends Controller
{
    public function search(Request $request)
    {
        $search=$request['search'] ?? "";
        $vdetails="";
        if($search !="")
        {
            $vdetails=Vehicledetails::where('name','LIKE',$search)->orwhere('date','LIKE',$search)->orwhere('Vno','LIKE',$search)->get();
        }
        else
        {
            $vdetails=Vehicledetails::all();
        }

       return ($data=compact('vdetails','search'));

    }
    public function insertdata(Request $request)
    {
        // $frontName=time().'.'.$request->front->extension();
        // $request->front->move(public_path('front'),$frontName);
        // $rightName=time().'.'.$request->right->extension();
        // $request->right->move(public_path('right'),$rightName);
        // $leftName=time().'.'.$request->left->extension();
        // $request->left->move(public_path('left'),$leftName);
        // $rearName=time().'.'.$request->rear->extension();
        // $request->rear->move(public_path('rear'),$rearName);
        // $dashbordName=time().'.'.$request->dashbord->extension();
        // $request->dashbord->move(public_path('dashbord'),$dashbordName);
        // $dickeyName=time().'.'.$request->dickey->extension();
        // $request->dickey->move(public_path('dickey'),$dickeyName);
        $vdetails=new Vehicledetails();
        $vdetails->name=$request['name'];
        $vdetails->last=$request['last'];
        $vdetails->email=$request['email'];
        $vdetails->date=$request['date'];
        //$vdetails->date=$date=new DateTime();
        $vdetails->Vno=$request['Vno'];
        $vdetails->Vmake=$request['Vmake'];
        $vdetails->tel=$request['tel'];
        $vdetails->kms=$request['kms'];
        $vdetails->E=$request['E'];
        $checkbox_data=$request->input('item');
        $vdetails->item=implode(',',$checkbox_data);
        $vdetails->regular=$request['regular'];
        // $vdetails->front=$request['front'];
        // $vdetails->right=$request['right'];
        // $vdetails->left=$request['left'];
        // $vdetails->rear=$request['rear'];
        // $vdetails->dashbord=$request['dashbord'];
        // $vdetails->dickey=$request['dickey'];
        $vdetails->save();
        return ["Registered"=>"Successfully"];


    }
    public function update($id,Request $request)
    {
        $vdetails = Vehicledetails::find($id);
        $vdetails->name=$request['name'];
        $vdetails->last=$request['last'];
        $vdetails->email=$request['email'];
        $vdetails->date=$request['date'];
        $vdetails->Vno=$request['Vno'];
        $vdetails->Vmake=$request['Vmake'];
        $vdetails->tel=$request['tel'];
        $vdetails->kms=$request['kms'];
        $vdetails->E=$request['E'];
        $checkbox_data=$request->input('item');
        $vdetails->item=implode(',',$checkbox_data);
        $vdetails->regular=$request['regular'];

        if(isset($request->front)){
            $vdetails->front=$request['front'];
        }
        if(isset($request->right)){
            $vdetails->right=$request['right'];
        }
        if(isset($request->left)){
            $vdetails->left=$request['left'];
        }
        if(isset($request->rear)){
            $vdetails->rear=$request['rear'];
        }
        if(isset($request->dashbord)){
            $vdetails->dashbord=$request['dashbord'];
        }
        if(isset($request->dickey)){
            $vdetails->dickey=$request['dickey'];
        }
        $vdetails->save();
        return ("Updated Succesfully");

    }
    public function destroy($id)
    {
        $vdetails=Vehicledetails::where('id',$id)->first();
        $vdetails->delete();
        return ('Record Deleted');

    }
    public function register(Request $request)
    {
       // echo "<pre";
       //print_r($request->all());
        $request->validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'confirm'=>'required|same:password'

            ]
            );
         $sign=new User();
         $sign->name=$request['name'];
         $sign->email=$request['email'];
         $sign->password=$request['password'];
         $sign->save();
         return "Successfully Registerd";
    }
    public function signIn(Request $request)
     {

        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required'
            ]
            );
            $credentials=$request->only('email','password');
            if(Auth::attempt( $credentials))
            {
                return ["Login"=>"successfully"];
            }
            else
            {
                return ["Login"=>"Invalid Password"];
            }
        //  $sign= signin::where('email','=',$request->email)->first();
        //  if($sign){
        //     if(($sign->password)==($request->password))
        //     {
        //         return ["Login"=>"successfully"];
        //     }
        //     else
        //     {
        //         return ["Login"=>"Invalid Password"];
        //     }
        //  }
        //  else{
        //     return ["Login"=>"Not Registerd"];
        //  }
     }
     public function customer($id)
     {  
         $vdetails = Vehicledetails::find($id);
         $data=compact('vdetails');
         return ($data);
     }
     public function insert(Request $request)
     {
         $product=new Product();
         $product->Product=$request['Product'];
         $product->Price=$request['Price'];
         $product->save();
         return ('Product Added !!');
     }
     public function viewproduct()
     {
         $productDetails=Product::all();
         $data=compact('productDetails');
         return ($data);
     }
     public function addlabour(Request $request)
     {
        $labour=new Labour();
        $labour->l_name=$request['l_name'];
        $labour->l_price=$request['l_price'];
        $labour->save();
        return ("SuccessFully Added");
     }
     public function labourview()
     {
         $labourdetails=Labour::all();
         $data=compact('labourdetails');
         return ($data);
     }
     public function productdestroy($id)
    {
        $product=Product::where('id',$id)->first();
        $product->delete();
        return ('Product Deleted');
    }
    public function labourdestroy($id)
    {
        $labour=Labour::where('id',$id)->first();
        $labour->delete();
        return ('Labour Deleted');
    }
    public function productupdate($id,Request $request)
    {
        $product = Product::find($id);
        $product->Product=$request['Product'];
        $product->Price=$request['Price'];
        $product->save();
        return ('Product Updated');
    }
    public function update1($id,Request $request)
    {   
        $labour = Labour::find($id);
        $labour->l_name=$request['l_name'];
        $labour->l_price=$request['l_price'];
        $labour->save();
        return ('Labour Updated');

    }   
     

}
