<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include "classes/users.class.php";
include "classes/module.class.php";

session_start();
$Details = "";
if(!isset($_SESSION['sessionInfo'])){
    header("Location:loginPage.php");
}
else{
    $Details = $_SESSION['sessionInfo'];
    if($Details->getRole() != "professor" || $Details->getMod() == ""){
        header("Location:loginPage.php");
    }
}
?>

<html lang="en">
  <head>
    <title>Manage module</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/footer.css">    
    <link rel="stylesheet" type="text/css" href="css/manageModule.css">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  </head>
  <body>
    <?php
        include "navBar.php";
    ?>
      <div class="container" id="widgetContainer">
        <div class="row">
            <a href="#">
                <div class="manageWidget">
                    <img src="images/mountain1.jpg" alt="summative Feedback">
                    <div class="comments">Add Summative Feedback</div>
                </div>
            </a>
            <a href="#">
                <div class="manageWidget">
                    <img src="images/mountain2.jpg" alt="formative feedback">
                    <div class="comments">Add Formative Feedback</div>
                </div>
            </a>
            <a href="#" onclick="return deleteMod()">
                <div class="manageWidget">
                    <img src="images/mountain3.jpg" alt="delete mod">
                    <div class="comments">Delete Module</div>
                </div>
            </a>
        </div>
      </div>
    <?php
        include "footer.php";
    ?>  
  </body>
  <script type='text/javascript'>
      function deleteMod(){
          if(confirm("Do you want to delete?")){
              window.location="deleteModule.php";
          }
      }
  </script>
</html>