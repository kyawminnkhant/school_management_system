<?php

namespace App\Http\Controllers;

use App\GuestsTimeTables;
use App\TimeTable;
use App\Time;
use Illuminate\Http\Request;

class GuestsTimeTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $timetables = TimeTable::orderBy('days_id', 'ASC')->get();
        $times = Time::orderBy('id', 'ASC')->get();
        $monday = TimeTable::where('days_id', 1)->orderBy('times_id', 'ASC')->get();
        $tuesday = TimeTable::where('days_id', 2)->orderBy('times_id', 'ASC')->get();
        $wednesday = TimeTable::where('days_id', 3)->orderBy('times_id', 'ASC')->get();
        $thursday = TimeTable::where('days_id', 4)->orderBy('times_id', 'ASC')->get();
        $friday = TimeTable::where('days_id', 5)->orderBy('times_id', 'ASC')->get();
        // return view('guests.index', compact( 'times', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'));
        return compact('times', 'monday' , 'tuesday', 'wednesday', 'thursday', 'friday');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GuestsTimeTables  $guestsTimeTables
     * @return \Illuminate\Http\Response
     */
    public function show(GuestsTimeTables $guestsTimeTables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GuestsTimeTables  $guestsTimeTables
     * @return \Illuminate\Http\Response
     */
    public function edit(GuestsTimeTables $guestsTimeTables)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GuestsTimeTables  $guestsTimeTables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GuestsTimeTables $guestsTimeTables)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GuestsTimeTables  $guestsTimeTables
     * @return \Illuminate\Http\Response
     */
    public function destroy(GuestsTimeTables $guestsTimeTables)
    {
        //
    }
}
