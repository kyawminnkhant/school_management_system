@extends('layouts.main')

@section('content')
<h3 class="text-gray-800">Days</h3>
          <p class="mb-4">This is the days table.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Days List</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>ID</th>
                            <th>Name</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @if ($days)

                      @foreach ($days as $day)
                      <tr>
                            <td>{{ $day->id }}</td>
                            <td>{{ $day->name }}</td>

                          </tr>
                      @endforeach

                      @endif


                  </tbody>
                </table>

@endsection
