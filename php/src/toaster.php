<?php
    
    class Toaster {

        public $schaechte = 2;
        public $farbe = "Blau";
        public $anzahl_toasts;
        public $anzahl_toasts_status;
        public $toast_zeit;
        public $toast_zeit_status;
        public $toast_zustand;
        public $toaster_data = [];

        public function __construct() {
            
            $this->anzahl_toasts = $_POST['anzahl'];
            $this->toast_zeit =  $_POST['zeit'];
        }

        public function save_data() {

            $this->toaster_data = [
                "scheiben" => $this->anzahl_toasts,
                "sekunden" => $this->toast_zeit
            ];

            $encoded_data = json_encode($this->toaster_data, JSON_PRETTY_PRINT);

            file_put_contents('toast_data.txt', $encoded_data);
        }

        public function load_data() {

            $decoded_data = file_get_contents('toast_data.txt');

            $this->toaster_data = json_decode(($decoded_data), true);
        }

        public function toast_reintun() {

            if($this->anzahl_toasts <= 0) {

                $this->anzahl_toasts_status = "Es befinden sich keine Toasts im Toaster";
            }

            if($this->anzahl_toasts > 0 & $this->anzahl_toasts <= $this->schaechte) {

                $this->anzahl_toasts_status = $this->anzahl_toasts . " Toast im Toaster";
            }

            if($this->anzahl_toasts > $this->schaechte) {

                $this->anzahl_toasts_status = "Kein Platz. Es passen maximal " . $this->schaechte . " Toasts rein";
            }
        }

        public function toast_zeiteinstellen() {

            if($this->toast_zeit <= 0) {

                $this->toast_zeit_status = "Es wurde keine Zeit eingestellt";
            }

            else {

                $this->toast_zeit_status = "Der Toaster wurde auf " . $this->toast_zeit . " Sekunden eingestellt";
            }
        }

        public function toasten() {

            if($this->toaster_data['sekunden'] == 0 | $this->toaster_data['sekunden'] < 0) {

                $this->toast_zustand = "Das Toast is ungetoastet";
            }

            if($this->toaster_data['sekunden'] > 0 & $this->toaster_data['sekunden'] <= 5) {

                $this->toast_zustand = "Das Toast ist leicht getoastet";
            }

            if($this->toaster_data['sekunden'] > 5 && $this->toaster_data['sekunden'] <= 30) {

                $this->toast_zustand = "Das Toast ist stark getoastet";
            }

            if($this->toaster_data['sekunden'] > 30) {

                $this->toast_zustand = "Das Toast ist verbrannt";
            }
        }

        public function farbe_abfragen() {

            echo "Der Toaster ist " . $this->farbe; 
        }

        public function schaechte_abfragen() {

            echo "Der Toaster hat " . $this->schaechte . " Schächte"; 
        }
    }
?>