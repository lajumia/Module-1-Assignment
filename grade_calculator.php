<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Odd Checker</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />

</head>
<body>

    <div class="checker">
        <div class="container">
            <div class="row">
                <div class="inner mx-auto" style="width:500px">
                    <h1 class="mt-5">Even and Odd Checker</h1>

                    <div class="inner_checker">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="">Enter First Subject Number : </label>
                                <input type="number" class="form-control mt-1" name="subject1" max="100"  placeholder="Enter Your Number">                         
                            </div>
                            <div class="form-group">
                                <label for="">Enter Second Subject Number : </label>
                                <input type="number" class="form-control mt-1" name="subject2" max="100" placeholder="Enter Your Number">                         
                            </div>
                            <div class="form-group">
                                <label for="">Enter Third Subject Number : </label>
                                <input type="number" class="form-control mt-1" name="subject3" max="100" placeholder="Enter Your Number">                         
                            </div>

                            <button type="submit" class="btn btn-primary mt-5">Check</button>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $getFirstNumber = $_POST['subject1'];
    $getSecondNumber = $_POST['subject2'];
    $getThirdNumber = $_POST['subject3'];
    $oddNumber =3;
   


    if(empty($getFirstNumber || $getSecondNumber || $getThirdNumber)){

       echo '<script>alert("Input should not be empty !")</script>';
              
        }else{
            $average = ($getFirstNumber + $getSecondNumber + $getThirdNumber)/$oddNumber;
            if($average <33){
                echo "<p class='result mt-3 h4'> Your Grade is F </p>";
        
            }elseif($average>32 && $average < 40){
                echo "<p class='result mt-3 h4'> Your Grade is D </p>";
               
            }elseif($average>39 && $average < 50){
            echo "<p class='result mt-3 h4'> Your Grade is C </p>";
           
            }elseif($average>49 && $average < 60){
                echo "<p class='result mt-3 h4'> Your Grade is B </p>";
               
            }elseif($average>59 ){
                echo "<p class='result mt-3 h4'> Your Grade is A </p>";
                
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