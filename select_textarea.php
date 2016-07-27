Наша форма:
​
<form action="" name="test-form" method="GET">
    Город:
    <select name="count">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="9">10</option>
    </select>
    <br />
    <textarea name="long_text"></textarea>
    <input type="submit" value="Кнопка!">
</form>
<pre>
<?php
print_r($_GET);

for ($i =0; $i<$_GET['count']; $i++){
    echo strrev($_GET['long_text']) . ', ';
};
