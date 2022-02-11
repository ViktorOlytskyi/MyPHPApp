<?php

$data = json_decode(
    file_get_contents(
        UPLOADS_DIR.'fb-user-activity.json'
    ),
    true
);

require_once VIEWS_DIR.'table.php';
