<nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top"
        style="background-color: rgb(50,46,46);color: rgb(50,46,46);width: 1349px;height: 74px;margin-top: -3px;">
        <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop"
                type="button" style="color: rgb(50,46,46);"><i class="fas fa-bars"></i></button>
            <form class="form-inline bg-dark d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
                style="margin-left: 18px;margin-right: 67px;background-color: #322e2e;">
                <div class="input-group" style="margin-left: 26px;"><input
                        class="bg-dark border-danger form-control border-0 small" type="text"
                        placeholder="Search for ..."
                        style="width: 413px;height: 45px;margin-left: 118px;margin-right: 0px;padding-left: 14px;color: rgb(245,67,67);"
                        autocomplete="on" required=""></div>
            </form>
            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"
                    style="padding-left: 16px;background-color: rgb(245,67,67);height: 46px;"><i
                        class="fas fa-search"></i></button></div>
            <ul class="nav navbar-nav text-dark flex-nowrap ml-auto" style="background-color: rgb(90,92,105);">
                <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link"
                        data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                    <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu"
                        aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto navbar-search w-100">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text"
                                    placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i
                                            class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                    <div class="nav-item dropdown no-arrow">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                            
                            <span class="badge badge-danger badge-counter">3+</span>

                            <i class="fas fa-bell fa-fw"></i>
                        </a>

                        <!-- Start : Alert Center -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                            role="menu">
                            <h6 class="dropdown-header">Alerts Center</h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-primary icon-circle">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="small text-gray-500">December 12, 2019</span>
                                    <p>A new monthly report is ready to download!</p>
                                </div>
                            </a>
                            
                            <a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                        </div>
                        <!-- End : Alert Center -->

                    </div>
                </li>

                <!-- Start : Alert Messages -->
                <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                    <div class="nav-item dropdown no-arrow">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                            <i class="fas fa-envelope fa-fw"></i>
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in" role="menu">
                            <h6 class="dropdown-header">Message Alerts</h6>
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="dropdown-list-image mr-3">
                                    <img class="rounded-circle" src="avatars/avatar4.jpeg">
                                    <div class="bg-success status-indicator"></div>
                                </div>
                                <div class="font-weight-bold">
                                    <div class="text-truncate">
                                        <span>Hi there! I am wondering if you can help me with a
                                            problem I've been having.
                                        </span>
                                    </div>
                                    <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                </div>
                            </a>
                            
                            <a class="text-center dropdown-item small text-gray-500" href="#">
                                Show All Messages
                            </a>
                        </div>
                    </div>
                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                        aria-labelledby="alertsDropdown"></div>
                </li>
                <!-- End : Alert Messages -->

                <div class="d-none d-sm-block topbar-divider"></div>
                <li class="nav-item dropdown no-arrow" role="presentation">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                            aria-expanded="false" href="#"></a>
                        <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a
                                class="dropdown-item" role="presentation" href="#"><i
                                    class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a
                                class="dropdown-item" role="presentation" href="#"><i
                                    class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                            <a class="dropdown-item" role="presentation" href="#"><i
                                    class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                        </div>
                    </div>
                </li>
            </ul>

            @if ($IsBase64)
                <img class="border rounded-circle img-profile" src="{{ $ProfilePicture }}">
            @else
                <img style="width:60px;height:60px;" class="border rounded-circle img-profile" src="{{ asset('images/user-icon.svg') }}">
            @endif

            <span class="d-none d-lg-inline mr-2 text-gray-600 small" style="color: rgb(245,67,67);">
                <strong>{{ $NameAndSurname }}</strong>
            </span>
            <a class="border rounded d-inline scroll-to-top" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>
        </div>
    </nav>