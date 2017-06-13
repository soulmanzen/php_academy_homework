<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Book</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="title"><h1>Guest Book</h1></div>
    <div>
        <?php


        function alert($str)
        {
            echo '<div class="alert" style="color:red">' . $str . '</div>';
        }


        $messages = [];

        if (file_exists('comments.txt')) {
            $text = file_get_contents('comments.txt');
            if (! empty($text)) {
                $messages = unserialize($text);
            }
        }

        if (isset($_POST['name']) && isset($_POST['message'])) {
            if (!empty($_POST['message']) && !empty($_POST['name'])) {
                if (ctype_alpha(str_replace(' ', '', $_POST['name']))) {
                        $message = [
                            'name' => $_POST['name'],
                            'message' => $_POST['message'],
                            'datetime' => date('d/m/Y H:i'),
                        ];
                        $messages[] = $message;
                        unset($_POST['name']);
                        unset($_POST['message']);
                } else {
                    alert('Name must contain letters and whitespaces only');
                }
            } else {
                alert('Please enter name and comment.');
            }
        }

        file_put_contents('comments.txt', serialize($messages));

        foreach ($messages as $mess) {
            echo "<div class=\"message\"><div class='date'>" . $mess['datetime'] .
                "</div><span class='name'> " . $mess['name'] . ': ' . "</span><span>" . $mess['message'] .  "</span></div>";
        }
        ?>

    </div>
    <div>
        <form action="" method="post">
        <input class="text" type="text" name="name" placeholder="Enter your name..."
               value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
        <textarea class="text" name="message" placeholder="Enter your message..."
        ><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
        <button type="submit" class="button green">Send</button>
        </form>
    </div>
</div>
</body>
</html>