<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:20',
            'alamat' => 'required',
            'gambar' => 'required|max:2048|mimes:jpg,png,jpeg',
            'email' => 'required|email:rfc',
            'nilai_double' => 'required|numeric|between:2.50,99.99',

        ]);

        $request->gambar->storeAs('public', $request->gambar->getClientOriginalName());

        // $results = [
        //     'nama' => $request->nama,
        //     'alamat' => $request->alamat,
        //     'gambar' => $request->gambar->getClientOriginalName(),
        //     'email' => $request->email,
        //     'nilai_double' => $request->nilai_double,
        // ];
        profile::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'gambar' => $request->gambar->getClientOriginalName(),
            'email' => $request->email,
            'nilai_double' => $request->nilai_double,
        ]);

        return redirect('/result')->with(['status' => 'success']);
    }
 
    public function result()
    {
       $results = profile::all();

        return view('result', [
            'results' => $results
        ]);
    }
}