<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Convert Fahrenheit to Celsius, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Kyle Matthew" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/style.css" /> <!-- Ensure the path is correct -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />

  <!-- Page Title -->
  <title>Convert Fahrenheit to Celsius, with PHP</title>
</head>

<body>
  <!-- Material Design Lite script -->
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!-- Header -->
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Convert Fahrenheit to Celsius, with PHP</span>
      </div>
    </header>

    <!-- Main Content -->
    <main class="mdl-layout__content">
      <div class="page-content">

        <!-- Temperature Image -->
        <div class="right-image">
          <img src="./images/temperature.png" alt="Temperature image" />
        </div>

        <!-- Formula -->
        <p>Formula:</p>
        <p>(32°F - 32) × 5/9 = 0°C</p>

        <!-- Conversion Form -->
        <form action="answer.php" method="post">
          <div class="temperature-row">
            <!-- Fahrenheit Input -->
            <div class="temperature-column">
              <input type="number" step="any" id="fahrenheit" name="fahrenheit" required />
              <div class="unit-label">Fahrenheit</div>
            </div>

            <!-- Equals Sign -->
            <span class="equals-sign">=</span>

            <!-- Celsius Output -->
            <div class="temperature-column">
              <input type="text" id="celsius"
                value="<?php echo isset($_GET['celsius']) ? $_GET['celsius'] : ''; ?>" readonly />
              <div class="unit-label">Celsius</div>
            </div>
          </div>

          <!-- Convert Button -->
          <br />
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">
            Convert
          </button>
        </form>

        <!-- Placeholder for Output -->
        <br />
        <div class="page-content-answer">
          <div id="user-info"></div>
        </div>

      </div>
    </main>
  </div>
</body>

</html>
