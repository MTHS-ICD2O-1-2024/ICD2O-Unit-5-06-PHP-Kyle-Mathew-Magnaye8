<!-- answer.php -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content=" Positive integer multiplication question, in Javascript" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Positive integer multiplication question, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script defer src="./js/script.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive integer multiplication question, in PHP</span>
      </div>
    </header>

    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="content-wrapper">
          <div class="form-section">
            <h5>Place your positive numbers:</h5>

            <div class="image-section">
              <img src="./images/Counting-in-Chinese-Numbers-Numbers-0-10.png" alt="positive integer numbers image" />

              <?php
              $positiveIntegerNumber1 = $_POST['positive-integer-number-1'];
              $positiveIntegerNumber2 = $_POST['positive-integer-number-2'];

              if (is_numeric($positiveIntegerNumber1) && is_numeric($positiveIntegerNumber2) && $positiveIntegerNumber1 > 0 && $positiveIntegerNumber2 > 0) {
                $product = $positiveIntegerNumber1 * $positiveIntegerNumber2;
                echo "<h5>Product: $product</h5>";
              } else {
                echo "<h5>Please enter valid positive integers.</h5>";
              }
              ?>


              <a href="index.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                Return
              </a>
            </div>
    </main>
  </div>
</body>


</html>