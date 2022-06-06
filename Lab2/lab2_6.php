<!doctype html>
<html>
    <body>
        <?php
        $num = array(40, 60, 45); 
        $max=0;       
        for($x=0;$x<3;$x++){
            if($num[$x]==45)
            {
                $max=45;
                echo "The number is found and value is " .$max;
            }
        }
        ?>
        </body>
        </html>
