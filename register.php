<?php
session_start();
require('config/dbConnect.php');
require('include/functions.php');
require('include/constantes.php');

// si le formulaire a été soumise 
if(isset($_POST['register']))
{

  // si tout les champs ont était remplies
    if(not_empty(['name','pseudo','email','password','password_confirm'])){

          $errors = []; 
          extract($_POST);

          if(mb_strlen($pseudo) < 3){
            $errors[] = "pseudo trop cours ! (minimum 3 caractère)";
          }  

          if(filter_var($email,FILTER_VALIDATE_EMAIL)){
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

          if( is_already_in_use('pseudo', $pseudo, 'users' ))
          {
            $errors[] = "pseudo déjà utilise";
          }

          if(is_already_in_use('email', $email, 'users'))
          {
            $errors[] = "Adresse E-mail déjà utilise";
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
            $password = sha1($password);
            $token = sha1($pseudo.$email.$password);
            
            ob_start();
            require('templates/emails/activation.tmpl.php');
            $content = ob_get_clean();

            $headers = 'MIME-Version: 1.0'. "\r\n";
            $headers = 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
            mail($to, $subject, $content, $headers);

            
 
            // informer    à l'utilisateur pour qu'il verifie sa boite de reception  

            set_flash("mail d'activation vient d'etre envoye !" , 'success');

            $q = $db->prepare('INSERT INTO users(name, pseudo,email, password) VALUES (:name, :pseudo, :email, :password)');

            $q->execute([
              'name' => $name,
              'pseudo' => $speudo,
              'email' => $email,
              'password' => ha1($password)
            ]);

            redirect('index.php');


        } else {
            save_input_data();
        }
    } else {
        $errors[] = "Veillez remplir tout les champs SVP !!";
        save_input_data();
        }
} else {
      clear_input_data();
      }

?>

<?php include('views/register.view.php'); ?>