

<div class="modal fade bd-example-modal-xl" id="check_eval_req" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         <span>Training Code:</span> <input type="text" name="" id="training_code_ojt_evals" name="training_code_ojt_eval" class="form-control-lg" readonly>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
             <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> 
                    <div class="row">

            <table>
              <thead>
                <tr>
                  <div class="col-sm-6">
                  <button class="btn btn-secondary" onclick="uncheck_all()">Uncheck</button> 
                  </div>
                </tr>
               
              </thead>
            </table>
          </div>
                </h3>
                 <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 110px;">
                    <button class="btn btn-primary" onclick="ojt_cancel()"
                    class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">Cancel </button> 
                  </div>
                </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover">
                      <thead style="text-align:center;">
                    <th>
                        <input type="checkbox" name="" id="check_all_evaluation2"  onclick="select_all_func()">
                    </th>
                    <th>#</th>
                    <th>Training Code</th>
                    <th>Request Code</th>
                    <th>Batch No.</th>
                    <th>Employee No.</th>
                    <th>Full Name</th>
                    <th>Training Type</th>
                    <th>Process</th>
                    <th>Requested By</th>
                    <th>OJT Start Date</th>
                    <th>OJT End Date</th>
                    <th>Authorization Date</th>
                  
                      </thead>
                <tbody id="data_eval_list_req" style="text-align: center;"></tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>          
      </div>
    </div>
  </div>
</div>

