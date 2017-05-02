<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-23 03:36:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: SELECT *
FROM `tb_pekerja`
WHERE ID_keahlian IN()
ERROR - 2015-10-23 03:37:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: SELECT *
FROM `tb_pekerja`
WHERE ID_keahlian IN()
ERROR - 2015-10-23 03:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 3 - Invalid query: SELECT *
FROM `tb_pekerja`
WHERE ID_pekerja IN()
ERROR - 2015-10-23 04:12:06 --> 404 Page Not Found: Review/index
ERROR - 2015-10-23 04:13:04 --> 404 Page Not Found: Reviews/4
ERROR - 2015-10-23 04:13:16 --> 404 Page Not Found: Review/4
ERROR - 2015-10-23 04:13:29 --> 404 Page Not Found: Reviews/4
ERROR - 2015-10-23 04:17:43 --> Severity: Notice --> Undefined variable: keahlian C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:17:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:17:51 --> Severity: Notice --> Undefined variable: keahlian C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:17:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:18:28 --> Severity: Notice --> Undefined variable: keahlian C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:18:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:22:29 --> Severity: Notice --> Undefined variable: keahlian C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:22:29 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:22:32 --> Severity: Notice --> Undefined variable: keahlian C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 04:22:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\ayomaju\application\views\review.php 37
ERROR - 2015-10-23 05:01:30 --> Severity: Warning --> Missing argument 1 for Insert::review(), called in C:\xampp\htdocs\ayomaju\application\controllers\Reviews.php on line 37 and defined C:\xampp\htdocs\ayomaju\application\models\Insert.php 67
ERROR - 2015-10-23 05:01:30 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\ayomaju\application\models\Insert.php 70
ERROR - 2015-10-23 05:02:32 --> Query error: Unknown column 'alamat' in 'field list' - Invalid query: INSERT INTO `tb_review` (`ID_pekerja`, `ID_pereview`, `level_pereview`, `alamat`, `senang`) VALUES ('5', '2', '1', 'Bagus kerjanya, sesuai dengan perintah dan hasilnya bagus', '1')
ERROR - 2015-10-23 05:03:38 --> Query error: Unknown column 'senang' in 'field list' - Invalid query: INSERT INTO `tb_review` (`ID_pekerja`, `ID_pereview`, `level_pereview`, `review`, `senang`) VALUES ('5', '2', '1', 'bagus nih, kerjanya sesuai dengan arahan, hasilnya jadi keren', '1')
ERROR - 2015-10-23 05:25:28 --> Severity: Notice --> Undefined variable: where C:\xampp\htdocs\ayomaju\application\models\Insert.php 72
ERROR - 2015-10-23 05:25:28 --> Query error: Table 'ayomaju.tb_pekerj' doesn't exist - Invalid query: UPDATE `tb_pekerj` SET `rating` = 'rating+1'
WHERE `ID_pekerja` IS NULL
ERROR - 2015-10-23 05:26:17 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\models\Insert.php 71
ERROR - 2015-10-23 05:26:17 --> Severity: Notice --> Undefined variable: where C:\xampp\htdocs\ayomaju\application\models\Insert.php 73
ERROR - 2015-10-23 05:26:17 --> Query error: Table 'ayomaju.tb_pekerj' doesn't exist - Invalid query: UPDATE `tb_pekerj` SET `rating` = 'rating+1'
WHERE `ID_pekerja` IS NULL
ERROR - 2015-10-23 05:27:07 --> Severity: Notice --> Undefined variable: where C:\xampp\htdocs\ayomaju\application\models\Insert.php 73
ERROR - 2015-10-23 05:27:07 --> Query error: Table 'ayomaju.tb_pekerj' doesn't exist - Invalid query: UPDATE `tb_pekerj` SET `rating` = 'rating+1'
WHERE `ID_pekerja` = '2'
ERROR - 2015-10-23 05:27:54 --> Query error: Table 'ayomaju.tb_pekerj' doesn't exist - Invalid query: UPDATE `tb_pekerj` SET `rating` = 'rating+1'
WHERE `ID_pekerja` = '2'
ERROR - 2015-10-23 05:31:13 --> Severity: Notice --> Undefined index: ID_pekerja C:\xampp\htdocs\ayomaju\application\models\Insert.php 70
ERROR - 2015-10-23 05:31:13 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\models\Insert.php 72
ERROR - 2015-10-23 05:40:46 --> Severity: Error --> Call to undefined method Select::review() C:\xampp\htdocs\ayomaju\application\controllers\Reviews.php 30
ERROR - 2015-10-23 05:50:36 --> Query error: Table 'ayomaju.tb_eview' doesn't exist - Invalid query: SELECT *
FROM `tb_eview`
WHERE `id_pereview` = '2'
AND `level_pereview` = '1'
ERROR - 2015-10-23 05:57:52 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:57:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 17
ERROR - 2015-10-23 05:57:52 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:57:52 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 17
ERROR - 2015-10-23 05:58:00 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 17
ERROR - 2015-10-23 05:58:00 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 17
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 12
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 18
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 12
ERROR - 2015-10-23 05:58:18 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 18
ERROR - 2015-10-23 05:58:23 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:23 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 18
ERROR - 2015-10-23 05:58:23 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 11
ERROR - 2015-10-23 05:58:23 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 18
ERROR - 2015-10-23 06:00:17 --> Severity: Notice --> Undefined property: stdClass::$id_keahlian C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 14
ERROR - 2015-10-23 06:00:17 --> Severity: Notice --> Undefined property: stdClass::$id_keahlian C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 14
ERROR - 2015-10-23 06:13:33 --> Severity: Notice --> Undefined property: stdClass::$alamat C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 34
ERROR - 2015-10-23 06:13:33 --> Severity: Notice --> Undefined property: stdClass::$alamat C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 34
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Undefined property: mysqli::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Undefined property: mysqli_result::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Undefined property: mysqli::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Undefined property: mysqli_result::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 47
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Undefined property: mysqli::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Undefined property: mysqli_result::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Undefined property: mysqli::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Undefined property: mysqli_result::$review C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:24:20 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 44
ERROR - 2015-10-23 06:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:36:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:39:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:39:54 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 06:40:26 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:11:22 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:11:36 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:21 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:40 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:52 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:53 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:12:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:13:49 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 09:23:08 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 30
ERROR - 2015-10-23 09:23:25 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 30
ERROR - 2015-10-23 09:23:26 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 30
ERROR - 2015-10-23 09:23:26 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 30
ERROR - 2015-10-23 09:23:28 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 30
ERROR - 2015-10-23 09:23:36 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 32
ERROR - 2015-10-23 09:23:36 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 32
ERROR - 2015-10-23 09:23:37 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 32
ERROR - 2015-10-23 09:23:38 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 32
ERROR - 2015-10-23 09:23:39 --> Severity: Parsing Error --> syntax error, unexpected 'TRUE' (T_STRING) C:\xampp\htdocs\ayomaju\application\controllers\Search.php 32
ERROR - 2015-10-23 10:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:50:08 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:50:25 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:50:27 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:51:34 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:52:59 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:53:10 --> 404 Page Not Found: Dashboard/review
ERROR - 2015-10-23 10:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:53:20 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:54:43 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:54:57 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:13 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 57
ERROR - 2015-10-23 10:55:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 57
ERROR - 2015-10-23 10:55:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 57
ERROR - 2015-10-23 10:55:42 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 57
ERROR - 2015-10-23 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:42 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:55:55 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:56:28 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:57:01 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:58:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 61
ERROR - 2015-10-23 10:58:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 61
ERROR - 2015-10-23 10:58:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 61
ERROR - 2015-10-23 10:58:04 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 61
ERROR - 2015-10-23 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:58:04 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:58:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 60
ERROR - 2015-10-23 10:58:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 60
ERROR - 2015-10-23 10:58:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 60
ERROR - 2015-10-23 10:58:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 64
ERROR - 2015-10-23 10:58:39 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 60
ERROR - 2015-10-23 10:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 10:58:39 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:03:00 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 64
ERROR - 2015-10-23 11:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:03:00 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:03:29 --> Query error: Unknown column 'ID_pekerja' in 'where clause' - Invalid query: SELECT *
FROM `tb_juragan`
WHERE `ID_pekerja` = '2'
ERROR - 2015-10-23 11:05:12 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:05:12 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:05:12 --> Query error: Unknown column 'ID_pekerja' in 'where clause' - Invalid query: SELECT *
FROM `tb_juragan`
WHERE `ID_pekerja` = '1'
ERROR - 2015-10-23 11:05:33 --> Query error: Unknown column 'ID_pekerja' in 'where clause' - Invalid query: SELECT *
FROM `tb_juragan`
WHERE `ID_pekerja` = '2'
ERROR - 2015-10-23 11:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:05:48 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:06:59 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:06:59 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:06:59 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:06:59 --> Severity: Notice --> Undefined property: stdClass::$ID_pekerja C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:06:59 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:07:35 --> Severity: Parsing Error --> syntax error, unexpected '.' C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 69
ERROR - 2015-10-23 11:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:07:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:09:28 --> Severity: Parsing Error --> syntax error, unexpected ')', expecting ',' or ';' C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 73
ERROR - 2015-10-23 11:09:51 --> Severity: Parsing Error --> syntax error, unexpected ')', expecting ',' or ';' C:\xampp\htdocs\ayomaju\application\views\list_reviews.php 73
ERROR - 2015-10-23 11:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:09:58 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:10:19 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:00 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:01 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:39 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:41 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:42 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:44 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:47 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:02 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:32 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:47:36 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:47:38 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:16 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 11:52:18 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:47:52 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:47:55 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:05 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:10 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:56 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 12:48:57 --> 404 Page Not Found: Assets/css
ERROR - 2015-10-23 15:54:33 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:54:34 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:54:34 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:54:34 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:58:12 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:58:12 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:58:12 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
ERROR - 2015-10-23 15:58:12 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\ayomaju\application\controllers\Search.php 139
