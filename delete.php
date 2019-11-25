<?php
include('session.php');
$Welcome_Text = "Usuwanie zadań";
include 'toppage_tpl.php';
echo '<div class = "glowny">';
echo '<div class = "glownysrodek">';
if (isset($_POST['usun'])) {
  $sql = "SELECT * FROM zadania WHERE id = $_POST[usun]";
  $result = mysqli_query($db,$sql);
  $rows = mysqli_fetch_array($result);
}
else {

  if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $id = $_POST['IdBaza'];
   

    $sql = "DELETE FROM zadania WHERE id='".$id."'";
    $query = mysqli_query($db,$sql);
    $rows[0] = "";
    $rows[1] = "";
    $rows[2] = "";
    
    echo ("Zadanie usunięte");
 }


}
?>
<div class ="dodawanie">
  <p>Usunąć zadnie:</p>
  <p>Tytuł: <?php echo $rows[1]?> <br />
  <p>Opis: <?php echo $rows[2]?></p>
  <form action = "" method = "post">
  <input type="hidden" id="IdBaza" name="IdBaza" value=<?php echo $rows[0]?> />
    <input type = "submit" value = " Usuń " class = "btn-link2"/><br />
  </form> 
</div>

</div>
</div>
    <?php
    include 'bottompage_tpl.php'; ?>
  </body>
  </html>