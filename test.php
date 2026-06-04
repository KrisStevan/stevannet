<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "stevannet",
    "3307"
);

echo "Connected successfully";