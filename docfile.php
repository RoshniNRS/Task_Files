

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
    </head>
    <body>
       
        <table class="table table-striped">
            
            <tr style="font-weight:bolder;" >
                <td>sl no</td>
                <td>Name</td>
                <td>Roll no</td>
                <td>File name</td>
            </tr>


            <tbody>
                    <?php
                     include "connection.php";
                     
                    $query=" SELECT * FROM `extension` WHERE `filename` = 'untitled document.docx'";
                    $result=mysqli_query($conn,$query);
                     $i=0;
                     while($row=mysqli_fetch_array($result)){
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
           
    </body>
</html>