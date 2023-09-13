<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />

</head>
<body>

    <div class="checker">
        <div class="container">
            <div class="row">
                <div class="inner mx-auto" style="width:500px">
                    <h1 class="mt-5">Temperature Caltulator</h1>
                    <p class="h5">0 deg Celsius equal 32 Fahreneit</p>

                    <div class="inner_checker">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="">Enter Temperature : </label>
                                <input type="number" class="form-control mt-1" name="temp"   placeholder="Enter Your Number">                         
                            </div>

                            <div class="form-group mt-4">
                            <select name="operation" id="" class="operation">
                                <option value="" selected disable>Select a converter</option>
                                <option value="c-to-f">Celsius To Fahrenheit</option>
                                <option value="f-to-c">Fahrenheit To Celsius</option>

                            </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-5">Check</button>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $getTemp = $_POST['temp'];
    $getOperation = $_POST['operation'];
    
    
   
    if(empty($getTemp) || empty($getOperation)){

            echo '<script>alert("Input should not be empty !")</script>';

              
        }else{
            switch($getOperation){
                case "c-to-f";
                $ctof = ($getTemp * 9/5)+32;
                echo "<p class='result mt-3 h4'> Your Expected Temperature is {$ctof} Fahrenheit</p>"; 
                break;
                
                case "f-to-c";
                $ftoc = ($getTemp - 32)*9/5;
                echo "<p class='result mt-3 h4'>Your Expected Temperature is {$ftoc} Celsius</p>"; 
                break; 

            }
           
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