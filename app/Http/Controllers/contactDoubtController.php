<?php

namespace App\Http\Controllers;

use App\Mail\SendMail as MailSendMail;
use Illuminate\Http\Request;
//use Mail;
//use App\SendMail;
use App\Mail\SendMail;
//use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Mail;


class contactDoubtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('index');
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
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'institution'=>'required',
            'telPhone'=>'required',
            'email'=>'required|email',
            'subject'=>'required'
            
        ]);

        $data = array(
            'name'=>$request->name,
            'institution'=>$request->institution,
            'telPhone'=>$request->telPhone,
            'email'=>$request->email,
            'subject'=>$request->subject
        );

        Mail::to('joaopaulodonato91@gmail.com')
            ->send(new SendMail($data));

         return back()
            ->with('Sua Solicitação foi enviada com sucesso !'); 
      
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
}
