<?php

$action = 'form';

if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

switch ($action) {

    case 'form':
        require_once CONTROLLERS_DIR.'FormController.php';
        break;
    

    // форма завантаження файла
    case 'upload':
        require_once CONTROLLERS_DIR.'UploadController.php';
        break;
    
    // відображення даних
    case 'statistics':
        require_once CONTROLLERS_DIR.'StatisticController.php';
        break;
        
}
