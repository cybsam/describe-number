<!DOCTYPE html>
<html>
<head>
    <title>Array Sum Problem</title>
</head>
<body>
    <form action="{{ route('desired.input')}}" method="POST">
        @csrf
        <label for="t">minimum number:</label>
        <input type="number" name="t" required><br><br>

        @for ($i = 1; $i <= $input; $i++)
            <label for="number_of_item{{ $i }}_line1">number of item 1 - t </label>
            <input type="text" name="number_of_item{{ $i }}_line1"  required><br>

            <label for="number_of_item{{ $i }}_line2">number of item 2 - d</label>
            <input type="text" name="number_of_item{{ $i }}_line2" required><br><br>
        @endfor

        <button type="submit">Submit</button>
    </form>
</body>
</html>
