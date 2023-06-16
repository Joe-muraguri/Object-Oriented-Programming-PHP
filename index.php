<?php
class User {

    public $username = 'Joe';
    public $email = 'joe@gmail.com';

    public function addFriend(){
        return " $this->username Added a new friend";
    }

}

$userOne = new User();

echo $userOne -> username . '<br>';
echo $userOne -> email . '<br>';
echo $userOne -> addFriend() . '<br>';

// echo 'This is class is ' . get_class($userOne);
print_r(get_class_vars('User')) . '<br>';
print_r(get_class_methods('User'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>