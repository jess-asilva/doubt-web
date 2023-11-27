<?php

namespace App\Http\Controllers;

use App\Models\ContactDoubt;
use App\Http\Requests\StoreContactDoubtRequest;
use App\Http\Requests\UpdateContactDoubtRequest;
use App\Mail\ContactDoubtMail;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactDoubtContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactDoubtRequest $request)
    {
        //
        $data = [
            'name'=>$request->name,
            'institution'=>$request->institution,
            'telPhone'=>$request->telPhone,
            'email'=>$request->email,
            'subject'=>$request->subject
        ];

        //return dd($data);
         FacadesMail::to('donatojoaopaulo67@gmail.com')
             ->send(new ContactDoubtMail($data));

            return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactDoubt $contactDoubt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactDoubt $contactDoubt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactDoubtRequest $request, ContactDoubt $contactDoubt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactDoubt $contactDoubt)
    {
        //
    }
}
