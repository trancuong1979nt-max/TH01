<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>

<style>
  html {
    font-size: 16px;
  }

  body {
    display: flex;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
    background-color: gray;
  }

  .container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    gap: 20px;
  }

  .items {
    background-color: red;
    width: 250px;
    background-color: white;
    border-radius: 20px;
    padding: 10px;
  }

  .row {
    text-align: center;
    display: flex;
    justify-content: space-between;
    font-size: 1.5rem;
    border-bottom: 1px dashed gray;
    padding: 5px 10px;
  }

  h1 {
    background-color: green;
    text-align: center;
    text-transform: uppercase;
    padding: 10px;
    border-radius: 15px;
    color: white;
  }
</style>

<body>

  <div class="container">

    <?php

    for ($i = 1; $i <= 10; $i++) {
      echo "<div class='items'>";
      echo "<h1>Chương $i</h1>";

      for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo "<div class='row'>";
        echo "<span>$i × $j</span>";
        echo "<span> = $result</span>";
        echo "</div>";
      }



      echo "</div>";
    }

    ?>

  </div>

</body>

</html>