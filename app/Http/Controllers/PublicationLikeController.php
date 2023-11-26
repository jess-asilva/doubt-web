<?php

namespace App\Http\Controllers;

use App\Models\PublicationLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationLikeController extends Controller
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
    public function store(int $publicationId)
    {
        $like['publication_id'] = $publicationId;
        $like['user_id'] = Auth::id();

        PublicationLike::create($like);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $publicationId)
    {
        PublicationLike::where('publication_id', $publicationId)->where('user_id', Auth::id())->delete();

        return redirect()->route('home');
    }
}
