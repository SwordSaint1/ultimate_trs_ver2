
<?php include 'plugins/navbar.php';?>
<?php include 'plugins/sidebar/dashboardbar.php';?>
  <!-- Main Sidebar Container -->
 
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Announcement Board</h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Announcement Board</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    <div class="row">
                        <table>
                          <thead>
                            <tr>
                              <a href="#" class="btn btn-primary col-md-12 btn-lg" data-toggle="modal" data-target="#newannouncement_training" onclick="create_announcement()"> <i class="fa fa-edit"></i> Add Announcement</a>
                            </tr>
                          </thead>
                        </table>
                    </div>
                  </h3>
                </div>
              </div>
            </div>
          </div>


    <section class="content pb-3">
      <div class="container-fluid h-100">
        <div class="card card-row card-info col-sm-3">
          <div class="card-header">
            <h3 class="card-title">
              Qualification
            </h3>
          </div>
          <div class="card-body">

           
          </div>
        </div>
        <div class="card card-row card-primary col-sm-3">
          <div class="card-header">
            <h3 class="card-title">
              Production Technical Training
            </h3>
          </div>
          <div class="card-body">
         
          </div>
        </div>
        <div class="card card-row card-default col-sm-3">
          <div class="card-header bg-success">
            <h3 class="card-title">
              PE
            </h3>
          </div>
          <div class="card-body">
           
        </div>
      </div>
        <div class="card card-row card-secondary col-sm-3">
          <div class="card-header">
            <h3 class="card-title">
              EQ
            </h3>
          </div>
          <div class="card-body">
           
          </div>
        </div>
      </div>
    </section>
  </div>


<?php include 'plugins/footer.php';?>