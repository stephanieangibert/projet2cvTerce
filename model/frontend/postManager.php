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
public function displayDelete($id)
{
   $db = $this->dbConnect();
   $delPos =$db->prepare("DELETE FROM actualite WHERE id = ?");
   $delPos->execute(array($id));
   $delPost=$delPos->fetch();
   return $delPost;
}
public function editPosts($idPt)
{
    $db = $this->dbConnect();
    $sqedp =$db->prepare( "SELECT * FROM actualite where id =?");   
    $sqedp->execute(array($idPt));
    $sqeditpo=$sqedp->fetch();
    return $sqeditpo;
}
public function upd($title,$content,$photo,$id)
{
    $db = $this->dbConnect();
    $sqPosts= $db->prepare("UPDATE actualite SET title = ?,content = ?,photo = ? WHERE id = ?");   
    $postup=$sqPosts->execute(array($title,$content,$photo,$id));
    return $postup;                    
    
                   
}
}