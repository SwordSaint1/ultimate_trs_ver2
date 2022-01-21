<div class="modal" tabindex="-1" role="dialog" id="newannouncement_training">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b>Register Announcement</b> <br>
          <?=$esection;?>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
            <div class="col-12">
            <label>Announcement Date:</label>  <input type="datetime-local" name="" class="form-control">
            </div>
    <div class="col s12">
       <label>Announcement Content:</label> 
       <textarea class="form-control" cols="50" rows="10">
         
       </textarea>
       </div>
    </div>     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary"  onclick="register_announcements()"
        class="close" data-dismiss="modal" aria-label="Close" onclick="javascript:window.location.reload()">Register Section</button>
       
      </div>
    </div>
  </div>
</div>