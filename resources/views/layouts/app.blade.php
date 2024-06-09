{{-- BASE TEMPLATE --}}
<!doctype html>
<html lang="en">

@include('layouts.skeleton.head')

 <!-- Body Wrapper -->
 @yield('body')
 @include('layouts.skeleton.script')
 @yield('script')
 @stack('js')

</html>