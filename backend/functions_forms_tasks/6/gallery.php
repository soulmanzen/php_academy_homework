<?php

/**
 * substr for array_walk
 * @param $item
 */
function my_substr(&$item)
{
    $item = substr($item , 0,-4);
}

/**
 * @param string $path
 * @return string name of file without extension
 */
function getRandomFileName(string $path)
{
    $path = $path ? $path . '/' : '';

    $all_files = array_diff(scandir($path), ['.', '..']);
    natsort($all_files);

    array_walk($all_files, 'my_substr');

    $name = empty(end($all_files)) ? 1 : end($all_files);

    while (in_array($name, $all_files)) {
        $name++;
    }

    return $name;
}

/**
 * @return string Error or success message
 */
function galleryUploader()
{
    if (!empty($_FILES)) {

        foreach ($_FILES['gallery']['error'] as $key => $error) {

            if ($error == UPLOAD_ERR_NO_FILE) {
                continue;
            }

            $types = array('image/gif', 'image/png', 'image/jpeg');

            if (in_array($_FILES['gallery']['type'][$key], $types)) {

                if ($error == UPLOAD_ERR_OK) {

                    $extension = strtolower(substr(strrchr($_FILES['gallery']['name'][$key], '.'), 1));
                    $tmp_name = $_FILES['gallery']['tmp_name'][$key];

                    if (! is_dir('gallery')) {
                        mkdir('gallery');
                    }

                    $new_name = 'gallery' . DIRECTORY_SEPARATOR .
                        getRandomFileName('gallery'. DIRECTORY_SEPARATOR, $extension).'.'. $extension;
                    move_uploaded_file($tmp_name, $new_name);

                    if (file_exists($new_name)) {
                        $file_messages[] = $_FILES['gallery']['name'][$key] . ' успешно загружен';
                    } else {
                        $file_errors[] = 'Упс, для ' . $_FILES['gallery']['name'][$key] . ' что-то пошло не так';
                    }

                } else {
                    $general_errors[] = 'С ' . $_FILES['gallery']['tmp_name'][$key] . ' Что-то не получилось';
                }
            } else {
                $type_errors[] = 'Файл ' . $_FILES['gallery']['name'][$key] .
                    ' не был загружен, это не картинка формата gif, png, jpg';
            }
        }
    }


    if (!empty($type_errors)) {
        $error = '';
        foreach ($type_errors as $type_error) {
            $error .= $type_error . '<br>';
        }
        return '<div class="alert alert-danger fade in">' . $error . '</div>';
    }


    if (!empty($general_errors)) {
        $error = '';
        foreach ($general_errors as $general_error) {
            $error .= $general_error . '<br>';
        }
        return '<div class="alert alert-danger fade in">' . $error . '</div>';
    }

    if (!empty($file_errors)) {
        $error = '';
        foreach ($file_errors as $file_error) {
            $error .= $file_error . '<br>';
        }
        return '<div class="alert alert-danger fade in">' . $error . '</div>';
    }



    if (!empty($file_messages)) {
        $message = '';
        foreach ($file_messages as $file_message) {
            $message .= $file_message . '<br>';
        }
        return '<div class="alert alert-success fade in">' . $message . '</div>';
    }

}

/**
 * @return bool
 */
function drawTable()
{
    if (! is_dir('gallery')) {
        return false;

    } else {

        $uploaded_files = array_diff(scandir('gallery'), ['.', '..']);
        natsort($uploaded_files);

        echo '<table class="table">';
        echo '<tr>';
        $i = 0;
        foreach ($uploaded_files as $image) {
            $i++;
            echo "<td><div height='200'><img src='gallery" . DIRECTORY_SEPARATOR . $image . "'></div></td>";
            if (($i % 3) === 0) {
                echo '</tr><tr>';
            }
        }
        echo '</tr>';
        echo '</table>';

        return true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="header"><h1>Welcome to Gallery</h1></div>
    <div class="upload">
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="gallery[]" multiple>
            <input type="submit">
        </form>
        <div><?php echo galleryUploader()?></div>
    </div>
    <div class="gallery">
        <?php drawTable(); ?>
    </div>
</div>
</body>
</html>
