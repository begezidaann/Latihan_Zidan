<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan PHP Zidan 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

        <?php
         $data = ["Asep", "Budiono", "Faris", "Aran", "Juned"];
         $alm = ["Tasikmalaya", "Banjar", "Bandung", "Palembang", "Balikpapan"];
         $umur = [12,13,23,21,25]
        ?>

        <div class="container text-center">
            <div class="row">
                <?php for ($i=0; $i < 5 ; $i++) { 
                ?>
                    <div class="col">
                        <?php echo $data[$i]; ?>
                    </div>
                <?php
                } 
                ?>
            </div>
            <div class="row">
                <?php for ($b=0; $b < 5 ; $b++) { 
                ?>
                    <div class="col">
                    <button type="button" class="btn btn-success"><?php echo $alm[$b]; ?></button>
                    </div>
                <?php
                } 
                ?>
            </div>
            <div class="row">
                <?php for ($h=0; $h < 5 ; $h++) { 
                ?>
                    <div class="col">
                    <button type="button" class="btn btn-warning"><?php echo $umur[$h]; ?></button>
                    </div>
                <?php
                } 
                ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>