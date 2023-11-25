<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Http\Requests\StoreScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\Storage;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedule')->with('schedules', $schedules);
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
    public function store(StoreScheduleRequest $request)
    {
        $scheduleData = $request->validated();

        $schedule = new Schedule();

        $filename = date('YmdHi').$scheduleData['image']->getClientOriginalName();
        Storage::disk('local')->put("public/schedules", $scheduleData['image']);
        $schedule->content = $scheduleData['title'];
        $schedule->image_url = Storage::url("public/schedules/" . $scheduleData['image']->hashName());

        $schedule->save();

        return redirect()->route('get.schedule');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScheduleRequest $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $scheduleId)
    {
        $schedule = Schedule::findOrfail($scheduleId);
        $path = explode("/", $schedule->image_url);

        Storage::delete("public/schedules/" . $path[3]);
        Schedule::destroy($schedule->id);

        return redirect()->route('get.schedule');
    }
}
