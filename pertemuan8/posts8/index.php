<?php
    // Create database connection using config file
include_once("koneksi.php");
    // Fetch all users data from database
$result = mysqli_query($con, "SELECT * FROM mahasiswa ");
?>
<html>
    <head> 
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Halaman Utama</title>
    </head>
    <body>
        <div class="container">
    <a href="tambah.php">Tambah Data Baru</a><br/> 
    <a href="cetak.php">Cetak</a><br/>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            <th>Nim</th> 
            <th>Nama</th> 
            <th>Gender</th> 
            <th>Alamat</th> 
            <th>tgl lahir</th> <th>Update</th>
        </tr>
    </thead>
<?php 
    while($user_data = mysqli_fetch_array($result)) { 
    echo "<tr>";
    echo "<td>".$user_data['nim']."</td>";
    echo "<td>".$user_data['nama']."</td>";
    echo "<td>".$user_data['jkel']."</td>";
    echo "<td>".$user_data['alamat']."</td>"; 
    echo "<td>".$user_data['tgllhr']."</td>"; 
    echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>"; 
    }
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </table>
    </body>
</html>
