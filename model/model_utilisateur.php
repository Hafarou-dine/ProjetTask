<?php 
    // Fonction qui ajoute un utilisateur en BDD
    function addUser($bdd, $nom, $prenom, $login, $mdp):void{
        try{
            $req = $bdd->prepare('INSERT INTO utilisateur(name_user, first_name_user, login_user, mdp_user)
            VALUES(:name_user, :first_name_user, :login_user, :mdp_user);');
            $req->execute(array(
                'name_user' => $nom,
                'first_name_user' => $prenom,
                'login_user' => $login,
                'mdp_user' => $mdp
            ));
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // Fonction qui verifie si un mail existe dèjà en BDD
    function mailExiste($bdd, $login):bool{
        try{
            $req = $bdd->prepare('SELECT login_user FROM utilisateur
            WHERE login_user = :login_user;');
            $req->execute(array(
                'login_user' => $login
            ));
            $data = $req->fetch(PDO::FETCH_ASSOC);
            if($data != null){
                return true;
            }
            else{
                return false;
            }
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }


    // Fonction qui renvoie les details d'un utiisateur grace à son login
    function getUserOfLogin($bdd, $login):array{
        try{
            $req = $bdd->prepare('SELECT * FROM utilisateur
            WHERE login_user = :login_user;');
            $req->execute(array(
                'login_user' => $login
            ));
            return $req->fetch(PDO::FETCH_ASSOC);
        }
        catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
    }
?>