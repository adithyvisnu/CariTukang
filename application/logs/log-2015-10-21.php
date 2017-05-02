<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-10-21 09:55:17 --> Severity: Error --> Call to undefined method Insert::add_juragan() C:\xampp\htdocs\ayomaju\application\controllers\dashboard.php 185
ERROR - 2015-10-21 10:24:24 --> Severity: Compile Error --> Cannot use isset() on the result of a function call (you can use "null !== func()" instead) C:\xampp\htdocs\ayomaju\application\controllers\pekerja.php 23
ERROR - 2015-10-21 10:31:53 --> Severity: Warning --> Missing argument 1 for Insert::juragan(), called in C:\xampp\htdocs\ayomaju\application\controllers\dashboard.php on line 185 and defined C:\xampp\htdocs\ayomaju\application\models\insert.php 43
ERROR - 2015-10-21 10:31:53 --> Severity: Error --> Call to undefined method Select::juragan_oke() C:\xampp\htdocs\ayomaju\application\controllers\dashboard.php 187
ERROR - 2015-10-21 10:41:00 --> Query error: Unknown column 'password_mentah' in 'field list' - Invalid query: INSERT INTO `tb_juragan` (`nama`, `alamat`, `telp`, `password_mentah`, `password`) VALUES ('Marwan', 'Jln. Cihanjuang gg Bapa Sa\'i no 19b RT 01/03 Kota Cimahi, Jawa Barat', '082114009640', 'RKjJd4N7', '743a1bca560cf89d37cec9a6c9ce0385')
ERROR - 2015-10-21 10:56:09 --> Severity: Notice --> Undefined index: ID_pekerja C:\xampp\htdocs\ayomaju\application\models\update.php 57
ERROR - 2015-10-21 10:56:09 --> Query error: Unknown column 'ID_juragan' in 'field list' - Invalid query: UPDATE `tb_pekerja` SET `nama` = 'Alfan Fauzy', `ID_juragan` = '2', `alamat` = 'Jln. Kembang Mawar Gg. Panday no 15 RT 01/03 Kota Malang, Jawa Timur aheuy', `telp` = '082114009640'
WHERE `ID_pekerja` IS NULL
ERROR - 2015-10-21 11:57:51 --> Query error: Unknown column 'telp' in 'where clause' - Invalid query: SELECT *
FROM `tb_perangkat_desa`
WHERE `telp` = 'rt1'
AND `password` = '5eb6f7c468ae4d92813a8db00127150e'
ERROR - 2015-10-21 12:00:40 --> Severity: Notice --> Undefined variable: num C:\xampp\htdocs\ayomaju\application\controllers\action.php 42
ERROR - 2015-10-21 12:00:40 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\controllers\action.php 42
ERROR - 2015-10-21 12:01:53 --> Severity: Notice --> Undefined variable: num C:\xampp\htdocs\ayomaju\application\controllers\action.php 42
ERROR - 2015-10-21 12:01:53 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\controllers\action.php 42
ERROR - 2015-10-21 12:07:17 --> 404 Page Not Found: Rt/pekerja
ERROR - 2015-10-21 12:08:36 --> 404 Page Not Found: Rt/pekerja
ERROR - 2015-10-21 12:08:54 --> 404 Page Not Found: Rt/pekerja
ERROR - 2015-10-21 12:19:11 --> Severity: Parsing Error --> syntax error, unexpected end of file, expecting function (T_FUNCTION) C:\xampp\htdocs\ayomaju\application\controllers\pekerja.php 70
ERROR - 2015-10-21 12:20:57 --> Severity: Notice --> Undefined index: HTTTP_REFERER C:\xampp\htdocs\ayomaju\application\views\pekerja_edit.php 6
ERROR - 2015-10-21 12:30:18 --> Query error: Unknown column 'username' in 'where clause' - Invalid query: SELECT *
FROM `tb_juragan`
WHERE `username` = '1'
ERROR - 2015-10-21 14:52:25 --> Query error: Unknown column 'id' in 'where clause' - Invalid query: SELECT *
FROM `tb_juragan`
WHERE `id` = '2'
ERROR - 2015-10-21 15:06:50 --> Severity: Notice --> Undefined property: Dashboard::$delete C:\xampp\htdocs\ayomaju\application\controllers\dashboard.php 155
ERROR - 2015-10-21 15:06:50 --> Severity: Error --> Call to a member function rt() on a non-object C:\xampp\htdocs\ayomaju\application\controllers\dashboard.php 155
ERROR - 2015-10-21 15:07:18 --> Severity: Warning --> Illegal string offset 'id' C:\xampp\htdocs\ayomaju\application\models\delete.php 35
ERROR - 2015-10-21 15:07:45 --> Severity: Warning --> Illegal string offset 'id' C:\xampp\htdocs\ayomaju\application\models\delete.php 35
ERROR - 2015-10-21 15:07:45 --> Query error: Table 'ayomaju.tb_perangkat_dsa' doesn't exist - Invalid query: DELETE FROM `tb_perangkat_dsa`
WHERE `id` = '2'
AND 2 IS NULL
ERROR - 2015-10-21 15:09:17 --> Severity: Warning --> Illegal string offset 'id' C:\xampp\htdocs\ayomaju\application\models\delete.php 35
ERROR - 2015-10-21 15:10:47 --> Severity: Warning --> Illegal string offset 'id' C:\xampp\htdocs\ayomaju\application\models\delete.php 35
ERROR - 2015-10-21 15:23:25 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:23:25 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 58
ERROR - 2015-10-21 15:23:25 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:23:25 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 58
ERROR - 2015-10-21 15:24:33 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:24:33 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:24:33 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:24:33 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:24:34 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:24:34 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:24:34 --> Severity: Notice --> Undefined property: CI_Loader::$id_penambah C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 57
ERROR - 2015-10-21 15:24:34 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:24:53 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:24:53 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$nama C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:25:05 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:25:25 --> Severity: Notice --> Trying to get property of non-object C:\xampp\htdocs\ayomaju\application\views\list_pekerja.php 59
ERROR - 2015-10-21 15:47:56 --> Severity: Error --> Cannot use object of type stdClass as array C:\xampp\htdocs\ayomaju\application\controllers\pekerja.php 77
