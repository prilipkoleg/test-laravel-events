<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h3>User {{ $event->user->name }} update {{ $event->template->name }} mail template</h3>

<div class="content">{!! $event->mailContent !!}</div>

</body>
</html>
