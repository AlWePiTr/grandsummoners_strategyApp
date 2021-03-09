<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Posts page</title>
</head>
<body>
  <div>
    <form method="POST" action="/posts">
    @csrf
      <input type="text">
      <input type="submid">
    </form>
  </div>
</body>
</html>