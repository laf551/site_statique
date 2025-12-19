<?php 
//Mini-projet gestionnaire de tâche
    $tasks = []; //tab
    
    function create_task(&$tasks,$new_task){
        $tasks[] = $new_task; 
        echo('The task "'.$new_task.'" is added succesfully.'."\n") ; 
    }
    $i = 1;
    function display_tasks($tasks,$i){
        foreach ($tasks as  $new_task ){
            echo($i.":".$new_task);
            $i++; 
        }
    }
    
    function delete_task(&$tasks,$delete_task,$i){
       
        foreach ($tasks as $t => $task){
            if($task == $delete_task){
               if (isset($tasks[$t])){
            
                    unset($tasks[$t]); //fonction pour supprimer
                    //$tasks["attend un numero"]
                    $tasks = array_values($tasks);
                    echo("\n Delete: ".$delete_task);
                    display_tasks($tasks,$i);
                }else{
                    echo("the task".$delete_task." is not exist"); 
                }
            }
        }
        
    }

    create_task($tasks,"code in C#"); 
    create_task($tasks, "code in C++");
    display_tasks($tasks,$i);
    
    delete_task($tasks,"go to work",$i);
?> 
