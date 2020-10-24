<?php 
function saque($jogadas) {
    $pts = explode(':', $jogadas);
    $saques = intval($pts[0]) + intval($pts[1]);
    if($pts[0] < 20 && $pts[1] < 20) {
        if (($saques/5)%2) {
            echo "jogador b\n";
        } else {
            echo "jogador a\n";
        }
    }else{
        if (($saques/2)%2) {
            echo "jogador b\n";
        } else {
            echo "jogador a\n";
        }
    }    
}
echo saque("0:0");
?>
