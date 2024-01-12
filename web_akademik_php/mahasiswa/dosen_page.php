<!-- Check Status tambah data --> 
<?php
    // if(!isset($_GET['page'])){
    // include "../session_check.php";
    // }
?>

<!-- Tabel Data Mata Kuliah --> 
<div class="tabel-page">
    <div class="tabel-heading">
        Daftar Mata Kuliah yang diambil
    </div>
    <table id="list-data" class="display">
        <thead>
            <tr>
                <th><h5>ID Dosen</h5></th>
                <th><h5>Nama Dosen</h5></th>
            </tr>
        </thead>
        <!-- Kode untuk mengambil data matkul -->
        <?php
            include "../config/db_connection.php";

            $sql = "SELECT * FROM nilai as n
            INNER JOIN mengajar as mk ON n.ID_Dosen = me.ID_Dosen 
            INNER JOIN nilai as n ON n.ID_Matkul = me.ID_Matkul AND n.NIM = ".$_SESSION['nim'];


        $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
                <!-- Menampilkan Data Mata Kuliah -->
                <tr>
                    <td><?php echo $row["ID_Dosen"];?></td>
                    <td><?php echo $row["Nama_Dosen"];?></td>
                </tr>
        <?php
                }
            }
            mysqli_close($conn);
        ?>
        
    </table>
</div>