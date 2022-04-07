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
    include "./view/view_index.php";


    /* ---------------------------------------- Logique ---------------------------------------- */
    if(isset($_POST['login_user']) && ($_POST['login_user'] != "") && 
    isset($_POST['mdp_user']) && ($_POST['mdp_user'] != "")){
        $login = $_POST['login_user'];
        $mdp = $_POST['mdp_user'];
        $msg = "Informations incorrectes";
        if(mailExiste($bdd, $login)){
            $data = getUserOfLogin($bdd, $login);
            if(password_verify($mdp, $data['mdp_user'])){
                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['name_user'] = $data['name_user'];
                $_SESSION['first_name_user'] = $data['first_name_user'];
                $_SESSION['login_user'] = $data['login_user'];
                $_SESSION['mdp_user'] = $data['mdp_user'];
                
            }
            else{
                echo '
                <script>
                    ecrireMsg("'.$msg.'");
                </script>';
            }
        }
        else{
            echo '
            <script>
                ecrireMsg("'.$msg.'");
            </script>';
        }
    }
?>

