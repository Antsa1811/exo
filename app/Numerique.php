<?php



class Numerique{

    private $a;
    private $b;
    private $c;
    private  $total;
    protected $solution_1;
    protected $solution_2;
    protected $retour;

    protected $message;

   
    public  function Addition($a,$b){
        
         $this->total= $this->a=$a+ $this->b=$b;

        return  $this->total;
        
    }

    public  function Soustraction($a,$b)
    {
         $this->total= $this->a=$a- $this->b=$b;

        return  $this->total;
    }

    public  function Delta($a,$b,$c){
         $this->a=$a;
         $this->b=$b;
         $this->c=$c;

        $delta = $b*$b - 4*$a*$c;

        if($delta == 0)
        {
            $this->message ="Delta est null , il y a un seul solution  ";
            $this->solution_1=$b*2*$a;
            $this->retour='zero';

        }
        elseif($delta > 0){
            $this->message ="Delta est positif , il y 2  solution qui est  ";   
            $this->solution_1=$b-sqrt($a)/2*$a; 
            $this->solution_2=$b+sqrt($a)/2*$a; 
            $this->retour='positive';

        }
        else{
            $this->message ="Delta est negative , il n y pas de solution";
            $this->retour='negative';
        }

        return array($this->message,$this->solution_1,$this->solution_2,$this->retour);

    }

    
    
}

?>