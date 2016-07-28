Мои счёты:

<form action="" name="test-form" method="POST">
    <input type="text" name="value1" />
    <select name="methud">
        <option value="1"> + </option>
        <option value="2"> - </option>
        <option value="3"> * </option>
        <option value="4"> / </option>
        <option value="5"> ** </option>
    </select>
    <input type="text" name="value2" />
    <br />
    <br />
    <input type="submit" value="Result!">
    <br />
</form>

<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';
echo '<hr>';

function calc ($array){
    $action = 0;
    if ($array['methud'] == 1){
        $action = $array['value1'] + $array['value2'];
    } elseif ($array['methud'] == 2) {
        $action = $array['value1'] - $array['value2'];
    } elseif ($array['methud'] == 3) {
        $action = $array['value1'] * $array['value2'];
    } elseif ($array['methud'] == 4) {
        $action = $array['value1'] / $array['value2'];
    } elseif ($array['methud'] == 5) {
        $action = $array['value1'] ** $array['value2'];
    };
        return $action;
};

echo calc($_POST);
