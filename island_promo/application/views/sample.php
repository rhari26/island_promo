<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/uplon/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2017 05:08:31 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App Favicon -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

<!-- App title -->
<title>Uplon - Responsive Admin Dashboard Template</title>

<!-- Switchery css -->
<link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- App CSS -->
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- Modernizr js -->
<script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-79190402-1', 'auto');
ga('send', 'pageview');

</script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">


<?php $this->load->view('top_bar'); ?>

<?php $this->load->view('left_bar'); ?>



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
<div class="container-fluid">

<div class="row">
<div class="col-xl-12">
<div class="page-title-box">
<h4 class="page-title float-left">Form elements</h4>

<ol class="breadcrumb float-right">
<li class="breadcrumb-item"><a href="#">Uplon</a></li>
<li class="breadcrumb-item"><a href="#">Forms</a></li>
<li class="breadcrumb-item active">Form elements</li>
</ol>

<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-12">
<div class="card-box">

<h4 class="header-title m-t-0 m-b-30">Input Types</h4>

<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
<form>
<fieldset class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1"
placeholder="Enter email">
<small class="text-muted">We'll never share your email with anyone
else.
</small>
</fieldset>
<fieldset class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control"
id="exampleInputPassword1" placeholder="Password">
</fieldset>
<fieldset class="form-group">
<label for="exampleSelect1">Example select</label>
<select class="form-control" id="exampleSelect1">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</fieldset>
<fieldset class="form-group">
<label for="exampleSelect2">Example multiple select</label>
<select multiple class="form-control" id="exampleSelect2">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</fieldset>
<fieldset class="form-group">
<label for="exampleTextarea">Example textarea</label>
<textarea class="form-control" id="exampleTextarea"
rows="3"></textarea>
</fieldset>

<fieldset class="form-group">
<label >Example Readonly</label>
<input class="form-control" type="text" placeholder="Readonly input here…" readonly>
</fieldset>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div><!-- end col -->

<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6 m-t-sm-40">
<form>
<fieldset disabled>
<div class="form-group">
<label for="disabledTextInput">Disabled input</label>
<input type="text" id="disabledTextInput" class="form-control"
placeholder="Disabled input">
</div>
<div class="form-group">
<label for="disabledSelect">Disabled select menu</label>
<select id="disabledSelect" class="form-control">
<option>Disabled select</option>
</select>
</div>
</fieldset>

<fieldset>
<label >Example Control sizing</label>
<input class="form-control form-control-lg m-b-20" type="text"
placeholder=".form-control-lg">
<input class="form-control m-b-20" type="text" placeholder="Default input">
<input class="form-control form-control-sm m-b-20" type="text"
placeholder=".form-control-sm">

<div class="row">
<div class="col-2">
<input type="text" class="form-control m-b-15"
placeholder=".col-xs-2">
</div>
<div class="col-3">
<input type="text" class="form-control m-b-15"
placeholder=".col-xs-3">
</div>
<div class="col-4">
<input type="text" class="form-control m-b-15"
placeholder=".col-xs-4">
</div>
</div>
</fieldset>

<fieldset>
<div class="form-group has-success">
<label class="form-control-label" for="inputSuccess1">Input with
success</label>
<input type="text" class="form-control form-control-success"
id="inputSuccess1">
</div>
<div class="form-group has-warning">
<label class="form-control-label" for="inputWarning1">Input with
warning</label>
<input type="text" class="form-control form-control-warning"
id="inputWarning1">
</div>
<div class="form-group has-danger">
<label class="form-control-label" for="inputDanger1">Input with
danger</label>
<input type="text" class="form-control form-control-danger"
id="inputDanger1">
</div>
</fieldset>
</form>
</div><!-- end col -->

</div><!-- end row -->
</div>
</div><!-- end col -->
</div>
<!-- end row -->


</div> <!-- container -->

</div> <!-- content -->



</div>
<!-- End content-page -->


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar">
<div class="nicescroll">
<ul class="nav nav-pills nav-justified text-xs-center">
<li class="nav-item">
<a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
Activity
</a>
</li>
<li class="nav-item">
<a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
Settings
</a>
</li>
</ul>

<div class="tab-content">
<div class="tab-pane fade active show" id="home-2">
<div class="timeline-2">
<div class="time-item">
<div class="item-info">
<small class="text-muted">5 minutes ago</small>
<p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
<small class="text-muted">30 minutes ago</small>
<p><a href="#" class="text-info">Lorem</a> commented your post.</p>
<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
<small class="text-muted">59 minutes ago</small>
<p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
<small class="text-muted">1 hour ago</small>
<p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
</div>
</div>

<div class="time-item">
<div class="item-info">
<small class="text-muted">3 hours ago</small>
<p><a href="#" class="text-info">Lorem</a> commented your post.</p>
<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
<small class="text-muted">5 hours ago</small>
<p><a href="#" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
<p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>
</div>
</div>

<div class="tab-pane fade" id="messages-2">

<div class="row m-t-10">
<div class="col-8">
<h5 class="m-0">Notifications</h5>
<p class="text-muted m-b-0"><small>Do you need them?</small></p>
</div>
<div class="col-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
</div>
</div>

<div class="row m-t-10">
<div class="col-8">
<h5 class="m-0">API Access</h5>
<p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
</div>
<div class="col-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
</div>
</div>

<div class="row m-t-10">
<div class="col-8">
<h5 class="m-0">Auto Updates</h5>
<p class="m-b-0 text-muted"><small>Keep up to date</small></p>
</div>
<div class="col-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
</div>
</div>

<div class="row m-t-10">
<div class="col-8">
<h5 class="m-0">Online Status</h5>
<p class="m-b-0 text-muted"><small>Show your status to all</small></p>
</div>
<div class="col-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
</div>
</div>

</div>
</div>
</div> <!-- end nicescroll -->
</div>
<!-- /Right-bar -->

<footer class="footer text-right">
2016 - 2017 © Uplon.
</footer>


</div>
<!-- END wrapper -->


<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

</body>

<!-- Mirrored from coderthemes.com/uplon/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2017 05:08:31 GMT -->
</html>