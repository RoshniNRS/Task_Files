<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
           
        <link rel="stylesheet" href="index.css" type="text/css">
    </head>
    <body>

            <form method="post" enctype="multipart/form-data">
            <div class="con">
                <div class="for">
                    <h3>FORM</h3>
                    <input type="text" name="name" placeholder="Username" required>
                    <input type="text" name="rollno" placeholder="rollno" required>
                    <input type="file" name="file" accept=".pdf,.docx,.doc" value="upload file"placeholder="upload file" required>
            
                    <div>
                  <button  class="sub" type="submit" name="submit" onclick="go()">Submit</button>
                </div>
                </div>
            </div>
            <video autoplay muted loop>
                <source src="vedio.mp4">            

            </video>
            
        </form>

        <?php                                               
            include 'connection.php';
   
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                $rollno=$_POST['rollno'];
                $file=$_FILES['file'];
                $file_name=$file['name'];
                $file_type=$file['type'];
                $file_size=$file['size'];
                $file_path=$file['tmp_name'];
               
                if($file_name!=" ")
                {
                 move_uploaded_file($file_path,'pdf/'.$file_name);
                }
        
                $sqli= "INSERT INTO extension(`id`, `name`, `rollno`, `filename`) VALUES('','$name','$rollno','$file_name') ";
               
                $query=mysqli_query($conn,$sqli)or die(mysqli_error());

        
                if($query)
                {
                    $row = mysqli_fetch_array($query);
                    if($row=['submit'])
                    {
                       header('location:next.php');
                    }
                    else
                    {
                        header('location:index.php');
                    }
                }

                
            }
            else
            {
                echo "<script>error</script>";
            }

             
?>



    </body>
</html>

