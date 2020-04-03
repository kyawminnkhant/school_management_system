@extends('layouts.main')

@section('content')
<h3 class="text-gray-800">Student Datas</h3>
          <p class="mb-4">Fill out all the informations.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add New Student Data</h6>
            </div>
            <div class="card-body">
                    {!! Form::open(['method'=>'POST', 'action'=>'StudentInfoController@store', 'class'=>'user' ]) !!}
                            <div class="form-group row">


                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::text('name', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Student Name', 'id'=>'exampleFirstName']) !!}
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        {!! Form::text('roll_id', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Roll No.', 'id'=>'exampleFirstName']) !!}
                                    {{-- {!! Form::text('name', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Time Table Name', 'id'=>'exampleFirstName']) !!} --}}
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::text('national_id', null, ['class'=>'form-control form-control-user', 'placeholder'=>'National ID', 'id'=>'exampleFirstName']) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        {!! Form::text('year_id', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Year', 'id'=>'exampleFirstName']) !!}
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <p></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>

                                    <div class="col-sm-6">
                                        {!! Form::text('majors_id', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Major', 'id'=>'exampleFirstName']) !!}
                                    </div>


                                    <div class="col-sm-6">
                                        {!! Form::text('father_name', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Father Name', 'id'=>'exampleFirstName']) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>

                                    <div class="col-sm-6">
                                        <p></p>
                                    </div>

                                    <div class="col-sm-12">
                                        {!! Form::text('contact_info', null, ['class'=>'form-control form-control-user', 'placeholder'=>'Contact Info', 'id'=>'exampleFirstName']) !!}

                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            {{-- {!! Form::select('subjects_id', array(''=>'Choose Subject') + $subjects, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!} --}}
                                    </div>
                                    <div class="col-sm-6">
                                            {{-- {!! Form::select('times_id', array(''=>'Choose Time Range') + $times, null, ['class'=>'form-control', 'id'=>'exampleFirstName']) !!} --}}
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                            <p></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p></p>
                                        </div>
                                    <hr>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::submit('Add Now.', ['class'=>'btn btn-primary btn-user btn-block']) !!}
                                    </div>

                                    <div class="col-sm-6">
                                        <button class="btn btn-danger btn-user btn-block" type="button" onclick="window.location='{{ route("studentsinfo.index") }}'">Cancel</button>
                                    </div>


                            </div>
                            {!! Form::close() !!}




@endsection
