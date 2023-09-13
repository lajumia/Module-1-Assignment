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
                    <h1 class="mt-5">Basic Caltulator</h1>

                    <div class="inner_checker">
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                            <div class="form-group">
                                <label for="">Enter First  Number : </label>
                                <input type="number" class="form-control mt-1" name="number1"   placeholder="Enter Your Number">                         
                            </div>
                            <div class="form-group">
                                <label for="">Enter Second  Number : </label>
                                <input type="number" class="form-control mt-1" name="number2"  placeholder="Enter Your Number">                         
                            </div>
                            <select name="operation" id="" class="operation">
                                <option selected disable>Select an Operand</option>
                                <option value="add">Addition</option>
                                <option value="sub">Subtraction</option>
                                <option value="mul">Multiplication</option>
                                <option value="div">Division</option>
                            </select>

                            <button type="submit" class="btn btn-primary mt-5">Check</button>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $getFirstNumber = $_POST['number1'];
    $getSecondNumber = $_POST['number2'];
    $getOperand = $_POST['operation'];
   


    if(empty($getFirstNumber || $getSecondNumber)){

       echo '<script>alert("Input should not be empty !")</script>';
              
        }else{
           if($getOperand=='add'){
            echo "<p class='result mt-3 h4'> Your Addintion Result is ".$getFirstNumber+$getSecondNumber." </p>";
           }elseif($getOperand=='sub'){
            echo "<p class='result mt-3 h4'> Your Subtrac Result is ".$getFirstNumber - $getSecondNumber." </p>";
           }elseif($getOperand=='mul'){
            echo "<p class='result mt-3 h4'> Your Multiplication Result is ".$getFirstNumber * $getSecondNumber." </p>";

           }elseif($getOperand=='div'){

            if($getFirstNumber>$getSecondNumber){
            echo "<p class='result mt-3 h4'> Your Division Result is ".$getFirstNumber / $getSecondNumber." </p>";
             }else{
                echo "<p class='result mt-3 h4'> Your first number should'n be smaller than second number!</p>";
             }

           }else{
            echo '<script>alert("Please select an operand !")</script>';;
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