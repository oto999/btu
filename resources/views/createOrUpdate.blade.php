<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create/Update Quiz</title>
</head>
<body>
    <h1>Create/Update Quiz</h1>

    @if(isset($quiz))
    <!-- Link to Edit Quiz -->
    <a href="{{ route('quiz.update', ['id' => $quiz->id]) }}">Edit Quiz</a>
@else
    <!-- Link to Create Quiz -->
    <a href="{{ route('quiz.create') }}">Create Quiz</a>
@endif

<form method="POST" action="{{ route('quiz.storeOrUpdate', ['id' => isset($quiz) ? $quiz->id : null]) }}">
    @csrf
    @if(isset($quiz))
        <input type="hidden" name="_method" value="PUT">
    @endif

    <!-- Form fields for creating or updating a quiz -->
    <!-- Add your form fields here -->
    <input type="text" name="name" value="{{ isset($quiz) ? $quiz->name : '' }}" placeholder="Quiz Name">
    <input type="text" name="photo" value="{{ isset($quiz) ? $quiz->photo : '' }}" placeholder="Quiz Photo">
    <input type="text" name="status" value="{{ isset($quiz) ? $quiz->status : '' }}" placeholder="Quiz Status">

    <button type="submit">Save</button>
</form>
</body>
</html>
