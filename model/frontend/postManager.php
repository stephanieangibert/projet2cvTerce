<?php


require_once("model/frontend/manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)


class PostManager extends Manager
{
   /*  public function getPosts($begin,$RecipePerPage)
{
    
    $db = $this->dbConnect();    
    $req=$db->query('SELECT recipe.id, recipe.title,recipe.ingredients,recipe.content,recipe.photo,recipe.love,users.pseudo,users.avatar
     FROM recipe INNER JOIN users ON recipe.id_user=users.id
     WHERE statut=1 ORDER BY date_content DESC LIMIT '. $begin .','. $RecipePerPage .'');
     return $req;
} */
public function add($title,$content,$photo)
{
    $db = $this->dbConnect();
    $add = $db->prepare('INSERT INTO actualite(title,content,photo) VALUES(?,?,?)');
    $addActua = $add->execute(array($title,$content,$photo));    
    return $addActua;
}
public function displayActua()
{
    $db = $this->dbConnect(); 
    $reqR=$db->query('SELECT * FROM actualite ORDER BY id DESC');
    return $reqR;

}
}