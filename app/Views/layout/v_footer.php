       </div><!-- /.container-fluid -->
       </div>
       <!-- /.content -->
       </div>
       <!-- /.content-wrapper -->

       <!-- Main Footer -->
       <footer class="main-footer">
         <!-- To the right -->
         <div class="float-right d-none d-sm-inline">
           Anything you want
         </div>
         <!-- Default to the left -->
         <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
       </footer>
       </div>
       <!-- ./wrapper -->

       <!-- REQUIRED SCRIPTS -->


       <!-- jQuery -->
       <script src="<?= base_url('template') ?>/plugins/jquery/jquery.min.js"></script>
       <!-- Bootstrap 4 -->
       <script src="<?= base_url('template') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
       <!-- DataTables -->
       <script src="<?= base_url('template') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
       <script src="<?= base_url('template') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
       <script src="<?= base_url('template') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
       <script src="<?= base_url('template') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
       <!-- AdminLTE App -->
       <script src="<?= base_url('template') ?>/dist/js/adminlte.min.js"></script>
       <!-- AdminLTE for demo purposes -->
       <script src="<?= base_url('template') ?>/dist/js/demo.js"></script>
       <!-- page script -->
       <script>
         $(function() {
           $("#example1").DataTable({
             "responsive": true,
             "autoWidth": false,
           });
           $('#example2').DataTable({
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
       </body>

       </html>