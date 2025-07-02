<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dbから情報
        $contacts = contactForm::select('id','name','title','gender','created_at')->get_();
        //gender結び付け
        if($contacts->gender === 0){
            $gender = '男性';
        } else{
            $gender = '女性';
        }


        return view('contacts.index',);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
         return view('contacts.index',compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //フォームから送られてきたデータの確認
        dd($request->age);
        ContactForm::create([
            'name' => $request->name ,
            'title' => $request->title ,
            'email' => $request->email ,
            'url' => $request->url ,
            'gender' => $request->gender ,
            'age' => $request->age ,
            'contact' => $request->contact ,
        ]);
        return to_route('contacts.index');
}
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

