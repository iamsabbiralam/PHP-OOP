<?php
    // abstract class parents{

    //     abstract protected function hi($a, $b);
    // }

    // class child extends parents{

    //     public function hi($a, $b){
    //         echo $a+$b;
    //     }
    // }

    // $test = new child();
    // $test->hi(5, 6);
    //Nice work sibber

    interface kuttaefty{

        function lol();
    }

    interface haramitaslim{

        function hugelol();
    }

    class baltaslim implements kuttaefty, haramitaslim{

        function lol() {
            echo "lagi lagi lagi....Taslim ekta-----";
        }

        function hugelol() {
            echo "varwa taslim";
        }
    }

    $test = new baltaslim();
    $test->lol();