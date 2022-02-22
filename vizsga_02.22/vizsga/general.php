<?php
            $length = 26;
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 1; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
                if($i % 5 == 0 && $i < 25){
                    $randomString .= "-";
                }
               
            }
            print($randomString);
        

    ?>