<?php

require "connect.php";
global $connection;
$sth = $connection -> prepare("SELECT * FROM post");
$sth->execute();
$array = $sth -> fetchALL(PDO::FETCH_ASSOC);

//$stmt = "SELECT * FROM post";
?>
<table>
<tr>
  <th>title</th>
  <th>description</th>
  <th>date_public</th>
  <th>id_file</th>
  <th>name_file</th>
  <th>extension</th>
  <th>link</th>
  <th>file_size</th>
  <th>id_subject</th>
  <th>id_user</th>
</tr>

  <?php 
  for ($i = 0; $i < count($array); $i++) {
    $title = $array[$i]['title'];
    $description = $array[$i]['description'];
    $date_public = $array[$i]['date_public'];
    $id_file = $array[$i]['id_file'];
    $name_file = $array[$i]['name_file'];
    $extension = $array[$i]['extension'];
    $link = $array[$i]['link'];
    $file_size = $array[$i]['file_size'];
    $id_subject = $array[$i]['id_subject'];
    $id_user = $array[$i]['id_user'];
    print('<tr>
    <td>'.$title.'</td>
    <td>'.$description.'</td>
    <td>'.$date_public.'</td>
    <td>'.$id_file.'</td>
    <td>'.$name_file.'</td>
    <td>'.$extension.'</td>
    <td>'.$link.'</td>
    <td>'.$file_size.'</td>
    <td>'.$id_subject.'</td>
    <td>'.$id_user.'</td>
    </tr>');
}
?>
</table>