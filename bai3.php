<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  function timUocSo(int $a)
  {
    echo "Các ước số: ";
    for ($i = $a; $i >= 1; $i--) {
      if ($a % $i === 0) {
        echo $i, " ";
      }
    }
  }

  function soNguyenTo(int $a)
  {
    for ($i = 2; $i < $a; $i++) {
      if ($a % $i === 0) {
        return false;
      }
    }

    return $a;
  }

  function tongSoNguyenTo(int $a)
  {
    $tong = 0;
    for ($i = 2; $i <= $a; $i++) {
      if (soNguyenTo($i)) {
        $tong += soNguyenTo($i);
      }
    }

    return $tong;
  }

  function soChinhPhuong(int $a)
  {
    $sqrt = (int)sqrt($a);
    return $sqrt * $sqrt === $a;
  }

  $a = rand(-100, 100);

  echo $a, "<br>";

  if ($a > 0) {
    timUocSo($a);
    echo "<br>";
    if (soNguyenTo($a)) {
      echo "Là số nguyên tố";
    } else {
      echo "Không phải số nguyên tố";
    }
    echo "<br>Tổng các số nguyên tố từ 1 đến " . $a;
    echo "<br>" . tongSoNguyenTo($a);
    if (soChinhPhuong($a)) {
      echo "<br> Là số chính phương";
    } else {
      echo "<br> Không phải số chính phương";
    }
  }

  ?>

</body>

</html>