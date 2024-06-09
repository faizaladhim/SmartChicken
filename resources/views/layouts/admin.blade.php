@extends('layouts.app')

@section('body')
<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.components.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      @include('layouts.components.navbar')
      @yield('content')
    </main>
    <!--   Core JS Files   -->
    @include('layouts.skeleton.script')
  </body>
@endsection
