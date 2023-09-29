<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Latihan PHP Zidan 5</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php
            $user = [
                [
                'fullname' => 'Haisyam',
                'email' => 'haisyam@mail.com',
                'password' => '12345'
                ],
                [
                'fullname' => 'Irgi',
                'email' => 'irgi@mail.com',
                'password' => '12345'
                ],
                [
                'fullname' => 'Irvan',
                'email' => 'irvan@mail.com',
                'password' => '12345'
                ],
                [
                'fullname' => 'Faisal',
                'email' => 'faisal@mail.com',
                'password' => '12345'
                ],
                [
                'fullname' => 'Lutfi',
                'email' => 'lutfi@mail.com',
                'password' => '12345'
                ]
            ];
        ?>
    <div class="container text-center">
            <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($user as $key  => $value) { 
                ?>
            <tr>
            <th scope="row"><?php echo $key ?></th>
            <td><?php echo $value['fullname']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['password']; ?></td>
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
