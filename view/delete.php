

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>
    <table class='table table-bordered table-striped'>
        <thead>
            <tr>
            <th>NIM</th>
            <th>Name</th>
            <th>Address</th>
            <th>Major</th>
            <th>Department</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include("../connect.php");

            $query = "SELECT * FROM user";
            $result = mysqli_query($conn,$query);

            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['nim'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['major'] ?></td>
                <td><?php echo $row['department'] ?></td>

                <a href= "update.php?nim= <?php $row['nim'] ?>" title ='Update Data' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                <a href= "delete.php?nim= <?php $row['nim'] ?>" title='Delete Data' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
            </tr>



            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>