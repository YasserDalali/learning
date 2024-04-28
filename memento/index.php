<?php
    include("Editor.php");

    $playerStats = new PlayerStats(200, ['x430 gold', 'sword', 'health potion'], 1);
    $playerStats->DisplayStats();


    $initialCheckpoint = $playerStats->save();

    $playerStats->setHP(100);
    $playerStats->setInventory(['x50 gold','Shotgun']);

    $playerStats->DisplayStats();


    $playerStats->restore($initialCheckpoint);
    $playerStats->DisplayStats();

