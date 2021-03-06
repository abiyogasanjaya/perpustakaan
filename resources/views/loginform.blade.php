@include('partial.head')

<body class="h-100">
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <h2 class="text-center">PERPUSTAKAAN</h2>
                                <hr>
                                <form class="mt-5 mb-5 login-input" method="POST" action="login">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password">
                                    </div>
                                    <button type="submit" class="btn login-form__btn submit w-100">Masuk</button>
                                </form>
                                <hr>
                                <p class="mt-3 login-form__footer">Belum mempunyai akun | <a href="/register"
                                        class="text-primary"> Buat
                                        Akun?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partial.js')
</body