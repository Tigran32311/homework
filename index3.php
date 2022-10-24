<?php
//Подключение к базе данных
$dbh = new PDO('mysql:host=localhost;dbname=my_database','root','');
?>
    <div id="users"></div>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!--Подключение JQuery-->
    <script type="text/javascript" src="lib/jquery-3.6.1.js"></script>
</head>
<body>
<form action="index3.php" id="form">
    <label>Имя</label>
    <input type="text" name="Name" >
    <label>Фамилия</label>
    <input type="text" name="Surname">
    <button type="submit" name="send"> Отправить </button>
</form>

<script type="text/javascript">
    <!-- Отправка данных методом get -->
    $(function () {
        $("#form").submit(function (event) {
            event.preventDefault();
            $.ajax({
                url: $("#form").attr('action'),
                data: $("#form").serialize(),
                type: 'GET',
                success: function (data) {
                    alert('Успешная запись в базу данных');
                }
            });
        });
    });
</script>
</body>
</html>

<?php
if (isset($_GET['Name']) && isset($_GET['Surname'])) {
    $Name = $_GET['Name'];
    $Surname = $_GET['Surname'];
    $res = $dbh->prepare("INSERT INTO users (Name, Surname) VALUES (?,?)");
    $res->execute([$Name, $Surname]);
}
