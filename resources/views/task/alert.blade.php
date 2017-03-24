<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
    <title>배달은 우리가 통이니까, 배달통</title>
</head>
<body>
<h1>할일정보</h1>
<p>할일 : {{$task['name']}}</p>
<p>기한 : {{$task['due_date']}}</p>
<p>comment : <?=$task['comment']?></p>
<p>comment : {!! $task['comment'] !!}</p>
</body>
</html>