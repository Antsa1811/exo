<h1 class="title center">Bienvenue sur la page de l'affichage</h1>



<table class="table is-bordered is-striped is-narrow is-fullwidth is-hoverable">
    <thead>
    <tr>
        <td>Titre</td>
        <td>Commentaire</td>
        <td>Afficher plus</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data->query("select * from chiffre",'App\Table\Article') as $post): ?>
    <tr>

        <td><a href="<?php $post->url; ?>"><?= $post->Titre;?></a></td>
            <td><?= $post->Commentaire;?></td>
            <td><a href="<?php $post->url; ?>">Plus de detail</a></td>
    </tr>
    <?php  endforeach ?>
    </tbody>
</table>