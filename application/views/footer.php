<?php $_SERVER['PHP_SELF'];
$filePath=explode("/",$_SERVER['PHP_SELF']);
 $currentFile=$filePath[2];
 ?>
<footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://ewayits.com">Eway IT Solutions</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();  ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();  ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->


<script src="<?php echo base_url();  ?>/assets/custom/mycustom.js"></script>
<script>
 // $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();  ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS 
<script src="<?php echo base_url();  ?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline 
<script src="<?php echo base_url();  ?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap 
<script src="<?php echo base_url();  ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart 
<script src="<?php echo base_url();  ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();  ?>/assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();  ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote 
<script src="<?php echo base_url();  ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars 
<script src="<?php echo base_url();  ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();  ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes 
<script src="<?php echo base_url();  ?>/assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) 
<script src="<?php echo base_url();  ?>/assets/dist/js/pages/dashboard.js"></script>
<!-- Toastr -->

<script src="<?php echo base_url();  ?>/assets/plugins/toastr/toastr.min.js"></script>
<?php if($currentFile == 'users.php'){ ?>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();  ?>/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<?php } ?>
<?php

if(@$_SESSION['msg1']){
	//echo $_SESSION["msg1"] ;
	?>
	<script>
	toastr.success('<?php echo $_SESSION["msg1"] ;?>');
	setTimeout(function() { <?php
//unset($_SESSION['msg1']); ?> }, 3000);
	</script>
	
<?php

//unset($_SESSION['msg1']);
}

?>
<?php if($currentFile == 'users.php'){ ?>
<script>
$(function () {
    
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
	</script>
<?php } ?>	

<script>
var base_url = "http://localhost/CI2022/";
</script>
</body>
</html>