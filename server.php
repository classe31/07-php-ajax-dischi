<?php
    include __DIR__ . '/database.php';

    header('Content-Type: application/json');

    //echo json_encode($database);


    if ( isset($_GET['genere']) && $_GET['genere'] != "" ) {

        
        // array per dischi filtrati
        $databaseFiltrato = [];

        // foreach -> recupera i dischi che hanno genere uguale al parametro ricevuto in GET $_GET['genere']
        foreach ($database as $riga) {

            if ( strtolower($riga['genre']) == strtolower($_GET['genere']) ) {

                $databaseFiltrato[] = $riga;

            }

        }

        echo json_encode($databaseFiltrato);

    } else {

        echo json_encode($database);

    }



?>