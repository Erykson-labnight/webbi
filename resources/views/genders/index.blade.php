<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gender List</title>
</head>
<body>
    <h1>Gender List</h1>
    <ul>
        @foreach ($genders as $gender)
            <li>{{ $gender->name }}</li>
        @endforeach
    </ul>
</body>
</html>
