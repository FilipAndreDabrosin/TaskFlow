<x-layout>
    <div class="container">
        <h1>Edit Note</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
            @csrf @method('PUT')
            <input type="text" name="title" value="{{ $note->title }}" class="form-control mb-2"
                placeholder="Title (optional)">
            <textarea name="content" class="form-control" required>{{ $note->content }}</textarea>
            <button type="submit" class="btn btn-success mt-2">Update Note</button>
        </form>
    </div>
</x-layout>
