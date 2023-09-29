<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan PHP Zidan 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php
         $data = ["Asep", "Budiono", "Faris", "Aran", "Juned"];
         $alm = ["Tasikmalaya", "Banjar", "Bandung", "Palembang", "Balikpapan"];
         $umur = [12,13,23,21,25];
         $nomor = [1,2,3,4,5]
        ?>
    <div class="container text-center">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Umur</th>
            </tr>
        </thead>
        <tbody>
        <?php for ($i=0; $i < 5 ; $i++) { 
                ?>
            <tr>
            <th scope="row"><?php echo $nomor[$i]; ?></th>
            <td><?php echo $data[$i]; ?></td>
            <td><?php echo $alm[$i]; ?></td>
            <td><?php echo $umur[$i]; ?></td>
            </tr>
        <?php
        }   
        ?>
        </tbody>
</table>

</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

