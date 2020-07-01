@extends('layout/main')

@section('content')
    
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card bg-light card-dark">
            <div class="card-header">
                <h4 class="font-weight-bold">Internal Permit Access</h4>                           
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <div class="card-body">
              <div class="card-body"><h5 class="font-weight-bold mb-4">Permit Name</h5>
                <div class="form-row">
                  <div class="form-group col">
                    <form role="form" action="" method="POST">
                    <input type="text" class="form-control" id="name" placeholder="Enter permit  name"
                    name="name">
                  </div>
                </div>
                </div>
                <hr>                 
                <div class="card-body"><h5 class="font-weight-bold mb-4">Requestor</h5>
                <div class="form-row">
                <div class="form-group col">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                </div>
                <div class="form-group col">
                  <label for="exampleInputPassword1">NIK</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NIK">
                </div>
                <div class="form-group col">
                  <label for="exampleInputPassword1">E-Mail</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="E-Mail Address">
                </div>                
                </div>
                <div class="form-row">
                <div class="form-group col">
                    <label for="exampleInputEmail1">Department</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Building Management</option>                        
                        <option>IP-Core</option>
                        <option>IT-Infrastruktur</option>
                        <option>IT-Network & Security</option>
                        <option>IT-Server</option>
                        <option>IT-Oracle</option>                        
                    </select>
                </div>             
                <div class="form-group col">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number">
                </div>
                <div class="form-group col">
                    <label for="exampleInputEmail1">Purpose Of Work</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Cleaning</option>                        
                        <option>Maintenance</option>
                        <option>Troubleshooting</option>                        
                    </select>
                </div>
                </div>
            </div>
            <hr>
           
            <div class="card-body"><h5 class="font-weight-bold mb-4">Access Time</h5>                          
            <div class="form-row">
            <div class="form-group col">
              <label for="exampleInputEmail1">Date and Time Range</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-clock"></i></span>
                </div>
                <input type="text" class="form-control float-right" id="reservationtime">
              </div>
            </div>
            <div class="form-group col">
              <label for="exampleInputPassword1">Access Type</label>
              <select class="form-control select2" style="width: 100%;">
                <option selected="selected">General Access</option>                        
                <option>Limited Access</option>
                <option>Escorted Access</option>                        
            </select>
            </div>                        
            </div>
            </div>
            <hr>
            <div class="card-body"><h5 class="font-weight-bold mb-4">Authorized Entry Area</h5> 
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
                    <div class="form-group col-sm-3">
                    <div class="form-check">                    
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Parking Lot
                      </label>
                    </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">                    
                        <div class="form-check">                    
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Yard
                          </label>
                        </div>
                        </div>
                        <div class="form-group col-sm-3">
                        <div class="form-check">                    
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Rooftop
                          </label>
                        </div>
                        </div>
                        <div class="form-group col-sm-3">
                        <div class="form-check">                    
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                          <label class="form-check-label" for="gridCheck">
                            Other
                          </label>
                        </div>
                        </div>
                    </div>
            </div>
                    <hr>
                    <div class="card-body"><h5 class="font-weight-bold mb-4">Visitor Information</h5>
                        <div class="row" id="inputFormRow">
                        <div class="form-group col-3">
                        
                            <label for="exampleInputEmail1">Name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                            </div>
                            <div class="form-group col-2">
                              <label for="exampleInputPassword1">NIK/ID Number</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NIK or ID Number">
                            </div>                            
                              <div class="form-group col-2">
                                <label for="exampleInputPassword1">Phone Number</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                              </div>
                            <div class="form-group col-3">
                                <label for="exampleInputEmail1">Department</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Building Management</option>                        
                                    <option>IP-Core</option>
                                    <option>IT-Infrastruktur</option>
                                    <option>IT-Network & Security</option>
                                    <option>IT-Server</option>
                                    <option>IT-Oracle</option>                        
                                </select>
                            </div>
                                          
                            </div>
                            <div id="newRow"></div>
                            <button id="addRow" type="button" class="btn btn-info">Add Person</button>                         
                    </div>
                    <hr>
                    <div class="card-body"><h5 class="font-weight-bold mb-4">Equipment</h5>
                      <div class="row" id="inputFormRow">
                      <div class="form-group col-3">
                      
                          <label for="exampleInputEmail1">Device Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Device Name">
                          </div>
                          <div class="form-group col-4">
                            <label for="exampleInputPassword1">Brand</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Brand Name">
                          </div>                            
                            <div class="form-group col-3">
                              <label for="exampleInputPassword1">Serial Number</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Serial Number">
                            </div>
                          <div class="form-group col-1">
                            <label for="exampleInputPassword1">Quantity</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qty">
                          </div>          
                          </div>
                          <div id="newDeviceRow"></div>
                          <button id="addDeviceRow" type="button" class="btn btn-info">Add Device</button>                         
                  </div> 
                  <hr>
                  <div class="card-body"><h5 class="font-weight-bold mb-4">Detail Operation</h5>
                    <div class="row" id="inputFormRow">
                      <div class="form-group col">
                        <label>Working Procedure</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col">
                      <label>Testing and Verification</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>                         
                  </div>
              </div>
              <div class="row">
                <div class="form-group col">
                  <label>Rollback Operation</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>                         
              </div>
          </div>
                    <div class="row" id="inputFormRow">
                      <div class="form-group col-3">
                      
                          <label for="exampleInputEmail1">Risk Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                          </div>
                          <div class="form-group col-2">
                            <label for="exampleInputPassword1">Posibility</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NIK or ID Number">
                          </div>                            
                            <div class="form-group col-2">
                              <label for="exampleInputPassword1">Impact</label>
                              <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">High</option>                        
                                <option>Middle</option>
                                <option>Low</option>                      
                            </select>
                            </div>
                          <div class="form-group col-4">
                              <label for="exampleInputEmail1">Mitigation Plan</label>
                              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter NIK or ID Number">
                          </div>                                        
                    </div>
                          <div id="newRiskRow"></div>
                          <button id="addRiskRow" type="button" class="btn btn-info">Add</button>                                       
                    <hr>  
                      
                <div class="row">  
                <div class="form-group mt-4 col-4">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                  </div>
                </div>                
              </div>
            </div>
              <!-- /.card-body -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-lg ">Submit</button>
              </div>
            </form>
          </div>
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
  