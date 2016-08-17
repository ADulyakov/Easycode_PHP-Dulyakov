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

//https://habrastorage.org/files/bbb/6d0/ce5/bbb6d0ce5b2e409aa9f8fe986d87eeec.png

foreach (getData() as $key => $data):
    ?>
    <div class="post">
        <h6><?= $data['date']; ?></h6>
        <h1><?= $data['header']; ?></h1>
        <img src="<?= $data['pic']; ?>" width="auto" height="auto"  alt="pic">
        <p><?= $data['text'] ?></p>
        <form action="">
            <input type="button" name="button" />
        </form>

    </div>
<?php endforeach; ?>