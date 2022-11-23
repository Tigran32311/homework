<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="form/Send" method="post">
        @csrf <!-- {{ csrf_field() }} -->
        <label for="name">Name</label>
        <input type="text" name="name">
        <button type="submit">Send</button>
    </form>
</body>
</html>
