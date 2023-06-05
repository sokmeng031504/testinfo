<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cusmoters {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        tbody,
        thead {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA109D;
            color: white;
        }
    </style>
</head>

<body>
    <form action="<?php $_PHP_SELF ?>" enctype= "multipart/form-data">
    <a href="./index.php">Creating</a>
    <table class="cusmoters">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>phone</th>
                <th>Images</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once('./config.php');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $query = "SELECT * FROM `createtable` ORDER BY `id`";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo " " . $row["id"]; ?>
                        </td>
                        <td>
                            <?php echo $row["fullname"]; ?>
                        </td>
                        <td>
                            <?php echo $row["gender"]; ?>
                        </td>
                        <td>
                            <?php echo $row["email"]; ?>
                        </td>
                        <td>
                            <?php echo $row["phone"]; ?>
                        </td>
                        <td>
                            <?php echo $row["img"]; ?>
                        </td>
                        <!-- <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>   -->
                        <td><a href='./delete.php? pro_id=<?php echo $row["id"]; ?>'>Delete</a>||
                            <a href='./update.php? pro_id=<?php echo $row["id"]; ?>'>Edit</a>

                            <!-- <td><a href="edit.php?pro_id=<?php echo $row["pro_id"]; ?>">Edit</a>||<a
                                href="delete.php?pro_id=<?php echo $row["pro_id"]; ?>">Delete</a></td> -->
                        </td>
                        <td></td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
    </form>
   

</body>

</html>