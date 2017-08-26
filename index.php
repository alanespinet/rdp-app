<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title> Weight Registering </title>

  <!-- vendor css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css" />

  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lato:300,400,700,900" rel="stylesheet">

  <!-- own css -->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
  <!-- content here -->
  <div class="general-wrapper">

    <div class="mini-menu">
      <ul>
        <li><a id="goHome" class="go-home-link"> <i class="fa fa-home"></i> </a></li>
        <li><a id="goForm" class="go-form-link"> <i class="fa fa-id-card"></i> </a></li>
        <li><a id="goData" class="go-data-link"> <i class="fa fa-table"></i> </a></li>
      </ul>
    </div>

    <div class="sliding-wrapper">

      <div class="scene-1">
        <img src="images/right-corner.png" class="corner left-corner" alt="">
        <img src="images/left-corner.png" class="corner right-corner" alt="">

        <div class="title-wrapper">
          <h1>Weight Registering</h1>
          <h2>An app for Yeli and Alan, trying to lose weight</h2>

          <a href="#" id="goto-section2" class="goto-section2-button">
            <i class="fa fa-angle-down" aria-hidden="true" aria-label="go to section 2"></i>
          </a>
        </div><!-- /.title-wrapper -->
      </div><!-- /.scene-1 -->


      <div class="scene-2">

        <div class="form-wrapper">

          <h2>Here you can <strong>Insert</strong> or <strong>View</strong> your weight data</h2>
          <div class="container">
            <div class="row">
              <form action="">

                <div class="col-xs-12 col-sm-4 col-md-2 col-md-offset-3">
                  <div class="control-group">
                    <label for="txtName">Name</label>
                    <input type="text" name="txtName" id="txtName">
                  </div><!-- /.control-group -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="control-group">
                    <label for="txtDate">Date</label>
                    <input type="date" name="txtDate" id="txtDate">
                  </div><!-- /.control-group -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="control-group">
                    <label for="txtWeight">Weight</label>
                    <input type="number" name="txtWeight" id="txtWeight">
                  </div><!-- /.control-group -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5">
                  <div class="control-group">
                    <button type="button" id="insertButton" class="myBtn insertButton" name="btnInsert">Insert data</button>
                  </div><!-- /.control-group -->
                </div><!-- /.col -->

                <div class="col-xs-12 col-sm-4 col-md-2">
                  <div class="control-group">
                    <button type="button" id="viewButton" class="myBtn viewButton" name="btnView">View data</button>
                  </div><!-- /.control-group -->
                </div><!-- /.col -->

              </form>
            </div><!-- /.row -->
          </div><!-- /.container -->

        </div><!-- /.form-wrapper -->
      </div><!-- /.scene-2 -->


      <div class="scene-3">
        <div class="data-wrapper">

          <h2>Here you can <strong>see your weight progression</strong></h2>


            <div class="container">
              <div class="row">

                <div class="col-xs-12 col-md-10 col-md-offset-1">
                  <div class="actual-data-wrapper">
                    <div class="container-fluid actual-data-container" id="dataRowContainer">

                        

                    </div><!-- /.container-fluid -->
                  </div><!-- /.actual-data-container -->
                </div>

              </div><!-- /.row -->
            </div><!-- /.container -->

        </div><!-- /.data-wrapper -->
      </div>


    </div><!-- /.sliding-wrapper -->
  </div><!-- /.general-wrapper -->



  <!-- vendor js -->
  <script src="vendor/jquery/jquery.min.js" charset="utf-8"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>

  <!-- own js -->
  <script src="js/custom-behavior.js" charset="utf-8"></script>
</body>
</html>
