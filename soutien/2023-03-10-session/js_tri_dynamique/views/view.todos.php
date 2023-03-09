<div id="todos">

<div id="filters">
    <button id="todo">A faire</button><button id="done">Terminé</button><button id="all">Tout</button>
</div>

<?php foreach ($todos as $todo) { ?>

<article data-completed = <?php echo 0 === $todo->status ? 'false' : 'true'; ?>>
    <h2><?php echo $todo->title; ?>
    <p>Complétée : <?php echo 0 === $todo->status ? 'Non' : 'Oui'; ?></p>
</article>

<?php } ?>
</div>