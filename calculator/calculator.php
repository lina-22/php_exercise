<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      div{
          background-color: rgb(62,211,216);
          padding-left: 50px;
          padding-top: 5px;
          padding-bottom: 120px;
          margin-top: 50px;
          /* margin-left: 300px; */
          width: 330px;
          height: 250px;
      }
      h1{
          color:white;
      }
      input [type="number"]{
          width: 140px;
          height: 25px;
          border-radius: 2px;
          border: 1px solid black;
      }

      label{
          font-weight: bold;
          font-size:22px;
      }

      Input[type="submit"]
      {
          font-size: 20px;
          width: 60px;
      }


    </style>
</head>

<body>
    <div>
    <h1>PHP Calculator</h1>
        <form action="calculator.php" method="post">
        <label for="First Number"></label>
        <input type="number" name= "fname"> <br> <br>
        <label for="Second Number"></label>
        <input type="number" name= "sname"> <br><br>

        <input type="submit" name= "add" value="+">
        <input type="submit" name = "substract" value="-">
        <input type="submit" name="multiple" value= "x">
        <input type="submit" name="divide" value= "/">
        <input type="submit" name="clear" value="c">
        </form>
       <h1>Result</h1>

       <h2>
           <?php

           $a=$_POST['fname'];
           $b=$_POST['sname'];

           if(isset($_POST['add'])){
               echo $a+$b;
           }
           elseif(isset($_POST['substract'])){
              echo $a-$b;
           }
           elseif(isset($_POST['multiple'])){
               echo $a*$b;
           }
           elseif(isset($_POST['divide'])){
               echo $a/$b;
           }
           elseif(isset($_POST['clear'])){
               echo 0;
           }
           
           ?>
       </h2>
    </div>    
        
</body>

</html>