<?php

setcookie('user', $user2['name'], time() - 3600, '/');

header('Location: ../index.php')

?>