<?php include 'plugins/navbar.php'; ?>
<?php include 'plugins/sidebar/accountbar.php'; ?>

  <section class="content">
      <div class="container-fluid">
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Account List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Account List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
       <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                    <div class="row"> 
                      
            <table>
              <thead>
                <tr>
                  <div class="col-3">
                    <select id="role_search" class="form-control role_search">
                            <option value="">Select Role</option>
                          <?php
                            require '../../process/conn.php';
                            $get_curiculum = "SELECT DISTINCT role FROM trs_accounts";
                            $stmt = $conn->prepare($get_curiculum);
                            $stmt->execute();
                            foreach($stmt->fetchALL() as $x){
                                echo '<option value="'.$x['role'].'">'.$x['role'].'</option>';
                            }
                     ?>
                        </select>
                  </div>
                </tr>
                <tr>
                  <div class="col-3">
                    <select id="section_acc_search" class="form-control">
                      <option value="">Select Section</option>
                        <?php
                        require '../../process/conn.php';
                        $get_section = "SELECT DISTINCT esection FROM trs_accounts";
                          $stmt = $conn->prepare($get_section);
                            $stmt->execute();
                            foreach($stmt->fetchALL() as $x){
                                echo '<option value="'.$x['esection'].'">'.$x['esection'].'</option>';
                            }

                        ?>
                    </select>
                    
                  </div>
                </tr>
                <tr>
                  <div class="col-3">
             
                  <button class="btn btn-primary" data-toggle="modal" data-target="#new_account">Register&nbsp;Account</button>
                  </div>
                </tr>
                 <tr>
                  <div class="col-3">
             
                 
                   <button class="btn btn-success " onclick="export_accounts('accounts')">Export</button>  
                  </div>
                </tr>
                
              </thead>
            </table>
          </div>
                </h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 100px;">
                    <button class="btn btn-primary" id="searchReqBtn" onclick="load_accounts()">Search <i class="fas fa-search"></i></button> 
                  </div>
                </div>
              </div>
         
            <!--   <div class="row">
                <div class="col-12">
                  <p style="text-align:right;">
                  <button class="btn btn-success">Export</button>
                </p>
                </div>
              </div> -->


              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 420px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="accounts">
                 <thead style="text-align:center;">
                    <th> # </th>
                    <th> Username</th>
                    <th>Full Name</th>
                    <th>Password</th>
                    <th> Role</th>
                    <th> Section</th>
                    <th> Created By</th>
                    <th> Updated By</th>
                
                </thead>
                <tbody id="accounts_data" style="text-align:center;"></tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
</div>
</div>
</section>


<?php include 'plugins/footer.php'; ?>
<?php include 'plugins/javascript/account_script.php'; ?>