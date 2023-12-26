<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicledetails;
use DateTime;
class DemoController extends Controller
{
    public function form(Request $request)
    {
        $vdetails=Vehicledetails::all();
        $url=url('/regi');
        $title="Customer Registration";
        $data=compact('vdetails','url','title');
        return view('registration')->with($data);
    }
    public function regi(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'last'=>'required',
                'email'=>'required|email',
                'Vno'=>'required',
                'Vmake'=>'required',
                'tel'=>'required',
                'kms'=>'required',
                'E'=>'required',
                'item'=>'required',
                'regular'=>'required',
                'front'=>'required',
                'right'=>'required',
                'left'=>'required',
                'rear'=>'required',
                'dashbord'=>'required',
                'dickey'=>'required'
            ]
            );
        $frontName=time().'.'.$request->front->extension();
        $request->front->move(public_path('front'),$frontName);
        $rightName=time().'.'.$request->right->extension();
        $request->right->move(public_path('right'),$rightName);
        $leftName=time().'.'.$request->left->extension();
        $request->left->move(public_path('left'),$leftName);
        $rearName=time().'.'.$request->rear->extension();
        $request->rear->move(public_path('rear'),$rearName);
        $dashbordName=time().'.'.$request->dashbord->extension();
        $request->dashbord->move(public_path('dashbord'),$dashbordName);
        $dickeyName=time().'.'.$request->dickey->extension();
        $request->dickey->move(public_path('dickey'),$dickeyName);
        $vdetails=new Vehicledetails();
        $vdetails->name=$request['name'];
        $vdetails->last=$request['last'];
        $vdetails->email=$request['email'];
        //$vdetails->date=$request['date'];
        $vdetails->date=$date=new DateTime();    
        $vdetails->Vno=$request['Vno'];
        $vdetails->Vmake=$request['Vmake'];
        $vdetails->tel=$request['tel'];
        $vdetails->kms=$request['kms'];
        $vdetails->E=$request['E'];
        $vdetails->item=$request['item'];
        $vdetails->regular=$request['regular'];
        $vdetails->front=$frontName;
        $vdetails->right=$rightName;
        $vdetails->left=$leftName;
        $vdetails->rear=$rearName;
        $vdetails->dashbord=$dashbordName;
        $vdetails->dickey=$dickeyName;
        $checkbox_data=$request->input('item');
        $vdetails->item=implode(',',$checkbox_data);
        $vdetails->save();
        return redirect('/view')->withSuccess('Record Inserted');
    }
    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if($search !="")
        {
            $vdetails=Vehicledetails::where('name','LIKE',$search)->orwhere('date','LIKE',$search)->orwhere('Vno','LIKE',$search)->get();
        }
        else
        {
            $vdetails=Vehicledetails::all();
        }
        $data=compact('vdetails','search');
        return view('view')->with($data);
    }
    public function destroy($id)
    {
        $vdetails=Vehicledetails::where('id',$id)->first();
        $vdetails->delete();
        return redirect('/view')->withSuccess('Record Deleted');
    }
    public function edit($id)
    {
        $vdetails = Vehicledetails::find($id);
        if(is_null($vdetails))
        {
            return redirect('/view');
        }
        else
        {
            $url=url('/update').'/'.$id;
            $title="Update Customer";
            $data=compact('vdetails','url','title');
            return view('registration')->with($data);
        }
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
            $frontName=time().'.'.$request->front->extension();
            $request->front->move(public_path('front'),$frontName);
            $vdetails->front=$frontName;
        }
        if(isset($request->right)){
            $rightName=time().'.'.$request->right->extension();
            $request->right->move(public_path('right'),$rightName);
            $vdetails->right=$rightName;
        }
        if(isset($request->left)){
            $leftName=time().'.'.$request->left->extension();
            $request->left->move(public_path('left'),$leftName);
            $vdetails->left=$leftName;
        }
        if(isset($request->rear)){
            $rearName=time().'.'.$request->rear->extension();
            $request->rear->move(public_path('rear'),$rearName);
            $vdetails->rear=$rearName;
        }
        if(isset($request->dashbord)){
            $dashbordName=time().'.'.$request->dashbord->extension();
            $request->dashbord->move(public_path('dashbord'),$dashbordName);
            $vdetails->dashbord=$dashbordName;
        }
        if(isset($request->dickey)){
            $dickeyName=time().'.'.$request->dickey->extension();
            $request->dickey->move(public_path('dickey'),$dickeyName);
            $vdetails->dickey=$dickeyName;
        }
        $vdetails->save();
        return redirect('/view')->withSuccess('Customer Updated !!');
    }
    public function first()
    {
        $vdetails=Vehicledetails::all();
        $data=compact('vdetails');
        return view('firstpage')->with($data);
    }
    public function getToken(Request $request){
        $data['token'] = csrf_token();
        return json_encode($data);
    }
    public function invoice()
    {
        return view('Invoice');
    }
    public function customer($id)
    {  
        $vdetails = Vehicledetails::find($id);
        $data=compact('vdetails');
        return view('customer')->with($data);
    }
}
