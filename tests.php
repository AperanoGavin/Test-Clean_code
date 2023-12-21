<?php

use PHPUnit\Framework\TestCase;

require_once 'yams.php';

class Tests extends TestCase {
    public function testBrelan() {
        $result = Yams::calculerPoints([1, 1, 1, 2, 3]);
        
        $this->expectOutputString("Résultat de calculerPoints : $result\n");
        
        
    }

    public function testCarre() {
        $result = Yams::calculerPoints([1, 1, 1, 1, 3]);
        
        $this->expectOutputString("Résultat de calculerPoints : $result\n");


    }

    public function testFull() {
        $result = Yams::calculerPoints([1, 1, 1, 2, 2]);

        $this->expectOutputString("Résultat de calculerPoints : $result\n");


    }

    public function testGrandeSuite() {

        $result = Yams::calculerPoints([1, 2, 3, 4, 5]);

        $this->expectOutputString("Résultat de calculerPoints : $result\n");

    }

    public function testYams() {
        $result = Yams::calculerPoints([1, 1, 1, 1, 1]);

        $this->expectOutputString("Résultat de calculerPoints : $result\n");

    }

    public function testChance() {
        $result = Yams::calculerPoints([1, 2, 3, 7, 5]);

        $this->expectOutputString("Résultat de calculerPoints : $result\n");


    }
}

?>
