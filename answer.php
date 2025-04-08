<?php
// Copyright (c) 2025 Kyle Matthew Magnaye
//
// Created by: Kyle Matthew Magnaye
// Created on: Apr 2025
// This file handles the PHP conversion logic.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["fahrenheit"]) && is_numeric($_POST["fahrenheit"])) {
    $fahrenheit = floatval($_POST["fahrenheit"]);
    $celsius = round((($fahrenheit - 32) * 5) / 9, 3);
    $celsiusFormatted = $celsius . " °C";
    // Redirect back to index with result
    header("Location: index.php?celsius=" . urlencode($celsiusFormatted));
    exit();
  } else {
    // Redirect with no result
    header("Location: index.php");
    exit();
  }
}
?>