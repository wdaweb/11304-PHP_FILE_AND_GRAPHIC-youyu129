<style>
* {
    box-sizing: border-box;
}

table {
    border: 1px solid #ccc;
    border-collapse: collapse;
}

th,
td {
    border: 1px solid #ccc;
}

tr,
td {
    border: 1px solid #ccc;
}
</style>
<?php
    /****
 * 1.建立資料庫及資料表
 * 2.建立上傳檔案機制
 * 3.取得檔案資源
 * 4.取得檔案內容
 * 5.建立SQL語法
 * 6.寫入資料庫
 * 7.結束檔案
 */
    if (! empty($_FILES['file'])) {
        move_uploaded_file($_FILES['file']['tmp_name'], "./files/{$_FILES['file']['name']}");
        echo $_FILES['file']['name'] . "上傳成功<br>";
        getFile("./files/{$_FILES['file']['name']}");
    }

    function getFile($path)
    {
        // r read
        $file = fopen($path, 'r');
        $line = fgets($file);
        $cols = explode(",", trim($line));
        echo "<table>";
        echo "<tr>";
        foreach ($cols as $col) {
            echo "<th>{$col}</th>";
        }
        echo "</tr>";
        while ($line = fgets($file)) {
            $cols = explode(",", trim($line));
            echo "<tr>";
            foreach ($cols as $col) {
                echo "<th>" . trim($col, '"') . "</th>";
            }
            echo "</tr>";

        }
        echo "</table>";

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文字檔案匯入</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="header">文字檔案匯入練習</h1>
    <!---建立檔案上傳機制--->

    <form action="" method="post" enctype="multipart/form-data">
        <label for="">文字檔案</label>
        <input type="file" name="file" id="file">
        <input type="submit" value="上傳">
    </form>

    <!----讀出匯入完成的資料----->


</body>

</html>