<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>news</title>
</head>

<body>
  <div class="news">
    <h1 id="news">ニュース</h1>
    @foreach($news as $val)
    <div class="news-list">
      <small class="date">{{$val->released_at}}</small>
      <h2>{{$val->title}}</h2>
      <form method="POST" action="/detail">
        @csrf
        <input name="id" type="hidden" value="{{$val->id}}">
        <input type="submit" value="詳細へ">
      </form>
    </div>
    @endforeach
    <a href="/news">詳細</a>
  </div>
</body>

</html>