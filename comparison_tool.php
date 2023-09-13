<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />

</head>
<body>

    <div class="checker">
        <div class="container">
            <div class="row">
                <div class="inner mx-auto" style="width:500px">
                    <h1 class="mt-5">Comparison Tool</h1>

                    <div class="inner_checker">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="">First Number : </label>
                                <input type="number" class="form-control mt-1 mb-1" name="fnumber"  placeholder="Enter Your First Number">                         
                            </div>
                            <div class="form-group">
                                <label for="">Second Number : </label>
                                <input type="number" class="form-control mt-1" name="lnumber"  placeholder="Enter Your Second Number">                         
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Check</button>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $getFNumber = $_POST['fnumber'];
    $getLNumber = $_POST['lnumber'];

    // if(!empty($getFNumber) && !empty($getLNumber)){
        $getFNumber>$getLNumber ? $result ="<p class='result mt-3 h4'> Your Greater Number is $getFNumber </p>" : $result="<p class='result mt-3 h4'> Your Greater Number is $getLNumber </p>";  
        echo $result;

    // }else{


    //     echo '<script>alert("Input should not be empty !")</script>'
    // }

   
}

?>                       
                        </form>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
</body>
</html>