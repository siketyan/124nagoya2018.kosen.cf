<?php
  define("SQL_HOSTNAME", "localhost");
  define("SQL_USERNAME", "kosenconf");
  define("SQL_PASSPHRASE", "kosenconf");
  define("SQL_DATABASE", "kosenconf");
  define("SQL_PORT", 3306);

  $SQL = new mysqli(
    SQL_HOSTNAME,
    SQL_USERNAME,
    SQL_PASSPHRASE,
    SQL_DATABASE,
    SQL_PORT
  );

  $SQL->set_charset("utf8mb4");
  $SQL->query("SET NAMES utf8mb4;");
