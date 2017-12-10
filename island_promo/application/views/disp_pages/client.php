<?php $this->load->view('head_bar') ?>
<link href="<?php echo base_url()?>assets/plugins/RWD-Table-Patterns/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">
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
<h4 class="page-title">Client</h4>
</div>
</div>
<!-- end row -->
<div class="card-box">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <div class="p-20">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Client Name</th>
                        <th>Address</th>
                        
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($clients)){ ?>
                    <?php foreach($clients as $client){ ?>
                    <tr>
                        <th scope="row"><?php echo $client['id']; ?></th>
                        <td><?php echo $client['client_name']; ?></td>
                        <td><?php echo $client['address']; ?></td>
                        <th><a class="btn-sm btn-primary waves-effect waves-light">Edit</a><a class="btn-sm btn-danger waves-effect waves-light">Delete</a></th>
                    </tr>
                    <?php } } ?>
                    
                    
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end row -->
</div>

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