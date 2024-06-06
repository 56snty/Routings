<!DOCTYPE html>
<html>
<head>
    <title>Create Song</title>
</head>
<body>
    <h1>Create a New Song</h1>
    <form action="{{ url('/songs') }}" method="POST">
        @csrf
        <input type="text" name="song" placeholder="Song name">
        <button type="submit">Add Song</button>
    </form>
</body>
</html>
