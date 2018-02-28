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
                  <td>
                      <form action="{{url('admin/trainrute/deleterute/'.$tr->id_train)}}"method="POST">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}

                      <a href="{{ url('admin/train/editrute/'.$tr->id_train) }}"class="btn btn-sm btn-primary">update</a>
                      <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>


@endsection