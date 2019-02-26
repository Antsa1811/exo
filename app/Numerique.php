<?php


class Numerique{

    private static $a;
    private static $b;
    private static $total;

    public static function Addition($a,$b){
        
        self::$total=self::$a=$a+self::$b=$b;

        return self::$total;
        
    }

    public static function Soustraction($a,$b)
    {
        self::$total=self::$a=$a-self::$b=$b;

        return self::$total;
    }

    
    
}

?>