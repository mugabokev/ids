<!-- Content Header (Page header) -->
<?php
include("../config.php");
?>
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
              <li class="breadcrumb-item active">Hindura Ikibazo</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Hindura Ikibazo</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="min-height:600px">
              <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
             <form >
                <div class="card-body">
                <div class="row">
           <div class="col-md-1"></div>
              <div class="col-md-9">
            <div class="card mt-2 ml-2">
              <!-- /.card-header -->
              <div class="card-body">
                 <div class="form-group row">
                    <div class="col-md-6">
                      <label name="class-name">Ikibazo</label>
					  <?php
					  $sql = mysqli_query($con, "SELECT * FROM `question` WHERE `id` = '".$_GET['id']."'");
                      $result = mysqli_fetch_array($sql);
					  ?>
                      <input type="text"
                      class="form-control"
                      placeholder="Shyiramo ikibazo"
                      id="question-text"
					  value = "<?php echo htmlentities($result['questionText']) ?>"
					  >
                    </div>
                    <div class="col-md-1">
                    </div>


                    <div class="col-md-5 before-box">
                        <div class="cardPhoto">
                              <div class="boxPhoto"
							  style="background: url('uploads/<?php echo $result["questionPhoto"] ?>');
							         background-size:cover;
									 background-position:center"
							   id="playerPhoto"></div>
                              <div class="input-box">
                                <label class="photoLabel" for="question-image">Koresha ifoto</label>
                                <input data-filename="question-image" class="input-photo"
                                        type="file" class="input" id="question-image" data-name='question-image'>
                              </div>
                         </div>
                     </div>

                 </div>
                 <!-- <div>
				 <?php
					if (str_contains($result['choice1'], '.jpg')
					|| str_contains($result['choice1'], '.png')
					|| str_contains($result['choice1'], '.jpeg')) {?>
				 <input type='hidden' id='isImage' value = '1' />
				 <input type='hidden' id='isText' value = '0' />

					 <?php
					} else {?>
									 <input type='hidden' name='isImage' value = '0' />
                     				 <input type='hidden' name='isText' value = '1' />
                      <?php
					}
					?>
                 </div>

                 <div class="form-group" style="margin-top:3rem">
                    <label name="class-name">Igisubizo Cya 1 </label>
					<?php
					if (str_contains($result['choice1'], '.jpg')
					|| str_contains($result['choice1'], '.png')
					|| str_contains($result['choice1'], '.jpeg')) {?>
						<div class="col-md-5 before-box choice-img">
						<div class="cardPhoto">
						  <div class="boxPhoto"
						  style="background: url('uploads/<?php echo $result["choice1"] ?>');
							         background-size:cover;
									 background-position:center"
						  id="playerPhoto"></div>
						  <div class="input-box">
							<label class="photoLabel" for="choice-1-photo">Hitamo ifoto</label>
						  <input data-filename="choice-1-photo"
						  class="input-photo" type="file" class="input" id="choice-1-photo"
						  data-name='choice-1-photo' value = "<?php echo htmlentities($result['choice1']) ?>"
 >
						  </div>
						</div>
			 </div>
			 <?php
				} else {?>
					<input type="text" id='choice1' class="form-control choice-text"
				 placeholder="Shyiramo igisubizo cya 1" id="choice-1-text"
				 style="display:block"
				 value = "<?php echo htmlentities($result['choice1']) ?>"
				 >
				 <?php
				}
				?>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 2 </label>
					<?php
					if (str_contains($result['choice2'], '.jpg')
					|| str_contains($result['choice2'], '.png')
					|| str_contains($result['choice2'], '.jpeg')) {?>
						<div class="col-md-5 before-box choice-img">
						<div class="cardPhoto">
						  <div class="boxPhoto"
						  style="background: url('uploads/<?php echo $result["choice2"] ?>');
							         background-size:cover;
									 background-position:center"
						  id="playerPhoto"></div>
						  <div class="input-box">
							<label class="photoLabel" for="choice-2-photo">Hitamo ifoto</label>
						  <input data-filename="choice-2-photo"
						  class="input-photo" type="file" class="input" id="choice-2-photo"
						  data-name='choice-2-photo' value = "<?php echo htmlentities($result['choice2']) ?>"
 >
						  </div>
						</div>
			 </div>
			 <?php
				} else {?>
					<input type="text" id='choice2' class="form-control choice-text"
				 placeholder="Shyiramo igisubizo cya 2" id="choice-2-text"
				 style="display:block"

				 value = "<?php echo htmlentities($result['choice2']) ?>"
				 >
				 <?php
				}
				?>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 3 </label>
					<?php
					if (str_contains($result['choice3'], '.jpg')
					|| str_contains($result['choice3'], '.png')
					|| str_contains($result['choice3'], '.jpeg')) {?>
						<div class="col-md-5 before-box choice-img">
						<div class="cardPhoto">
						  <div class="boxPhoto"
						  style="background: url('uploads/<?php echo $result["choice3"] ?>');
							         background-size:cover;
									 background-position:center"
						  id="playerPhoto"></div>
						  <div class="input-box">
							<label class="photoLabel" for="choice-3-photo">Hitamo ifoto</label>
						  <input data-filename="choice-3-photo"
						  class="input-photo" type="file" class="input" id="choice-3-photo"
						  data-name='choice-3-photo' value = "<?php echo htmlentities($result['choice3']) ?>"
 >
						  </div>
						</div>
			 </div>
			 <?php
				} else {?>
					<input type="text" id='choice3' class="form-control choice-text"
				 placeholder="Shyiramo igisubizo cya 3" id="choice-3-text"
				 style="display:block"

				 value = "<?php echo htmlentities($result['choice3']) ?>"
				 >
				 <?php
				}
				?>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 4 </label>
					<?php
					if (str_contains($result['choice4'], '.jpg')
					|| str_contains($result['choice4'], '.png')
					|| str_contains($result['choice4'], '.jpeg')) {?>
						<div class="col-md-5 before-box choice-img">
						<div class="cardPhoto">
						  <div class="boxPhoto"
						  style="background: url('uploads/<?php echo $result["choice4"] ?>');
							         background-size:cover;
									 background-position:center"
						  id="playerPhoto"></div>
						  <div class="input-box">
							<label class="photoLabel" for="choice-4-photo">Hitamo ifoto</label>
						  <input data-filename="choice-4-photo"
						  class="input-photo" type="file" class="input" id="choice-4-photo"
						  data-name='choice-4-photo' value = "<?php echo htmlentities($result['choice4']) ?>"
 >
						  </div>
						</div>
			 </div>
			 <?php
				} else {?>
					<input type="text" id='choice4' class="form-control choice-text"
					style="display:block"

				 placeholder="Shyiramo igisubizo cya 4" id="choice-4-text"
				 value = "<?php echo htmlentities($result['choice4']) ?>"
				 >
				 <?php
				}
				?>
                  </div>
                 <div class="form-group" style="margin-top:4rem">
                                 <label>Igisubizo gikwiye <span class="text-danger">*</span></label>
                                 <select id='correct-choice' name ="correct-choice"
                                  class="form-control form-control-sm "
                                  data-dropdown-css-class="select2-info"
                                  style="width: 100%;" >
                                   <option  disabled>Hitamo Igisubizo gikwiye
                                    </option>
                                    <option value='a' selected = <?php $result == 'a' ? 'selected': 'false';?>
									>1</option>
                                    <option value='b' selected = <?php $result == 'b' ? 'selected': 'false';?>
									>2</option>
                                    <option value='c' selected = <?php $result == 'c' ? 'selected': 'false';?>
									>3</option>
                                    <option value='d' selected = <?php $result == 'd' ? 'selected': 'false';?>
									>4</option>
                                 </select>
                                </div> -->
                </div>
                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-success" id="updateQuestionBtn"
				   value= <?php echo $_GET["id"] ?>
				   >Vugurura Ikizamini</button>
                  <button type="reset" class="btn btn-danger float-right" >Hagarika</button>

                </div>
              </form>
            </div>
            <!-- /.card -->

              </div>
              <!-- /.card-body -->
            </div>
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

