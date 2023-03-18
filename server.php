<?php 

$payload = rand(5000,8000);
 system(`cd public && php -S localhost:$payload`);
