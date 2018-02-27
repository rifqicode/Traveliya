@extends('layouts.navbaradmin')

@section('content')

       
<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Kereta </th>
                  <th>Kelas </th>
                  <th>Tanggal Keberangkatan</th>
                  <th>Dari</th>
                  <th>Tujuan</th>
                  <th>hours</th>
                  <th>max</th>   
                  <th>price</th>
                  <th colspan="2"><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                @foreach($showTrain as $tr)
                <tr>
                  <td>{{ $tr->train }}</td>
                  <td>{{ $tr->class }}</td>
                  <td>{{ $tr->departure_date }}</td>
                  <td>{{ $tr->from }}</td>
                  <td>{{ $tr->destination }}</td>
                  <td>{{ $tr->hours }}</td>
                  <td>{{ $tr->max }}</td>
                  <td>{{ $tr->price }}</td>
                  <td><a href="{{ url('admin/trainrute/edit/'.$tr->id_train) }}" class="btn btn-primary">Edit</a></td>
                  <td><a href="{{ url('admin/trainrute/delete/'.$tr->id_train) }}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


@endsection