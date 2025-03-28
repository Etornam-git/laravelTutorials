<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>
    
    <form method="POST" action="/jobs/{{ $job->id }}" >
        {{-- "@csrf " : CROSS SITE REQUEST FORGERY. Always add to forms. It adds a token to the form which is compared to a token in the user session. the directive expands to a form input --}}
        @csrf
        {{-- This directive uses the patch method since the browser do not understand the patch method. --}}
        @method('PATCH')
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Profile</h2>
            <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Job title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 ">
                    <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    value =" {{ $job->title }}"
                    class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="Engineer" required>
                  
                  </div>
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input 
                    type="text" 
                    name="Salary" 
                    id="salary" 
                    value = {{ $job->Salary }}
                    class="block min-w-0 grow py-1.5 px-3 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="$20,000 per annum" required>
                   
                  </div>
                </div>
              </div>
              
            </div>
          </div> 
        <div class="mt-6 flex items-center justify-end gap-x-6">
         
            <a href="/jobs/{{ $job->id }}/">
                <button 
                type="button" 
                class="text-sm/6 font-semibold text-gray-900" >Cancel
                </button>
            </a>
        
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </div>
      </form>
      
</x-layout>
 