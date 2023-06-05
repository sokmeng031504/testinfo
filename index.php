<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sample Form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <center>
        <h2>Registor Information</h2>
        <form method="post" class="customers" enctype="multipart/form-data">
            <p>
                <label for="fullname">Fullname:</label>
                <input type="text" name="fullname" id="fullname">
            </p>
            <p>
                <label for="Gender">Gender:</label>
                <input type="text" name="gender" id="Gender">
            </p>
            <p>
                <label for="Email">Email:</label>
                <input type="text" name="email" id="email">
            </p>
            <p>
                <label for="Phone">Phone:</label>
                <input type="text" name="phone" id="phone">
            </p>
            <p>
                <label for="image">Image:</label>
                <input type="file" name="img" id="img">
            </p>

            <input type="submit"  name="submit">
        </form><br>

        <a href="./formdata.php"><button style="width: 15%;
                                            background-color: #4CAF50;
                                            color: white;
                                            padding: 14px 20px;
                                            margin: 0;
                                            border: none;
                                            border-radius: 4px;
                                            cursor: pointer;">SHOW</button></a>
        <center>

            <?php
            include_once('./config.php');
            // Taking all 5 values from the form data(input)
            $folder = "./images";
            $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
            // $img = isset($_FILES['files']['name']) ? $_FILES['files']['name'] : '';

            // foreach ($_FILES["img"]["error"] as $key => $error) {
            //     if ($error == UPLOAD_ERR_OK) {
            //         $tmp_name = isset($_FILES["img"]["tmp_name"][$key]);
            //         // basename() may prevent filesystem traversal attacks;
            //         // further validation/sanitation of the filename may be appropriate
            //         $name = basename(isset($_FILES["img"]["name"][$key]));
            //         move_uploaded_file($tmp_name, "$folder/$name");
            //     }
            // }
            
            $target_dir = "images/";
            $target_file = $target_dir . basename(isset($_FILES["img"]["name"]));
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            // if (isset($_POST["submit"])) {
            //     $check = getimagesize($_FILES["img"]["tmp_name"]);
            //     if ($check !== false) {
            //         echo "File is an image - " . $check["mime"] . ".";
            //         move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
            //         $uploadOk = 1;
            //     } else {
            //         echo "File is not an image.";
            //         $uploadOk = 0;
            //     }
            // }

            // $tmp_name = isset($_FILES["img"]["tmp_name"]);
            // move_uploaded_file(isset($_FILES['files']['tmp_name']), $folder . $img);
            $sql = "INSERT INTO `createtable` (`id`, `fullname`, `gender`, `email`, `phone`) VALUES
             (NULL, '$fullname', '$gender', '$email', '$phone')";
            $retval = mysqli_query($conn, $sql);
            if (!$retval) {
                echo "error: " . mysqli_error($conn);
            }
            // include_once('formdata.php');
            
            // We are going to insert the data into our sampleDB table
            // move_uploaded_file($_POST['files']['tmp_name'], $folder . $img);
            // $sql = "INSERT INTO `createtable` VALUES (Null,
            //         '$fullname','$gender','$email','$phone', '$img')";
            
            // // Check if the query is successful
            // if (mysqli_query($conn, $sql)) {
            //     echo "
            // success upload data</h3>";
            // } else {
            //     echo "ERROR: Hush! Sorry $sql. "
            //         . mysqli_error($conn);
            // }
            
            // Close connection
            mysqli_close($conn);
            ?>
</body>

</html>