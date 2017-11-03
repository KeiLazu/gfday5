<?php
if(isset(($_POST['submit']))){
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $gender = $_POST["rGender"];
  $hometown = $_POST["ddHometown"];
  $hobby = $_POST["cbHobby"];
}
?>

  <html>

  <head>
    <title>Simple PHP Form Example</title>
  </head>

  <body>

    <?php
if (!isset($_POST['submit']))
{
  // display the form
  ?>
      <p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          First Name: <br>
          <input type="text" name="first_name"><br>
          <br/>Last Name: <br>
          <input type="text" name="last_name"><br>
          <br/>Gender: <br>
          <input type="radio" name="rGender" id="rGender" value="Male">Male</input><br>
          <input type="radio" name="rGender" id="rGender" value="Female">Female</input><br>
          <input type="radio" name="rGender" id="rGender" value="Apache Helicopter">Apache Helicopter</input><br><br>
          Hometown: <br>
          <select name="ddHometown" id="ddHometown">
          <option value="Atlantis City">Atlantis City</option>
          <option value="Zweiundzwanzig">Zweiundzwanzig</option>
          <option value="Yddragsil">Yddragsil</option>
          </select><br>
          
          <br>Hobby: <br>
          <input type="checkbox" name="cbHobby[]" id="cbHobby" value="Playing Games">Playing Games</input><br>
          <input type="checkbox" name="cbHobby[]" id="cbHobby" value="Programming">Programming</input><br>
          <input type="checkbox" name="cbHobby[]" id="cbHobby" value="Human Experiment">Human Experiment</input><br>
          
          <input type="submit" value="submit" name="submit">
        </form>
      </p>

      <?php
}
else
{
  // display the output
  echo "<p>";
  echo "First Name: $first_name<br />";
  echo "Last Name: $last_name<br />";
  echo "Gender: $gender<br>";
  echo "Hometown: $hometown<br>";
  echo "Hobby:";
  echo "<ul>";
  foreach ($hobby as $key => $value) {
    echo "<li>$value</li>";
  }
  echo "</ul>";
  echo "</p>";

}
?>

<input type="button" value="Back" onclick="location.href='index.html'">

  </body>

</html>