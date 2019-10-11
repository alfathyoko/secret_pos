
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Master Data Pengguna</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Master Data</a>
                        </li>
                        <li class="active">
                            <strong>Pengguna</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Data Pengguna</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                      <div class="row">
                        <div class="col-lg-3">
                          <button class="btn btn-primary btn-block m-t" onclick="showModalInsert()"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                      </div>
                      <div class="row">

                        <table id="example1" class="table table-striped table-bordered table-hover dataTables-example" >
                          <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Phone</th>
                            <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>

                        </div>
                      </div>

                </div>
            </div>
            </div>

        </div>

        <div id="modalFormInsert" class="modal fade" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12"><h3 class="m-t-none m-b">Tambah Data Pengguna</h3>

                                <p>Lengkapi data dibawah ini</p>

                                <form action="<?= base_url(); ?>api/index" method="POST" role="form">
                                    <div class="form-group"><label>Nama</label> <input type="text" name="name" placeholder="Nama" class="form-control"></div>
                                    <div class="form-group"><label>Alamat</label> <input type="text" name="address" placeholder="Alamat" class="form-control"></div>
                                    <div class="form-group"><label>Phone</label> <input type="text" name="phone" placeholder="Phone" class="form-control"></div>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Tambah</strong></button>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
                </div>
            </div>
    </div>



        <script src="<?= base_url(); ?>assets/js/jquery-2.1.1.js"></script>
        <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/jeditable/jquery.jeditable.js"></script>

        <!-- Flot -->
        <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.spline.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/flot/jquery.flot.pie.js"></script>

        <!-- Peity -->
        <script src="<?= base_url(); ?>assets/js/plugins/peity/jquery.peity.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/demo/peity-demo.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="<?= base_url(); ?>assets/js/inspinia.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/pace/pace.min.js"></script>

        <!-- jQuery UI -->
        <script src="<?= base_url(); ?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

        <!-- GITTER -->
        <script src="<?= base_url(); ?>assets/js/plugins/gritter/jquery.gritter.min.js"></script>

        <!-- Sparkline -->
        <script src="<?= base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

        <!-- Sparkline demo data  -->
        <script src="<?= base_url(); ?>assets/js/demo/sparkline-demo.js"></script>

        <!-- ChartJS-->
        <script src="<?= base_url(); ?>assets/js/plugins/chartJs/Chart.min.js"></script>

        <!-- Toastr -->
        <script src="<?= base_url(); ?>assets/js/plugins/toastr/toastr.min.js"></script>

        <!-- Data Tables -->
        <script src="<?= base_url(); ?>assets/js/plugins/dataTables/jquery.dataTables.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/dataTables/dataTables.bootstrap.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/dataTables/dataTables.responsive.js"></script>
        <script src="<?= base_url(); ?>assets/js/plugins/dataTables/dataTables.tableTools.min.js"></script>


        <script>
        $(document).ready(function(){
          // alert("TES");
          load_refresh();


        })

        function load_refresh(){
          $('#example1').DataTable().destroy();
                  table = $('#example1').DataTable({
                      "ajax": {
                          "url": '<?= base_url() ?>Welcome/tesdata',

                      },
                      "columns": [
                          {"data": "no"},
                          {"data": "name"},
                          {"data": "address"},
                          {"data": "phone"},
                          {"data": "action"}
                      ]
                  });
        }

        function showModalInsert(){
          $('#modalFormInsert').modal('show');
        }


        </script>


        <style>
        body.DTTT_Print {
            background: #fff;

        }
        .DTTT_Print #page-wrapper {
            margin: 0;
            background:#fff;
        }

        button.DTTT_button, div.DTTT_button, a.DTTT_button {
            border: 1px solid #e7eaec;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }
        button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
            border: 1px solid #d2d2d2;
            background: #fff;
            color: #676a6c;
            box-shadow: none;
            padding: 6px 8px;
        }

        .dataTables_filter label {
            margin-right: 5px;

        }
        </style>
