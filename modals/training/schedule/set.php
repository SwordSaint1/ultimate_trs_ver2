

<div class="modal fade bd-example-modal-xl" id="set" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <span>Training Code:</span> <input type="text" name="training_code_edit" id="training_code_edit" class="form-control-lg" readonly ="">
             <input type="hidden" name="id_edit_train" id="id_edit_train">
     <input type="hidden" name="sched_stat_edit" id="sched_stat_edit">
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
                <h4>  Set Time & Trainer </h4>
                </h3>

              </div>
              <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 300px;">
                  <div class="row">
                    <div class="col-3">
                        <span> Training Type:   </span>   <select name="Training_type" id="training_typee_edit" class="form-control" disabled="">
                        <option value="">Choose your option</option>
                        <option value="Special Batch Training">Special Batch Training</option>
                        <option value="Cross And Refresh Training">Cross And Refresh Training</option>
                        </select>
                    </div>
                    <div class="col-3">
                         <span> Refresh Training Type   </span>   <select name="rtraining_type" id="rtraining_type_edit" class="form-control" disabled="">
                        <option value="">Choose your option</option>
                        <option value="Initial">Initial</option>
                        <option value="Final">Final</option>

                        </select>
                    </div>
                    <div class="col-3">
                     <span> Process   </span> 
                      <input type="text" name="" id="tprocess_edit" readonly=""class="form-control">
                    </div>
                    <div class="col-3">
                        <span> Shift   </span>   <select name="shift" id="shift_edit" disabled="" class="form-control" >
                        <option value="">Choose your option</option>
                        <option value="DS">DS</option>
                        <option value="NS">NS</option>

                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-3">
                       <span> Start Date </span> <input type="text" id="start_date_edit" readonly="" class="form-control" autocomplete="OFF" > 
                    </div>
                    <div class="col-3">                      
                        <span> Start Time </span> <input type="time" id="start_time_edit" class="form-control"> 
                    </div>
                    <div class="col-3">
                         <span> End Date </span> <input type="text" id="end_date_edit"  readonly="" class="form-control"> 
                    </div>
                    <div class="col-3">
                            <span> End Time </span> <input type="time" id="end_time_edit" class="form-control"> 
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                         <span> Slot </span> <input type="number" id="slot_edit"  value="20" class="form-control" autocomplete="OFF"> 
                    </div>
                    <div class="col-4">
                          <span> Trainer </span> <input type="text" id="trainer" autocomplete="OFF" class="form-control"> 
                    </div>   
                    <div class="col-4">
                           <span> Location </span> <input type="text" id="location_edit" autocomplete="OFF" class="form-control"> 
                    </div>
                  </div>
                  <br>
                  <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary" 
                        onclick="update_sched()" class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">Submit</button>
                          </p>
                        </div>
     
                  </div>
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

