<?php $this->load->view('session_page'); ?>
<?php $this->load->view('head_bar') ?>

<link href="<?php echo base_url()?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<body>

<?php $this->load->view('top_bar'); ?>


<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                    <h4 class="m-t-0 header-title"><b>Clients</b></h4>
                    <p class="text-muted font-13 m-b-30">
                        Manage your client data.
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    <th><a href="<?php echo site_url("edit/edit_client/".$client['id']); ?>" class="btn-sm btn-primary waves-effect waves-light">Edit</a><a class="btn-sm btn-danger waves-effect waves-light">Delete</a></th>
                                </tr>
                            <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
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
<!-- Responsive examples -->
<script src="<?php echo base_url()?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();

            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf']
            });

            table.buttons().container()
                    .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        } );

    </script>
</body>
<!-- Mirrored from coderthemes.com/uplon/horizontal/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Dec 2017 14:10:05 GMT -->
</html>
