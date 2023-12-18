<?php  
    $sum = 0;
    $N = $_POST["N"];
    $x = $_POST["x"];
    if($x > 0){
        for ($n = 0; $n <= $N; $n++){
            $sum = $sum + (($x-1)**(2*$n+1))/((2*$n+1)*(($x+1)**(2*$n+1)));
        }
    $sum = 2 * $sum;
    echo $sum;
    }
?>
<html>
<body>
    <p>x должен быть больше 0</p>
    <form method="POST">
        <input type = "text" placeholder="Введите n" name = "N"><br><br>
        <input type = "text" placeholder="Введите x" name = "x"><br><br>
        <button type="submit"> Отправить </button>
    </form>
</body>
</html>

