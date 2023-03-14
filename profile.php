<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Profile Page</title>

    <!-- Style CSS -->
    <style>

        body {
            background-color: #16a085;
        }



    </style> 

</head>
<body>
    <!-- Heading dengan tag html -->
    <h1>Profile Page</h1>

    <!-- Paragraph dengan syntax PHP -->
    <?php
    // menampilkan string ke layar 
    echo "<p>Hello PHP!</p>";
    /* syntax PHP bisa dijalankan hanya didalam dokumen dengan extensi *.php
    */

    # membuat variabel PHP
      $angka1 = 10;
      $angka2 = 5;
    #penjumlahan
      $jumlah =$angka1 + $angka2;
      
      

      #penguragan
      $pengurangan = $angka1 - $angka2;
     


    ?>
    <h3>Hasil Penjumlahan :</h3>
    <p>
      <?php echo $jumlah; ?>
    </p>
    <h3>Hasil penguragan :</h3>
       <?php echo $pengurangan; ?>
</body>
</html>