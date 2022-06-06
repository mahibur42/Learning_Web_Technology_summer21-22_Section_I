<!doctype html>
<html>
    <body>
        <php?
        $amount=5000;
        $vat=( $amount / 100)*15;
        $total = $amount + $vat;
        echo " amount is " .$amount ;
        echo " Vat is " .$vat;
        echo " Total amount = " .$total;
        ?>
</body>
</html>
