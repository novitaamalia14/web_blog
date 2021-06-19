<?php

$photo = new App\Photo();

$rows = $photo->tampil();

?>

<h2> Tambah Data Photo Blog</h2>


<form action="photo_proses.php" method="POST">
<table>
    <tr>
        <td>Tanggal</td>
        <td><input type="date" name="i_tanggal"></td>
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
        <td>ID Post</td>
        <td>
            <select name="i_id_pos">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['post_id']; ?>"><?php echo $row ['title']; ?></option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_input" value="SIMPAN" class="tombol"></td>
    </tr>
</table>