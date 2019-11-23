<?php
include('session.php');
$Welcome_Text = "Modyfikacja zadań";

include 'toppage_tpl.php';
echo '<div class = "glowny">';
echo '<div class = "glownysrodek">';

$sql = "SELECT * FROM zadania WHERE id = $_POST[edytuj]";
   //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $result = mysqli_query($db,$sql);
   //echo $row;
   $rows = mysqli_fetch_array($result);



?>

<div class ="dodawanie">
         <form action = "" method = "post">
            <label>Tytuł  :</label><input type = "text" name = "title" class = "box3" value=<?php echo $rows[1]?> /><br /><br />
            <label>Opis :</label><textarea type ="text "name = "description" class = "box4" /><?php echo $rows[2]?></textarea><br/><br />
            <label>Autor :</label><input type = "text" name = "autor" class = "box3" value="<?php echo $login_session;?>" /><br/><br />
            <input type = "submit" value = " Dodaj " class = "btn-link2"/><br />
         </form>
       </div>
</div>

</div>
</div>
    <?php
    include 'bottompage_tpl.php'; ?>
  </body>
  </html>
