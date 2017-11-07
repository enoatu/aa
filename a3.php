<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="a3.css">
    <?php include "image_surunoha_tuneni_saikyouno_jibun.php"; ?>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
</head>
<body>
<!--<p id="11" class="first">Event Team</p>-->


<!--ここに今数字が表示されるねん-->
<p align="center" style="font-size:10em;font-family: 'Permanent Marker', cursive;" id="a"></p>

<!--このボタン押すと、新しく数字でて、数字の履歴がでるぞ！-->
<a id ="b" class="b"></a>


<!--ここに数字の履歴表示されるぞ！-->
<p id="array"></p>

<!--次の人と交代する時に使うボタン-->
<form action="a3.php" method="post">
<button type="submit" value="" id="finish_b" name="finish_b">finished!</button>
</form>



</body>
</html>

<script src="js3.js"></script>
