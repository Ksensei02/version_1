<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM barangmainan ORDER BY id DESC");
?>

<html>
    <head>
          <title>Senarai Barangan ShopMart</title>
    </head>
    <body>
    <center>
        <h2>KOLEKSI SIMPANAN</h2> 
        <fieldset>
            <table witdh='80%'border=0>
                <tr bgcolor='#CCCCCC'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      $no=1;
      
      while($res = mysqli_fetch_array($result)) {
          echo "<tr>";  
          echo "<td>".$no; 
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')
                    \">Delete</a></td>";
          $no++;
      }
         ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
  </fieldset>
    </body>
</html>

