<?php
    include 'connection.php';
    
    $result=mysqli_query($conn,"SELECT * FROM extension");
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
   
    </head>
    <body>
        <?php
            if(mysqli_num_rows($result)>0)
            {
        ?>
        <table class="table table-striped">
            
            <tr style="font-weight:bolder;" >
                <td>sl no</td>
                <td>Name</td>
                <td>Roll no</td>
                <td>File name</td>
            </tr>
                <?php
                    $i=0;
                    while($row=mysqli_fetch_array($result))
                    {
                    
                ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["rollno"];?></td>
                <td><?php echo $row["filename"];?></td>
            </tr>    
                <?php
                    $i++;
                    }
                ?>
        </table>
            <?php
            }
            else
            {
                echo "no result";
            }
            ?>
    </body>
</html>