<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "merged_db";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Retrieve the file records from the database
$stmt = $conn->query("SELECT * FROM files");
$files = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Handle file deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $fileId = $_POST['file_id'];

    // Retrieve the file record from the database based on the id
    $stmt = $conn->prepare("SELECT * FROM files WHERE id = :id");
    $stmt->bindParam(':id', $fileId);
    $stmt->execute();
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($file) {
        // Delete the file record from the database
        $stmt = $conn->prepare("DELETE FROM files WHERE id = :id");
        $stmt->bindParam(':id', $fileId);
        $stmt->execute();

        // Delete the corresponding file from the server
        $filePath = $_SERVER['DOCUMENT_ROOT'] . '/project1200oud/FM/files/' . $file['filename'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }
}

// Handle file update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $fileId = $_POST['file_id'];
    $newFilename = $_POST['new_filename'];

    // Update the file record in the database
    $stmt = $conn->prepare("UPDATE files SET filename = :filename WHERE id = :id");
    $stmt->bindParam(':filename', $newFilename);
    $stmt->bindParam(':id', $fileId);
    $stmt->execute();

    // Get the existing file record from the database based on the id
    $stmt = $conn->prepare("SELECT * FROM files WHERE id = :id");
    $stmt->bindParam(':id', $fileId);
    $stmt->execute();
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($file) {
        $oldFilePath = $_SERVER['DOCUMENT_ROOT'] . 'C:\xampp\htdocs\project1200oud\FM\files/' . $file['filename'];
        $newFilePath = $_SERVER['DOCUMENT_ROOT'] . 'C:\xampp\htdocs\project1200oud\FM\files/' . $newFilename; // Assuming the files are stored in the "files" directory

        // Rename the file on the server
        if (rename($oldFilePath, $newFilePath)) {
            // File rename successful
            // Update the file record in the database with the new file path
            $updatedFilePath = 'C:\xampp\htdocs\project1200oud\FM\files/' . $newFilename;
            $stmt = $conn->prepare("UPDATE files SET file_path = :file_path WHERE id = :id");
            $stmt->bindParam(':file_path', $updatedFilePath);
            $stmt->bindParam(':id', $fileId);
            $stmt->execute();

            // Redirect to the file manager or display a success message
            header('Location: file_manager.php');
            exit();
        } else {
            // File rename failed
            // Handle the error accordingly (e.g., display an error message)
            echo 'Failed to rename the file.';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Manager</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f5f5f5;
        }

        .button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 4px;
        }

        .button:hover {
            background-color: #555;
        }

        .file-link {
            display: inline-block;
            background-color: #4CAF50;
            color: #fff;
            padding: 6px 12px;
            text-decoration: none;
            border-radius: 4px;
        }

        .file-link:hover {
            background-color: #45a049;
        }

        .file-actions .file-link {
            margin-right: 8px;
            margin-left: auto;
        }

        .file-actions input[type="text"] {
            padding: 4px;
            margin-right: 8px;
        }

        .file-actions button {
            background-color: #555;
            color: #fff;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
        }

        .file-actions button:hover {
            background-color: #333;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>File Manager</h1>

    <table>
        <tr>
            <th>File Name</th>
            <th>File Size (MB)</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($files as $file) { ?>
            <tr>
                <td><?php echo $file['filename']; ?></td>
                <td><?php echo $file['file_size']; ?></td>
                <td class="file-actions">
                    <a class="file-link" href="files/<?php echo $file['filename']; ?>" download>Download</a>
                    <form method="POST" action="">
                        <input type="hidden" name="file_id" value="<?php echo $file['id']; ?>">
                        <input type="text" name="new_filename" value="<?php echo $file['filename']; ?>">
                        <button type="submit" name="update">Update</button>
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <a class="button" href="../index.php">Back to Home</a>
    <a class="button" href="upload.php">Back to Upload</a>
</div>
</body>
</html>