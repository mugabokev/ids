<!-- Content Header (Page header) -->
<div id='view'>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ibizamini</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ongera Ikizamini</li>
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
                <h3 class="card-title">Ongera Ikizamini</h3>
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
                      <input type="hidden" id="addExam" name="formId" value ="addNewClass">
                      <input type="text"
                      class="form-control"
                      placeholder="Shyiramo ikibazo"
                      id="question-text">
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 before-box">
                        <div class="cardPhoto">
                              <div class="boxPhoto" id="playerPhoto"></div>
                              <div class="input-box">
                                <label class="photoLabel" for="question-image">Koresha ifoto</label>
                                <input data-filename="question-image" class="input-photo"
                                        type="file" class="input" id="question-image" data-name='question-image'>
                              </div>
                         </div>
                     </div>
                 </div>
                 <div>
                     <button type='button'
                     class="btn btn-info" id="chooseAnswerText" value='0'>Koresha amagambo mu bisubizo</button>
                     <button type='button'
                     class="btn btn-info" id="chooseAnswerPhoto" value = '0'>Koresha amafoto mu bisubizo</button>
                 </div>

                 <div class="form-group" style="margin-top:3rem">
                    <label name="class-name">Igisubizo Cya 1 </label>
                    <input type="text" id='choice1' class="form-control choice-text"
                    placeholder="Shyiramo igisubizo cya 1" id="choice-1-text">
                    <div class="col-md-5 before-box choice-img">
                                <div class="cardPhoto">
                                  <div class="boxPhoto" id="playerPhoto"></div>
                                  <div class="input-box">
                                    <label class="photoLabel" for="choice-1-photo">Hitamo ifoto</label>
                                  <input data-filename="choice-1-photo"
                                  class="input-photo" type="file" class="input" id="choice-1-photo"
                                  data-name='choice-1-photo'>
                                  </div>
                                </div>
                     </div>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 2 </label>
                    <input type="text" id='choice2' class="form-control choice-text"
                      placeholder="Shyiramo igisubizo cya 2" name="choice-2-text">
                    <div class="col-md-5 before-box choice-img">
                                <div class="cardPhoto">
                                  <div class="boxPhoto" id="playerPhoto"></div>
                                  <div class="input-box">
                                    <label class="photoLabel" for="choice-2-photo">Hitamo ifoto</label>
                                  <input data-filename="choice-2-photo"
                                  class="input-photo" type="file" class="input"
                                  id="choice-2-photo" id='choice-2-photo'>
                                  </div>
                                </div>
                     </div>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 3 </label>
                    <input type="text" id='choice3' class="form-control choice-text"
                      placeholder="Shyiramo igisubizo cya 3" id="choice-3-text ">
                    <div class="col-md-5 before-box choice-img">
                                <div class="cardPhoto">
                                  <div class="boxPhoto" id="playerPhoto"></div>
                                  <div class="input-box">
                                    <label class="photoLabel" for="choice-3-photo">Hitamo ifoto</label>
                                  <input data-filename="choice-4-photo"
                                   class="input-photo" type="file" class="input"
                                   id="choice-3-photo" data-name='choice-3-photo'>
                                  </div>
                                </div>
                     </div>
                  </div>
                 <div class="form-group">
                    <label name="class-name">Igisubizo Cya 4 </label>
                    <input type="text" id='choice4' class="form-control choice-text"
                    placeholder="Shyiramo igisubizo cya 4" id="choice-4-text">
                    <div class="col-md-5 before-box choice-img">
                                <div class="cardPhoto">
                                  <div class="boxPhoto" id="playerPhoto"></div>
                                  <div class="input-box">
                                    <label class="photoLabel" for="choice-4-photo">Hitamo ifoto</label>
                                  <input data-filename="choice-4-photo"
                                   class="input-photo" type="file" class="input"
                                    id="choice-4-photo" id='choice-4-photo'>
                                  </div>
                                </div>
                     </div>
                  </div>
                 <div class="form-group" style="margin-top:4rem">
                                 <label>Igisubizo gikwiye <span class="text-danger">*</span></label>
                                 <select id='correct-choice' name ="correct-choice"
                                  class="form-control form-control-sm "
                                  data-dropdown-css-class="select2-info"
                                  style="width: 100%;" >
                                   <option selected="selected" disabled>Hitamo Igisubizo gikwiye
                                    </option>
                                    <option value='a'>1</option>
                                    <option value = 'b'>2</option>
                                    <option value= 'c'>3</option>
                                    <option value = 'd'>4</option>

                                 </select>
                                </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success" id="addQuestionBtn">Injiza Ikizamini</button>
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

