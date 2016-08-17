<?php
  
 
function saveData($header, $text, $pic, $time = 86400)
{
    $pic = $_GET['pic'];
    $date = date('Y-m-d H:i:s');
    $i = 0;
    $time = time() + $time;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            continue;
        };

        $data = array(
            'date' => $date,
            'header' => $header,
            'text'   => $text,
            'pic' => $pic
        );
        $encodedData = json_encode($data);
        setcookie($name, $encodedData, $time);
        break;
    }
};

function getData()
{
    $data = array();
    $i = 0;
    while (true) {
        $name = 'todo-' . $i;
        $i++;
        if (isset($_COOKIE[$name])) {
            $data[$name] = json_decode($_COOKIE[$name], true);
        } else {
            return $data;
        }
    }
};