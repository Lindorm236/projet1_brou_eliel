<?php
require_once "../functions/userCrud.php";
require_once "../functions/validationSignup.php";
require_once "../utils/connexion.php";
require_once "../functions/functions.php";
session_start();
/*if (isset($_POST["formInscription"]) && !empty($_POST["formInscription"])) {
    echo "<input type='text'";
}*/
//Verification des champs()
if (isset($_POST["formInscription"])) {
    // echo ("coucou vous n'avez pas rempli le formulaire");
    var_dump($_POST);
    $_SESSION['signup_form'] = $_POST;

    unset($_SESSION['signup_errors']);


    //Verification user name
    if (isset($_POST["user_name"]) and isset($_POST["email"]) and isset($_POST["pwd"]) and isset($_POST["fname"]) and isset($_POST["lname"])) {
        // echo "<p>error : </p>";

        // vider les messages d'erreur

        $userNameValidationData = is_user_name_valid($_POST["user_name"]);

        $emailValidationData = is_email_valid($_POST["email"]);
        $passwordValidationData = is_password_valid($_POST["pwd"]);
        $fnameValidationData = is_fname_valid($_POST["fname"]);
        $lnameValidationData = is_lname_valid($_POST["lname"]);

        $verif = true;
        //Verification du user name
        if (!$userNameValidationData["isValid"]) {
            echo "<input type='text'>";
            echo "<br>";
            echo ($userNameValidationData["msg"]);
            echo "<br>";
            echo "<br>";
            $verif = false;
        }

        //verification de l'email
        if (!$emailValidationData["isValid"]) {
            echo "<input type='text'>";
            echo "<br>";
            echo ($emailValidationData["msg"]);
            echo "<br>";
            echo "<br>";
            $verif = false;
        }

        //verification du password
        if (!$passwordValidationData["isValid"]) {
?>
            <input type="text" value="<?php $_POST["user_name"]; ?>">
<?php
            echo "<br>";
            echo ($passwordValidationData["msg"]);

            echo "<br>";
            echo "<br>";
            $verif = false;
        }

        //verification du nom
        if (!$fnameValidationData["isValid"]) {
            echo "<input type='text'>";
            echo "<br>";
            echo ($fnameValidationData["msg"]);
            echo "<br>";
            echo "<br>";
            $verif = false;
        }

        //verification du prénom
        if (!$lnameValidationData["isValid"]) {
            echo "<input type='text'>";
            echo "<br>";
            echo ($lnameValidationData["msg"]);
            echo "<br>";
            echo "<br>";
            $verif = false;
        }

        if ($verif) {
            // si verif == true : on veut  enregistrer dans la DB puis aller a la page login
            $encodedPwd = encodePwd($_POST['pwd']);
            echo ("super");
            $token = hash('sha256', random_bytes(32));
            $data = [
                'user_name' => $_POST['user_name'],
                'email' => $_POST['email'],
                'pwd' => $_POST["pwd"],
                'fname' => $_POST['fname'],
                'lname' => $_POST['lname'],
                'billing_address_id' => 1,
                'shipping_adress_id' => 1,
                'token' => $token,
                'role_id' => 3
            ];
            var_dump($data);
            //enregistrer dans la DB

            $newUser = createUser($data);
            // redirect vers login
            $url = '../pages/login.php';
            header('Location: ' . $url);
        } else {
            // si verif == false : on veut revenir sur le for, et qfficher nos ,essqges d.erreur
            echo ("faux");
            //recuperer les messages d ereur dans un array 
            // rendre se array dispo pour les afficher dans le form
            $_SESSION['signup_errors'] = [
                'user_name' => $userNameValidationData['msg'],
                'email' => $emailValidationData['msg'],
                'pwd' => $passwordValidationData['msg'],
                'fname' => $fnameValidationData['msg'],
                'lname' => $lnameValidationData['msg']
            ];
            // revenir sur le form
            // afficher les messages d'erreur
            $url = '../pages/signup.php';
            header('Location: ' . $url);
        }
    }
}
