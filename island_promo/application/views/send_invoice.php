<?php $this->load->view('session_page'); ?>
<?php //$this->load->view('head_bar'); ?>
<?php 
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
// ob_start();
// we can have any view part here like HTML, PHP etc
$content = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Island Promotions.">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico">

    <!-- App title -->
    <title>Island Promotions</title>

    <!-- Switchery css -->
    <link href="<?php echo base_url()?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Modernizr js -->
    <script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,"script","../../../www.google-analytics.com/analytics.js","ga");

        ga("create", "UA-79190402-1", "auto");
        ga("send", "pageview");

    </script>


</head>
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
        <small>2016-04-23654789</small>
    </h5>
</div>
</div>
<hr>
<div class="row">
<div class="col-sm-12">

    <div class="float-left m-t-30">
        <address>
          <strong>Twitter, Inc.</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>
    </div>
    <div class="float-right m-t-30">
        <p><strong>Order Date: </strong> Jan 17, 2016</p>
        <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-danger">Pending</span></p>
        <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
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
                <tr><th>#</th>
                <th>Item</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Unit Cost</th>
                <th>Total</th>
            </tr></thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LCD</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>1</td>
                    <td>$380</td>
                    <td>$380</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mobile</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>5</td>
                    <td>$50</td>
                    <td>$250</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LED</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>2</td>
                    <td>$500</td>
                    <td>$1000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>LCD</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>3</td>
                    <td>$300</td>
                    <td>$900</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mobile</td>
                    <td>Lorem ipsum dolor sit amet.</td>
                    <td>5</td>
                    <td>$80</td>
                    <td>$400</td>
                </tr>
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
    <p class="text-right"><b>Sub-total:</b> 2930.00</p>
    <p class="text-right">Discout: 12.9%</p>
    <p class="text-right">VAT: 12.9%</p>
    <hr>
    <h3 class="text-right">USD 2930.00</h3>
</div>
</div>
<hr>
<div class="hidden-print">
<div class="float-right">
    <a href="javascript:window.print()" class="btn btn-dark waves-effect waves-light"><i class="fa fa-print"></i></a>
    <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
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
</html>';
// ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');
?>