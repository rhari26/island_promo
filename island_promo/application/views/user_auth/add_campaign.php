<!DOCTYPE html>
<html>

<!-- Mirrored from coderthemes.com/uplon/horizontal/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2017 14:10:05 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">

<!-- App Favicon -->
<link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">

<!-- App title -->
<title>Uplon - Responsive Admin Dashboard Template</title>

<!-- Switchery css -->
<link href="<?php echo base_url()?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

<!-- Bootstrap CSS -->
<link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!-- App CSS -->
<link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" />

<!-- Modernizr js -->
<script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-79190402-1', 'auto');
ga('send', 'pageview');

</script>


</head>


<body>

<?php $this->load->view('top_bar') ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="wrapper">
<div class="container">

<!-- Page-Title -->
<div class="row">
<div class="col-sm-12">
<div class="btn-group pull-right m-t-15">

</div>
<h4 class="page-title">Campaign</h4>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-12">
<div class="card-box">

<h4 class="header-title m-t-0 m-b-30">Add Campaign</h4>

<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">

 <?php echo form_open('options/add_campaign'); ?>
<fieldset class="form-group">
<label for="year">Year</label>
<select multiple class="form-control" id="year" name="year">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</fieldset>

<fieldset class="form-group">
<label for="batch">Batch</label>
<select multiple class="form-control" id="batch" name="batch">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</fieldset>

<fieldset class="form-group">
<label for="client">Client Name</label>
<select multiple class="form-control" id="client" name="client">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
</fieldset>

<fieldset class="form-group">
<label for="po_no">PO No.</label>
<input type="text" class="form-control" id="po_no" name="po_no"
placeholder="PO No" />
</fieldset>

<fieldset class="form-group">
<label for="amount">Amount</label>
<input type="text" class="form-control" id="amount" name="amount"
placeholder="Amount" />
</fieldset>

<fieldset class="form-group">
<label for="subject">Subject</label>
<input type="text" class="form-control" id="subject" name="subject"
placeholder="Subject" />
</fieldset>

<fieldset class="form-group">
<label for="camp_date">Campaign Date</label>
<input type="date" class="form-control" id="camp_date" name="camp_date"
placeholder="Campaign Date" />
</fieldset>




<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
</div><!-- end col -->

<!-- end col -->

</div><!-- end row -->
</div>
</div><!-- end col -->
</div>
<!-- end row -->

 
<!-- end row -->


</div> <!-- container -->


<!-- Footer -->
<footer class="footer">
2016 - 2017 © Uplon.
</footer>
<!-- End Footer -->



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



</div> <!-- End wrapper -->




<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>

</body>

<!-- Mirrored from coderthemes.com/uplon/horizontal/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2017 14:10:05 GMT -->
</html>