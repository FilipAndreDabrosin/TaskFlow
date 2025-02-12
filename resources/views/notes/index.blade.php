<x-layout>
    <div class="w-full dark:bg-gradient-to-b  dark:from-[#6a0dad] dark:to-[#1e40af] bg-gradient-to-r from-violet-400 to-purple-300 pt-[4%] pl-[10%] pb-3 rounded-2xl">
        <h1 class="flex items-center text-white font-bold text-2xl">
            <ion-icon class="w-16" name="clipboard-outline"></ion-icon> Notes
        </h1>
        
        <x-nav-button id="toggleNote" class="items-center mb-5 flex cursor-pointer max-w-52 mt-3 "><ion-icon
                class="mr-2  size-5" name="add-outline"></ion-icon>Create Notes</x-nav-button>
        <!-- Form for writing in a new created note -->
        <div id="noteForm" class="hidden">
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <textarea name="content"
                    class="input-box relative w-full font-[Poppins-regular] max-w-lg min-h-36 bg-gray-100 dark:bg-gray-800 dark:text-white p-5 my-5 outline-none rounded-md"
                    required></textarea>
                <x-form-button class="">Save Changes</x-form-button>
            </form>
        </div>

        @if ($notes->isNotEmpty())
        <hr id="savedNotes" class="my-4">
        @endif

        <!-- Form for editing existing notes -->
        @foreach ($notes as $note)
            <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg p-4 my-2 mr-2">
                <p id="noteText{{ $note->id }}" class="text-gray-700 dark:text-white">{{ $note->content }}</p>

                <form id="editForm{{ $note->id }}" action="{{ route('notes.update', $note->id) }}" method="POST"
                    class="hidden">
                    @csrf
                    @method('PATCH')
                    <textarea name="content" class="w-full p-2 border border-gray-300 rounded-lg mb-2 dark:bg-gray-800 dark:text-white" rows="3" required>{{ $note->content }}</textarea>
                    <x-form-button>Save Changes</x-form-button>
                    <button type="button" class="bg-gray-400 hover:bg-gray-500 text-white px-4 py-2 rounded cancelEdit"
                        data-id="{{ $note->id }}">
                        Cancel
                    </button>
                </form>

                <div class="mt-2 flex space-x-2">
                    <button class="editButton flex items-center bg-gray-500 hover:bg-gray-600 text-white px-3 py-1 rounded "data-id="{{ $note->id }}">
                        <ion-icon name="create-outline" class="size-5 mr-1" ></ion-icon>
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
        document.getElementById('toggleNote').addEventListener('click', function() {
            let noteForm = document.getElementById('noteForm');
            noteForm.classList.toggle('hidden');
        });

        document.querySelectorAll('.editButton').forEach(button => {
            button.addEventListener('click', function() {
                let noteId = this.getAttribute('data-id');
                document.getElementById('noteText' + noteId).classList.add('hidden');
                document.getElementById('editForm' + noteId).classList.remove('hidden');
                document.getElementById('editButton' + noteId).classList.add('hidden')
            });
        });

        document.querySelectorAll('.cancelEdit').forEach(button => {
            button.addEventListener('click', function() {
                let noteId = this.getAttribute('data-id');
                document.getElementById('noteText' + noteId).classList.remove('hidden');
                document.getElementById('editForm' + noteId).classList.add('hidden');
            });
        });
    </script>
</x-layout>

