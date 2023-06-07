<?php

    $mein_toaster = new Toaster();

    if($_POST['hebel']) {

        $mein_toaster->save_data();

        $mein_toaster->toast_reintun();
        echo $mein_toaster->anzahl_toasts_status . '<br>';

        $mein_toaster->toast_zeiteinstellen();
        echo $mein_toaster->toast_zeit_status . '<br>';
    }

    if($_POST['toasten']) {

        $mein_toaster->load_data();

        $mein_toaster->toasten();
        echo $mein_toaster->toastbrot;

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