<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Beranda</li>
            <li>
                <a href="/" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Rumah</span>
                </a>
            </li>
            <li>
                <a href="/pinjam" aria-expanded="false">
                    <i class="icon-badge menu-icon"></i><span class="nav-text">Transaksi Peminjaman</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-book-open menu-icon"></i><span class="nav-text">Buku</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/buku">Daftar Buku</a></li>
                    @if(Session::get('level_user')==1)
                    <li><a href="/kategori">Kategori Buku</a></li>
                    @endif
                </ul>
            </li>
            <li class="nav-label">PENGGUNA</li>
            <li>
                <a href="/pengguna" aria-expanded="false">
                    <i class="icon-people menu-icon"></i><span class="nav-text">Daftar Pengguna</span>
                </a>
            </li>
        </ul>
    </div>
</div>