<?php 
if(isset($_POST['submit'])){

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css.css" />
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="post">
    <header>
      <h1>動画埋め込み</h1>
      <p>名前<input type="text" name="name"></p>
      <p>URL埋め込み<input type="text" id="input" name="url" /></p>
      <p><button type="button" id="button">取得</button></p>
    </header>

    <hr />
    <main>
      時間指定
      <p><input type="text" id="before" name="start"/>から</p>
      <p><input type="text" id="after" name="end"/>まで</p>
      <p>
        <button type="button" id="setting" onClick="submitclick()">
          セットして再生
        </button>
      </p>
      <button type="submit" name="submit">再生位置を保存</button>
    </main>
    </form>
    <script src="app.js"></script>
    <script src="cut.js"></script>
  </body>
</html>
