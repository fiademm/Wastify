<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Drivers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>Drivers</h2>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Driver Id</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone number</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include 'fetchDrivers.php'; ?>
                
                        <?php if ($result->num_rows > 0): ?>

                        <?php while($array=mysqli_fetch_row($result)): ?>

                        <tr>
                            <th scope="row"><?php echo $array[0];?></th>
                            <td><?php echo $array[1];?></td>
                            <td><?php echo $array[2];?></td>
                            <td><?php echo $array[3];?></td>
                            <td><?php echo $array[4];?></td>
                        </tr>

                        <?php endwhile; ?>

                        <?php else: ?>
                        <tr>
                            <td colspan="3" rowspan="1" headers="">No Data Found</td>
                        </tr>
                        <?php endif; ?>

                        <?php mysqli_free_result($result); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>