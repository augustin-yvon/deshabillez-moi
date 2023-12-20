<?php

function generateLogState(): string
{
    $logState = '';
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        if ($user->getLogState() == true) {
            $logState .= '<a href="Controller/logout.php" class="logout-button">Log out</a>';
            $logState .= '<p class="logState">Connecté</p>';
        } else {
            $logState .= '<p class="logState">Déconnecté</p>';
        }
    } else {
        $logState .= '<p class="logState">Déconnecté</p>';
    }

    return $logState;
}
