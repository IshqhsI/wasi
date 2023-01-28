<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar">
    <a href="/" class="d-flex align-items-center mb-md-0 me-md-auto text-white text-decoration-none ms-3">
        <i class="fa-solid fa-house me-2"></i>
        <span class="fs-5">WASI</span>
    </a>
    {{-- Profil --}}
    {{--  --}}

    <hr>
    {{-- Menu --}}
    <ul class="nav nav-pills flex-column mb-auto mt-1">
        <li class="nav-item">
            <a href="/dashboard" class="nav-link text-white <?= $title === 'Dashboard' ? ' active' : '' ?>"
                aria-current="page">
                <i class="fa-solid fa-house me-2"></i>
                Dashboard
            </a>
        </li>
        <li>
            <a href="/daftar" class="nav-link text-white <?= $title === 'Daftar' ? ' active' : '' ?>">
                <i class="fa-solid fa-gauge me-2"></i>
                Daftar
            </a>
        </li>
        <li>
            <a href="/tertib"
                class="nav-link text-white <?= $title === 'Tertib Usaha Jasa Konstruksi' ? ' active' : '' ?>">
                <i class="fa-solid fa-cart-shopping me-2"></i>
                Tertib Usaha
            </a>
        </li>
        <li>
            <a href="/penyelenggaraan"
                class="nav-link text-white <?= $title === 'Tertib Penyelenggaraan Jasa Konstruksi' ? 'active' : '' ?>">
                <i class="fa-sharp fa-solid fa-store me-2"></i>
                Tertib Penyelenggaraan
            </a>
        </li>
        @if (Auth::user()->isAdmin == 1)
            <li>
                <a href="/admin"
                    class="nav-link text-white <?= $title === 'Dashboard Admin' || $title === 'Detail' || $title === 'Edit' ? ' active' : '' ?>">
                    <i class="fa-solid fa-users me-2"></i>
                    Admin
                </a>
            </li>
        @else
        @endif


    </ul>
    {{-- Menu --}}
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            {{-- <img src="" alt="" width="32" height="32" class="rounded-circle me-2"> --}}
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

            <li><a class="dropdown-item" href="/profil">Profil</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="dropdown-item" href="/logout">Logout</a>

            </li>
        </ul>
    </div>
</div>

{{-- Opacity 0 --}}
<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark opac"
    style="opacity: 0; width: 280px; z-index: -1;">

</div>
