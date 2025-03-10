<!-- introducing a prop for to inspect the href attribute -->
<!-- using a blade directive (they begin with the @ symbol) -->
<!-- the $attributes variable is a special variable that contains all of the HTML attributes passed to the component -->
<!-- the $slot variable contains the content passed to the component -->
@props(['active' => 'false']) 
@props(['type' => 'button'])
<a  
 class="{{ $active  ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
 rounded-md px-3 py-2 text-sm font-medium text-white"
 aria-current="{{ $active ? 'page' : 'false'}}" type="{{ $type ? 'button' : 'link' }}"
 {{ $attributes }}
 >{{ $slot }}</a>
 