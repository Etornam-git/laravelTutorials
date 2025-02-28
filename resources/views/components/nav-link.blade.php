<!-- this line is static. i.e. it can only move to the home page..
 making it dynamic we introduce the attributes of each line by our slot variable -->
<a {{ $attributes }}>{{ $slot }}</a>