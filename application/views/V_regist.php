<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/admin/img/favicon.png">

  <title>Register Page</title>

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="<?php echo base_url() ?>assets/admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="<?php echo base_url() ?>assets/admin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="<?php echo base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/style-responsive.css" rel="stylesheet" />
</head>

<body class="login-img3-body">
  <div class="container">
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9">
            <section class="panel">
              <header class="panel-heading">
                Register Here
              </header>
              <div class="panel-body">
                <form role="form" action="<?php echo base_url('C_user/register'); ?>" method="post">
                  <div class="form-group">
                    <label for="userid">User ID</label>
                    <input type="text" class="form-control" id="userid" placeholder="Enter your ID" name="userID">
                  </div>
                  <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="mail" class="form-control" id="email" placeholder="Enter Email" name="email">
                  </div>

                  <div class="form-group">
                    <label for="divi">Division</label>
                    <select class="form-control m-bot15" name="divisi">
                        <option>Choose Your Division</option>
                        <?php foreach($divisi as $div) { ?>
                          <option value="<?= $div->divisionID ?>"><?= $div->divisionName ?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2"> Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" name="pass2">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Photo</label>
                    <input type="file" id="exampleInputFile" name="photo">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>

                  <span class="pull-right"> <a href="<?php echo base_url();?>"> Back to Login Page</a></span>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <div class="text-right">
      <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>
</body>
</html>
