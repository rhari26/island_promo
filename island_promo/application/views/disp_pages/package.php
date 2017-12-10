<?php $this->load->view('head_bar') ?>

<body>

<?php $this->load->view('top_bar'); ?>


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
<h4 class="page-title">Package</h4>
</div>
</div>
<!-- end row -->


<div class="row">
<div class="col-12">
<div class="card-box">

<h4 class="header-title m-t-0 m-b-30">Add Package</h4>

<div class="card-box">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="p-20">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Package Name</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($packages)){ ?>
                    <?php foreach($packages as $package){ ?>
                    <tr>
                        <th scope="row"><?php echo $package['id']; ?></th>
                        <td><?php echo $package['name']; ?></td>
                        <td><?php echo $package['description']; ?></td>
                        <td><?php echo $package['amount']; ?></td>
                        <th><a class="btn-sm btn-primary waves-effect waves-light">Edit</a><a class="btn-sm btn-danger waves-effect waves-light">Delete</a></th>
                    </tr>
                    <?php } } ?>
                    
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->
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