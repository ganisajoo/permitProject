@extends('layout/main')
@section('table_title', 'Tabel Peminjaman Kartu')
@section('active', 'nav-link active')
@section('content')
    
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card card-light">
          <div class="card-header">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" 
              data-target="#kartuModal">Request Kartu</button>
          </div> 
          
          <div class="modal fade" id="kartuModal">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                   <h4 class="modal-title">Form Peminjaman Kartu Akses</h4>                  
                  </div>
          
                <!-- Modal body -->
                <div class="modal-body">
                  <div class="form-row">
                    <div class="form-group col">
                      <label for="inputNama">Nama</label>
                      <input type="text" class="form-control" id="inputName" placeholder="Nama">
                    </div>
                    <div class="form-group col">
                      <label for="inputNik">NIK</label>
                      <input type="text" class="form-control" id="inputNik" placeholder="NIK">
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col">
                    <label for="nomorTelp">Nomor Telp.</label>
                    <input type="text" class="form-control" id="nomorTelpon" placeholder="Nomor Telephone">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputAddress2">Divisi</label>
                    <input type="text" class="form-control" id="namaDivisi" placeholder="Divisi">
                  </div>
                  </div>                  
                  <div class="form-row">
                    <div class="form-group col-md-2">
                      <label for="inputNoKartu">Nomor Kartu</label>
                      <input type="text" class="form-control" id="inputNoKartu">
                    </div>
                        <div class="form-goup col-md-4">
                          <label for="waktuPeminjaman">Waktu Peminjaman</label>
                          <div class="input-group date" id="datetimepicker6" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker6"/>
                            <div class="input-group-append" data-target="#datetimepicker6" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>                    
                        </div>
                      </div>          
          
                    <div class="form-group col">
                      <label for="inputState">Ruang</label>
                      <input type="text" id="inputRuang" class="form-control" placeholder="Ruang yang ingin dimasuki">                  
                    </div>
                    
                  </div>
                  <p class="font-weight-bold">Ruang yang ingin dimasuki</p>
                  <div class="form-row">
                    <div class="form-group col-sm-3">                    
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Server Room
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        MMR 1
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        MMR 2
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        UPS Room
                      </label>
                    </div>
                    </div>
                  </div> 
                  <div class="form-row">
                    <div class="form-group col-sm-3">                    
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Generator Room
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Panel Room
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Battery Room
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        FSS Room
                      </label>
                    </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-3">                    
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Trafo Room
                      </label>
                    </div>
                    </div>
                    <div class="form-group col-sm-3">                    
                      <div class="form-check">                    
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Office 2nd Floor
                        </label>
                      </div>
                      </div>
                      <div class="form-group col-sm-3">                    
                        <div class="form-check">                    
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Office 3rd Floor
                          </label>
                        </div>
                        </div>
                  </div> 
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
              </div>          
            </div>
          </div>
      <!-- /.card-header -->
      <div class="card-body">
       <table id="example2" class="table table-bordered table-striped">        
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
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.0
                    </td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 5.5
                    </td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 6
                    </td>
                    <td>Win 98+</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 7</td>
                    <td>Win XP SP2+</td>
                    <td>7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Trident</td>
                    <td>AOL browser (AOL desktop)</td>
                    <td>Win XP</td>
                    <td>6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 1.5</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 2.0</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Firefox 3.0</td>
                    <td>Win 2k+ / OSX.3+</td>
                    <td>1.9</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.0</td>
                    <td>OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Camino 1.5</td>
                    <td>OSX.3+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 2.0</td>
                    <td>OSX.4+</td>
                    <td>419.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 3.0</td>
                    <td>OSX.4+</td>
                    <td>522.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>OmniWeb 5.5</td>
                    <td>OSX.4+</td>
                    <td>420</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>iPod Touch / iPhone</td>
                    <td>iPod</td>
                    <td>420.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>S60</td>
                    <td>S60</td>
                    <td>413</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 7.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.0</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 8.5</td>
                    <td>Win 95+ / OSX.2+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.0</td>
                    <td>Win 95+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.2</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera 9.5</td>
                    <td>Win 88+ / OSX.3+</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Opera for Wii</td>
                    <td>Wii</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nokia N800</td>
                    <td>N800</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Presto</td>
                    <td>Nintendo DS browser</td>
                    <td>Nintendo DS</td>
                    <td>8.5</td>
                    <td>C/A<sup>1</sup></td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.1</td>
                    <td>KDE 3.1</td>
                    <td>3.1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.3</td>
                    <td>KDE 3.3</td>
                    <td>3.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>KHTML</td>
                    <td>Konqureror 3.5</td>
                    <td>KDE 3.5</td>
                    <td>3.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 4.5</td>
                    <td>Mac OS 8-9</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.1</td>
                    <td>Mac OS 7.6-9</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Tasman</td>
                    <td>Internet Explorer 5.2</td>
                    <td>Mac OS 8-X</td>
                    <td>1</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.1</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>NetFront 3.4</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Dillo 0.8</td>
                    <td>Embedded devices</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Links</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>Lynx</td>
                    <td>Text only</td>
                    <td>-</td>
                    <td>X</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>IE Mobile</td>
                    <td>Windows Mobile 6</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Misc</td>
                    <td>PSP browser</td>
                    <td>PSP</td>
                    <td>-</td>
                    <td>C</td>
                  </tr>
                  <tr>
                    <td>Other browsers</td>
                    <td>All others</td>
                    <td>-</td>
                    <td>-</td>
                    <td>U</td>
                  </tr>
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
  