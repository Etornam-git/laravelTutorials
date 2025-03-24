<x-layout>
    <x-slot:heading>New Job</x-slot:heading>
    TODO: Create a form to add a new job

    {{-- @if ($errors->any())
    <div class="col-span-6">
    <div class="rounded-md bg-red-50 p-4">
      <div class="flex">
      <div class="flex-shrink-0">
        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v4a1 1 0 102 0V7zm-1 8a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="ml-3">
        <div class="mt-2 text-sm text-red-700">
        <ul role="list" class="list-disc pl-5 space-y-1">
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        </div>
      </div>
      </div>
    </div>
    </div>
    @endif --}}

    <form method="POST" action="/jobs" >
        {{-- "@csrf " : CROSS SITE REQUEST FORGERY. Always add to forms. It adds a token to the form which is compared to a token in the user session. the directive expands to a form input --}}
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Job title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Engineer" required>
                    <p class="text-red-500 text-sm mt-1">@error('title')
                      {{ $message }}
                    @enderror</p>
                  </div>
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" name="salary" id="salary" class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$20,000 per annum" required>
                    <p class="text-red-500 text-sm mt-1">@error('salary')
                      {{ $message }}
                    @enderror</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div> 
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
      </form>
      
</x-layout>