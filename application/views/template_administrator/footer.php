
  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()  ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?> assets/js/jquery-3.4.1.min.js"></script>
  <script src="<?= base_url()  ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/sweetalert.min.js"></script>
  <script src="<?= base_url() ?>assets/dist/sweetalert-dev.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/plugin/timepicker/jquery-timepicker.min.js"></script>

  <!-- SweetAlert -->
  <script type="text/javascript" src="<?= base_url() ?>assets/sweetalert/sweetalert2.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()  ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()  ?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url()  ?>assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url()  ?>assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url()  ?>assets/admin/js/demo/chart-pie-demo.js"></script>

  <script src="<?= base_url() ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function(){
      $('#tables').DataTable()
    })
  </script>
  <script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>
<script>
$("#jam").timepicker({
        format: 'hh:ii',
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
<script>
  $('#Swal').fire({
  title: 'Ingin menghapus Data ini?',
  text: "Data ini Akan Terhapus Secara Permanen!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'hapus'
}).then((result) => {
  if (result.value) {
    $('#Swal').fire(
      'Berhasil, dihapus!',
      'Data berhasil Dihapus.',
      'success'
    )
  }
})
</script>

</body>

</html>
