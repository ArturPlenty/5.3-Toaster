<?php

    $mein_toaster = new Toaster();
    $super_toaster = new Supertoaster();

    if($_POST['hebel']) {

        $mein_toaster->save_data();

        $mein_toaster->toast_reintun();
        echo $mein_toaster->anzahl_toasts_status . '<br>';

        $mein_toaster->toast_zeiteinstellen();
        echo $mein_toaster->toast_zeit_status . '<br>';
    }

    if($_POST['toasten']) {

        if($mein_toaster->toaster_data['sekunden'] < 40) {

            $mein_toaster->load_data();
            $mein_toaster->toasten();
            echo $mein_toaster->toastbrot . '<br>';
        }

        if($mein_toaster->toaster_data['sekunden'] >= 40) {

            $super_toaster->superToast();
        }
        

    }

    if($_POST['zustand']) {

        $mein_toaster->load_data();
        $mein_toaster->toasten();
        $mein_toaster->zustand();
    }
    
    if($_POST['farbe']) {

        $mein_toaster->farbe_abfragen();
    }

    if($_POST['schaechte']) {

        $mein_toaster->schaechte_abfragen();
    }

?>