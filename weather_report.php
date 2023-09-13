<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />

</head>
<body>
    <div class="checker">
        <div class="container">
            <div class="row">
                <div class="inner mx-auto" style="width:500px">
                    <h1 class="mt-5">Weather Report</h1>

                    <div class="inner_checker">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="">Enter YoToday's Temperature in Celsius : </label>
                                <input type="number" class="form-control mt-1" name="tempNumber"  placeholder="Enter Your Number">                         
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Check</button>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $getTemp = $_POST['tempNumber'];

    if(!empty($getTemp)){
        if($getTemp<=15){
            echo "<p class='result mt-3 h4' style='color:orange'> It's Freezing! </p>"; 
        }elseif($getTemp > 15 && $getTemp <=25){
            echo "<p class='result mt-3 h4' style='color:green'> It's Cool! </p>"; 
        }else{
            echo "<p class='result mt-3 h4' style='color:red'> It's Warm! </p>"; 
    
        }
    }else{
        echo '<script>alert("Input should not be empty !")</script>';

    }


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