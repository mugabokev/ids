      <?php
         include('config.php');
      ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" id='view'>
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard </li>
                </ol>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <h3>
                      <?php
                        $query = "SELECT * FROM question";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_num_rows($result);
                        echo $row;
                      ?>
                    </h3>

                    <p>Ibibazo</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href="#" class="small-box-footer"
                  id='viewQuestion'
                    >Amakuru  Arambuye <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>

              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>
                      <?php
                        $query = "SELECT * FROM exam";
                        $result = mysqli_query($con, $query);
                        $row = mysqli_num_rows($result);
                        echo $row;
                      ?>
                    </h3>

                    <p>Ibizamini</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href="#" class="small-box-footer"
                   id='viewExam'
                    >Amakuru arambuye <i class="fas fa-arrow-circle-right"></i
                  ></a>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>