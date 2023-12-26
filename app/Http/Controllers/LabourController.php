<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Labour;


class LabourController extends Controller
{
    public function labour()
    {   
        $labour=Labour::all();
        $url=url('/addlabour');
        $title="Create Labour";
        $data = compact('labour','url','title');
        return view('labour.labour')->with($data);
        
    }

    public function addlabour(Request $request)
    {
       $labour=new Labour();
       $labour->l_name=$request['l_name'];
       $labour->l_price=$request['l_price'];
       $labour->save();
       return redirect('/viewlabour')->withSuccess("SuccessFully Added");


    }
    public function labourview()
    {
        $labour=Labour::all();
        
        $data=compact('labour');
        return view('labour.labourview')->with($data);
    }
    public function destroy($id)
    {
        $labour=Labour::where('id',$id)->first();
        $labour->delete();
        return redirect('/viewlabour')->withSuccess('Record Deleted');
    }
    public function edit1($id)
    {
        $labour = Labour::find($id);
        if(is_null($labour))
        {
            return redirect('/viewlabour');
        }
        else
        {
            $url=url('/update1').'/'.$id;
            $title="Upadte Labour";
            $data = compact('labour','url','title');
            return view('labour.labour')->with($data);
        }
    }

    
    public function update1($id,Request $request)
    {   
        $labour = Labour::find($id);
        $labour->l_name=$request['l_name'];
        $labour->l_price=$request['l_price'];
        $labour->save();
        return redirect('/viewlabour')->withSuccess('Labour Updated');

    }   

    
}
