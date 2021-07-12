<?= $this->extend('Admin/layout') ?>
<?= $this->section('content'); ?>
<div class="page-heading">
    <h3><?= $title; ?></h3>
</div>
<table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Author</th>  
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php $i=1; ?>
                    <?php foreach($adminblog as $a): ?>
                    <th scope="row" style="text-align: center; vertical-align:middle" ><?= $i++;?></th>
                    <td><?= $a['judul'];?></td>
                    <td><?= $a['author'];?></td>
                    <td>
                        <div class="Aksi">
                            <center>
                                <a href="/Admin/Blog/editBlog/<?= $a['id'];?>" class="btn btn-warning">Edit</a>
                                <form action="/Admin/Blog/<?= $a['id'];?>" method="post">
                                    <?= csrf_field();?> 
                                    <input type="hidden" name="_method" value="DELETE"> 
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Data Ingin Dihapus???')">Delete</button>
                                </form>
                            </center>

                        </div>
                    
                    </td>
                </tr>
                    <?php endforeach; ?>
                    
            </tbody>
            </table>
            <center><a href="blog/add" class="btn btn-success">Tambah Data</a></center>
<?= $this->endSection(); ?>