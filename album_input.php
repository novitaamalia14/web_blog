<?php

$album = new App\Album();

$rows = $album->tampil();

?>

<h2> Tambah Data Album Blog</h2>


<form action="album_proses.php" method="POST">
<table>

    <tr>
        <td>Nama</td>
        <td><input type="text" name="i_nama"></td>
    </tr>

    <tr>
        <td>Keterangan</td>
        <td><input type="text" name="i_keterangan"></td>
    </tr>
    <tr>
        <td>ID Photo</td>
        <td>
            <select name="i_id_poto">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['id_photo']; ?>"><?php echo $row ['title']; ?></option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN" class="tombol"></td>
    </tr>
</table>