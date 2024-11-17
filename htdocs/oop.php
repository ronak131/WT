<!doctype html>
<html>
    <head>
        <title>OOPs in php</title>
    </head>
    <body>
        <?php
        class Books {
            var $title;
            var $price;
            function __construct($title,$price){
                $this->title=$title;
                $this->price=$price;
            }
            function getTitle(){
                return $this->title;
            }
            function getPrice(){
                return $this->price;
            }
        }
        $phy=new Books('Physics for high School',100);
        $chem=new Books('Advanced Chemistry',200);
        echo $phy->getTitle();
        echo "<br>";
        echo $phy->getPrice();
        echo "<br>";
        echo $chem->getTitle();
        echo "<br>";
        echo $chem->getPrice();
        ?>
    </body>
</html>