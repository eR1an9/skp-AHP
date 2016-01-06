<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>METOE AHP | TRO</title>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/brain-theme.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='css/font.css' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/flot.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.orderbars.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.pie.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.time.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.animator.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/flot.resize.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/select2.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputmask.js"></script>
<script type="text/javascript" src="js/plugins/forms/autosize.js"></script>
<script type="text/javascript" src="js/plugins/forms/inputlimit.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/listbox.js"></script>
<script type="text/javascript" src="js/plugins/forms/multiselect.js"></script>
<script type="text/javascript" src="js/plugins/forms/validate.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/tags.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uploader/plupload.full.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/uploader/plupload.queue.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/wysihtml5/wysihtml5.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/wysihtml5/toolbar.js"></script>

<script type="text/javascript" src="js/plugins/interface/jgrowl.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/datatables.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/prettify.js"></script>
<script type="text/javascript" src="js/plugins/interface/fancybox.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/interface/timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/interface/collapsible.min.js"></script>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/application.js"></script>

<script type="text/javascript" src="js/charts/simple_graph.js"></script>
</head>

<body class="full-width">

    <!-- Navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                

                <ul class="nav navbar-nav navbar-left-custom">
                    <li class="user dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                           
                            <span>Sistem Penunjang keputusan AHP</span>
                            
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /navbar -->


    <!-- Page container -->
    <div class="page-container container-fluid">
    
        <!-- Page content -->
        <div class="page-content">


            <!-- Login wrapper -->
            <div class="login-wrapper">
<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 4) {
		echo '<font color=red><h5>Username dan Password tidak terdaftar!</h5></font>';
	}
}
?>
                <form name="login" action="otentikasi.php" role="form" method="post">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h6 class="panel-title"><i class="fa fa-user"></i> Admin login</h6></div>
                        <div class="panel-body">
                            <div class="form-group has-feedback">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" required>
                                <i class="fa fa-user form-control-feedback"></i>
                            </div>

                            <div class="form-group has-feedback">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <i class="fa fa-lock form-control-feedback"></i>
                            </div>

                            <div class="row form-actions">
                                <div class="col-xs-6">                                   
                                </div>

                                <div class="col-xs-6">
                                    <button type="submit" class="btn btn-warning pull-right"><i class="fa fa-bars"></i> Sign in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
				username : admin<br>
				password : admin
            </div>  
            <!-- /login wrapper -->      

        
        </div>
        <!-- /page content -->

    </div>
    <!-- page container -->
</body>
</html>