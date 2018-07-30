<?php

print_r($_POST);
parse_str(file_get_contents('php://input'), $put_param);
var_dump($put_param);
print_r($_SESSIN);
