<!-- Content Header (Page header) -->
<div id='view'>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ibibazo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ibibazo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
              <div class="row">
              <div class="col-md-12">
                           <div class="card">
                               <div class="card-header">
                                 <button class="btn btn-info card-title" id="addQuestion">
									<i class="fa fa-plus"></i>
									 Ongeraho Ikibazo
								</button>
                               </div>
                                  <!-- /.card-header -->
                             <div class="card-body">
                                <table id="viewQuestionTable" class="table table-bordered table-hover">
                                  <thead>
                                   <tr>
                                     <?php
									include '../config.php';
									// Attempt select query execution
									$sql = "SELECT * FROM question";
									$result = mysqli_query($con, $sql);
									$d  = mysqli_num_rows($result) > 0;

									if ($result) {
									 ?>
                                     <th>id</th>
                                     <th>Ikibazo </th>
                                     <th>Igisubizo cya 1</th>
                                     <th>Igisubizo cya 2 </th>
                                     <th> Igisubizo cya 3 </th>
                                     <th> Igisubizo cya 4 </th>
									 <th>Igisubizo gikwiye</th>
									 <th>Hindura</th>
									 <th> Gusiba </th>
                                   </tr>
                                  </thead>
                                  <tbody>

								     <?php
									  if (mysqli_num_rows($result) > 0) {
											while ($row = mysqli_fetch_array($result)) {
												echo "<tr>";
												echo "<td>" . $row['id'] . "</td>";
												if ($row['questionPhoto'] != 'NULL') {
													?>
													<td><br>
													<img src="uploads/<?php echo $row['questionPhoto'] ?>" width='100px' height='100px' alt='pic'>
													</td>
													<?php
												} else {
													echo "<td>" . $row['questionText'] . "</td>";
												}
												echo "<td>"  . $row['choice1']   ."</td>";
												echo "<td>"  . $row['choice2']   ."</td>";
												echo "<td>"  . $row['choice3']   ."</td>";
												echo "<td>"  . $row['choice4']   ."</td>";
												echo "<td>"  . $row['correctChoice']   ."</td>";
												echo "
												<td>
												<button id='updateHostel' class='btn btn-success btn-xs' value=" . $row['id'] . ">
												<i class='fas fa-edit-alt'></i> Hindura
												</button>
												</td>";
												echo "<td>
												<button id='deleteHostel' class='btn btn-outline-danger btn-sm' value=" . $row['id'] . ">
												Gusiba
												</button></td>";
										  echo "</tr>";
											}
										} else {
											?>
											<tr>
											<td colspan="9">No records found</td>
											</tr>
											<?php
										}
									}
									 ?>

								   </tbody>
                                   <tfoot>
                                       <tr>
										<th>id</th>
										<th>Ikibazo </th>
										<th>Igisubizo cya 1</th>
										<th>Igisubizo cya 2 </th>
										<th> Igisubizo cya 3 </th>
										<th> Igisubizo cya 4 </th>
										<th>Igisubizo gikwiye</th>
										<th>Hindura</th>
										<th> Gusiba </th>
                                         </tr>
                                     </tfoot>

                                </table>
                             </div>
                             <!-- /.card-body -->

                            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>