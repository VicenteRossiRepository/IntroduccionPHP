<?php include 'includes/header.php';

//While
$i = 0;

while($i < 10) {
    echo $i. '<br>';
    $i++;
};

echo '<br>';
// Do while
$i = 0;
do{
    echo $i. '<br>';
    $i++;
}while($i < 10);
echo '</br>';

//for loop
for($i = 1; $i <= 100; $i++) {
    if($i % 3 == 0 && $i % 5 == 0) {
        echo $i. ' - FIZZ BUZZ <BR>';
    } 
    elseif($i % 3 == 0) {
        echo $i. ' - FIZZ <BR>';
    }
    elseif($i % 5 == 0) {
        echo $i. ' - BUZZ <BR>';
    }else{
        echo $i. '<BR>';
    }
    
};

echo '<br>';


include 'includes/footer.php';