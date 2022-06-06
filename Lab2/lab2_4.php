<!doctype html>
<html>
    <body>
        <?php
        $num = array(40, 60, 45); 
        $max=0;       
        for($x=0;$x<3;$x++){
            if($num[$x]>$max)
            {
                $max=$num[$x];
            }
        }
        echo "The largest number is: ". $max;
        ?>
        </body>
        </html>
