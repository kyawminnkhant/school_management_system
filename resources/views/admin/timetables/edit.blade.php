@extends('layouts.main')

@section('content')
<h3 class="text-gray-800">Time Tables</h3>
          <p class="mb-4">Fill out all the informations.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add New Time Table</h6>
            </div>
            <div class="card-body">
                    {!! Form::open(['method'=>'PATCH', 'action'=>['TimeTableController@update', $timetables->id], 'class'=>'user' ]) !!}
                            <div class="form-group row">


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {!! Form::select('days_id', $days, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!}
                                    {{-- {!! Form::text('name', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Time Table Name', 'id'=>'exampleFirstName']) !!} --}}
                                    </div>
                                    <div class="col-sm-6">
                                            {!! Form::select('majors_id', $majors, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!}
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            {!! Form::select('subjects_id', $subjects, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!}
                                    </div>
                                    <div class="col-sm-6">
                                            {!! Form::select('times_id', $times, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!}
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <p></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p></p>
                                        </div>
                                    <hr>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::submit('Update Now.', ['class'=>'btn btn-primary btn-user btn-block']) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        <button class="btn btn-danger btn-user btn-block" type="button" onclick="window.location='{{ route("timetables.index") }}'">Cancel</button>
                                    </div>


                            </div>
                            {!! Form::close() !!}




@endsection
