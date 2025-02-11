<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\Models\Type;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    function add(){
        $types = Type::all();

        return view('admin.add_offer', compact('types'));
    }

    function store(Request $request ){

        $image = $request ->file('image');

        $extension = $image->getClientOriginalExtension();
        $filename = uniqid().".$extension";
        $image->storePubliclyAs('public/images', $filename);

        Offer::create([

            'name'=>$request->name,
            'type_id'=>$request->type_id,
            'price'=>$request->price,
            'image' =>"images/$filename"
        ]);
        return back();

    }


    function all(Request $request){

        $offers = Offer::all();

        return view('admin.all_offer', compact('offers'));

    }

    function edit($offer_id){

        $types =Type::all();
        $offers = Offer::where('id', $offer_id)->first();

        return view('admin.edit_offer', compact('types', 'offers'));

    }

    function update(Request $request, $offer_id){

        $offer = Offer::where('id', $offer_id)->first();
        $offer-> name = $request->name;
        $offer-> type_id = $request->type_id;
        $offer-> price = $request->price;

        if ($request->image != null){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = uniqid().".$extension";
            $image->storePubliclyAs('public/images', $filename);

            $offer->image = "image/$filename";

        }

        $offer->save();

        return back();

    }


}
