<?php
// si le formulaire a été soumise 
if(isset($_POST['register']))
{
  require('config/dbConnect.php');
  require('include/functions.php');
  require('include/constantes.php'); 

  // si tout les champs ont était remplies
    if(not_empty(["name","pseudo","email","password","password_confirm"])){

          $errors = []; 
          extract($_POST);

          if(mb_strlen($pseudo) < 3){
            $errors[] = "pseudo trop cours ! (minimum 3 caractère)";
          }

          if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[] = "Adresse email invalide";
          }

          if(mb_strlen($password) < 6){
            $errors[] = "Mot de passe trop cours ! (minimum 6 caractère)";
          }
          else
          {
            if($password != $password_confirm)
            {
                $errors[] = "Mot de passe incorect";
            }
          }

          if(is_already_in_use("pseudo", $pseudo, "users"))
          {
            $errors[] = "pseudo déjà utilisé";
          }

          if(is_already_in_use("email", $email, "users"))
          {
            $erros[] = "Adresse E-mail déjà utilisé";
          }

          if(count($errors) == 0)
          {
            // c'est ici que nous pouvons mettre :
            
            // Enregistrement de l'utilisateur

            // Message de bienvenue 

            // Redirection vers la page d'acceuil

            // OU BIEN NOUS POUVONS METRE :

            // Emvoi d'un Email de confirmation

            $to = $email;
            $subject = WEBSITE_NAME. "- ACTIVATION DE COMPTE";
            $token = sha1($pseudo.$email.$password);
            
            ob_start();
            require('templetes/emails/activation.tmpl.php');

            $content = ob_get_clean();

            $header = 'MINE-version:1.0'."\r\n";
            $headers = 'content-type:text/hml; charset=iso-8895-1'."\r\n"; 
            email($to, $subject, $content, $headers);

            echo "mail d'activation vient d'etre envoye !";
 
            // informer à l'utilisateur pour qu'il verifie sa boite de reception  



          }

    }
    else
    {
        $errors[] = "Veillez remplir tout les champs SVP !!";

    }
}
?>

<?php include('views/register.view.php'); ?>