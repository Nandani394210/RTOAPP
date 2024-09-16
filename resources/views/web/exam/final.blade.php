<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
    <center>
        <h1>Exam is Done</h1>
        <h1>correct Answers : {{session('correct_answer',0)}}</h1>
        <h1>wrong Answers : {{session('wrong_answer',0)}}</h1>
        <a href="{{route('exam')}}">click</a>
    </center>
</body>
</html>
