<!DOCTYPE html>
<html lang="en">
@include('partial.head')

<body>
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
    <div id="main-wrapper">
        @include('partial.navbar')
        @include('partial.header')
        @include('partial.sidebar')

        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="card-title">@yield('header')</h4>
                                @yield('konten')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('partial.footer')
    </div>
    @include('partial.js')
    @yield('js')
</body>

</html>