<?php

$id = $_GET['id'];

$post = new App\Post();
$rows = $post->tampil();

$post = new App\Post();
$row = $post-> edit($id);
 ?>

<h2> Edit Data Post Blog </h2>

<form action="post_proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
<tr>
        <td> Tanggal </td>
        <td><input type="date" name="i_tanggal" value="<?php echo $row['tangggal']; ?>"></td>
    </tr>
    <tr>
        <td> Slug </td>
        <td><input type="text" name="i_slug" value="<?php echo $row['slug']; ?>"></td>
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
        <td>ID Kategori</td>
        <td>
            <select name="i_id_categori">
                <?php foreach ($rows as$row) { ?>
                    <option value="<?php echo $row ['id_kategori']; ?>"><?php echo $row ['nama']; ?></option>
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
        
