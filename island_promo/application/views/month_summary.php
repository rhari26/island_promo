<?php $this->load->view('session_page'); ?>
<?php $this->load->view('head_bar') ?>


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
<h4 class="page-title">Monthly Summary</h4>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-12">
<div class="card-box">


<div class="row">
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
    <div class="card-box">
      <?php echo form_open('options/month_summary'); ?>
      <div class="row">
        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-xl-4">
           <fieldset class="form-group">

               <label for="month">Month</label>
                <select class="form-control" id="month" name="month">
                <option value="">Select</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
                </select>
           </fieldset>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-xl-4">
           <fieldset class="form-group">

               <label for="year">Year</label>
                <select class="form-control" id="year" name="year">
                <option value="">Select</option>
                <?php $i = 2010;
                while($i <= 2040){
                 ?>
                
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option> 
                <?php $i++; }?>
                </select>
           </fieldset>
        </div>
        <div class="col-lg-4 col-sm-4 col-xs-4 col-md-4 col-xl-4">
            <fieldset class="form-group">
                <label>Filter</label>
                <button type="submit" class="btn btn-primary d-block">Submit</button>
            </fieldset>
        </div>
      </div>
      
     <?php echo form_close(); ?>
    </div>
</div><!-- end col -->
<div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-12">
    <div class="card-box table-responsive">
        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
               <tr>
                 <th>#</th>
                 <th>Client</th>
                 <th>Batch</th>
                 <th>Date</th>
                 <th>Amount</th>
                 <th>Invoice</th>
                 <th>Payment</th>
                 <th>Inv</th>
                 <th>Qty</th>
                 <th>Total</th>
                </tr>
            </thead>


            <tbody>
             <?php if(!empty($campaigns)){ ?>
             fhgdtfhdf
             <?php foreach($campaigns as $campaign){
                 $client = $this->application->get_client_data($campaign['client_id']);

                 $qty = $this->application->get_camp_date($campaign['id']);
                 $dates = $this->application->disp_camp_date($campaign['id']);
              ?>
             <tr>
                 <th scope="row"><?php echo $campaign['id']; ?></th>
                 <td><?php echo $client[0]['client_name']; ?></td>
                 <td><?php echo $campaign['month']."-".$campaign['year']; ?></td>
                 <td><?php echo $dates; ?></td>
                 <td><?php echo $campaign['amount']; ?></td>
                 <td><?php if($campaign['invoice'] == 1){ echo "sent"; } ?></td>
                 <td><?php if($campaign['payment'] == 1){ echo "paid"; } else{ echo "unpaid";} ?></td>
                 <td><a href="<?php echo site_url("user_authentication/invoice/".$campaign['id']); ?>">Invoice</a></td>
                 <td><?php echo count($qty); ?></td>
                 <td><?php echo $campaign['amount'] * count($qty); ?></td>
             </tr>
             <?php } } ?>
            </tbody>
        </table>
    </div>
</div>
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
2016 - 2017 © Island Promotions.
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
