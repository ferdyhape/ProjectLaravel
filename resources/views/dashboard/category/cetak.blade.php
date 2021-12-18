<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kategori</title>
</head>

<body>
    <h1>
        List Data Kategori
    </h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        table {
            margin: 0 auto 50px auto;
            width: 90%;
            text-align: left;
        }

        h1 {
            width: 90%;
            margin: 100px auto 10px auto;
        }

        table,
        th,
        td {
            padding: 10px 15px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
        }
    </style>
</body>

</html>