<?php

session_start();

/**
 *  utilizamos o session_unset() para limpar a sessão e
 *  session_destroy() para destroir a sessão.
 */

/**
 * aqui no arquivo session_destroy.php estamos destroindo
 * a sessão que foi criada/inicializada no arquivo session_start.php
 */

session_unset();
session_destroy();

var_dump($_SESSION);