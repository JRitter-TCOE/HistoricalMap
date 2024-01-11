<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trinity County Historical School Map</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <div id='container'>
    <div id='map_container'>
      <img id='map_bg' src='./TC_School_Districts.jpg'>

      
      <?php 

      $file = fopen('./location.txt', 'r');
      $text = fread($file, filesize('./location.txt'));
      fclose($file);

      $locations = json_decode($text);

      foreach ($locations as $loc) {


        $pdf = $loc["pdf"];
        $y = $loc["y"];
        $x = $loc["x"];
        $school = $loc["school"];
        $image = $loc["image"];

        echo "<a href='./pdfs/{$pdf}' target='_blank' class='map_pin_btn' style='top: {$y}%; left: {$x}%;'>
          <div class='tooltip_text'>
            <p>{$school}</p>
            <img src='./images/{$image}'>
          </div>
          <img class='map_pin' src='https://cdn0.iconfinder.com/data/icons/symbolicons-education/28/school-house-512.png'>
        </a>";

      }
      
      ?>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>

</html>