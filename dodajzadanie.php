<?php
include('session.php');


$error ="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form

   $title = mysqli_real_escape_string($db,$_POST['title']);
   $desc = mysqli_real_escape_string($db,$_POST['description']);
   $user = mysqli_real_escape_string($db,$_POST['autor']);
   
   $sql = "SELECT id FROM users WHERE user = '$login_session'";
   //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $result = mysqli_query($db,$sql);
   //echo $row;
   $rows = mysqli_fetch_array($result);
   

   $idUsers = gettype($rows['id']);
   $numerid = intval($rows['id']);

   $sql = "INSERT INTO `zadania` (`tytul`, `opis`, `user`) VALUES ('$title', '$desc', '$numerid')";
   //$sql = "INSERT INTO 'zadania' (tytul,opis,user)VALUES('$title','$desc','$username_array[0]')";
   $result = mysqli_query($db,$sql);
 }
   /*
   $sql = "SELECT id FROM users WHERE user = '$myusername' and pass = '$mypassword'";


                */
                $Welcome_Text = "Dodawanie zadań";
                include 'toppage_tpl.php';
               echo '<div class = "glowny">';
                echo '<div class = "glownysrodek">';
 ?>
 <html>

    <head>
       
       <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body class ="body">
    
     </div>
    

       <div class ="dodawanie">
         <form action = "" method = "post">
            <label>Tytuł  :</label><input type = "text" name = "title" class = "box3"/><br /><br />
            <label>Opis :</label><textarea type ="text "name = "description" class = "box4" /></textarea><br/><br />
            <label>Autor :</label><input type = "text" name = "autor" class = "box3" value="<?php echo $login_session;?>" /><br/><br />
            <input type = "submit" value = " Dodaj " class = "btn-link2"/><br />
         </form>
         </div>
         </div>
         </div>
         <?php
         include 'bottompage_tpl.php'; ?>
       </body>
</html>
