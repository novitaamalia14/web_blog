<?php

$id = $_GET['id'];

$kategori= new App\Kategori();
$row = $kategori-> edit($id);
 ?>

<h2>Edit Data Kategori</h2>

<form action="kategori_proses.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>

    <tr>
        <td> Nama </td>
        <td><input type="text" name="i_nama" value="<?php echo $row['nama']; ?>" ></td>
    </tr>

    <tr>
         <td>Keterangan</td>
         <td> 
            <textarea name="i_keterangan" cols="30" rows="10"> <?php echo $row['keterangan']; ?></textarea>
         </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="b_edit" value="UPDATE" class="tombol"></td>
    </tr>
</table>
</form>
        