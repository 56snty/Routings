<!DOCTYPE html>
<html>
<head>
    <title>Edit Song</title>
</head>
<body>
    <h1>Edit Song</h1>
    <form action="{{ url('/songs/' . $index) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="song" value="{{ $song }}">
        <button type="submit">Update Song</button>
    </form>
</body>
</html>
