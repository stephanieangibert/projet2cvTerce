<?php


require_once("model/frontend/manager.php"); 


class PostManager extends Manager
{
     public function getPosts($begin,$RecipePerPage)
{
    
    $db = $this->dbConnect();    
    $req=$db->query('SELECT * FROM actualite ORDER BY id DESC LIMIT '. $begin .','. $RecipePerPage .'');
     
     return $req;
} 
public function totalActualite(){
    $db = $this->dbConnect();
    $reqRec=$db->query('SELECT id FROM actualite ');
    $nbrRecipe =$reqRec->rowCount();
    return $nbrRecipe;
}


public function add($title,$content,$photo)
{
    $db = $this->dbConnect();
    $add = $db->prepare('INSERT INTO actualite(title,content,photo) VALUES(?,?,?)');
    $addActua = $add->execute(array($title,$content,$photo));    
    return $addActua;
}
public function addRetour($title,$content,$photo,$id)
{
    $db = $this->dbConnect();
    $addR = $db->prepare('INSERT INTO retour(title,content,photo,id_photo) VALUES(?,?,?,?)');
    $addActuaR = $addR->execute(array($title,$content,$photo,$id));    
    return $addActuaR;
}
public function displayActua()
{
    $db = $this->dbConnect(); 
    $reqR=$db->query('SELECT * FROM actualite ORDER BY id DESC');
    return $reqR;

} 
public function displayRetour()
{
    $db = $this->dbConnect(); 
    $reqRet=$db->query('SELECT * FROM retour ORDER BY id DESC');
    return $reqRet;

}
public function displayDelete($id)
{
   $db = $this->dbConnect();
   $delPos =$db->prepare("DELETE FROM actualite WHERE id = ?");
   $delPos->execute(array($id));
   $delPost=$delPos->fetch();
   return $delPost;
}
public function displayDeleteRet($id)
{
   $db = $this->dbConnect();
   $delPos =$db->prepare("DELETE FROM retour WHERE id = ?");
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
 public function editOnePosts($idPt)
{
    $db = $this->dbConnect();
    $sqedp =$db->prepare( "SELECT * FROM actualite where id =?");      
    $sqedp->execute(array($idPt));
    $sqeditpo=$sqedp->fetch();
    return $sqeditpo;
} 
public function souvenirPhoto()
{
    $db = $this->dbConnect(); 
    $sqeditpoRe=$db->query('SELECT * FROM retour ORDER BY id DESC');
    return $sqeditpoRe;

}
 

public function upd($title,$content,$photo,$id)
{
    $db = $this->dbConnect();
    $sqPosts= $db->prepare("UPDATE actualite SET title = ?,content = ?,photo = ? WHERE id = ?");   
    $postup=$sqPosts->execute(array($title,$content,$photo,$id));
    return $postup;                    
    
                   
}

}