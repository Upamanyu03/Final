<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Labour;


class LabourController extends Controller
{
    public function labour()
    {
        return view('labour.labour');
    }

    public function addlabour(Request $request)
    {
       $labour=new Labour();
       $labour->l_name=$request['l_name'];
       $labour->l_price=$request['l_price'];
       $labour->save();
       return redirect('/addlabour')->withSuccess("SuccessFully Added");


    }
}
