    <!-- Footer -->
     <!-- Jquery JS-->
    <script src="<?php echo base_url('');?>/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('');?>/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('');?>/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url('');?>/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url('');?>/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url('');?>/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url('');?>/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url('');?>/vendor/select2/select2.min.js"> </script>
    <script src="<?php echo base_url('assets/js/datatable.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/datatables.min.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/plugins/bootstrap/datatables.bootstrap.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/table-datatables-buttons.js')?>" type="text/javascript"></script>
    <script src="<?php echo base_url('');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js');?>"></script>
    <!-- Main JS-->
    <script src="<?php echo base_url('');?>/js/main.js"></script>
    <script src="<?php echo base_url('assets');?>/js/jquery.mask.min.js"></script>
     <script type="text/javascript">
            $(document).ready(function(){
 
                // Format mata uang.
                $( '.uang' ).mask('000.000.000', {reverse: true});
 
            })
        </script>
   
  <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable({
      responsive: true});
      });
    </script>
    <script type="text/javascript">

            $(document).ready(function(){
                $('.select2').select2();
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
</body>

</html>
