<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas 1 Zidan Muhammad Herman</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php
        require_once 'user.php';
        require_once 'skills.php';
        $user = new user();
        $skills = new skills();

            if(isset($_GET['id'])){
                $listUser = $user->getById($_GET['id']);
                $listskill = $skills->getById($_GET['id']); 
            }else{
                $listUser = $user->getAll();
                $listskill = $skills->getAllSkills(); 
            }
           
            

    ?>
<div class="container text-center">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Hobi</th>
            
            </tr>
        </thead>
        <tbody>
        <?php foreach( $listUser as $key  => $value) { 
                ?>
            <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $value['fullname']; ?></td>
            <td><?php echo $value['tgllahir']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td><?php echo $value['hobi']; ?></td>
            </tr>
        <?php
        }   
        ?>
        </tbody>
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">User ID</th>
            <th scope="col">Soft Skill</th>
            <th scope="col">Persentase</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($listskill as $key  => $value) { 
                ?>
            <tr>
            <th scope="row"><?php echo $key + 1 ?></th>
            <td><?php echo $value['user_id']; ?></td>
            <td><?php echo $value['soft']; ?></td>
            <td><?php echo $value['percentage']; ?></td>
            </tr>
        <?php
        }   
        ?>
</table>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>