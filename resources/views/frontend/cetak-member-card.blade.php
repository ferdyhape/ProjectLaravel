<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Card</title>
</head>

<body>
    <div class="box">
        <div class="image">
            <img src="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/storage/' . auth()->user()->photo; ?>" />
        </div>
        <div class="name">
            <h4>Name:</h4>
            <p>{{ $user->name }}</p>
            <h4>Email:</h4>
            <p>{{ $user->email }}</p>
            <h4>Phone:</h4>
            <p>{{ $user->phone }}</p>
            <h4>Address:</h4>
            <p>{{ $user->address }}</p>
        </div>
    </div>

    <style>
        img {
            margin-bottom: 50px;
        }

        p {
            margin: 0;
            text-align: center;
        }

        h4 {
            margin-bottom: 5px;
            text-align: center;
        }

        .box {
            margin: auto;
            padding: 50px;
            height: 150px;
            width: 250px;
            border: 2px solid #000000;
            border-radius: 12px;
        }
    </style>
</body>

</html>