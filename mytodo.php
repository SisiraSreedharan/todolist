<?php 
include 'connect.php';
if(isset($_POST['submit'])){
$bb_name = $_POST['book_name'];
//   // /$iv_id = isset($_POST['book_name']) ? $_POST['book_name'] : '';
$q = mysqli_query($db,"insert into invoice(book_name)values('$bb_name')");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
   <center>
    <div class="container">
        <h2 style="margin:5px">My To Do List</h2>
        <div id="option">
              <div id="option">
                <form method="POST">
                    <div><input type="text" id="book_name" name="book_name" required>
                    <input type="submit" id="bttn" clas="submit" name="submit"></div>
                    <div id="demo">  </div>
                
                </form>
              </div>

                <div id="display">
                  <table id="row_data">
                    <?php
                    include 'connect.php';
                    $q=mysqli_query($db,"select * from invoice");
                    while($r=mysqli_fetch_array($q)){
                      
                        echo "<tr>";
                        echo "<td>"; echo "$r[book_name]";echo "</td>";
                      //<td> 
                      //<?php echo $r['book_name']
                    

                      }
                      ?>

                 </table>
            

        </div>
      </div>
    </center>
           
<script>
          $(document).ready(function(){
           
            $("#bttn").click(function(){
              var name=$("#book_name").val();
              $.ajax({
                url:'insert.php',
                method:'POST',
                data: "name=" + name+ ,
                        success: function(data) {
                           alert("sucess");
                  }
              });
            });

          });
   
  
    </script>

    </body>
    </html>

