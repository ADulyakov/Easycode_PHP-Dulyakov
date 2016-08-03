<?php if (isset($_COOKIE['login'])): ?>
    Привет, <?= $_COOKIE['login'] ?>!
    <br />
    Дата последнего логина: <?= $_COOKIE['lastLoginTime'] ?>

<?php else: ?>
    <form action="cookie_handler.php">
        Login: <input type="text" name="login" title="1"/>
        Жизнь куки: <input type="text" name="life" title="2"/>
            
        <input type="submit" value="Send" />
    </form>
<?php endif; ?>
