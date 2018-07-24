<?php // Contrôle d'intégrité des données

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $ok = true;
    
    if(empty($_POST['marque']) || strlen($_POST['marque']) < 3)
    {
        // display error
        echo 'Une marque de véhicule doit contenir au moins 3 caractères.';
        
        $ok = false;
    }
    
   
    
    if(empty($_POST['modele']) || strlen($_POST['modele']) < 4)
    {
        // display error
        echo 'Un modèle de véhicule doit contenir au moins 4 caractères.';
        
        $ok = false;
    }
    
    if(empty($_POST['annee']) || !is_numeric(($_POST['annee'])))
    {
        // display error
        echo 'Veuillez entrer une année valide';
        
        $ok = false;
    }
    
   
    if(empty($_POST['couleur']) || !in_array($_POST['couleur'], ['blanc','noir','jaune','gris','vert','bleu','marron','autre']))
    {
        // display error
        echo 'Veuillez entrer une couleur répertoriée.';
        
        $ok = false;
    }
    
    if($ok)
    {
        echo 'Saisie correcte. Enregistrement validé.';
    }
    else
    {
        http_response_code(400);
        echo 'Problème. Veuillez contacter votre administrateur.';
    }
    
}
else
{
    // display error
    http_response_code(405);
    echo 'Problème. Veuillez contacter votre administrateur.';
}