</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php  echo base_url() ?>assets/admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url() ?>assets/admin/js/sb-admin-2.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/admin-script.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
</body>

</html>
