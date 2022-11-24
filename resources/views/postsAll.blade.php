<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <td>
            Title
        </td>
        <td>
            Text
        </td>
    </tr>
    @foreach($data as $item)
            <tr>
                <td>
                    {{$item->title}}
                </td>
                <td>
                    {{$item->text}}
                </td>
            </tr>
    @endforeach
</table>
</body>
</html>
