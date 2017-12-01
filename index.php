<a href="?" title="Vers la page d'accueil">Accueil</a>
<br>
<a href="?page=categories" title="Consulter la liste des catégories">Catégories</a>

<hr>

<form action="index.php" method="post">
  <label for="listName">Create a new list</label>
  <input id="listName" type="text" name="listName" placeholder="Enter a name for your new list">
  <input type="submit" value="Create">
</form>

<hr>

<?php if(isset($_POST['listName'])): ?>
  <p>You created a new list named : <span style="font-weight:bold;text-transform:uppercase"><?= $_POST['listName']; ?></span></p>
<?php endif; ?>

<?php

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

// On récupère le nom du controller visé via un $_GET
$controllerName = isset($_GET['page']) ? $_GET['page'] : '';

// Est-ce que ce controller existe ?
if (file_exists('controllers/'.$controllerName.'.php')) {
  // Oui il existe
  // On affiche le controller correspondant
  include 'controllers/'.$controllerName.'.php';
}
else {
  // Non il existe pas !
  include 'controllers/home.php';
}
