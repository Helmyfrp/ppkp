<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
    @include('adminlte::partials.common.brand-logo-xl')
    @else
    @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            @if (Auth::user()->status == "ppkp")
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Menu Mahasiswa {{ Auth::user()->status}}</li>
                <li class="nav-item">
                    <a href="/pengumumanppkp" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Pengumuman
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dosenpembimbing" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Dosen Pembimbing
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pengajuanproposal" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Pengajuan Proposal
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/bimbingan" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Bimbingan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/uploadkp" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Upload Project KP
                        </p>
                    </a>
                </li>

            </ul>
            @endif

            @if (Auth::user()->status == "ppkp")
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Menu {{ Auth::user()->status}}</li>
                
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/dosen" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Dosen
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('proposal') }}" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Proposal Kerja Praktek
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/projectkp" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Project KP Mahasiswa
                        </p>
                    </a>
                </li>

            </ul>
            @endif

            @if (Auth::user()->status == "ppkp")
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Menu Dosen {{ Auth::user()->status}}</li>
               
                <li class="nav-item">
                    <a href="/mahasiswabimbingan" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/formbimbingan" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Form Bimbingan Mahasiswa
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/projectkpdosen" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Project KP
                        </p>
                    </a>
                </li>

            </ul>
            @endif
        </nav>
    </div>

</aside>