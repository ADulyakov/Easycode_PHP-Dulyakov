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
            $creationTime = strtotime($data[$name]['date']);
            $delitTime = $creationTime + 86400;
            $secondsLeft = $delitTime - strtotime(date('Y-m-d H:i:s'));
            $hours = floor($secondsLeft / 3600);
            $minuts = floor(($secondsLeft % 3600) / 60);
            $seconds = $secondsLeft % 60;
            $data[$name]['time_left'] = 'Часов: ' . $hours .', минут: ' . $minuts . ', секунд: ' . $seconds;
        } else {
            return $data;
        }
    }
};