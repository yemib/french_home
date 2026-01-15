<!doctype html>
<!--
 * Jodit Editor (https://xdsoft.net/jodit/)
 * License GNU General Public License version 2 or later;
 * Copyright 2013-2019 Valeriy Chupurnov https://xdsoft.net
-->
<?php

  include 'server.php';
$conn = $db;
if (sever.php) {
    echo "good";
    # code...
}else{
    echo "bad";
}
if (isset($_POST['submit'])) {
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $insert = mysqli_query($conn, "INSERT INTO txt(content) Values('$content')");
    // die(mysqli_error($conn));
    if ($insert) {
        echo "very good";
        # code...
    }else{
        echo "Very Bad Dude";
    }
    # code...
}
$select = mysqli_query($conn, "SELECT * FROM txt");
if ($select->num_rows>0) {
    while ($row=$select->fetch_assoc()) {
        echo $row['content'];
        # code...
    }
    # code...
}
?>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Jodit All options</title>
    <link rel="icon" type="image/png" href="assets/icon.png" />
</head>
<body>
<header>
    
</header>
<div id="main_container" class="container">
    <form method="post" action="testing.php">
    <div class="result">
        <textarea name="content" id="area_editor"></textarea>
        <button type="submit" name="submit">Submit</button>
    </div>
    </form>
</div>
</body>
<link rel="stylesheet" href="build/jodit.min.css"/>
<link rel="stylesheet" href="assets/app.css"/>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i" rel="stylesheet">

<script src="build/jodit.min.js"></script>
<script src="assets/prism.js"></script>
<script src="assets/app.js"></script>
<script>
    var editor = new Jodit('#area_editor', {
        textIcons: false,
        iframe: false,
        iframeStyle: '*,.jodit_wysiwyg {color:red;}',
        height: 300,
        defaultMode: Jodit.MODE_WYSIWYG,
        observer: {
            timeout: 100
        },
        uploader: {
            url: 'https://xdsoft.net/jodit/connector/index.php?action=fileUpload'
        },
        filebrowser: {
            // buttons: ['list', 'tiles', 'sort'],
            ajax: {
                url: 'https://xdsoft.net/jodit/connector/index.php'
            }
        },
        commandToHotkeys: {
            'openreplacedialog': 'ctrl+p'
        }
        // buttons: ['symbol'],
        // disablePlugins: 'hotkeys,mobile'
    });
</script>