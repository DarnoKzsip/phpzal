<?php
include('session.php');
$Welcome_Text = "Modyfikacja zadań";

include 'toppage_tpl.php';
echo '<div class = "glowny">';
echo '<div class = "glownysrodek">';

   if (isset($_POST['edytuj'])) {
   $sql = "SELECT * FROM zadania WHERE id = $_POST[edytuj]";
   $result = mysqli_query($db,$sql);
   $rows = mysqli_fetch_array($result);
}
   else {
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      $title = $_POST['title'];
      $desc = $_POST['description'];
      $id = $_POST['IdBaza'];
     

      $sql = "UPDATE zadania SET tytul='".$title."',opis = '".$desc."'WHERE id='".$id."'";
      $query = mysqli_query($db,$sql);

      //ob_end_clean();
      //header("location: welcome.php");      
      //exit();

      $sql = "SELECT * FROM zadania WHERE id = '".$id."'";
      $result = mysqli_query($db,$sql);
      $rows = mysqli_fetch_array($result);

      echo ("Zadanie zmodyfikowane");
   }
      
     
    }



?>

<div class ="dodawanie">
         <form action = "" method = "post">
            <label>Tytuł  :</label><input type = "text" name = "title" class = "box3" value=<?php echo $rows[1]?> /><br /><br />
            <label>Opis :</label><textarea type ="text "name = "description" class = "box4"><?php echo $rows[2]?></textarea><br/><br />
            <label>Autor :</label><input disabled="true" type = "text" name = "autor" class = "box3" value="<?php echo $login_session;?>" /><br/><br />
            <input type="hidden" id="IdBaza" name="IdBaza" value=<?php echo $rows[0]?> />
            <input type = "submit" value = " Modyfikuj " class = "btn-link2"/><br />
         </form>
       </div>
</div>

</div>

    <?php
    include 'bottompage_tpl.php'; ?>
  </body>
  </html>