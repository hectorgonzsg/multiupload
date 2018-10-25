<?php

    require ('upload.php');
    
    $archivo = new upload('file[]');
    $archivo->setPolicy(Upload::POLICY_KEEP);
    $archivo->setTarget('./privado/');
    $archivo->setTarget('../../../privado/');
    $archivo->comprobar('file');
