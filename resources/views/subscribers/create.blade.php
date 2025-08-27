<!DOCTYPE html>
<html>
<head>
    <title>Add Subscriber</title>
</head>
<body>
    <h2>Add New Subscriber</h2>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('subscribers.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br><br>

        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
