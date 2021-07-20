<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="next.css" type="text/css">
        
    </head>
    <body>
        
            <div class="cont">
                <div class="ded">
                    <form method="post">
        
                        <button type="submit" name="ds" value="All files" class="btn btn-outline-danger">All files</button><br>
                    <br>
                        <button type="submit" name="pd" value="PDF FILES [.PDF]" class="btn btn-outline-danger">Pdf files</button><br>
                    <br>
                        <button type="submit" name="do" value="DOCUMENT FILES[.DOC]" class="btn btn-outline-danger">document files</button>
                    </form>
                </div>
            </div>   
            <video autoplay muted loop>
                <source src="back.mp4">            
            </video>

        
         <?php
            include ("connection.php");

            if(isset($_POST['ds']))
            {
                header("location:getdata.php");
            }
         ?>     
         <?php
           include("connection.php");

           if(isset($_POST['pd']))
           {
               header("location:pdffile.php");
           }  
         ?>     
         <?php
           include("connection.php");

           if(isset($_POST['do']))
           {
               header("location:docfile.php");
           }  
         ?>     
    </body>
    
   
</html>

