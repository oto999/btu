<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz List</title>
</head>
<body>
    <h1>Quiz List</h1>

    <ul>
        @foreach($quizzes as $quiz)
            <li>
                {{ $quiz->name }} - {{ $quiz->status }}
                <a href="{{ route('quiz.createOrUpdate', ['quiz' => $quiz]) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
