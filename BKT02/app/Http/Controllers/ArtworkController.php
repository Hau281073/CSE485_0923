<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$data=Artwork::where("email","=","boehm.retta@example.org)->get();
        //$artworks = $data->$artworks();
        //return $artwork->toJson;
        // $data =Artwork::all();
        // return $data->toJson;
        $artworks = Artwork::orderBy('id', 'asc')->paginate(10);// Số lượng bản ghi hiển thị trên mỗi trang là 10
        return view('artworks.index',compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'artist_name'=>'required',
            'description'=>'required',
            'art_type'=>'required',
            'media_link'=>'required',
            'cover_image'=>'required',

        ]);
        Artwork::create($request->all());
        return redirect()->route('artworks.index')->with('success','Artwork create successfully.');
        //Lay du lieu tu form
        // $name=$request->name;
        // $email=$request->email;
        // $pass=$request->pass;

        // Luu vao database
        // $user = new User;
        // $user->name=$name;
        // $user->email=$email;
        // $user->pass = $pass;

        //Luu lai
        // $user->save();
        // return redirect()->route('')->with('success','');


    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        //
        return view('artworks.index',compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        //
        return view('artworks.edit',compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        //
        $request->validate([
            'artist_name'=>'required',
            'description'=>'required',
            'art_type'=>'required',
            'media_link'=>'required',
            'cover_image'=>'required',

        ]);
        $artwork->update($request->all());
        return redirect()->route('artworks.index')->with('success','Artwork updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        //
        $artwork->delete();
        return redirect()->route('artworks.index')->with('success','Artwork delete successfully');
    }
}
