<?php

$post = new App\Post();

$rows = $post->tampil();

?>

<h2> Tambah Data Post Blog</h2> 


<form action="post_proses.php" method="POST">
<table>
    <tr>
        <td>Tanggal</td>
        <td><input type="date" name="i_tanggal"></td>
    </tr>
    <tr>
        <td>Slug</td>
        <td><input type="text" name="i_slug"></td>
    </tr>
    <tr>
        <td>Title</td>
        <td><input type="text" name="i_title"></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td><input type="text" name="i_keterangan"></td>
    </tr>
    <tr>
        <td>ID Kategori</td>
        <td>
            <select name="i_id_categori">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['id_cat']; ?>"><?php echo $row ['nama']; ?></option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN" class="tombol"></td>
    </tr>
</table>