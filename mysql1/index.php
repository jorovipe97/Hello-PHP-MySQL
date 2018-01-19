<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP and MySQL</title>
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>
    <?php
    require("DB.php");

    // REMOVE ROW FROM DATABASE USER TABLE
    if ( isset($_POST["delete_row_id"]) ) {
      $user_id_to_delete = $_POST["delete_row_id"];
      $mysql->query("DELETE FROM users WHERE id=$user_id_to_delete;");
    }

    // ADD ROW TO DATABASE USER TABLE
    if ( isset($_POST["add_row"]) ) {
      $username = $_POST["username"];
      $email = $_POST["email"];
      $age = $_POST["age"];

      $mysql->query("INSERT INTO users(username, email, edad) VALUES ('$username', '$email', $age);");
    }

    // UPDATE ROW FROM TABLE USER TABLE
    if ( isset($_POST["update_cell"]) ) {
      $cell_coord = explode(",", $_POST["update_cell"]);

      $col_name = $cell_coord[0];
      $new_value = $_POST["update"];
      $row_id = $cell_coord[1];

      $update_query = "UPDATE users SET $col_name='$new_value' WHERE id=$row_id;";
      $mysql->query($update_query);
      /*echo "Error code ({$mysql->errno}): {$mysql->error}";
      echo "<br>".$update_query;*/
    }


    // SHOW DATABASE ROWS
    $query = "SELECT * FROM users ORDER BY id DESC;";
    /*
    Este metodo de la clase MySQLi devuelve una instancia de MySQLi_result,
    el cual tiene metodos como fetch_row() etc, la forma procedural de hacer esto seria:

    mysqli_fetch_row($result)
    */
    $res_set = $mysql->query($query);

    ?>

    <form class="" action="index.php" method="post">
      <input type="text" name="username" placeholder="username" required>
      <input type="email" name="email" palceholder="e-mail" required>
      <input type="number" name="age" placeholder="Years old" required>
      <input type="submit" name="add_row" value="1">
    </form>


    <table>
      <tr>
        <?php
        $fields = $res_set->fetch_fields();
        foreach ($fields as $field) {
          echo "<th>$field->name</th>";
        }
        ?>
        <th>Delete</th>
      </tr>
      <?php
      while ($row = $res_set->fetch_row()) {
        echo "<tr>";
        $row_id = $row[0];
        for ($i=0; $i<count($row); $i++) {
          $id = "cell-" . $fields[$i]->name . "-$row_id";
          $td = "<td id='$id' ondblclick='show_update_input(\"$id\")'>" . $row[$i] . "</td>";
          echo $td;
        }

        echo "<form action='index.php' method='post'>";
        echo "<td>";
        echo "<button type='submit' name='delete_row_id' value='$row_id'>Delete</button>";
        echo "</td>";
        echo "</tr>";
        echo "</form>";
      }
      ?>
    </table>

    <form class="hide" onsubmit="" id="update_form" action="index.php" method="post">
      <button id="subbtn" type='submit' name='update_cell' value='1'>Update</button>
    </form>

    <script
			  src="https://code.jquery.com/jquery-3.2.1.min.js"
			  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
			  crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js"></script>
  </body>
</html>
