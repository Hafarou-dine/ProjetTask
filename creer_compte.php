<?php 
    // session
    session_start();

    /* ---------------------------------------- Imports ---------------------------------------- */
    // importer la connexion à la bdd
    include "./utils/connectBDD.php";
    // importer le model
    include "./model/model_utilisateur.php";
    // importer les fonctions utilitaires
    include "./utils/fonctions.php";
    // importer la vue(interface)
    include "./view/view_creer_compte.php";


    /* ---------------------------------------- Logique ---------------------------------------- */
    if(isset($_POST['name_user']) && ($_POST['name_user'] != "") &&
    isset($_POST['first_name_user']) && ($_POST['first_name_user'] != "") &&
    isset($_POST['login_user']) && ($_POST['login_user'] != "") && 
    isset($_POST['mdp_user']) && ($_POST['mdp_user'] != "")){
        $nom = $_POST['name_user'];
        $prenom = $_POST['first_name_user'];
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];
        $hashMdp = password_hash($mdp, PASSWORD_BCRYPT, array('cost' => 10));
        if(mailExiste($bdd, $login)){
            $msg = "Creation de compte impossible, ce login est déjà utilisé par un autre utilisateur";
            echo '
            <script>
                ecrireMsg("'.$msg.'");
            </script>';
            redirection("./creer_compte.php", "5000");
        }
        else{
            addUser($bdd, $nom, $prenom, $login, $hashMdp);
            $msg = "Creation de votre compte reussi";
            echo '
            <script>
                ecrireMsg("'.$msg.'");
            </script>';
            redirection("./creer_compte.php", "5000");
        }
    }
?>