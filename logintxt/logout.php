<?php
session_start();

session_destroy();

header("Location: index.php?msg=2"); //Redireciona para a pagina index.php