
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1">
      <?php

      $servername = 'localhost';
      $username = 'root';
      $pass = '';
      $database='count';
      $conn = mysqli_connect($servername, $username, $pass, $database);

      echo mysqli_error($conn);


      $query = mysqli_query($conn,'SELECT * FROM tb_caleg');
      echo mysqli_error($conn);
      $row = mysqli_fetch_array($query);
      while($row){
        // code...
       ?>
      <tr>
          <td> <?php echo $row['name']; ?> </td>
          <td rowspan="2"> Perolehan Suara <?php echo $row['earned_vote'];} ?></td>
      </tr>

    </table>
  </body>
</html>
