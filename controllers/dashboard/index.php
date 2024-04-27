<?php
if (isset($_FILES['file_upload'])) {
    $fname = strtotime(date('y-m-d H:i')) . '_' . $_FILES['file_upload']['name'];
    $fname = str_replace(" ", '', $fname);
    $move = move_uploaded_file($_FILES['file_upload']['tmp_name'], 'public/images/' . $fname);
}


include './views/dashboard/index.php';
