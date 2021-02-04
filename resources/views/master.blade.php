<!DOCTYPE html>
<html lang="en">
@include('partial.head')

<body>
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        @include('partial.navbar')
        @include('partial.header')
        @include('partial.sidebar')

        <div class="content-body">
            @yield('konten')
        </div>
        @include('partial.footer')
    </div>
    @include('partial.js')
    @yield('js')
</body>

</html>