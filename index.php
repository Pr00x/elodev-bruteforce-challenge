<?php
  $param = $_GET['char'] ?? NULL;
  $flag = 'el0d3v{bRutEForCinG!}';
  $pos = strpos($flag, $param);
  $rand = random_int(1, 10);
  $img = file_get_contents("http://alpha-meme-maker.herokuapp.com/{$rand}");
  $img = json_decode($img);
  $img = $img->data[random_int(1, 5)]->image;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BruteForce</title>
  </head>
  <body>
    <form action="" method="GET" style="text-align: center; margin-top: 150px;">
      <img src="<?php echo $img; ?>" onerror="this.src='https://anonymshare.com/i/E5WPQ/hotdog.png'" style="display: block; margin: auto;">
      <h2>Guess the flag!</h2>
      <input type="text" name="char" maxlength="1"><br><br>
      <button type="submit" size="1000">Guess</button>
    </form>
    <?php
      if(isset($param) && $param !== '' && strlen($param) === 1 && $pos !== false)
        echo "<h1 style='text-align: center; margin-top: 150px;'>Position: {$pos}</h1>";
    ?>
  </body>
</html>
