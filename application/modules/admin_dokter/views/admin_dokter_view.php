<!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <link src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link src="<?=base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
     <style type="text/css">
        .modalEdit{
            width: 100%;
        }
    </style>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="page-title">Datatable</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Ubold</a>
                            </li>
                            <li>
                                <a href="#">Tables</a>
                            </li>
                            <li class="active">
                                Datatable
                            </li>
                        </ol>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="m-t-0 header-title"><b>Data Dokter</b></h4>
                            <button class="btn btn-success" onclick="input_dokter()"><i class="fa fa-plus"></i> Input Dokter Baru</button>
                            <br><br>

                            <table id="table_awal" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Dokter</th>
                                    <th>Alamat</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                    
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer">
            © 2016. All rights reserved.
        </footer>

    </div>
<script src="<?=base_url();?>assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="<?=base_url();?>assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="<?=base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>

<script src="<?=base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/jszip.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="<?=base_url();?>assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<!--FooTable-->
<script src="<?=base_url();?>assets/plugins/footable/js/footable.all.min.js"></script>

<script src="<?=base_url();?>assets/pages/datatables.init.js"></script>

<script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var base_url = '<?=base_url();?>';
    $(document).ready(function () {
        $('#modal_input_dokter').modal('hide');
        $('#datepicker-autoclose').datepicker({
            format : 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
        table = $('#table_awal').DataTable({
            "processing": true, //Feature control the processing indicator.
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "order": [], //Initial no order.
         
                // Load data for the table's content from an Ajax source
                "ajax": {
                    "url": "<?=site_url('admin_dokter/ajax_list')?>",
                    "type": "POST"
                },
                "bPaginate": false,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false,
         
                //Set column definition initialisation properties.
                "columnDefs": [
                    { 
                        "targets": [ -1 ], //last column
                        "orderable": false, //set not orderable
                    },
                    { 
                        "targets": [ -2 ], //2 last column 
                        "orderable": false, //set not orderable
                    },
                     { 
                        "targets": [ -3 ], //2 last column (photo)
                        "orderable": false, //set not orderable
                    },
                   
                    
                    { 
                        "targets": [ -6 ], //2 last column (photo)
                        "orderable": false, //set not orderable
                    },

                ]
        });
        $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
        });
        $("textarea").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
        $("select").change(function(){
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
        });
     
        
    });

    function reload_table(){
        table.ajax.reload(null,false); 
    }

    function input_dokter(){
        $('#form_dokter')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('.modal-title').text('Form Input Dokter');
        $('#modal_input_dokter').modal('show'); // show bootstrap modal 
    }
    


    
    function save_dokter(){
        $('#btnSave').text('Menyimpan.....'); //change button text
        $('#btnSave').attr('disabled',true); //set button disable 
        var url;
     
        url = "<?=site_url('admin_dokter/ajax_add_dokter')?>";
     
        // ajax adding data to database
     
        var formData = new FormData($('#form_dokter')[0]);
        $.ajax({
            url : url,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data)
            {
     
                if(data.status) //if success close modal and reload ajax table
                {
                    reload_table();
                    $('#modal_input_dokter').modal('hide');
                }
                else
                {
                    for (var i = 0; i < data.inputerror.length; i++) 
                    {
                        $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                        $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                    }
                }
                $('#btnSave').text('Simpan Data Dokter'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
     
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menyimpan data');
                $('#btnSave').text('Simpan Data Dokter'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
            }
        });
    }


function delete_dokter(id_dokter, nama_dokter) {
        var url;
        url = "<?=site_url('/admin_dokter/ajax_delete_dokter')?>";
        swal({
          title: "Are you sure?",
          text: "Delete Dokter : " + nama_dokter,
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
          swal("Deleted!", "Data dokter has been deleted.", "success");
          $.ajax({
            url: url,
            type: 'POST',
            data: {'id_dokter': id_dokter},
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menghapus data');
                $('#btnSave').text('Hapus Data Dokter'); //change button text
                $('#btnSave').attr('disabled',false); //set button enable 
     
            }
        });
        reload_table();
        });
    }


</script>

<!-- Modal untuk penyedia Boga -->
<div class="modal fade" id="modal_input_dokter" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Form Input Dokter</h3>
            </div>
            <div class="modal-body">
                <form action="#" id="form_dokter" class="form-horizontal">
                    <input type="hidden" name="id">
                    <div class="form-body form">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Dokter</label>
                            <div class="col-md-9">
                                <input type="text" name="nama_dokter" class="form-control" placeholder="Masukkan nama dokter">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat Dokter</label>
                            <div class="col-md-9">
                                <input type="text" name="alamat_dokter" class="form-control" placeholder="Masukkan alamat dokter">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input type="text" name="tempat_lahir_dokter" class="form-control" placeholder="Masukkan tempat lahir">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-9">
                                <input type="date" name="tanggal_lahir_dokter" class="form-control" placeholder="Masukkan tanggal lahir">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nomor Telepone</label>
                            <div class="col-md-9">
                                <input type="text" name="no_telp_dokter" class="form-control" placeholder="Masukkan nomor telepone">
                                <span class="help-block"></span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="control-label col-md-3">Spesialis</label>
                            <div class="col-md-9">
                                <input type="text" name="spesialis" class="form-control" placeholder="Masukkan bidang spesialis">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <select class="btn btn-primary waves-effect waves-light" data-toggle="dropdown" name="jk_dokter">
                                    <option value='L'>Laki-Laki</option>
                                    <option value='P'>Perempuan</option>
                                <span class="help-block"></span>
                            </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input type="text"  name="username" class="form-control" placeholder="Masukkan username">
                                <span class="help-block"></span>
                            </div>
                        </div>                

                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <button type="button" id="btnSave" onclick="save_dokter()" class="btn btn-primary">Simpan Data Dokter</button>
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

<script src="assets/plugins/notifyjs/js/notify.js"></script>
        <script src="assets/plugins/notifications/notify-metro.js"></script>


  