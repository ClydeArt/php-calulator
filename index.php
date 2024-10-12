
<?php
   
     if ($_SERVER ["REQUEST_METHOD"] == "POST" and isset($_POST["button"])){

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    $result = 0;

    if ($operator == 'sum'){
        $result = $num1 + $num2;
    }

    elseif($operator == 'minu'){
        $result = $num1 - $num2;
    }
    elseif ($operator == 'divide'){
        if ($num2 != 0) {
            $result = $num1 / $num2;
    }
    }
    elseif ($operator == 'multiply'){
       $result = $num1 * $num2;
    }
    elseif($operator == 'modulo'){
        $result = fmod($num1, $num2);
    }


    else {
        $result = "Invalid Operator";
    }
     }
    
    ?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 0.5rem;
            border: 1px solid black;
            width: 40%;
            margin-left: 25%;
            margin-top: 10%;
            border-radius: 20px;
        }


        input {
            padding: 0.5rem;
            gap: 0.5rem;
        }

        #operator{
            height: 2rem;
            width: 3rem;
            background-color: #17202a;
            color: white;
            gap: 0.5rem;
            font-size: 1rem;

        }

        #btn{
            height: 2rem;
            width: 5rem;
            background-color: #17202a;
            color: white;
            padding: 0.5rem;
            border: none;
            margin-top: 1rem;
            border-radius: 20px;

            &:hover {
                filter: brightness();
            }
        }

        #result {
            font-size: 2rem;
            margin-top: 0.5rem;
        }

        
    </style>
</head>

<body>
        <form method="POST" action="">
<div class="form">
    <label for="num1">Num1: </label>
    <input type="text" id="num1" name="num1" placeholder="Enter No.1"> <br><br>
    <label for="num2">Num2: </label>
    <input type="text" id="num2" name="num2" placeholder="Enter No.2"> <br><br>

  
    <label for="operator">Operator: </label>
    <select name="operator" id="operator">

        <option value="sum">+</option>
        <option value="minu">-</option>
        <option value="divide">/</option>
        <option value="multiply">*</option>
        <option value="modulo">%</option>
    </select>
    
    <input type="submit" id="btn" name="button">
    <div id="result" name="result">Result: <?php echo $result ?>  </div>
</input>

    <!-- <div id="result" name="result">Result: </div> -->
</div>
    </form>

</body>
</html>
