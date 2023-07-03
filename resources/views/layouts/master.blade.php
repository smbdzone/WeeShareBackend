<!DOCTYPE html>
<html lang="en">

@include('layouts.head')
<body>
<div class="wappan">
  @include('layouts.aside')

 
<div class="main-container">
    @include('layouts.top_nav')
    @yield('content')
    
</div>
</div>
  
@include('layouts.script')
</body>

</html>