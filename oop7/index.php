<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        $registration=new Form(array('method'=>'POST'));
        $elements= new Element('login', 'text');
        $elements->placeholder='Login';
        $registration->addElement($elements->Render());
        echo $registration->Render();
            
        ?>
    </body>
</html>
