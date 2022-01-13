<?php

class db{
   
    public $db,
           $query,
           $rows,
           $row = [];

    public function __construct(){
        $this->db = mysqli_connect("localhost","root","","dat_sog");
    }

    public function data(){
        $this->query = mysqli_query($this->db,"SELECT * FROM sog_detail");
        
        while($this->rows = mysqli_fetch_assoc($this->query)){
        $this->row[] = $this->rows; }
        
        return $this->row;
    }

}

$a = new db();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1" cellspacing="0" cellpadding="10px" >


    <?php if(isset($_POST["detail"])) : ?>
<tr>
    <th>#</th>
    <th>img</th>
    <th>Nama</th>
    <th>No Hp/Telepon</th>
    <th>alamat</th>
    <th>rt</th>
    <th>kota</th>
</tr>
<form action="" method="post">
    <button type="submit" name="">Kembali</button>
</form>
        <?php foreach($a->data() as $data) : ?>
            
<tr>
    <td>1</td>
    <td><?= $data["img"] ?></td>
    <td><?= $data["nama"] ?></td>
    <td><?= $data["no_hp"] ?></td> 
    <td><?= $data["alamat"] ?></td> 
    <td><?= $data["rt"] ?></td> 
    <td><?= $data["kota"] ?></td> 
</tr>   
        <?php endforeach; ?>
    <?php else: ?>
        <form action="" method="post">
    <button type="submit" name="detail">Tampilkan semua data</button>
</form>
<tr>
    <th>#</th>
    <th>img</th>
    <th>Nama</th>
    <th>No Hp/Telepon</th>
</tr>
        <?php foreach($a->data() as $data) : ?>
<tr>
    <td>1</td>
    <td><?= $data["img"] ?></td>
    <td><?= $data["nama"] ?></td>
    <td><?= $data["no_hp"] ?></td>   
</tr>
        <?php endforeach; ?>
    <?php endif; ?>

</table>
    
</body>
</html>