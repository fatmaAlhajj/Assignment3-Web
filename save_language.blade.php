<!-- resources/views/save_language.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Language</title>
</head>
<body>
    <h1>Select Your Language</h1>

    @if(session('msg'))
        <p>{{ session('msg') }}</p>
    @endif

    <form action="{{ route('language.save') }}" method="POST">
        @csrf
        <label for="language">Select Language:</label>
        <select name="language" id="language">
            <option value="en">English</option>
            <option value="ar">Arabic</option>
            <option value="ko">Korean</option>
        </select>

        <br><br>

        <label for="remember">Remember me:</label>
        <input type="checkbox" name="remember" id="remember" value="1">

        <br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>