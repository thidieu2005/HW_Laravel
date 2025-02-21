<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng</title>
</head>

<body>
    <h1>Tính Tổng Hai Số</h1>
    <form method="POST" action="/calculate">
        @csrf
        <label for="a">Enter So A:</label>
        <input type="text" name="a" required>
        <br>
        <label for="b">Enter So B:</label>
        <input type="text" name="b" required>
        <br>
        <button type="submit">Submit</button>
    </form>

    @if(isset($sum))
    <h2>Tổng: {{ $sum }}</h2>
    @endif
</body>

</html>