<?php
// Your code here!
    $tab_taches = [];
    
    function ajouterTache(&$tab_taches, $tache){ //modification sans nouveau copie de $tab_taches
        $tab_taches[] = $tache;
    }
    
    //affciher toutes les tâches
    function afficherTaches($tab_taches){
        if(empty($tab_taches)){
            echo "<h1> Aucune tâche \n </h1>"; 
            return; 
            
        }
        foreach ($tab_taches as $i => $tache){
            echo($i + 1)."-".$tache."\n";
        }
    }
    
    //Supprimer une tâche
    function supprimerTaches($tab_taches,$id){
        if(isset($tab_taches[$id - 1])){
            unset($tab_taches[$id -1 ]);
            $tab_taches = array_values($tab_taches);
            echo("Suppression fait avec succès de la tache : ".$tab_taches[$id - 1]."\n");
            afficherTaches($tab_taches);
        }
        
    }
    
    ajouterTache($tab_taches, "Extraire les données");
    ajouterTache($tab_taches, "Trier les données");

    afficherTaches($tab_taches);
    supprimerTaches($tab_taches, 1);
    
    
?>
