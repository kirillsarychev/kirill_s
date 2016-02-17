<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        function __autoload($class_name) {
            $file = './library/' . $class_name . '.php';
            if (file_exists($file)) {
                include_once $file;
            }
        }

        $obj = new Human('Vasiliy', 33, 'male');
//        echo $obj;
//        $obj->someMethod(10, 'lalala', false);
//        Human::someMethod(10, 'lalala', false);
//        $serialized_object=  serialize($obj);
//        var_dump($serialized_object);
//        $obj_new=  unserialize($serialized_object);
//        echo $obj_new;
//        $obj_new->_name ="Vityok";
//        echo $obj_new;
//        echo $obj;
        $myRoom = new Room(90, 60, 90, 'Red');
        echo $myRoom;
        $herRoom=  clone $myRoom;
        echo $herRoom;
        $herRoom->sofa->color='Pink';
        echo $herRoom;
        echo $myRoom;
        ?>
    </body>
</html>
