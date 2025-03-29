<x-layout>
    <x-slot:heading>New Job</x-slot:heading>
    <p class="">TODO: Create a form to add a new job<p>

    <form method="POST" action="/jobs" >
        {{-- "@csrf " : CROSS SITE REQUEST FORGERY. Always add to forms. It adds a token to the form which is compared to a token in the user session. the directive expands to a form input --}}
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <x-form-field>
                <x-form-label for="title" class="block text-sm/6 font-medium text-gray-900">Job title</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="title" id="title"  placeholder="Engineer"/>
                  <x-form-error name="title" />
                </div>
              </x-form-field>

              <x-form-field> 
                <x-form-label for="salary" >Salary</x-form-label>
                <div class="mt-2">
                  <x-form-input type="text" name="salary" id="salary" placeholder="$20,000 per annum"/>
                  <x-form-error name="salary" />
                </div>
              </x-form-field>
              
            </div>
          </div> 
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>
      
</x-layout>