<?php
include_once 'request.php';

$require = "SELECT
   `a`.`id`, `a`.`name`, `a`.`age`, count(*) AS `booksQuantity`
FROM `author` AS `a`
LEFT JOIN `author_book` AS `ab`
  ON `a`.`id` = `ab`.`author_id`
  GROUP BY `a`.`id`, `a`.`name`, `a`.`age`;";

