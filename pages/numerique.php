<h1 class="title">Votre Machine a calculer</h1>


<div class="block">
    <div class="notification subtitle is-success ">Calcule pour l'addition</div>
    <?php
        $numerique= new numerique();
        echo "Le total du chifre est " . Numerique::Addition(5,6);
       


        ?>
</div>

<div class="block">
    <div class="notification subtitle is-info">Calcule pour soustraction</div>
    <?php echo "Le total du chifre est " . Numerique::Soustraction(10,4); ?>
</div>
