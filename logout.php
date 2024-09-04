<?php
session_start();

unset($_SESSION[$usuario]);

header('Location: index.php');
/**
 * Deve excluir o cooki e a session
 */
?>