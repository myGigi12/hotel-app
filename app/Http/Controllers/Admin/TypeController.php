<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
   function add(){

     return view('admin.add_type');
   }


   function store(Request $request){
    $image = $request->file('image');

    $extension = $image->getClientOriginalExtension();
    $filename = uniqid().".$extension";
    $image->storePubliclyAs('public/images', $filename);

    Type::create([
        'name'=>$request->type_name,
        'description' =>$request-> description,
        'price' =>$request->price,
        'image' =>"images/$filename"

    ]);
    return back();


   }


   function all(Request $request){
    $types= Type::all();

    return view('admin.all_type', compact('types'));

   }


   function edit($type_id){

    $types = Type::all();
    $types = Type::where('id', $type_id)->first();

    return view('admin.edit_type', compact('types'));

   }

   function update(Request $request, $type_id){

    $type = Type::where('id', $type_id)->first();
    $type -> name = $request->name;
    $type -> price = $request->price;
    $type -> description = $request->description;


    if ($request->image != null){
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = uniqid().".$extension";
        $image->storePubliclyAs('public/images', $filename);

        $type->image = "image/$filename";

    }
    $type->save();
    return back();

   }


}
