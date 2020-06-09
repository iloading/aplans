<?php
function validate($string){
        $string_striped=  strip_tags($string);
        $string_ready= htmlspecialchars($string_striped,ENT_QUOTES,'UTF-8');
        return $string_ready;
    }
?>