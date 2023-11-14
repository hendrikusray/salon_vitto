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
                            <a href="/crm/layanan" class="nav-link">
                                <i class="nav-icon fa-solid fa-person"></i>
                                <p>
                                    Layanan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/crm/produk" class="nav-link active">
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
                                    <h3 class="card-title">Produk</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id Produk</th>
                                                <th>Nama Produk</th>
                                                <th>Harga Produk</th>
                                                <th>Jumlah Stok</th>
                                                <th>Jenis Produk</th>
                                                <th>Photo</th>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">New Product</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="layananForm" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="nama_produk" class="col-form-label">Product Name:</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_produk" class="col-form-label">Product Type:</label>
                                <textarea class="form-control" id="jenis_produk" name="jenis_produk"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="harga_produk" class="col-form-label">Product Price:</label>
                                <input type="number" class="form-control" id="harga_produk" name="harga_produk">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_stok" class="col-form-label">Stock Quantity:</label>
                                <input type="number" class="form-control" id="jumlah_stok" name="jumlah_stok">
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="col-form-label">Product Photo:</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <!-- <img id="foto-preview" src="" style="max-width: 100px; max-height: 100px;" /> -->
                            </div>
                            <div class="mb-3">
                                <img id="foto-preview" src="" style="max-width: 100px;" />
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
        function deleteProduct(id_produk) {
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
                        url: '<?= base_url('delete/produk') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: id_produk
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
                                        window.location.href = "/crm/produk";
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

        function showDetailProduct(id_produk, nama_produk, harga_produk, jumlah_stok, jenis_produk, foto) {
            Swal.fire({
                title: 'Detail Produk',
                html: `
            <table style="width: 100%; text-align: left;">
                <tr>
                    <td><strong>ID Produk:</strong></td>
                    <td>${id_produk}</td>
                </tr>
                <tr>
                    <td><strong>Nama Produk:</strong></td>
                    <td>${nama_produk}</td>
                </tr>
                <tr>
                    <td><strong>Harga Produk:</strong></td>
                    <td>Rp. ${harga_produk}</td>
                </tr>
                <tr>
                    <td><strong>Jumlah Stok:</strong></td>
                    <td>${jumlah_stok}</td>
                </tr>
                <tr>
                    <td><strong>Jenis Produk:</strong></td>
                    <td>${jenis_produk}</td>
                </tr>
                <tr>
                    <td><strong>Photo:</strong></td>
                    <td><img src="${foto}" style="max-width: 100px; max-height: 100px;"></td>
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
                $id_produk = esc($product['id_produk']);
                $nama_produk = esc($product['nama_produk']);
                $harga_produk = esc($product['harga_produk']);
                $jumlah_stok = esc($product['jumlah_stok']);
                $jenis_produk = esc($product['jenis_produk']);
                $foto = base_url('writable/uploads/' . esc($product['foto']));  // Update this line
                ?>

                table.row.add([
                    '<?= $id_produk ?>',
                    '<?= $nama_produk ?>',
                    '<?= $harga_produk ?>',
                    '<?= $jumlah_stok ?>',
                    '<?= $jenis_produk ?>',
                    '<img src="<?= $foto ?>" style="max-width: 100px; max-height: 100px;">',
                    '<a href="javascript:void(0);" class="delete-link" data-id="<?= $id_produk ?>"><i class="fa fa-trash" aria-hidden="true"></i> Hapus</a> | <a href="javascript:void(0);" class="detail-link" data-id="<?= $id_produk ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Detail</a> | <a href="javascript:void(0);" class="edit-link" data-id="<?= $id_produk ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a>'
                ]).draw(false);
            <?php endforeach; ?>


            $('#example1 tbody').on('click', 'a.delete-link', function() {
                var id_produk = $(this).data('id');
                deleteProduct(id_produk);
            });

            $('#example1 tbody').on('click', 'a.detail-link', function() {
                var id_produk = $(this).data('id');
                var nama_produk = table.row($(this).closest('tr')).data()[1];
                var harga_produk = table.row($(this).closest('tr')).data()[2];
                var jumlah_stok = table.row($(this).closest('tr')).data()[3];
                var jenis_produk = table.row($(this).closest('tr')).data()[4];
                var foto = "<?= $foto ?>"

                showDetailProduct(id_produk, nama_produk, harga_produk, jumlah_stok, jenis_produk, foto);
            });


            $('#example1 tbody').on('click', 'a.edit-link', function() {
                var id_produk = $(this).data('id');
                var nama_layanan = table.row($(this).closest('tr')).data()[1];
                var jenis_layanan = table.row($(this).closest('tr')).data()[2];
                var harga_layanan = table.row($(this).closest('tr')).data()[3];
                var stok = table.row($(this).closest('tr')).data()[3];

                // Inside the edit-link click event



                // Populate the modal with the existing data
                $('#nama_produk').val(nama_layanan);
                $('#jenis_produk').val(jenis_layanan);
                $('#harga_produk').val(harga_layanan);
                $('#jumlah_stok').val(stok);

                // Update the submit button to act as an update button
                $('#submitBtn').text('Update').data('id', id_produk);
                // Display existing product photo
                $('#foto-preview').attr('src', "<?= $foto ?>"); // Replace with the path to the existing photo


                // Show the modal
                $('#exampleModal').modal('show');
            });



            document.getElementById('submitBtn').addEventListener('click', function() {
                var form = document.getElementById('layananForm');
                var formData = new FormData(form);

                var id_produk = $(this).data('id');
                var actionUrl = id_produk ? '<?= base_url('product-barang/update') ?>' : '<?= base_url('product/post') ?>';

                formData.append('id_produk', id_produk);


                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log('Success:', data);
                        // You can handle the success response here (e.g., close the modal, show a success message)
                        alert('Product successfully added');
                        // Optionally, you can redirect the user or perform other actions after success
                        window.location.href = '/crm/produk'; // Replace with your desired URL
                    },
                    error: function(error) {
                        console.error('Error:', error);
                        // Handle errors here (e.g., show an error message)
                        alert('Error adding product. Please try again.');
                    }
                });
            });
        });
    </script>

</body>

</html>