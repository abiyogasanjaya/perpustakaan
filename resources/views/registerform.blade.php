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
                                <form class="mt-3 mb-3 login-input" method="POST" action="doregister">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"
                                            name="password" required>
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Daftar</button>
                                </form>
                                <hr>
                                <p class="mt-3 login-form__footer">Sudah memiliki akun | <a href="/"
                                        class="text-primary">Masuk </a>sekarang!</p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partial.js')
</body>