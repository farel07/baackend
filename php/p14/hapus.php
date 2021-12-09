<?php

require 'function.php';

$id = $_GET["id"];

if ( hapus($id) > 0 ){

    echo "
        <script>
        alert('data berhasil dihapus');
        </script>
    ";

}

else {

    echo "
    <script>
    alert('data tidak dihapus');
    </script>
";

echo mysqli_error($database);

}

echo"
    <script>
    document.location.href = 'index.php';
    </script>
";

?>