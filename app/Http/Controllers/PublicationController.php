<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\User;
use App\Http\Requests\StorePublicationRequest;
use App\Http\Requests\UpdatePublicationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = Auth::id();

        $loggedUser = User::find($userId);
        $publications = Publication::orderByDesc('created_at')->get();
        $publications = Publication::appendUsersLike($publications);

        return view('home')->with('loggedUser', $loggedUser)->with('publications', $publications);
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
    public function store(StorePublicationRequest $request)
    {
        $publication = $request->validated();
        if(isset($publication['image'])) {
            Storage::disk('local')->put("public/publications/images", $publication['image']);
        }

        Publication::create([
            'user_id' => Auth::id(),
            'title' => $publication['title'],
            'content' => $publication['content'],
            'image_url' => isset($publication['image']) ? Storage::url("public/publications/images/" . $publication['image']->hashName()) : null,
            'video_url' => $publication['video_url'] ?? null,
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $publicationId)
    {
        $publication = Publication::findOrFail($publicationId);

        return view('publication')->with('publication', $publication);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicationRequest $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
