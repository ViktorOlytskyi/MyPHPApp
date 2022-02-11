<?php

if (isset($_POST['btn'])) {
    $isUploaded = is_uploaded_file($_FILES['json_file']['tmp_name']);

    if ($isUploaded) {
        
        // @todo: needs to add filesize check
        $isFileMoved = move_uploaded_file(
            $_FILES['json_file']['tmp_name'],
            UPLOADS_DIR.$_FILES['json_file']['name']
        );

        if ($isFileMoved) {
            header('Location: http://localhost:8185/index.php?action=statistics');
            exit;
        }
    }
}
