@include('fixed.head')

<body>
    <div id="app">
            @include('fixed.navbar')
            <div class="container">
              @include('fixed.messages')
              @yield('content')
            </div>
    </div>
    @include('fixed.scripts')
</body>

</html>
