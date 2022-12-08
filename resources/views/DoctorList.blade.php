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
                {{$item->name}}
            </td>
            <td>
                {{$item->surname}}
            </td>
            <td>
                {{$item->expirience}}
            </td>
            <td>
                {{$item->specialization_name}}
            </td>
            <td>
                {{--{{$item->post_id}}--}}
                {{$item->post_name}}
            </td>
        </tr>
    @endforeach
    {{--@foreach($list2 as $item)
        <tr>
            <td>
                {{$item->name}}
            </td>
            <td>
                {{$item->surname}}
            </td>
            <td>
                {{$item->expirience}}
            </td>
            <td>
                {{$item->specialization_name}}
            </td>
            <td>
                --}}{{--{{$item->post_id}}--}}{{--
                {{$item->post_name}}
            </td>
        </tr>
    @endforeach--}}
</table>
</body>
</html>
