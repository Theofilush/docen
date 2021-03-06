  
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.1
    </div>
    <strong>Copyright &copy; 2018 <a href="https://upj.ac.id">Universitas Pembangunan Jaya</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div id="control-sidebar-home-tab"></div>   
    </div>
  </aside>  
<!-- ./wrapper -->

<script src="<?php echo base_url() ?>asett/dist/js/jqueryku.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>asett/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>asett/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url() ?>asett/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>asett/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>asett/dist/js/jquery-ui.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
  $(document).ready(function() {
    $('.hapus').click(function() {
    return confirm("Are you sure you want to delete?");
    })
  })
  $(function () {
    $('#example3').DataTable({
      'searching'   : false,
      'autoWidth'   : true,
      'fixedColumns': true,
      'lengthChange': true,
      'scrollY'     : true,
      'scrollCollapse': true
    })
    $('#example4_search').DataTable({
      'searching'   : false
    })
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'scrollY'     : true,
      'scrollCollapse': true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,
      'columnDefs': [
            { width: '40%', targets: 1 },
            { width: '30%', targets: 2 },
            { width: '10%', targets: 4 }

        ],
      'fixedColumns': true     
    }) 
     $('#exampleuser').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'scrollY'     : true,
      'scrollCollapse': true,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true,      
      'fixedColumns': true     
    })          
  }) 
    $('.selecto').select2()
    $('#datepicker').datepicker({
      autoclose: true,
      format: "dd-mm-yyyy",
      orientation: 'auto bottom'
    })
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })   
    $(document).ready(function(){
      $("#title").autocomplete({
          minLength:1,
          source: "<?php echo base_url('dashboard/get_autocomplete/');?>"
      });
    });
</script>

</body>
</html>
