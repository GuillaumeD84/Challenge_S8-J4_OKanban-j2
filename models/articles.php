<?php

class Articles
{

  public function create($data)
  {

    // On a besoin des informations
    // qui constituent le nouvel article
    // $data['title'] => titre du nouvel article
    $sql = 'INSERT INTO articles (id, title, content, category) VALUES (NULL, "'.$data['title'].'", "'.$data['content'].'", "photo")';

    // On exécute la requête SQL
    // ...
  }

  public function update()
  {

  }

  public function delete($idArticle)
  {

    // On crée le SQL
    $sql = 'DELETE FROM articles WHERE id='.$idArticle;

    // On exécute le SQL
    // ...
  }

  public function getList()
  {

    $sql = 'SELECT * FROM articles';
    return [];

    // On imagine qu'on a créé $db

    // On exécute la requête pour récuprer
    // tous les articles
    // $query = $db->execute($sql);
    // $results = $query->fetch(PDO::FETCH_ASSOC);

    //return $results;
  }
}
