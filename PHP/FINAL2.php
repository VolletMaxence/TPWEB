<?php

  define('LOGIN','Julien');  
  define('MDP','1234');  
  $message = '';      
 

  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['motDePasse']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }

    //Vérif Login
    elseif($_POST['motDePasse'] !== MDP and $_POST['login'] !== LOGIN)
    {
      $message = 'Votre login et votre mot de passe sont faux !';
    }

      elseif($_POST['login'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }

      elseif($_POST['motDePasse'] !== MDP)
    {
      $message = 'Votre mot de passe est faux !';
    }
    
      else
    {
      $message = 'Bienvenue !';
      echo '<button name="valider"
      type="submit"
      value="destroy"
      action="session_destroy()">
      Se déconnecter
      </button>';
    }
  }
?>

<html>
  <head>
    <title>Formulaire d'identification</title>
  </head>
  <body>
    <!--
    <?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
          <p>
             <label for="login">Login :</label> 
            <input type="text" 
            name="login" 
            id="login" 
            value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
          </p> -->  

          <!-- tente de comprendre le code trouver -->

          <p>
            <label for="MDP">Mot de passe :</label> 
            <input type="MDP" 
            name="motDePasse" 
            id="MDP" 
            value="" /> 
            <input type="submit" 
            name="submit" 
            value="Identification" />
          </p>
    </form>
  </body>
</html>