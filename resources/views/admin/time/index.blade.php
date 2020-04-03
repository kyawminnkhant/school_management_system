@extends('layouts.main')

@section('content')
<h3 class="text-gray-800">Times</h3>

{{-- Card Style --}}

<div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Times</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">Feature Not Available Yet.</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-2x text-blue-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ route('times.create') }}" class="btn btn-light btn-icon-split">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Create Time</div>
                        <div class="my-2"></div>
                        {{-- <a href="#" class="btn btn-light btn-icon-split"> --}}
                                {{-- <span class="icon text-white-50">
                                        <i class="fas fa-flag"></i>
                          </span> --}}
                          <span class="text">Add New Time.</span>
                        {{-- </a> --}}
                      </div>
                      <div class="col-auto">
                            <i class="fas fa-flag fa-2x text-green-300"></i>
                          </div>
                    </div>
                  </div>
                </div>
            </a>
              </div>


</div>


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Times List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Time</th>
                            <th>Actions</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @if ($times)

                      @foreach ($times as $time)
                      <tr>
                            <td>{{ $time->id }}</td>
                            <td>{{ $time->name }}</td>
                            <td>
                              <a href="{{ route('times.edit', $time->id) }}" class="btn btn-warning btn-circle">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{ route('times.destroy', $time->id) }}" class="btn btn-danger btn-circle">
                                <i class="fas fa-trash"></i></a>
                            </td>

                          </tr>
                      @endforeach

                      @endif


                  </tbody>
                </table>

@endsection
