<?php

namespace App\Http\Controllers;

use App\TimeTable;
use App\Day;
use App\Major;
use App\Subject;
use App\Time;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $timetables = TimeTable::orderBy('days_id', 'ASC')->get();

        return view('admin.timetables.index', compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $days = Day::pluck('name', 'id')->all();
        $majors = Major::pluck('name', 'id')->all();
        $times = Time::pluck('name', 'id')->all();
        $subjects = Subject::pluck('name', 'id')->all();
        return view('admin.timetables.create', compact('days', 'majors', 'times', 'subjects'));
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
        // dd($request);
        TimeTable::create($request->all());

        return redirect('admin/timetables');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function show(TimeTable $timeTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $timetables = TimeTable::findOrfail($id);
        $days = Day::pluck('name', 'id')->all();
        $majors = Major::pluck('name', 'id')->all();
        $times = Time::pluck('name', 'id')->all();
        $subjects = Subject::pluck('name', 'id')->all();
        return view('admin.timetables.edit', compact('days', 'majors', 'times', 'subjects', 'timetables'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        TimeTable::whereId($id)->first()->update($request->all());
        return redirect('admin/timetables');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TimeTable  $timeTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(TimeTable $timeTable)
    {
        //
    }
}
