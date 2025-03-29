<x-layout>
    <x-slot:heading>Register</x-slot:heading>

    <form method="POST" action="/login" >
        {{-- "@csrf " : CROSS SITE REQUEST FORGERY. Always add to forms. It adds a token to the form which is compared to a token in the user session. the directive expands to a form input --}}
        @csrf
        <div class="space-y-2">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6">

              <x-form-field>
                <x-form-label for="email" class="block text-sm/6 font-medium text-gray-900">Email</x-form-label>
                <div class="mt-2">
                  <x-form-input type="email" name="email" id="email"  placeholder="example@gmail.com"/>
                  <x-form-error name="email" />
                </div>
              </x-form-field>
              
              <x-form-field>
                <x-form-label for="password" class="block text-sm/6 font-medium text-gray-900">Password</x-form-label>
                <div class="mt-2">
                  <x-form-input type="password" name="password" id="password"  placeholder="*********"/>
                  <x-form-error name="password" />
                </div>
              </x-form-field>

              
            </div>
          </div> 
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <x-form-button>Login</x-form-button>
        </div>
      </form>
      
</x-layout>