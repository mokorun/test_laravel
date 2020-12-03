<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>test page top</title>
</head>
<body>
<h2>
    Hello world from blade!!
</h2>
<h1>{{ $msg }}</h1>

<ul>
    @foreach ($books as $book)
        <li>{{ $book->title }}</li>
    @endforeach
</ul>

</body>
</html>
