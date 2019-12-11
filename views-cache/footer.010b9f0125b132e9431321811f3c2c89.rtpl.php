<?php if(!class_exists('Rain\Tpl')){exit;}?><footer class="main-footer">
  Desenvolvido por <strong>Marcelo Hoffmeister</strong>
</footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="res/site/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="res/site/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="res/site/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="res/site/plugins/datatables/jquery.dataTables.js"></script>
<script src="res/site/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- ChartJS -->
<script src="res/site/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="res/site/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="res/site/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="res/site/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="res/site/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- INputMask -->
<script src="res/site/plugins/moment/moment.min.js"></script>
<script src="res/site/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- daterangepicker -->
<script src="res/site/plugins/moment/moment.min.js"></script>
<script src="res/site/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="res/site/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- charJS-->
<script src="res/site/plugins/chart.js/Chart.min.js"></script>
<!-- Summernote -->
<script src="res/site/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="res/site/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="res/site/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="res/site/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="res/site/dist/js/demo.js"></script>
<script>
  
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

</script>
<script>

  $(function () {

    //Datemask dd/mm/yyyy
    $('.datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/aaaa' })
    $('.phonemask').inputmask('(__) _____-____', { 'placeholder': '(__) _____-____' })
    $('.platemask').inputmask('___-____', { 'placeholder': '___-____' })

  })

</script>
<script>

    //let allPersons = document.getElementById('allPersons');
    //initChart(allPersons, 'pie', )

</script>
<script>

    function initChart(canvasID, type, labels=[], label, data=[], bgColor=[], bdColor=[]) {

        var ctx = document.getElementById(canvasID);
        var myChart = new Chart(ctx, {
            type: type,
            data: {
                labels: [labels.forEach()],
                datasets: [{
                    label: label,
                    data: data.forEach(),
                    backgroundColor: bgColor.forEach(),
                    borderColor: bdColor.forEach(),
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        }
    
</script>
</body>
</html>