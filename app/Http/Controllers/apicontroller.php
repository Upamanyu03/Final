<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicledetails;
use App\Models\signin;
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
        //$vdetails->item=$request['item'];
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
        $vdetails->item=$request['item'];
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
         $sign=new signin();
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
         $sign= signin::where('email','=',$request->email)->first();
         if($sign){
            if(($sign->password)==($request->password))
            {
                return ["Login"=>"successfully"];
            }
            else
            {
                return ["Login"=>"Invalid Password"];
            }
         }
         else{
            return ["Login"=>"Not Registerd"];
         }
     }
     public function customer($id)
     {  
         $vdetails = Vehicledetails::find($id);
         $data=compact('vdetails');
         return ($data);
     }
}
