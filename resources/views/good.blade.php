<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
</head>

<body>
    <h2>Danh sách bài viết</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $post)
            <tr>
                <td>{{ $post['id'] }}</td>
                <td>{{ $post['title'] }}</td>
                <td>{{ $post['body'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>