<?php

$id = $_GET['id'];

$photo = new App\Photo();
$rows = $photo->tampil();

$photo = new App\Photo();
$row = $photo-> edit($id);
 ?>

<h2> Edit Data Photo Blog </h2>

<form action="photo_proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
<tr>
        <td> Tanggal </td>
        <td><input type="date" name="i_tanggal" value="<?php echo $row['tangggal']; ?>"></td>
    </tr>
    <tr>
        <td> Title </td>
        <td><input type="text" name="i_title" value="<?php echo $row['title']; ?>"></td>
    </tr>

    <tr>
        <td> Keterangan </td>
        <td><textarea name="i_keterangan" cols="30" rows="10"><?php echo $row['keterangan']; ?></textarea></td>
    </tr>
    <tr>
        <td>ID Post</td>
        <td>
            <select name="i_id_pos">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['id_post']; ?>"><?php echo $row ['title']; ?></option>
                    <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_edit" value="UPDATE" class="tombol"></td>
    </tr>
</table>
</form>
        
