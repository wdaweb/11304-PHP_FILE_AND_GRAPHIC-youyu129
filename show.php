<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .album {
            width: 800px;
            display: flex;
            flex-wrap:wrap;
            justify-content: space-evenly;
            align-items: center;
            margin:20px auto;
        }

        .item {
            width: 26%;
        }

        .item img {
            width: 100%;
            border:5px solid;
        }

    </style>
</head>
<body>
    <h1>相簿</h1>
    <div class="album">
    <?php
    include_once "function.php";

    $rows=all('imgs');

    foreach($rows as $file){
        if($file['sh']==1){
        echo "<div>";
        echo "<img src='files/{$file['filename']}'><br>";
        echo "{$file['desc']}";
        echo "</div>";
    }
    }
    ?>
    </div>
</body>
</html>