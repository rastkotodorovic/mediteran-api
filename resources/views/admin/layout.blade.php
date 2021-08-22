<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Mediteran</title>
</head>
<body class="full-screen with-content-panel menu-position-side menu-side-left" style="height: 100%;">
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="layout-w" style="min-height: 100vh;">
            <div class="menu-w selected-menu-color-light menu-has-selected-link menu-activated-on-click color-scheme-light color-style-default sub-menu-color-light menu-position-side menu-side-left menu-layout-compact sub-menu-style-inside">
                <div class="logo-w">
                    <a class="logo" href="#">
                        <div class="logo-element"></div>
                        <div class="logo-label">
                            Mediteran
                        </div>
                    </a>
                </div>
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img src="{{ asset('admin2/img/avatar.jpg') }}">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                Rale
                            </div>
                        </div>
                        <div class="logged-user-toggler-arrow">
                            <div class="os-icon os-icon-chevron-down"></div>
                        </div>
                        <div class="logged-user-menu color-style-bright">
                            <div class="logged-user-avatar-info">
                                <div class="avatar-w">
                                    <img alt="" src="{{ asset('admin2/img/avatar.jpg') }}">
                                </div>
                                <div class="logged-user-info-w">
                                    <div class="logged-user-name">
                                       a
                                    </div>
                                    <div class="logged-user-role">
                                        a
                                    </div>
                                </div>
                            </div>
                            <div class="bg-icon">
                                <i class="os-icon os-icon-wallet-loaded"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <i class="os-icon os-icon-signs-11"></i> {{ __('Odjava') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h1 class="menu-page-header">
                    Page Header
                </h1>
                <ul class="main-menu">
                    <li class=" has-sub-menu">
                        <a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-package"></div>
                            </div>
                            <span>News</span></a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                News
                            </div>
                            <div class="sub-menu-icon">
                                <i class="os-icon os-icon-package"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="{{ route('articles.index') }}">List</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('articles.create') }}">Add</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-w">
                <div class="content-i">
                    <div class="content-box">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.3/js/standalone/selectize.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/4.1.0/cropper.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="{{ mix('js/all.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('scripts')
</body>
</html>