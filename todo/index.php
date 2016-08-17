<?php
require 'cookie.php';  
?> 
<?php
if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text'], $_GET['pic']);
}
?>
    <form action="">
        Заголовок: <input type="text" name="header" title="header"> <br />
        Текст: <textarea name="text" title=""></textarea><br />
        Введите ссылку на картинку:<input type="text" name="pic" title="pic">
        <br />

        <input type="submit">
    </form>
<?php

foreach (getData() as $key => $data):
    ?>
    <div class="post">
        <h6> Датв создания поста: <?= isset($data['date']) ? $data['date'] : 'Дата отсутствует'; ?></h6>
        <h6> Время жизни поста: <?= isset($data['time_left']) ? $data['time_left'] : 'Дата отсутствует' ;?> </h6>
        <h1><?= $data['header']; ?></h1>
        <img src="<?= $data['pic']; ?>" width="auto" height="auto"  alt="место для картиныки">
        <p><?= $data['text'] ?></p>

        <form action="">
            <input type="button" name="button" value="Скрыть"/>
        </form>

    </div>
<?php endforeach; ?>