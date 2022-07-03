<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Error;
use Illuminate\Http\Request;

class Posts extends Controller
{
    public function store(Request $request)
    {
        



        $title = $request->input('title');
        $totalsqft = $request->input('totalsqft');
        $city = $request->input('city');
        
        
        $location = $request->input('location');
        $address = $request->input('address');
        $price = $request->input('price');
        $phonenumber = $request->input('phonenumber');
        $pic = $request->file('pic');
        $picName = $pic->getClientOriginalName();
        $picType = $pic->getClientOriginalExtension();
        $picSize = $pic->getSize();
        
        $pic->move('images',$picName);
        $destination = 'images/'.$picName;







        DB::unprepared("insert into Post (title,totalsqft, city , location, address, price, phonenumber, picture, user_id) values ('$title','$totalsqft','$city','$location','$address','$price','$phonenumber','$destination','1')");
        return redirect('/createpost');
    }


    
    public function home()
    {
        $posts = DB::select('select * from Post');

        
        return view('home',['posts'=>$posts]);
    }

    public function displaying()
    {
        $posts = DB::select('select * from Post');

        
        return view('/house_posts',['posts'=>$posts]);
    }


    public function details($id)
    {
        $posts = DB::select("select * from Post where id = '$id'");

        error_log($id);
        return view("/house_details",['posts'=>$posts]);
    }

    public function allPosts(){
        $posts = DB::select('select * from Post');
        return view('/your_posts',['posts'=>$posts]);
    }

    public function delete($id){
        DB::unprepared("delete from Post where id = '$id'");
        return redirect('/yourposts');
    }

    public function edit($id){
        $posts=DB::select("select * from Post where id= '$id'");
        return view('edit_post',['posts'=>$posts]);
    }


    public function update(Request $request,$id){
        $title = $request->input('title');
        $totalsqft = $request->input('totalsqft');
        $city = $request->input('city');
        
        
        $location = $request->input('location');
        $address = $request->input('address');
        $price = $request->input('price');
        $phonenumber = $request->input('phonenumber');



        DB::update("update Post set title = '$title',totalsqft = '$totalsqft',city = '$city',location = '$location',address = '$address',price = '$price',phonenumber = '$phonenumber' where id = '$id'");
        return redirect('/yourposts');
    }


    public function filter(Request $request){
        error_log('Nooooooob');
        $sqft = $request->input('range1');
        $price = $request->input('range2');
      

        error_log($sqft);
        error_log($price);


        $posts=DB::select("select * from Post where totalsqft<='$sqft' and price<='$price'");
        return view('house_posts',['posts'=>$posts]);
    }
    public function logout(Request $request){
        auth()->logout();
        // $request->session()->invalidated();
        // $request->session()->regenerateToken();
    
        return redirect('/');
    
    }
}


