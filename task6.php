<?php
$names = array ('joe' => "Smarties" , 'Ahmed' => "Pringles" ,
'cassie' => "Marmite crisps " , 'Ben' => "Mr Kiplings cakes");

foreach ($names as $f => $val) {
    // echo $f . " = " . $val . "<br>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> task Mahi 6 </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> Associative array </h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th> <h3> Name </h3> </th>
        <th> <h3> food  </h3> </th>
        
      </tr>
    </thead>
    <tbody>
      <?php

        foreach ($names as $f => $val) {
    
        echo "
      <tr>
        <td> $f </td>
        <td> $val </td>
      </tr>";
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
<!-- Q2 -->
<div class="container">
  <h2> chek number  </h2>
  <div class="alert alert-success">
<?php
$x = 0 ;
$res = " ";
function checknumber($x){
  if ($x < 0 );}
  echo "$x is positive";
echo "<br>";
  if ($x > 0){
  echo " $x is negative";}
  echo "<br>";
  if ($x = 0);{
   echo "the number is zero";
   echo "<br>";
   
}

echo "<br>";

if ($x >= 0 && $x < 15.5) {
    var_dump (is_int ($res));
}
echo "<br>";

 if ($x < 0 && $X < 76.8 );
    var_dump (is_int ($x));
    echo "<br>";


   if ($x = 10.3);

var_dump (is_float($x));
echo "<br>";

$i=0;
if ($i < 0 && $i < 99);
echo is_numeric ($i) . "<br>";


 ?>


<!-- nested foeach  -->

<?php
echo "nested foreach : " . "<br>";
$numbers = array (
array (1 ,2 ,3 ,4),
array (10 ,20 ,30),
array (2 ,4 ,6 ,8),
);

foreach ($numbers as $value) {

  foreach ($value as $item) {
    echo $item ."<br>";
    
  }
}
?>