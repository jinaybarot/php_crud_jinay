<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php 
    include "db_comman.php"; 

    include "db_update.php";
    ?>

    <div class="mt-3 d-flex justify-content-center align-items-center">
        <form class="p-4 w-50 border border-2 rounded-2 shadow" method="post" id="form" action="db_add.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label for="firstname" class="col-3 col-form-label text-end">Firstname:</label>
                <div class="col-9">
                    <input type="text" name="firstname" class="form-control w-75" id="firstname" value="<?php echo $firstname; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="lastname" class="col-3 col-form-label text-end">Lastname:</label>
                <div class="col-9">
                    <input type="text" name="lastname" class="form-control w-75" id="lastname" value="<?php echo $lastname; ?>">
                </div>
            </div>            
            <div class="row mb-3">
                <label for="gmail" class="col-3 col-form-label text-end">Gmail:</label>
                <div class="col-9">
                    <input type="text" name="email" class="form-control w-75" id="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="text-center">
                <input type="submit" name="submit" id="submit" class="btn btn-primary">
            </div>
        </form>
    </div>

    <table class="container table table-dark table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Latname</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "db_comman.php";
            $sql = "SELECT * FROM crud";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $Id = $row['id'];
                    $Firstname = $row['firstname'];
                    $Lastname = $row['lastname'];
                    $Email = $row['email'];
                    ?>

                    <tr>
                        <td><?php echo $Id; ?></td>
                        <td><?php echo $Firstname; ?></td>
                        <td><?php echo $Lastname; ?></td>
                        <td><?php echo $Email; ?></td>
                        <td>
                            <a href="index.php?edit=<?php echo $Id; ?>" class="btn btn-danger">Edit</a>
                            <a href="db_delete.php?id=<?php echo $Id; ?>" class="btn btn-info">Delete</a>
                        </td>
                    </tr>

                    <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>