<h1 class="title">Votre Machine a calculer</h1>


<div class="block">
    <div class="notification subtitle is-success ">Calcule pour l'addition</div>
    <?php
        $numerique= new App\numerique();
        echo "Le total du chiffre est " . $numerique->Addition(5,6);?>
</div>

<div class="block">
    <div class="notification subtitle is-info">Calcule pour soustraction</div>
    <?php echo "Le total du chiffre est " . $numerique->Soustraction(6,4); ?>
</div>

<div class="block">
    <div class="notification subtitle is-primary">Calcule pour la multiplication</div>  
    <?php echo "Le total de la multiplication est " . $numerique->multiplication(5,5); ?> 
</div>

<div class="block">
    <div class="notification subtitle is-error">Calcule pour la division</div>  
    <?php echo "Le total de la division est " . $numerique->Division(8,4) ?>
</div>

<div class="block">
    <div class="notification subtitle">Calcule de delta</div>
    <?php 
    $arrayobject=$numerique->Delta(1,4,2); 
    var_dump($arrayobject);
    
    $arryob =new ArrayObject($arrayobject);
    if($arryob[3] === 'negative' ){
        echo $arryob[0];
    }elseif($arryob[3] === 'zero'){
        echo $arryob[0]. "la seul solution " . $arryob[1] ; 
    }else{
        echo $arryob[0]. "le premiere solution " . $arryob[1] . " le deuxieme solution " . $arryob[2] ;
    }
    //echo $arryob[0]. "le premiere solution " . $arryob[1] . " le deuxieme solution " . $arryob[2] ;
    
    ?>
</div>