<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan PHP Zidan 3</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

        <?php
         $data = ["Asep", "Budiono", "Faris", "Aran", "Juned"];
         $alm = ["Tasikmalaya", "Banjar", "Bandung", "Palembang", "Balikpapan"];
         $umur = [12,13,23,21,25]
        ?>

        <div class="container text-center">
        <?php for ($i=0; $i < 5 ; $i++) { 
                ?>
            <div class="row">
                    <div class="col">
                        <?php echo $data[$i]; ?>
                    </div>
                    <div class="col">
                        <?php echo $alm[$i]; ?>
                    </div>
                    <div class="col">
                        <?php echo $umur[$i]; ?>
                    </div>
            </div>
        <?php
        }   
        ?>
        <?php for ($i=0; $i < 5 ; $i++) { 
                ?>
            <div class="row">
                    <div class="col">
                    <button type="button" class="btn btn-danger"><?php echo $data[$i]; ?>
                    </div>
                    <div class="col">
                    <button type="button" class="btn btn-success"><?php echo $alm[$i]; ?>
                    </div>
                    <div class="col">
                    <button type="button" class="btn btn-warning"><?php echo $umur[$i]; ?>
                    </div>
            </div>
        <?php
        }   
        ?>
        </div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>