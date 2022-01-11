<?php

require 'functions.php';

    $id = $_GET["id"];

if(deleteData($id) > 0){
    
    echo "<script>
    alert('Data berhasil dihapus')
</script>";

        }


    else{
    
         echo "<script>
    alert('Data tidak dihapus')
</script>";

echo mysqli_error(connect());
}

echo "<script>
document.location.href = 'index.php';
</script>";


?>