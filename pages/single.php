<h1 class="title">Bienvenue sur le site pour afficher le single </h1>

<?php $post=$data->prepare("SELECT * FROM chiffre WHERE id=?",[$_GET['id']],'App\table\Article',true);

?>

<div class="block">
    <div class="notification">
        <h1 class="title" >Voci le titre  :<?= $post->Titre ?></h1>
        <p class="subtitle"> Voici le commentaire :<?= $post->Commentaire ?> </p>
    </div>
</div>


