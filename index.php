<?php

$conn = mysqli_connect('localhost', 'root', '', 'assign01');
if (!$conn) {
    echo "db not conntected";
}
$query = "SELECT * FROM `user`" ;
$all= mysqli_query($conn, $query);

?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto">


                <h2 class='my-5 text-center'>Registration form</h2>
                <form method='get' action='output.php'>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name='email' class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name='password' class="form-control" id="inputPassword4">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name='name' class="form-control" id="name" placeholder="Full Name">
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" name='address' class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <table class="table table-bordered table-hover mt-5">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>password</th>
                            <th>address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                        foreach($all as $key => $value){    
                    ?>
                        <tr>
                            <td><?php echo ($key+1); ?></td>
                            <td><?php echo $value['name'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td><?php echo $value['password']?>
</td>
                            <td><?php echo $value['address']?>
</td>
                            <td>
                                <button>Edit</button> 
                                <button>delete</button>
                            </td>
                        </tr>

                <?php 
                    }
                ?>

                    </tbody>
                </table>





            </div>
        </div>
    </div>




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>






