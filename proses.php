<?php
if(isset($_POST['num1']) && isset($_POST['operator']) && isset($_POST['num2'])){
    $num1=$_POST['num1'];
    $operator=$_POST['operator'];
    $num2=$_POST['num2'];
    $result='';
    switch($operator){
        case'+':
        $result=$num1+$num2;  break;
        case'-':
        $result=$num1-$num2;  break;
        case'*':
        $result=$num1*$num2;  break;
        case'/':
        if($num2==0){
            $result='Tidak dapat dibagi dengan nol';
        } else{
            $result=$num1/$num2;
        }
        break;
        default:
        $result='Operator tidak valid';
        break;
}
    echo "Hasil:$num1 $operator $num2=$result";
}
?>
