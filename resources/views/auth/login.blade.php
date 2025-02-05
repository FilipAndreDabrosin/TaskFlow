<x-layout>

    

    <form method="POST" action="/login" class="bg-gray-100 rounded-md p-3">
        @csrf
        <h1 class="mb-2 text-gray-900 font-[Poppins-regular]">Login</h1>

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="email" id="email" type="email" :value="old('email')" required/>

                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="password" id="password" type="password" required/>

                        <x-form-error name="password" />
                    </x-form-field>
                    
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Login</x-form-button>
        </div>
    </form>
</x-layout>
