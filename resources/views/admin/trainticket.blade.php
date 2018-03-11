@extends('layouts.navbaradmin')

@section('content')


<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="users-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Kereta</th>
                  <th>Type Perjalanan</th>
                  <th>Pemesan</th>
                  <th>Email Pemesan</th>
                  <th>No Pemesan</th>
                  <th>Memesan Tanggal</th>
                  <th>Status Pembayaran</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        @push('scripts')
        <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('trainticket.data') !!}',
                columns: [
                  { data: 'train', name: 'train' },
                  { data: 'type_trip', name: 'type_trip' },
                  { data: 'name', name: 'name' },
                  { data: 'email', name: 'email' },
                  { data: 'no_telp', name: 'no_telp' },
                  { data: 'trainticket', name: 'trainticket' },
                  { data: 'status', name: 'status' },
                ],
            });
        });
        </script>
        @endpush
@endsection
