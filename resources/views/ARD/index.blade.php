@extends('layouts.master_layout')
@section('title', 'Blank')

@section('content')
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-xs-12 mb-1">
            <h2 class="content-header-title">AUDIT RESULT DATABASE</h2>
          </div>
          <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
            <div class="breadcrumb-wrapper col-xs-12">
              <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item"><a href="index.html">Home</a> -->
                </li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a> -->
                </li>
                <li class="breadcrumb-item active">Home
                </li>
              </ol>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Feather icons section start -->
          <section id="feather-icons">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title">Home</h4>
                              <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                              <div class="heading-elements">
                                  <ul class="list-inline mb-0">
                                      <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                      <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                                      <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="card-body collapse in">
                              <div class="card-block">
                                  <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="active-tab" data-toggle="tab" href="#active" aria-controls="active" aria-expanded="true">TUV</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="link-tab" data-toggle="tab" href="#link" aria-controls="link" aria-expanded="false">Customer</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="linkOpt-tab" data-toggle="tab" href="#linkOpt" aria-controls="linkOpt">Internal</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content px-1 pt-1">
                                    <!-- TUV PANEL -->
                                    <div role="tabpanel" class="tab-pane fade active in" id="active" aria-labelledby="active-tab" aria-expanded="true">
                                        <div class="float-right" style="float: right;">
                                            <a class="btn btn-primary" id="btnTestExport" href="user_test_export" target="_blank">User Test Export</a>
                                            <a class="btn btn-primary" id="btnTestExport" href="test_export" target="_blank">Test Export</a>
                                            <button class="btn btn-success" data-toggle="modal" data-target="#modalAddTUVRecord">Add TUV</button>
                                        </div>
                                        <br><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Audit Date</th>
                                                        <th>Audit Category</th>
                                                        <th>Auditors</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ../ TUV PANEL -->

                                    <!-- CUSTOMER PANEL -->
                                    <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="link-tab" aria-expanded="false">
                                        <div class="float-right" style="float: right;">
                                            <button class="btn btn-success" data-toggle="modal" data-target="#modalAddCustomer" data-keyboard="false">Add Customer Findings</button>
                                        </div>
                                        <br><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                        <th>Audit Date</th>
                                                        <th>Auditors</th>
                                                        <th>Actual Date of Submission</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- ../ CUSTOMER PANEL -->

                                    <!-- ../ Internal PANEL -->
                                    <div class="tab-pane fade" id="linkOpt" role="tabpanel" aria-labelledby="linkOpt-tab" aria-expanded="false">
                                      <p>Cookie icing tootsie roll cupcake jelly-o sesame snaps. Gummies cookie dragée cake jelly marzipan donut pie macaroon. Gingerbread powder chocolate cake icing. Cheesecake gummi bears ice cream marzipan.</p>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- // Feather icons section end -->

          <!-- MODALS -->

            <div class="modal fade text-xs-left" id="modalAddCustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true" data-backdrop="static">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <form class="form" method="post">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel3">Add Customer Findings</h4>
                      </div>
                        <div class="modal-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Customer Name</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Customer Name" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput2">Audit Date</label>
                                            <input type="date" id="projectinput2" class="form-control" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Auditors</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Auditors" name="fname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Deadline for Submission</label>
                                            <input type="date" id="projectinput1" class="form-control" placeholder="Customer Name" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Person In Charge</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Person In Charge" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Process</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Process" name="fname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Evaluation Item/Rule/Standard</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Evaluation Item/Rule/Standard" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput2">Classification/Rank</label>
                                            <select class="form-control">
                                                <option>Major NC</option>
                                                <option>NC</option>
                                                <option>OFI</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Statement of Finding(s)</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Statement of Finding(s)" name="fname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput2">Root Cause</label>
                                            <input type="text" id="projectinput2" class="form-control" placeholder="Root Cause" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Improvement Plan</label>
                                            <input type="text" id="projectinput1" class="form-control" placeholder="Improvement Plan" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Commitment Date</label>
                                            <input type="date" id="projectinput1" class="form-control" placeholder="Customer Name" name="fname">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput2">Responsible Group</label>
                                            <select class="form-control">
                                                <option>PMI</option>
                                                <option>YEC</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Responsible Department</label>
                                            <select class="form-control">
                                                <option disabled value="0" selected> -- Recepient --</option>
                                                <option>CN(Prod'n/Eng'g/QC)</option>
                                                <option>PPS(Prod'n/Eng'g/QC)</option>
                                                <option>YF(Prod'n/Eng'g/QC)</option>
                                                <option>TS(Prod'n/Eng'g/QC)</option>
                                                <option>YEC</option>
                                                <option>HRD</option>
                                                <option>LOGISTICS(puchasing/traffic)</option>
                                                <option>FACILITIES</option>
                                                <option>QAD(DCC/QAS/QMS)</option>
                                                <option>ISS(hardware/software)</option>
                                                <option>FINANCE</option>
                                                <option>PPC/Warehouse</option>
                                                <option>EMS</option>
                                                <option>ESS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Status</label>
                                            <select class="form-control">
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput2">Corrective Action Effectiveness Verification</label>
                                            <input type="text" id="projectinput2" class="form-control" placeholder="Corrective Action Effectiveness Verification" name="lname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="projectinput1">Illustration/Photo</label>
                                            <input type="file" id="fileAddCusIlluPhoto" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <center>
                                            <img id="imgAddCusIlluImage" src="" style="border: 1px solid black; max-width: 200px; max-height: 200px;">
                                        </center>
                                    </div>
                                </div>
                            </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-primary">Save changes</button>
                      </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection

@section('js_content')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#fileAddCusIlluPhoto").change(function(){
                if($(this).val() != ""){
                    readURL(this);
                    alert(Math.round(this.files[0].size / 1024) + " KB");
                }
                else{
                    $('#imgAddCusIlluImage').attr('src', "{{ asset('storage/image-icon.png') }}");
                }
            });

            // $("#btnTestExport").click(function(){
            //     $.ajax({
            //         url: "test_export",
            //         method: "get",
            //         dataType: "json",
            //         beforeSend: function(){

            //         },
            //         success: function(JsonObject){
            //             alert("OK");
            //             // if(JsonObject['result'] == 1){
            //             //     $("#modalDeactivateUser").modal('hide');
            //             //     $("#formDeactivateUser")[0].reset();
            //             //     dataTableUsers.draw();
            //             // }
            //             // else{
            //             //     alert("Failed");
            //             // }
            //         },
            //         error: function(data, xhr, status){
            //             console.log('Data: ' + data + "\n" + "XHR: " + xhr + "\n" + "Status: " + status);
            //         }
            //     });
            // });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                  $('#imgAddCusIlluImage').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection