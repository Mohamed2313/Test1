<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models\offer;

class CrudController extends Controller
{
    public function __construct(){

    }

    public function getoffer(){
        return offer::select('id','name')->get();
    }

    // public function store(){
    //     offer::create([
    //         'name' => 'offer3',
    //         'price' => '333',
    //         'photo'=> 'sds'

    //     ]);
    // }

    public function create(){

        return View('offer.create');
    }

    public function store(Request $request){

        // Validaton data before insert

        // $rules [
        //     'name'  => 'required|max:100|unique:offers,name',
        //     'price' => 'required|numeric',
        //     'photo' => 'required' ,
        //         ];
        $message = [  'name.required' => 'Name    Erorr',
        'name.max' => 'Name    not equal',
        'name.unique' => 'Name    IS not correct use befor',
        'price.required' => 'price    Erorr',
        'photo.required' => 'photo  not Goood it is  Erorr', ];
        $validator = Validator::make($request->all(),
        [
            'name'  => 'required|max:100|unique:offers,name',
        'price' => 'required|numeric',
        'photo' => 'required' ,
            ],$message);

        if($validator -> fails()){

            return redirect()->back()->witherrors($validator)->withinputs($request->all()) ;
        }


        // Insert

        offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'photo' => $request->photo
        ]);
            

        return redirect()->back()->with(['sucess' => 'تمت الاضافه بنجاح']) ;
    }
}


