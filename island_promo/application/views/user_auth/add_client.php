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
<h4 class="page-title float-left">Client</h4>


<div class="clearfix"></div>
</div>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-12">
<div class="card-box">

<h4 class="header-title m-t-0 m-b-30">Add Client</h4>

<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
 <?php echo form_open('options/add_client'); ?>
 <fieldset class="form-group">
 <label for="comp_name">Company Name</label>
 <input type="text" class="form-control" id="comp_name" name="comp_name"
 placeholder="Company Name" />
 </fieldset>

 <fieldset class="form-group">
 <label for="client_name">Client Name</label>
 <input type="text" class="form-control" id="client_name" name="client_name"
 placeholder="Client Name" />
 </fieldset>

 <fieldset class="form-group">
 <label for="email">Client Email</label>
 <input type="text" class="form-control" id="email" name="email"
 placeholder="Client Email" />
 </fieldset>

 <fieldset class="form-group">
 <label for="address">Address</label>
 <textarea class="form-control" id="address"
 rows="3" name="address"></textarea>
 </fieldset>



<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
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
