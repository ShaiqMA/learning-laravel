<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>Planets List</h1>

    @if(count($planeten) > 0)
        <ul>
            @foreach($planeten as $planet)
                <li>
                    <strong>{{ $planet['name'] }}</strong>: {{ $planet['description'] }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Geen planeten gevonden.</p>
    @endif
</body>
</html>
