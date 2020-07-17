<?php 
    require_once "../connections/connection.php";

    session_start();

    if (isset($_SESSION['id_user_aplans'])) {

        $criador = $_SESSION['id_user_aplans'];
     

      

        
        if (isset($_POST['idEvento'])) {
            
            /*Selecionar todas as tasks que estavam associadas ao evento */
            $idEvento = $_POST['idEvento'];
            
            $data = array();
            $link = new_db_connection();


            $stmt = mysqli_stmt_init($link);

            $query = "SELECT id FROM tasks_do_evento WHERE ref_event_id = ?";

             
            if (mysqli_stmt_prepare($stmt, $query)) {
            
                mysqli_stmt_bind_param($stmt, "i", $idEvento);

                if (mysqli_stmt_execute($stmt)) {
                    
                    mysqli_stmt_bind_result($stmt, $idTask);
                    while (mysqli_stmt_fetch($stmt)) {
                        $data['tasks'][] = $idTask; 
                    }



                    mysqli_stmt_close($stmt);
                }else {
                    $data['criarEvento'] = "erro";
                }
            }else {
                $data['criarEvento'] = "erro";
            }


            /*Eliminar todos os users associados às tarefas que estavam associadas ao evento */
            for ($i=0; $i < count($data['tasks']); $i++) { 
                
                $idTask = $data['tasks'][$i];

                $stmt = mysqli_stmt_init($link);

                $query = "DELETE FROM tasks_de_users WHERE ref_tasks_do_evento_id = ?";

                
                if (mysqli_stmt_prepare($stmt, $query)) {
                
                    mysqli_stmt_bind_param($stmt, "i", $idTask);

                    if (mysqli_stmt_execute($stmt)) {
                        
                        

                        mysqli_stmt_close($stmt);
                    }else {
                        $data['criarEvento'] = "erro";
                    }
                }else {
                    $data['criarEvento'] = "erro";
                }
            }

            /*Eliminar todos os users que estavam associados ao evento */
            $stmt = mysqli_stmt_init($link);

            $query = "DELETE FROM users_nos_eventos WHERE ref_event_id = ?";

             
            if (mysqli_stmt_prepare($stmt, $query)) {
            
                mysqli_stmt_bind_param($stmt, "i", $idEvento);

                if (mysqli_stmt_execute($stmt)) {
                    
                    $users_eliminados = 1;


                    mysqli_stmt_close($stmt);
                }else {
                    $data['criarEvento'] = "erro";
                }
            }else {
                $data['criarEvento'] = "erro";
            }

            /*Eliminar todas as tarefas que estavam associadas ao evento */
            if ($users_eliminados == 1) {
                $stmt = mysqli_stmt_init($link);

                $query = "DELETE FROM tasks_do_evento WHERE ref_event_id = ?";

             
                if (mysqli_stmt_prepare($stmt, $query)) {
            
                    mysqli_stmt_bind_param($stmt, "i", $idEvento);

                if (mysqli_stmt_execute($stmt)) {
                    
                    $tarefas_eliminadas = 1;


                    mysqli_stmt_close($stmt);
                }else {
                    $data['criarEvento'] = "erro";
                }
                }else {
                    $data['criarEvento'] = "erro";
                }
            }

            /*Eliminar por fim o evento */
            if ($users_eliminados == 1 && $tarefas_eliminadas == 1) {
                $stmt = mysqli_stmt_init($link);

                $query = "DELETE FROM event WHERE id = ?";

             
                if (mysqli_stmt_prepare($stmt, $query)) {
            
                    mysqli_stmt_bind_param($stmt, "i", $idEvento);

                if (mysqli_stmt_execute($stmt)) {
                    
                    $data['eliminar'] = 'sucesso';


                    mysqli_stmt_close($stmt);
                }else {
                    $data['criarEvento'] = "erro";
                }
                }else {
                    $data['criarEvento'] = "erro";
                }
            }

        }


            print json_encode($data);  
      
    }

        
   