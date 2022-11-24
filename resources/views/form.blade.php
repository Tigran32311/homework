<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/form/send" method="post" >
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title">
    <label for="text">Text</label>
    <input type="text" name="text">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <button type="submit">Submit</button>
</form>
</body>
</html>
