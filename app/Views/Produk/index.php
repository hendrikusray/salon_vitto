<?= $this->extend('layout/template') ?>
<?= $this->section("content") ?>
<main>
    <div class="container-fluid px-4">
         <h1 class="mt-4" >SIPSARI MODE PRODUK</h1>
        <ol class= "breadcrumb mb-4">
             <li class= "breadcrumb-item active">
                Produk
            </li>
        </ol>
         <div class="card mb-4">
            <div class="card-header">
                 <i class="fas fa-table me-1"></i>
                 <?= $title ?>
            </div>
            <div class="card-body">
                <a class="btn btn-primary mb-3" type="button" href="produk"<?= base_url('book/create')?>">Tambah Buku</a>
                <a class="btn btn-dark mb-3" type="button" data-bs-target="#modalImport" data-bs-toggle="modal">Import Buku</a>
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Sampul</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbodv>
                        <?php $no = 1;
                        foreach ($result as $value) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <img src="img/<?= $value['cover']?>" alt="" width="100">
                                </td>
                                <td><?= $value['title'] ?></td>
                                <td><?= $value['book_category_id'] ?></td>
                                <td><?= $value['price']?></td>
                                <td><?= $value['stock']?></td>
                                <td>
                                    <a class="btn btn-primary" href="produk"<?= base_url('book/' . $value['slug'])?>" role="button" >Detail</a>
                                    <a class="btn btn-warning" href="produk"<?= base_url('book/edit/' . $value['slug'])?>" role="button" >Ubah</a>
                                    <form action="<?= base_url('book/' . $value['book_id'])?>"  method="post" class="d-inline">
                                    <?= csrf_field()?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" role="bu
                                    " onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>
<?= $this->include('book/modal') ?>
<?= $this->endSection() ?>