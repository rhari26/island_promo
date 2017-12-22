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
        <h4 class="page-title">Client</h4>
    </div>
</div>
<!-- end row -->


<div class="row">
    <div class="col-12">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Add Client</h4>

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12 col-xl-6">
                    <?php echo form_open('edit/update_client/'.$id); ?>
                         <fieldset class="form-group">
                             <label for="comp_name">Company Name</label>
                             <input type="text" class="form-control" id="comp_name" name="comp_name"
                             placeholder="Company Name" value="<?php echo $client[0]['comp_name']; ?>" />
                         </fieldset>

                         <fieldset class="form-group">
                             <label for="client_name">Client Name</label>
                             <input type="text" class="form-control" id="client_name" name="client_name"
                             placeholder="Client Name" value="<?php echo $client[0]['client_name']; ?>" />
                         </fieldset>

                         <fieldset class="form-group">
                             <label for="email">Client Email</label>
                             <input type="text" class="form-control" id="email" name="email"
                             placeholder="Client Email" value="<?php echo $client[0]['email']; ?>" />
                         </fieldset>

                         <fieldset class="form-group">
                             <label for="discount">Discount</label>
                             <input type="text" class="form-control" id="discount" name="discount"
                             placeholder="Discount" value="<?php echo $client[0]['discount']; ?>" />
                         </fieldset>

                         <fieldset class="form-group">
                             <label for="address">Address</label>
                             <textarea class="form-control" id="address"
                             rows="3" name="address"><?php echo $client[0]['address']; ?></textarea>
                         </fieldset>

                         </fieldset>
                         <?php $tmp = $this->session->userdata('logged_in');
                         if($tmp['admin'] == 1){ ?>
                         <fieldset class="form-group">
                        <label for="employe">Employee</label>
                        <select class="form-control" id="employe" name="employe">
                        <option value="">Select</option>
                        <?php if(!empty($employes)){ ?>
                        <?php foreach($employes as $employe){ ?>
                        <?php if($employe['id'] == $client[0]['user_id']){ ?>
                        <option value="<?php echo $employe['id']; ?>" selected><?php echo $employe['name']; ?></option>
                        <?php } else { ?>
                        <option value="<?php echo $employe['id']; ?>"><?php echo $employe['name']; ?></option>
                        <?php } } } ?>
                        </select>
                        </fieldset>
                        <?php } ?>



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
