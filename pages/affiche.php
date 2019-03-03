<h1 class="title center">Bienvenue sur la page de l'affichage</h1>



<table class="table is-bordered is-striped is-narrow is-fullwidth is-hoverable">
    <thead>
    <tr>
        <td>Titre</td>
        <td>Commentaire</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data->query("select * from chiffre",'App\Table\Article') as $post): ?>
    <tr>

        <td><a href="<?= $post->url; ?>"><?= $post->Titre;?></a></td>
            <td><?= $post->Commentaire;?></td>

    </tr>
    <?php  endforeach ?>
    </tbody>
</table>