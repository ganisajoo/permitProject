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
            <a href="{{ url ('formPermit')}}" target="_blank">
            <button type="button" class="btn btn-primary btn-lg" >Request Permit
              </button></a>
          </div>            
      
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
            <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
            </tr>
            </thead>
            <tbody>           
              @foreach ($permit as $permit)
                  
              <tr>     
                <td>{{$permit->nama</td>
                <td></td>             
                
                
              </tr>
              @endforeach
            
                  </tbody>               
                  
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
  