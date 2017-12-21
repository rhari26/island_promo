<?php $this->load->view('session_page'); ?>

<?php $this->load->view('head_bar') ?>
<link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
<button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
class="fa fa-cog"></i></span></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Separated link</a>
</div>

</div>
<h4 class="page-title">Dashboard</h4>
</div>
</div>


<div class="row">
<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
<div class="card-box tilebox-one">
<i class="icon-layers float-right text-muted"></i>
<h6 class="text-muted text-uppercase m-b-20">Total Campaigns</h6>
<h2 class="m-b-20" data-plugin="counterup">1,587</h2>
<span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
</div>
</div>

<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
<div class="card-box tilebox-one">
<i class="icon-paypal float-right text-muted"></i>
<h6 class="text-muted text-uppercase m-b-20">This Month Campaigns</h6>
<h2 class="m-b-20" data-plugin="counterup">777</h2>
<span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
</div>
</div>

<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
<div class="card-box tilebox-one">
<i class="icon-chart float-right text-muted"></i>
<h6 class="text-muted text-uppercase m-b-20">Total Clients</h6>
<h2 class="m-b-20" data-plugin="counterup">33</h2>
<span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
</div>
</div>

<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
<div class="card-box tilebox-one">
<i class="icon-rocket float-right text-muted"></i>
<h6 class="text-muted text-uppercase m-b-20">Total Clients</h6>
<h2 class="m-b-20" data-plugin="counterup">666</h2>
<span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
</div>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-xs-12 col-lg-12 col-xl-8">
<div class="card-box table-responsive">
<h4 class="m-t-0 header-title"><b>Add Campaign</b></h4>
<p class="text-muted font-13 m-b-30">
Add your Campaign.
</p>

<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
 <th>#</th>
 <th>Batch</th>
 <th>Date</th>
 <th>Client</th>
 <th>Title</th>
 <th>PO No.</th>
 <th>Actions</th>
</tr>
</thead>


<tbody>
<?php if(!empty($campaigns)){ ?>
<?php foreach($campaigns as $campaign){
 $client = $this->application->get_client_data($campaign['client_id']);
?>
<tr>
 <th scope="row"><?php echo $campaign['id']; ?></th>
 <td><?php echo $campaign['month']."-".$campaign['year']; ?></td>
 <td><?php echo $campaign['camp_date']; ?></td>
 <td><?php echo $client[0]['client_name']; ?></td>
 <td><?php echo $campaign['subject']; ?></td>
 <td><?php echo $campaign['po_no']; ?></td>
 <th><a href="<?php echo site_url("edit/edit_campaign/".$campaign['id']) ?>" class="btn-sm btn-primary waves-effect waves-light">Edit</a><a class="btn-sm btn-danger waves-effect waves-light">Delete</a></th>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
</div><!-- end col-->

<div class="col-xs-12 col-lg-12 col-xl-8">
<div class="card-box table-responsive">
<h4 class="m-t-0 header-title"><b>Today's Campaign</b></h4>
<p class="text-muted font-13 m-b-30">
.
</p>

<table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
<tr>
 <th>#</th>
 <th>Batch</th>
 <th>Date</th>
 <th>Client</th>
 <th>Title</th>
 <th>PO No.</th>
 <th>Actions</th>
</tr>
</thead>


<tbody>
<?php if(!empty($todays_camp)){ ?>
<?php foreach($todays_camp as $campaign){
 $client = $this->application->get_client_data($campaign['client_id']);
?>
<tr>
 <th scope="row"><?php echo $campaign['id']; ?></th>
 <td><?php echo $campaign['month']."-".$campaign['year']; ?></td>
 <td><?php echo $campaign['camp_date']; ?></td>
 <td><?php echo $client[0]['client_name']; ?></td>
 <td><?php echo $campaign['subject']; ?></td>
 <td><?php echo $campaign['po_no']; ?></td>
 <th><a href="<?php echo site_url("edit/edit_campaign/".$campaign['id']) ?>" class="btn-sm btn-primary waves-effect waves-light">Edit</a><a class="btn-sm btn-danger waves-effect waves-light">Delete</a></th>
</tr>
<?php } } ?>
</tbody>
</table>
</div>
</div><!-- end col-->


</div>
<!-- end row -->



<!-- Footer -->
<footer class="footer text-right">
<div class="container">
<div class="row">
<div class="col-xs-12">
2016 - 2017 © Island Promotions.
</div>
</div>
</div>
</footer>
<!-- End Footer -->


</div> <!-- container -->




<!-- Right Sidebar -->
<div class="side-bar right-bar">
<div class="nicescroll">
<ul class="nav nav-tabs text-xs-center">
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
<div class="tab-pane fade in active" id="home-2">
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
    <p><a href="" class="text-info">Lorem</a> commented your post.</p>
    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
    <small class="text-muted">59 minutes ago</small>
    <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
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
    <p><a href="" class="text-info">Lorem</a> commented your post.</p>
    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>

<div class="time-item">
<div class="item-info">
    <small class="text-muted">5 hours ago</small>
    <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
    <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
</div>
</div>
</div>
</div>

<div class="tab-pane fade" id="messages-2">

<div class="row m-t-20">
<div class="col-xs-8">
<h5 class="m-0">Notifications</h5>
<p class="text-muted m-b-0"><small>Do you need them?</small></p>
</div>
<div class="col-xs-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
</div>
</div>

<div class="row m-t-20">
<div class="col-xs-8">
<h5 class="m-0">API Access</h5>
<p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
</div>
<div class="col-xs-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
</div>
</div>

<div class="row m-t-20">
<div class="col-xs-8">
<h5 class="m-0">Auto Updates</h5>
<p class="m-b-0 text-muted"><small>Keep up to date</small></p>
</div>
<div class="col-xs-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
</div>
</div>

<div class="row m-t-20">
<div class="col-xs-8">
<h5 class="m-0">Online Status</h5>
<p class="m-b-0 text-muted"><small>Show your status to all</small></p>
</div>
<div class="col-xs-4 text-right">
<input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small"/>
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
<script src="<?php echo base_url()?>assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>

<!--Morris Chart-->
<script src="<?php echo base_url()?>assets/plugins/morris/morris.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/raphael/raphael-min.js"></script>

<!-- Counter Up  -->
<script src="<?php echo base_url()?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url()?>assets/plugins/counterup/jquery.counterup.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>

<!-- Page specific js -->
<script src="<?php echo base_url()?>assets/pages/jquery.dashboard.js"></script>
<!-- Required datatable js -->
<script src="<?php echo base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/buttons.colVis.min.js"></script>
</body>
