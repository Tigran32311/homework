<form action="index.php">
    <label>Первое число</label>
    <input type="text" name="first_num" >
    <p>+</p>
    <label>Второе число</label>
    <input type="text" name="second_num">
    <button type="submit"> Resolve </button>
</form>

<?php
if (isset($_GET)) {
    echo $_GET['first_num']+$_GET['second_num'];
}