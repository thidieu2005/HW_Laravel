<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng Hai Số</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            color: #003366;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background: #007bff;
            color: white;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tính tổng 2 số A và B</h2>
        <form action="/sum" method="post">
            @csrf
            <label>Enter Số A</label>
            <input type="number" name="numA" required>

            <label>Enter Số B</label>
            <input type="number" name="numB" required>

            <button type="submit">Submit</button>
        </form>
        <div class="result">
            Kết quả: <strong>{{ $sum ?? 0 }}</strong>
        </div>
    </div>
</body>

</html>