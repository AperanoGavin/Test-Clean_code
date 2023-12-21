<?php

class yams{


    public static function calculerPoints($des) {
        if (self::estBrelan($des)) {
            return 28;
        } elseif (self::estCarre($des)) {
            return 35;
        } elseif (self::estFull($des)) {
            return 30;
        } elseif (self::estGrandeSuite($des)) {
            return 40;
        } elseif (self::estYams($des)) {
            return 50;
        } else {
            return self::calculerChance($des);
        }
    }

public static function estBrelan($des) {
    $occurrences = array_count_values($des);
    
    foreach ($occurrences as $valeur => $nombre) {
        if ($nombre == 3) {
            return true;
        }
    }

    return false; 
}

public static function estCarre($des) {
    $occurrences = array_count_values($des);
    
    foreach ($occurrences as $valeur => $nombre) {
        if ($nombre === 4) {
            return true;
        }
    }

    return false; 
}

public static function estFull($des) {

    $occurrences = array_count_values($des);

    $brelan = false;
    $paire = false;

    foreach ($occurrences as $valeur => $nombre) {
        if ($nombre === 3) {
            $brelan = true;
        } elseif ($nombre === 2) {
            $paire = true;
        }
    }

    return $brelan && $paire;
    
}

public static function estGrandeSuite($des) {

    sort($des);
    $des = array_unique($des);

    return count($des) === 5 && $des[4] - $des[0] === 4;
}

public static function estYams($des) {

    $occurrences = array_count_values($des);

    foreach ($occurrences as $valeur => $nombre) {
        if ($nombre === 5) {
            return true;
        }
    }

    return false;
}

public static function calculerChance($des) {
    return array_sum($des);
}

}

?>
