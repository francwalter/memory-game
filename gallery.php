<!DOCTYPE html>
<html>
  <head>
    <title>Very Simple PHP gallery</title>
    <meta charset="utf-8">

    <!-- (A) CSS & JS -->
    <link href="gallery.css" rel="stylesheet">
    <script src="gallery.js"></script>
  </head>
  <body>
  <!-- 2023-06-25: siehe: https://code-boxx.com/simple-php-gallery-from-folder/ -->
    <div class="gallery"><?php
      // (B) GET IMAGES IN GALLERY FOLDER
      // dir with images
      // $mydir = 'images/fruits';
      // $mydir = 'images/png';

      if (isset($_GET['dir']))  {
        $dir_clean = $_GET['dir'];
        if (str_starts_with($dir_clean, '/') || str_starts_with($dir_clean, '.')) {
            die('Verzeichniswechsel nicht erlaubt');
        }
        $mydir = 'images/' . $dir_clean;
      }
      else {
        $mydir = 'images/png';
        echo '<p>Mit Parameter dir kann man das anzuzeigende Verzeichnis wählen, zB dir=png</p>';
      }
      
      $dir = __DIR__ . DIRECTORY_SEPARATOR . $mydir . DIRECTORY_SEPARATOR;
      $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

      // (C) OUTPUT IMAGES
      foreach ($images as $i) {
        // printf("<img src='images/fruits/%s'>", rawurlencode(basename($i)));
        printf("<img src=$mydir/%s>", rawurlencode(basename($i)));
      }
    ?></div>
  </body>
</html>
