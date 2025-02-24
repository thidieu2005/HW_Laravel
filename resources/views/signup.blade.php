<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .container {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            display: block;
            width: 100px;
            margin: 20px auto 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="{{ url('signup') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age">
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <div class="form-group">
                <label>Web</label>
                <input type="url" class="form-control" name="web">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div>
                @include('backend.blocks.error')
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>

        <div class="display-infor">
            @if(isset($user))
            <p><strong>Name:</strong> {{$user['name']}}</p>
            <p><strong>Age:</strong> {{$user['age']}}</p>
            <p><strong>Date:</strong> {{$user['date']}}</p>
            <p><strong>Phone:</strong> {{$user['phone']}}</p>
            <p><strong>Website:</strong> {{$user['web']}}</p>
            <p><strong>Address:</strong> {{$user['address']}}</p>
            @endif
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html> -->

<!-- /SESSION -->

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .container {
            width: 700px;
            margin: 50px auto;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            display: block;
            width: 100px;
            margin: 20px auto 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Nhập Thông Tin</h2>
        <form action="" method="post" style="width: 600px;">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age" required>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="text" class="form-control" name="date" required>
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="form-group">
                <label>Web</label>
                <input type="url" class="form-control" name="web">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>

        <div class="display-infor">
            <h2>Danh Sách Người Đã Nhập</h2>
            @if(isset($users) && count($users) > 0)
            @foreach($users as $index => $user)
            <p><strong>{{ $index + 1 }}</strong></p>
            <p>Name: {{ $user['name'] }}</p>
            <p>Age: {{ $user['age'] }}</p>
            <p>Date: {{ $user['date'] }}</p>
            <p>Phone: {{ $user['phone'] }}</p>
            <p>Website: {{ $user['web'] }}</p>
            <p>Address: {{ $user['address'] }}</p>
            <hr>
            @endforeach
            @else
            <p>Chưa có ai được nhập.</p>
            @endif
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</body>

</html>