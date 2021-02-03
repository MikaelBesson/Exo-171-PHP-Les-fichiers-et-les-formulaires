<?php
if(isset($_GET['success'])) { ?>
    <div class="success">Vos fichiers ont biebn été envoyés, merci !</div><?php
}
elseif(isset($_GET['e'])) {
    $messages = base64_decode($_GET['e']);
    $messages = json_decode($messages);
    foreach($messages as $message) { ?>
        <div class="error"><?=$message?></div><?php
    }
}

?>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="fichier.php">
        <title>index</title>
    </head>
    <body>
    <!--
 * 1. Créez un formulaire classique contenant un champs input de type file
 * 2. Faites pointer l'action sur la page fichier.php ( que vous créerez )
 * 3. Gérez l'upload du fichier, le fichier doit être stocké dans le répertoire upload de votre site
 * 4. Gérez tous les cas de figure:
 *    - Le fichier doit être une image
 *    - On ne peut pas uploader de fichier image de plus de 3Mo
 *    - Les fichiers doivent être renommés
 *    - Affichez les erreurs sur la page index.php s'il y en a ( fichier non présent, erreur d'upload, etc... )
 * ( BONUS )
 * 5. Une fois l'upload terminé, enregistrez le nom du fichier uploadé dans le fichier file.json ( que vous créerez s'il n'existe pas )
 *    Attention, trouvez une solution pour que le fichier contienne du JSON valide !
 * 6. Affichez sur la page index les fichiers ayant déjà été uploadés.
-->

    <form action="fichier.php" method="post" enctype="multipart/form-data">
        <label for="fichier">Choisir une image</label><br>
        <input type="file" name="fichierUtilisateur" id="fichier" accept=".jpg, .jpeg, .png"><br>
        <input type="submit" value="Envoyer">
    </form>


    </body>
    </html>

<?php
