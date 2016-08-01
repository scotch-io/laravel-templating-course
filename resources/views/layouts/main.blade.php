<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')

    {{-- CSS --}}
    @include('partials.styles')
</head>
<body>

    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')    
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    {{-- JS --}}
    @include('partials.scripts')
</body>
</html>