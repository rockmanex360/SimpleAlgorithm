<?php 

class Testing {
   
    function NomorSatu(){
        $string = "pixel";
        $count = strlen($string);        
        $wadah = "";

        for ($i=0; $i < $count; $i++) { 
        	$wadah.= $string . ", ";
        }

        return rtrim($wadah, ", ");
    }
    
    function NomorDua(){
        for ($i=0; $i < 5; $i++) { 
        	for ($j=0; $j < 5; $j++) { 
        		if ($i == 0 || $i == 4) {
        			echo "*";
        		}else if ($i == 1 || $i == 3) {
        			if ($j == 0 || $j == 4) {
        				echo "*";
        			}else{
        				echo "&nbsp&nbsp";
        			}
        		}else {
        			if (($j % 2) == 0) {
        				echo "*";
        			}else {
        				echo "&nbsp&nbsp";
        			}
        		}
        	}
        	echo "<br>";
        }
    }

    function NomorTiga() {
    	$skorPixel = array(5, 25, 50, 120);    	    	
    	$skorAwal = array(100, 100, 50, 40, 40, 20, 10);

    	$Rank[0] = 1; 

    	for ($i = 0; $i < sizeof($skorPixel); $i++) {
    		array_push($skorAwal, $skorPixel[$i]);
    		rsort($skorAwal);    		
    		for ($j = 1; $j < sizeof($skorAwal); $j++) {
    			if ($skorPixel[$i] == $skorAwal[0]) {
    				echo $Rank[0];
    				break;
    			}else if ($skorAwal[$j] == $skorAwal[$j - 1]) {
    				$Rank[$j] = $Rank[$j - 1];
    				if ($skorAwal[$j] == $skorPixel[$i]) {    					
    					echo $Rank[$j];
    					echo "<br>";
    					break;
    				}
    			}else {
    				$Rank[$j] = $Rank[$j - 1] + 1;
    				if ($skorAwal[$j] == $skorPixel[$i]) {
    					echo $Rank[$j];
    					echo "<br>";
    					break;
    				}
    			}    			
    		}
    	}
    	
    }
    
}

$testing = new Testing();
 
echo $testing->NomorSatu();
echo "<br><br><br>";

echo $testing->NomorDua();
echo "<br><br><br>";

echo $testing->NomorTiga();
?>