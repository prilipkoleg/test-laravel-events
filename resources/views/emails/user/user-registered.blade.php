<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>Welcome {{ $event->user->name }}</h1>

<div class="content">{!! $event->mailContent !!}</div>

</body>
</html>
