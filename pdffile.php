<?php
    include 'connection.php';
    
    $result=mysqli_query($conn,"SELECT * FROM `extension`WHERE `filename` = '.pdf' ");
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
    </head>
    <body>
       
        <table class="table table-striped">
            
        <thead style="font-weight:bolder;">
                   
                   <th>slno</th>
                   <th>Name</th>
                   <th>Rollno</th>
                    
                   <th>Filename</th>
               </thead>
               <tbody>
                   <?php
                    include "connection.php";
                    $query="SELECT * FROM `extension`WHERE `filename` = 'application/pdf' ";
                    $sql=mysqli_query($conn,$query);
                    $i=0;
                while($row=mysqli_fetch_array($sql)){
                      echo "<tr>";
                      echo "<td>" . $row['id'] ."</td>";
                      echo "<td>" . $row['name'] ."</td>";
                      echo "<td>" . $row['rollno'] ."</td>";
                      echo "<td>" . $row['filename'] ."</td>";
                      
                      echo "</tr>";
                      $i++;
                    }
                    echo "</table>";
                   ?>
               </tbody>

           </table>
       </div>
  </body>
</html>