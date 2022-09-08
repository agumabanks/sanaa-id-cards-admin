<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Team;
use App\Models\IdCards as CardsModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

use Illuminate\Support\Facades\Storage;

class IdCards extends Controller
{
   
    function index()
    {
        // $banners = Banner::latest()->paginate(config('default_pagination'));
        return view('website.idcards',);
        //  compact('banners')
    }

    function store(Request $request){
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:191',
            'image' => 'required',
            'banner_type' => 'required',
            'zone_id' => 'required',
            'restaurant_id' => 'required_if:banner_type,restaurant_wise',
            'item_id' => 'required_if:banner_type,item_wise',
        ], [
            'zone_id.required' => trans('messages.select_a_zone'),
            'restaurant_id.required_if'=> trans('messages.Restaurant is required when banner type is restaurant wise'),
            'item_id.required_if'=> trans('messages.Food is required when banner type is food wise'),
        ]);

        // if ($validator->fails()) {
        //     return response()->json(['errors' => Helpers::error_processor($validator)]);
        // }

        $cardsModel = new CardsModel;
        $cardsModel->name = $request->name;
        $cardsModel->email = $request->email;
        $cardsModel->regNo = $request->regNo;
        // $cardsModel->image = Helpers::upload('banner/', 'png', $request->file('image'));
        $cardsModel->course = $request->course;
        $cardsModel->studentId = $request->studentId;
        $cardsModel->tel = $request->tel;
        $cardsModel->nationality = $request->nationality;
        $cardsModel->save();

    //    
 
        return response()->json([], 200);
    }

  
}
