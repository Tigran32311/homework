<!doctype html>
<html lang="en">
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
            Name
        </td>
        <td>
            Surname
        </td>
        <td>
            Experience
        </td>
        <td>
            Specialization
        </td>
        <td>
            Post
        </td>
    </tr>
    @foreach($list as $item)
        <tr>
            <td>
                {{$item->Name}}
            </td>
            <td>
                {{$item->Surname}}
            </td>
            <td>
                {{$item->Expirience}}
            </td>
            <td>
                {{$item->Specialization_id}}
            </td>
            <td>
                {{$item->Post_id}}
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
