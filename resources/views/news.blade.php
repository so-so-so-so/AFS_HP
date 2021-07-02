<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>news</title>
</head>

<body>
  @foreach($news as $list)
  <form action="{{route}}">
    <input type="hidden" value="{{$list->id}}">
  </form>
  @endforeach
</body>

</html>