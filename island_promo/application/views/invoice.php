<?php $this->load->view('session_page'); ?>
<?php $this->load->view('head_bar'); ?>
<?php $this->load->view('top_bar'); ?>

<body>
<div class="wrapper">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h4 class="page-title">Invoice</h4>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="card-box">
<div class="panel-body">
<div class="clearfix">
    <div class="pull-left">
        <h2 class="logo" style="color: #2b3d51 !important;">Island Promo</h2>
    </div>
    <div class="pull-right">
        <h5>Invoice # <br>
            <small><?php echo $campaign[0]['id']; ?></small>
        </h5>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
<?php 
$client = $this->application->get_client_data($campaign[0]['client_id']);
?>
        <div class="float-left m-t-30">
            <address>
              <strong><?php echo $client[0]['client_name']; ?></strong><br>
              <?php echo $client[0]['address']; ?>
              <br>
              <abbr title="Phone">E:</abbr> <?php echo $client[0]['email']; ?>
              </address>
        </div>
        <div class="float-right m-t-30">
            <p><strong>Date: </strong> <?php echo date("d-m-Y)"); ?></p>
            <p class="m-t-10"><strong>Order ID: </strong> #<?php echo $campaign[0]['id']; ?></p>
        </div>
    </div><!-- end col -->
</div>
<!-- end row -->

<div class="m-h-50"></div>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table m-t-30">
                <thead class="bg-faded">
                    <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Amount</th>
                    
                </tr></thead>
                <tbody>
                <?php $dates = $this->application->get_camp_date($campaign[0]['id']);
                foreach($dates as $date)
                {
                 ?>
                    <tr>
                        <td><?php echo $date['camp_date'] ?></td>
                        <td><?php echo $campaign[0]['subject']; ?></td>
                        <td><?php echo $campaign[0]['amount']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="clearfix m-t-30">
            <h5 class="small text-inverse font-600"><b>PAYMENT TERMS AND POLICIES</b></h5>

            <small>
                All accounts are to be paid within 7 days from receipt of
                invoice. To be paid by cheque or credit card or direct payment
                online. If account is not paid within 7 days the credits details
                supplied as confirmation of work undertaken will be charged the
                agreed quoted fee noted above.
            </small>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
        <p class="text-right"><b>Sub-total:</b> <?php echo count($dates) * $campaign[0]['amount']; ?></p>
        <p class="text-right">Discout: <?php echo $client[0]['discount']; ?>%</p>
        <p class="text-right">VAT: 12.9%</p>
        <hr>
        <h3 class="text-right">USD <?php echo count($dates) * $campaign[0]['amount']; ?></h3>
    </div>
</div>
<hr>
<div class="hidden-print">
    <div class="float-right">
        <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
        <a href="<?php echo site_url("options/send_invoice");?>" class="btn btn-primary waves-effect waves-light">Submit</a>
    </div>
    <div class="clearfix"></div>
</div>
</div>
</div>

</div>

</div>
<!-- end row -->
<!-- Footer -->
<footer class="footer text-right">
<div class="container">
<div class="row">
<div class="col-xs-12">
2016 © Island Promo.
</div>
</div>
</div>
</footer>
<!-- End Footer -->
</div> <!-- container -->
</div> <!-- End wrapper -->

<!-- jQuery  -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>
<script>
var resizefunc = [];
</script>
<!-- App js -->
<script src="<?php echo base_url()?>assets/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.app.js"></script>
</body>
