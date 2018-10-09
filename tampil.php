<?php
include "koneksi.php";
$query = mysqli_query($dabes,"SELECT * FROM user ORDER BY nim DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Fakultas</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["username"];?></td>
            <td><?php echo $data["password"];?></td>
            <td>
                <a href="#">Delete</a> |
                <a href="#">Update</a>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>