

<?php
// Step 1: Handle the file upload
if (isset($_FILES['file'])) {
    // Retrieve the file information
    $uploadedFile = $_FILES['file'];
    $fileName = $uploadedFile['name'];
    $fileTmpPath = $uploadedFile['tmp_name'];
    $fileSize = $uploadedFile['size'];
    $fileError = $uploadedFile['error'];

    // Step 2: Move the uploaded file to the desired location
    $uploadDirectory = 'C:\xampp\htdocs\project1200oud\FM\files/';
    $uniqueFileName = uniqid() . '_' . $fileName;
    $destinationPath = $uploadDirectory . $uniqueFileName;

    if (move_uploaded_file($fileTmpPath, $destinationPath)) {
        // Step 3: Store the file information in the database
        try {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "merged_db";

            // Create a new PDO connection
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

            // Set PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare the SQL statement
            $stmt = $conn->prepare("INSERT INTO files (filename, file_size) VALUES (?, ?)");

            // Convert file size to MB
            $fileSizeMB = round($fileSize / (1024 * 1024), 2);

            // Bind the parameters and execute the statement
            $stmt->bindParam(1, $uniqueFileName);
            $stmt->bindParam(2, $fileSizeMB);
            $stmt->execute();



            echo 'File uploaded successfully and file information stored in the database.';
        } catch (PDOException $e) {
            echo 'Error storing file information in the database: ' . $e->getMessage();
        }
    } else {
        echo 'Failed to move uploaded file.';
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        .form-group input[type="file"] {
            display: block;
            padding: 6px;
            font-size: 16px;
        }

        .form-group .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-group button {
            padding: 8px 16px;
            background-color: #008CBA;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .form-group button:hover {
            background-color: #006D95;
        }

        .form-group a.button {
            padding: 8px 16px;
            background-color: #f44336;
            color: white;
            border: none;
            cursor: pointer;
            text-decoration: none;
            font-size: 16px;
        }

        .form-group a.button:hover {
            background-color: #D32F2F;
        }

        .form-group a.button:active {
            background-color: #B71C1C;
        }

        .form-group a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>File Upload</h1>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Select File:</label>
            <input type="file" id="file" name="file">
        </div>

        <div class="form-group button-group">
            <button type="submit" name="upload">Upload</button>
            <a href="../index.php" class="button">Home</a>
            <a href="filemanager.php" class="button">File Manager</a>
        </div>
    </form>
</div>
</body>
</html>