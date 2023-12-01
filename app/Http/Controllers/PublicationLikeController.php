<?php

namespace App\Http\Controllers;

use App\Models\PublicationLike;
use Illuminate\Support\Facades\Auth;

class PublicationLikeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(int $publicationId)
    {
        $like['publication_id'] = $publicationId;
        $like['user_id'] = Auth::id();

        PublicationLike::create($like);

        return response("", 200)->header('Content-Type', 'application/json');
        //return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $publicationId)
    {
        PublicationLike::where('publication_id', $publicationId)->where('user_id', Auth::id())->delete();

        return response("", 200)->header('Content-Type', 'application/json');
        //return redirect()->route('home');
    }
}
