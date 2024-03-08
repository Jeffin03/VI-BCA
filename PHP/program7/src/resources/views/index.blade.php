<!DOCTYPE html>
<html>
<head>
    <title>URL Shortener</title>
</head>
<body>
    @if (session('shortened'))
        <p>Shortened URL: <a href="{{ session('shortened') }}">{{ session('shortened') }}</a></p>
    @endif
    <form method="post" action="/shorten">
        @csrf
        <input type="text" name="url" placeholder="Enter URL">
        <button type="submit">Shorten</button>
    </form>
</body>
</html>