<?php
// Fonction d'encodage du mail pour affichage :
function encode_mail($email) {
    $mail_encoded = "";
    // Pour chaque caractère de la chaine...
    for($i = 0; $i < strlen($email); $i++) {
        // On définit aléatoirement le mode d'affichage...
        switch((rand(1, 300) % 3)) {
            case 0:
                // On affiche le caractère en cours en code ordinal
                $mail_encoded .= "&#".ord($email[$i]).";";
                break;
            case 1:
                // On affiche le caractère en cours en code hexadécimal
                $mail_encoded .= "&#x".bin2hex($email[$i]).";";
                break;
            case 2:
                // On affiche le caractère en cours normalement
                $mail_encoded .= $email[$i];
                break;
            default:
                // On n'est pas censé arriver ici...
                echo "Error";
                break;
        }
    }
    // On renvoie la chaine encodée.
    return $mail_encoded;
}




?>