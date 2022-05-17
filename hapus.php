<?php
include"koneksi.php";

if(empty($_POST['pilih'])){
    ?>
    <script>
        alert("Please select choice");
        window.location.assign("user.php?url=catatan_perjalanan");
      </script>
    <?php
}

else{
    $catatan=$_POST['pilih'];
    $jml_dipilih= count('catatan');
    for($x=0;$x<$jml_dipilih;$x++){
        mysqli_query("DELETE FROM catatan WHERE catatan='$catatan[$x]'");
    }
    ?>
    <script>
        alert("Hapus Data Berhasil");
        window.location.assign("user.php?url=catatan_perjalanan");
      </script>
      <?php
}
?>