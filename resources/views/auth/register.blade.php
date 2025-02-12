<x-layout>

    

    <form method="POST" action="/register" class="bg-gray-100 dark:bg-gray-700  rounded-md p-3">
        @csrf
        <h1 class="mb-2 text-gray-900 dark:text-white font-[Poppins-regular]">Register</h1>

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              

                <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="first_name" id="first_name"  required/>

                        <x-form-error name="first_name" />
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="last_name" id="last_name" required/>

                        <x-form-error name="last_name" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="email" id="email" type="email" required/>

                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="password" id="password" type="password" required/>

                        <x-form-error name="password" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password">Confirm Password</x-form-label>
                        <div class="mt-2"></div>
                        <x-form-input name="password_confirmation" id="password_confirmation" type="password" required/>

                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                    
                </div>
            </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
