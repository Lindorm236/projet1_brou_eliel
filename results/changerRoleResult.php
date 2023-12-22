<?php
require_once "../functions/userCrud.php";
require_once '../functions/functions.php';
require_once '../utils/connexion.php';

session_start();
$userName = $_POST["user_name"];


$verif = true;
if (isset($userName)) {
    if (!empty($userName)) {
        $recupInfo = getUserByUsername($userName);
        //recupère les informations et les analyse
        if ($recupInfo) {
            //affichera les informations dans les champs si les informations existent
?>
            <h1>Que voulez vous changer ?</h1>
            <h2>Entrez la valeur a changer svp !</h2>
            <form action="../results/verificationChangerRole.php" method="post">
                <input type="text" value="<?php echo ($recupInfo["id"]) ?>" id="id" name="id" hidden>
                <fieldset>
                    <p>nom d'utilisateur : &emsp;<?php echo ($recupInfo["user_name"]) ?></p>
                    <label>Son role est &emsp; <?php echo ($recupInfo["role_id"]) ?> </label>
                </fieldset>
                <p>1: Super_administrateur</p>
                <p>2: Administrateur</p>
                <p>3: Client</p>
                <H3>Entrez le chiffre correspondant ou la valeur</H3>
                <input type="text" name="role_id" id="role_id" placeholder="1 ou super_administarteur ">
                <button type="submit" value="modifier">Modifier</button>
            </form>
<?php
        }
    }
}
