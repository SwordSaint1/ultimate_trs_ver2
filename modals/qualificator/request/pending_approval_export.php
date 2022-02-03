<div class="modal fade bd-example-modal-xl" id="export_pending_approval" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         <b>Export All Pending Approval</b>
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
                    <button class="btn btn-success " onclick="export_all_pending_approvals('export_all_pending_approval')">Export</button>  
                </h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="export_all_pending_approval">
                      <thead style="text-align:center;">
                   <th>#</th>
                    <th>Request Code</th>
                     <th>Batch No.</th>
                    <th>Employee No.</th>
                    <th>Full Name</th>
                    <th>Position</th>
                    <th>Process</th>
                    <th>Department</th>
                    <th>Section</th>
                    <th>Line</th>
                    <th>Training Reason</th>
                    <th>Request Date</th>
                    <th>Requested By</th>
                    <th>Remarks</th>
                      </thead>
                <tbody id="export_pending_approval_data" style="text-align: center;"></tbody>
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

