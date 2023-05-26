 <!-- User -->
<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
            <img src="../../assets/img/avatars/utilisateur.png" alt class="h-auto rounded-circle" />
        </div>
    </a>
    {{-- @dd($user) --}}
    <ul class="dropdown-menu dropdown-menu-end">
        <li>
            <div class="">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar avatar-online">
                            <a href="{{url('/myProfile')}}">
                                <img src="../../assets/img/avatars/utilisateur.png" alt class="h-auto rounded-circle"/>
                            </a>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <span class="fw-semibold d-block">
                            {{-- @if(session('token'))
                                {{\Illuminate\Support\Facades\Auth::user()->getUserFullName()}}
                            @endif --}}
                            @if(auth()->check())
                                {{ auth()->user()->getUserFullName() }}
                            @endif
                            {{-- @if(session('token') || auth()->check())
                                {{ auth()->user()->getUserFullName() }}
                            @endif --}}
                        </span>
                        <small class="text-muted">Administrateur</small>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <a class="dropdown-item" href="{{url('/myProfile')}}">
                <i class="ti ti-user-check me-2 ti-sm"></i>
                <span class="align-middle">Mon Profil</span>
            </a>
        </li>
        <li>
            <a class="dropdown-item" href="{{url('/myAccount')}}">
                <i class="ti ti-settings me-2 ti-sm"></i>
                <span class="align-middle">Paramètres</span>
            </a>
        </li>

        <li>
            <div class="dropdown-divider"></div>
        </li>
        <li>
            <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item">
                    <i class="ti ti-logout me-2 ti-sm"></i>
                    <span class="align-middle">Se Déconnecter</span>
                </button>
            </form>

        </li>
    </ul>
</li>
<!--/ User -->
