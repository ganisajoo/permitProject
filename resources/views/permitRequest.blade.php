
@extends('layout/main')
@section('table_title', 'Tabel Permit')
@section('content')
    
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ url ('formPermit')}}" target="">
            <button type="button" class="btn btn-primary btn-lg" >Request Permit
              </button></a>
          </div>            
      
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>id</th>
              <th>Nama</th>
              <th>Tanggal Request</th>             
            </tr>
            </thead>
            <tbody>
            <tr>
              @foreach ($permits as $item)

            <td>{{ $item->id_permit }}</td>              
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>

              @endforeach
            </tr>     
                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection 
  