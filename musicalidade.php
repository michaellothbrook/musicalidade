<?php
    $scale = array(
        'Dó' => array(1 => 'C',3 => 'E',5 => 'G'),
        'Ré' => array(1 => 'D',3 => 'F#',5 => 'A'),
        'Mí' => array(1 => 'E',3 => 'G#',5 => 'B'),
        'Fá' => array(1 => 'F',3 => 'A',5 => 'C'),
        'Sól' => array(1 => 'G',3 => 'B',5 => 'D'),
        'Lá' => array(1 => 'A',3 => 'C#',5 => 'E'),
        'Sí' => array(1 => 'B',3 => 'D#',5 => 'F#')
    );
           
    $greek_modes = array(1=>'Jônio',3=>'Frígio',5=>'Mixolídio');

        foreach($scale as $notes) {
                $improvise = array(
                    $notes[1] => array_combine($notes,$greek_modes)
                );
            print_r($improvise);
        }
        
        
            
       
            
            
            
?>