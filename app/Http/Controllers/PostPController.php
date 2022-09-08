<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_models;
use Illuminate\Support\Facades\DB;

class PostPController extends Controller
{
    public function index(){
        $posts = Student_models::all();
        return view('idCards.index',compact('posts') );
    }

    public function upload(Request $request){
      
        $file = $request->hasFile('image');
       
        if($file){
            $path2 = $request->file('image')->store('images');
           
            Student_models::create([
                    'title'=>$request->name,
                    'email'=>$request->email,
                    'fee_clarence'=>0,
                    // 'fee_clarence'=>$request->fee_clarence,
                    'regNo'=>$request->regNo,
                    'dob'=>$request->dob,
                    'course'=>$request->course,
                    'tel'=>$request->tel,
                    'nationality'=>$request->nationality,
                    'studentId'=>$request->studentId,
                    'photo_path'=>$path2 
            ]);
        }
        $posts = Student_models::all();
        return view('idCards.list',compact('posts'));
        // return view('idCards.profile');
        // $this->viewProfile($id);
        // return $this->viewProfile(student_models->id);
    }

    public function viewProfile($id)
    {
        
        $profile = DB::table('student_models')->where('id', '=', $id)->first();
        return view('idCards.profile', compact('profile'));
    }

}
