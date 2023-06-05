<?php
include_once('./config.php');
$ID = isset($_REQUEST['pro_id']) ? $_REQUEST['pro_id'] : '';
$query = "SELECT * FROM `createtable` ORDER BY `id` ='$ID'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Form edit</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .container {
            width: 600px;
            height: 350px;
            border-radius: 30px;
            border: 10px salmon;
            background-color: sandybrown;
            text-align: center;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
        }

        input[type="text"] {
            border-radius: 50px;
            width: 250px;
            height: 40px;
            text-align: center;
        }

        input[type="submit"] {
            border-radius: 50px;
            width: 100px;
            height: 20px;
        }

        input[type="submit"]:hover {
            background-color: bisque;
        }
    </style>
    <?php
    include_once('./config.php');
    if (isset($_POST['delete'])) {
        include_once("./delete.php");
    } else if (isset($_POST['update'])) {
        include_once("./editdata.php");
    } else {
        ?>
        </head>

        <body>
            <div class="container">
                <h3 style="top: 10px;padding:20px">Edit Information</h3>
                <form method="post" class="customers" enctype="multipart/form-data" action="./formdata.php" style="text-align: center;">
                    <p>
                        <label for="fullname">Fullname:</label>
                        <input type="text" name="fullname" id="fullname" value="<?php echo $row['fullname']; ?>">
                    </p>
                    <p>
                        <label for="Gender">Gender:</label>
                        <input type="text" name="gender" id="Gender" value="<?php echo $row['gender']; ?>">
                    </p>
                    <p>
                        <label for="Email">Email:</label>
                        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
                    </p>
                    <p>
                        <label for="Phone">Phone:</label>
                        <input type="text" name="phone" id="phone" value="<?php echo $row['phone']; ?>">
                    </p>
                    <!-- <p>
                            <label for="image">Image:</label>
                            <input type="file" name="img" id="img">
                        </p> -->

                    <input type="submit" name="delete" value="delete" id="delete">
                    <input type="submit" name="update" value="update" id="update">
                </form>
            <?php
    }
    ?>

    </div>

</body>

</html>