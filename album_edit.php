<?php

$id = $_GET['id'];

$album = new App\Album();
$rows = $album->tampil();

$album = new App\Album();
$row = $album-> edit($id);
 ?>

<h2> Edit Data Album Blog </h2>

<form action="album_proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="i_nama"  value="<?php echo $row['nama']; ?>"></td>
    </tr>
    <tr>
        <td> Keterangan </td>
        <td>
           <input type="text" name="i_keterangan" value="<?php echo $row['keterangan']; ?>">
        </td>
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
        <td><input type="submit" name="b_edit" value="UPDATE" class="tombol" class="tombol"></td>
    </tr>
</table>
</form>
        
