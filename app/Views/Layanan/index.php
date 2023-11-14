<?php
include APPPATH . 'views/Header.php';
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height:108%">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <span class="brand-text font-weight-light">Salon Rinata</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Home
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/crm/layanan" class="nav-link active">
                                <i class="nav-icon fa-solid fa-person"></i>
                                <p>
                                    Layanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/crm/produk" class="nav-link">
                                <i class="nav-icon fa-solid fa-truck-fast"></i>
                                <p>
                                    Produk
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>DataTables</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <section class="content">
                <div style="text-align: right; padding: 12px">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="loginBtn" style="--bs-btn-padding-y: 0.49rem; --bs-btn-padding-x: 18.5rem;">Tambah</button>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Layanan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id Layanan</th>
                                                <th>Nama Layanan</th>
                                                <th>Jenis Layanan</th>
                                                <th>Harga Layanan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- DataTable will populate data here -->
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm">
                            <div class="mb-3">
                                <label for="nama_layanan" class="col-form-label">Nama layanan:</label>
                                <input type="text" class="form-control" id="nama_layanan">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_layanan" class="col-form-label">Jenis layanan:</label>
                                <textarea class="form-control" id="jenis_layanan"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="harga_layanan" class="col-form-label">Harga layanan:</label>
                                <input type="number" class="form-control" id="harga_layanan">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="submitBtn">Submit</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php
    include APPPATH . 'views/Footer.php';
    ?>
    <script>
        function deleteLayanan(id_layanan) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // If the user clicks "Yes," proceed with deletion
                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?= base_url('product/delete') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id_layanan
                        },
                        success: function(response) {
                            if (response.success) {
                                Toastify({
                                    text: "sukses menghapus",
                                    duration: 1000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                    callback: function() {
                                        window.location.href = "/crm/layanan";
                                    }
                                }).showToast();
                            } else {
                                Toastify({
                                    text: "gagal menghapus",
                                    duration: 1000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    stopOnFocus: true,
                                }).showToast();
                            }
                        },
                        error: function(error) {
                            console.error('Error during deletion', error);
                        }
                    });
                }
            });
        }

        function showDetailLayanan(id_layanan, nama_layanan, jenis_layanan, harga_layanan) {
            Swal.fire({
                title: 'Detail Layanan',
                html: `
                <table style="width: 100%;text-align: left;">
                <tr>
                    <td><strong>ID Layanan:</strong></td>
                    <td>${id_layanan}</td>
                </tr>
                <tr>
                    <td><strong>Nama Layanan:</strong></td>
                    <td>${nama_layanan}</td>
                </tr>
                <tr>
                    <td><strong>Jenis Layanan:</strong></td>
                    <td>${jenis_layanan}</td>
                </tr>
                <tr>
                    <td><strong>Harga Layanan:</strong></td>
                    <td>Rp. ${harga_layanan}</td>
                </tr>
            </table>
        `,
                icon: 'info',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: false,
                confirmButtonText: 'OK',
            });
        }


        $(document).ready(function() {
            var table = $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
            });

            <?php foreach ($products as $product) : ?>
                <?php
                $id_layanan = esc($product['id_layanan']);
                $nama_layanan = esc($product['nama_layanan']);
                $jenis_layanan = esc($product['jenis_layanan']);
                $harga_layanan = esc($product['harga_layanan']);
                ?>

                table.row.add([
                    '<?= $id_layanan ?>',
                    '<?= $nama_layanan ?>',
                    '<?= $jenis_layanan ?>',
                    '<?= $harga_layanan ?>',
                    '<a href="javascript:void(0);" class="delete-link" data-id="<?= $id_layanan ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> | <a href="javascript:void(0);" class="detail-link" data-id="<?= $id_layanan ?>"><i class="fa-solid fa-circle-info"></i> Detail</a> | <a href="javascript:void(0);" class="edit-link" data-id="<?= $id_layanan ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>'
                ]).draw(false);
            <?php endforeach; ?>

            $('#example1 tbody').on('click', 'a.delete-link', function() {
                var id_layanan = $(this).data('id');
                deleteLayanan(id_layanan);
            });

            $('#example1 tbody').on('click', 'a.detail-link', function() {
                var id_layanan = $(this).data('id');
                var nama_layanan = table.row($(this).closest('tr')).data()[1];
                var jenis_layanan = table.row($(this).closest('tr')).data()[2];
                var harga_layanan = table.row($(this).closest('tr')).data()[3];
                showDetailLayanan(id_layanan, nama_layanan, jenis_layanan, harga_layanan);
            });

            $('#example1 tbody').on('click', 'a.edit-link', function() {
                var id_layanan = $(this).data('id');
                var nama_layanan = table.row($(this).closest('tr')).data()[1];
                var jenis_layanan = table.row($(this).closest('tr')).data()[2];
                var harga_layanan = table.row($(this).closest('tr')).data()[3];

                // Populate the modal with the existing data
                $('#nama_layanan').val(nama_layanan);
                $('#jenis_layanan').val(jenis_layanan);
                $('#harga_layanan').val(harga_layanan);

                // Update the submit button to act as an update button
                $('#submitBtn').text('Update').data('id', id_layanan);

                // Show the modal
                $('#exampleModal').modal('show');
            });


            // Update submitBtn click event to handle both add and update
            $("#submitBtn").click(function() {
                var id_layanan = $(this).data('id');
                var actionUrl = id_layanan ? '<?= base_url('product/update') ?>' : '<?= base_url('product/post') ?>';
                var nama_layanan = $("#nama_layanan").val();
                var jenis_layanan = $("#jenis_layanan").val();
                var harga_layanan = $("#harga_layanan").val();

                $.ajax({
                    type: "POST",
                    url: actionUrl,
                    data: {
                        id_layanan: id_layanan, // Include the id_layanan for update
                        nama_layanan: nama_layanan,
                        jenis_layanan: jenis_layanan,
                        harga_layanan: harga_layanan
                    },
                    success: function(response) {
                        console.log(response)
                        if (response.success) {
                            // Jika sukses, tutup modal
                            $('#exampleModal').modal('toggle');
                            $('.modal-backdrop').remove();

                            Toastify({
                                text: id_layanan ? "sukses edit" : "sukses menambahkan",
                                duration: 1000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                stopOnFocus: true,
                                callback: function() {
                                    window.location.href = "/crm/layanan";
                                }
                            }).showToast();

                        } else {
                            // Jika gagal, tampilkan pesan kesalahan
                            alert('Failed to submit data.');
                        }
                    },
                    error: function(error) {
                        console.error("Error during submission", error);
                    }
                });
            });



            // $("#submitBtn").click(function() {
            //     // Ambil nilai dari input
            //     var nama_layanan = $("#nama_layanan").val();
            //     var jenis_layanan = $("#jenis_layanan").val();
            //     var harga_layanan = $("#harga_layanan").val();

            //     // Kirim data ke server menggunakan AJAX
            //     $.ajax({
            //         type: "POST",
            //         url: "<?= base_url('product/post') ?>",
            //         data: {
            //             nama_layanan: nama_layanan,
            //             jenis_layanan: jenis_layanan,
            //             harga_layanan: harga_layanan
            //         },
            //         success: function(response) {
            //             if (response.success) {
            //                 // Jika sukses, tutup modal
            //                 $('#exampleModal').modal('toggle');
            //                 $('.modal-backdrop').remove();

            //                 Toastify({
            //                     text: "sukses menambahkan",
            //                     duration: 1000,
            //                     close: true,
            //                     gravity: "top",
            //                     position: "right",
            //                     backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            //                     stopOnFocus: true,
            //                     callback: function() {
            //                         window.location.href = "/crm/layanan";
            //                     }
            //                 }).showToast();

            //             } else {
            //                 // Jika gagal, tampilkan pesan kesalahan
            //                 alert('Failed to submit data.');
            //             }
            //         },
            //         error: function(error) {
            //             console.error("Error during submission", error);
            //         }
            //     });
            // });
        });
    </script>

</body>

</html>