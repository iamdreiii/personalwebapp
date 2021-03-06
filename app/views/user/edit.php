<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>LavaLust CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">LavaLust CRUD created by Andrei !</h5>




                        <?php alert_message('status'); ?>
                        <form action=" <?=site_url('user/show_data');?>" method="post">
                            <label>Username</label>
                            <input type="hidden" name="id" value="<?=$data['id'];?>">
                            <input type="text" name="username" class="form-control" value="<?=$data['username']; ?>"
                                required>
                            <label>Password</label>
                            <input type=" text" name="password" class="form-control" value="<?=$data['password']; ?>"
                                required>
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?=$data['email']; ?>" required>
                            <label>Usertype</label>
                            <select name="usertype" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>

                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>