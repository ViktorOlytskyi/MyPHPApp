<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload your file</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <form action="index.php?action=upload" method="post" enctype="multipart/form-data">
        <input type="file" name="json_file">
        <br>
        <input type="submit" name="btn" value="Upload!">
    </form>
</body>
</html>