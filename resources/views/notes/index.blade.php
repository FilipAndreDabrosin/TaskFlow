<x-layout>
    <div class="w-full bg-gradient-to-b  from-[#6a0dad] to-[#1e40af] pt-[4%] pl-[10%] pb-3 rounded-2xl">
        <h1 class="flex items-center text-white font-bold text-2xl">
            <ion-icon class="w-16" name="clipboard-outline"></ion-icon> Notes
        </h1>
        <button id="toggleNote"
            class="flex items-center bg-gradient-to-b from-blue-500 to-blue-900 text-white text-lg outline-0 border-0 rounded-full px-2.5 py-1.5 my-8 mx-5 cursor-pointer">
            <ion-icon class="mr-2 size-5" name="add-outline"></ion-icon> Create notes
        </button>

        <!-- Form for writing in a new created note -->
        <div id="noteForm" class="hidden">
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <textarea name="content"
                    class="input-box relative w-full font-[Poppins-regular] max-w-lg min-h-36 bg-gray-100 dark:bg-gray-800 dark:text-white p-5 my-5 outline-none rounded-md"
                    required></textarea>
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                    Save Note
                </button>
            </form>
        </div>
        
        <hr class="my-4 hidden">

        <!-- Form for editing existing notes -->
        @foreach ($notes as $note)
            <div class="bg-white shadow-md rounded-lg p-4 mb-2">
                <p id="noteText{{ $note->id }}" class="text-gray-700">{{ $note->content }}</p>

                <form id="editForm{{ $note->id }}" action="{{ route('notes.update', $note->id) }}" method="POST"
                    class="hidden">
                    @csrf
                    @method('PATCH')
                    <textarea name="content" class="w-full p-2 border border-gray-300 rounded-lg mb-2"
                        rows="3" required>{{ $note->content }}</textarea>
                    <button type="submit"
                        class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
                        Save Changes
                    </button>
                    <button type="button"
                        class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded cancelEdit"
                        data-id="{{ $note->id }}">
                        Cancel
                    </button>
                </form>

                <div class="mt-2 flex space-x-2">
                    <button class="editButton bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded"
                        data-id="{{ $note->id }}">
                        Edit
                    </button>

                    <form action="{{ route('notes.destroy', $note->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        document.getElementById('toggleNote').addEventListener('click', function () {
            let noteForm = document.getElementById('noteForm');
            noteForm.classList.toggle('hidden');
        });

        document.querySelectorAll('.editButton').forEach(button => {
            button.addEventListener('click', function () {
                let noteId = this.getAttribute('data-id');
                document.getElementById('noteText' + noteId).classList.add('hidden');
                document.getElementById('editForm' + noteId).classList.remove('hidden');
            });
        });

        document.querySelectorAll('.cancelEdit').forEach(button => {
            button.addEventListener('click', function () {
                let noteId = this.getAttribute('data-id');
                document.getElementById('noteText' + noteId).classList.remove('hidden');
                document.getElementById('editForm' + noteId).classList.add('hidden');
            });
        });
    </script>
</x-layout>