<!DOCTYPE html>
<html>
  <head>
    <title>Very Simple PHP gallery</title>
    <meta charset="utf-8">

    <!-- (A) CSS & JS -->
    <link href="gallery_caption.css" rel="stylesheet">
    <script src="gallery.js"></script>
  </head>
  <body>
    <div class="gallery"><?php
      <!-- 2023-06-25: siehe: https://code-boxx.com/simple-php-gallery-from-folder/ -->
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

      // (B) GET IMAGES IN GALLERY FOLDER
      // dir with images
      // $mydir = 'images/fruits';      
      // $mydir = 'images/png/fruits';
      
      $dir = __DIR__ . DIRECTORY_SEPARATOR . $mydir . DIRECTORY_SEPARATOR;
      $images = glob("$dir*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);

      // (C) OUTPUT IMAGES
      foreach ($images as $i) {
        $img = basename($i);
        $caption = substr($img, 0, strrpos($img, "."));
        #printf("<figure><img src='gallery/%s'><figcaption>%s</figcaption></figure>",        
        printf("<figure><img src=$mydir/%s><figcaption>%s</figcaption></figure>", 
          rawurlencode($img), $caption
        );
      }
    ?></div>
  </body>
</html>
