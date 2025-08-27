<h2>Submit Feedback</h2>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

<form action="{{ route('feedbacks.store') }}" method="POST">
    @csrf

    <label>Subscriber:</label>
    <select name="subscriber_id" required>
        <option value="">-- Select Subscriber --</option>
        @foreach($subscribers as $subscriber)
            <option value="{{ $subscriber->id }}">{{ $subscriber->name }}</option>
        @endforeach
    </select>
    <br><br>

    <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Feedback:</label>
    <textarea name="feedback_desc" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>
