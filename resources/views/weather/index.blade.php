<!DOCTYPE html>
<html>
<head>
    <title>Weather App</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Weather App</h1>
    <form action="{{ route('weather.get') }}" method="POST">
        @csrf
        <input type="text" name="city" placeholder="Enter city" required>
        <button type="submit">Get Weather</button>
    </form>

    @if(isset($weather))
        <h2>Weather in {{ $weather['name'] }}</h2>
        <p>Temperature: {{ $weather['main']['temp'] }}°C</p>
        <p>Weather: {{ $weather['weather'][0]['description'] }}</p>
        <p>Humidity: {{ $weather['main']['humidity'] }}%</p>
        <p>Wind Speed: {{ $weather['wind']['speed'] }} m/s</p>
    @endif
</body>
</html>
