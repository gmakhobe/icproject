<nav class="navbar navbar-light navbar-expand-md sticky-top bounce animated navigation-clean-button" style="height: 80px;background: linear-gradient(to right,#a889e6 0%, #53005e 100%);; color: #ffffff;">
        <div class="container-fluid">
            <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div style=" padding-left: 100px;">
                <form class="search-container">
                    <input type="text" id="search-bar" placeholder="What can we help you with today?">
                </form>
            </div>
            <style>
                .fas {
                    color: #fff !important;
                }

                .search-container {
                width: 490px;
                display: block;
                margin: 0 auto; }

                input#search-bar {
                margin: 0 auto;
                width: 100%;
                height: 45px;
                padding: 0 20px;
                font-size: 1rem;
                border: 1px solid #D0CFCE;
                outline: none; }
                input#search-bar:focus {
                    border: 1px solid #008ABF;
                    transition: 0.35s ease;
                    color: #008ABF; }
                    input#search-bar:focus::-webkit-input-placeholder {
                    transition: opacity 0.45s ease;
                    opacity: 0; }
                    input#search-bar:focus::-moz-placeholder {
                    transition: opacity 0.45s ease;
                    opacity: 0; }
                    input#search-bar:focus:-ms-placeholder {
                    transition: opacity 0.45s ease;
                    opacity: 0; }

                .search-icon {
                position: relative;
                float: right;
                width: 75px;
                height: 75px;
                top: -62px;
                right: -45px; }


            </style>

          <ul class="nav navbar-nav text-dark flex-nowrap ml-auto" style="background-color: linear-gradient(to right,#a889e6 0%, #53005e 100%);">
          
            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                <div onclick="AlertCenter_(1)" class="nav-item dropdown no-arrow">
                    <a id="AlertCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">

                        <i class="fas fa-bell fa-fw" style="color:pruple;"></i>

                    </a>

                    <!-- Start : Alert Center -->
                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                        role="menu">
                        <h6 class="dropdown-header">Alerts Center</h6>
                        <div id="AlertCenter">

                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-primary icon-circle">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="small text-gray-500">Today</span>
                                    <p>No Notifications Today!</p>
                                </div>
                            </a>

                        </div>
                    </div>
                    <!-- End : Alert Center -->

                </div>
            </li>

            <!-- Start : Alert Messages -->
            <li class="nav-item dropdown no-arrow mx-1 text-white" role="presentation">
                <div onclick="AlertCenter_(0)" class="nav-item dropdown no-arrow">
                    <a id="MessageCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">

                        <i class="fas fa-envelope fa-fw"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                        role="menu">
                        <h6 class="dropdown-header">Message Alerts</h6>
                        <div id="MessageCenter">
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate">
                                        <span>No messages!
                                        </span>
                                    </div>
                                    <p class="small text-gray-500 mb-0">Plugin - Today</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                </div>
            </li>
            <!-- End : Alert Messages -->

            <script>
                //AlertCenterCall(1);
                //AlertCenterCall(0);

               /* const AlertCenter_ = (param) => {

                    let url = (param ? '/alert/alertcenter/off' : '/alert/messagecenter/off');

                    fetch(url, {
                            method: "get",
                            headers: {
                                'X-CSRF-TOKEN': "dasdsafc"
                            }
                        })
                        .then(res => {
                            if (res.status == 200)
                                return res.text();
                            else
                                swal("Alert Center", "Could not remove alerts!");
                        })
                        .then(text => {

                            //(param ? AlertCenterCall(1) : AlertCenterCall(0))

                        })
                        .catch(res => {
                            //Print any error related to sending request
                            swal("Alert Center", `Failed to send a request for Alert Center -> ${res}`);
                        });


                }*/

            </script>

            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow" role="presentation">
                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#"></a>
                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                        <a class="dropdown-item" role="presentation" href="/user/profile">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            &nbsp;Profile
                        </a>
                        <a class="dropdown-item" role="presentation" href="#">
                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                            &nbsp;Portfolio
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" role="presentation" href="/logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            &nbsp;Logout
                        </a>
                    </div>
                </div>
            </li>
        </ul>

        @if ($IsBase64)
            <img class="border rounded-circle img-profile" src="{{ $ProfilePicture }}">
        @else
            <img style="width:30px;height:30px;" class="border rounded-circle img-profile"
                src="{{ asset('images/user-icon.svg') }}">
        @endif

        <strong>
            <span id="Name-Ref" class="d-none d-lg-inline mr-2 text-gray-600 small" style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;
                {{ $NameAndSurname }}
            </span>
        </strong>

    </nav>

<!-- <nav class="navbar navbar-light navbar-expand bg-dark shadow mb-4 topbar static-top"
    style="background-color: rgb(50,46,46);color: rgb(50,46,46);">
    <div class="container-fluid">
        <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"
            style="color: pu">
            <i class="fas fa-bars"></i>
        </button>
        <form class="form-inline bg-dark d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input class="bg-dark border-danger form-control border-0 small" type="text"
                    placeholder="Search for ..."
                    style="width: 413px;margin-left: 118px;margin-right: 0px;padding-left: 14px;color: rgb(245,67,67);"
                    autocomplete="on" required="">
            </div>
        </form>
        <div class="input-group-append">
            <button class="btn btn-primary py-0" type="button" style="background-color: rgb(245,67,67);height: 46px;">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <ul class="nav navbar-nav text-dark flex-nowrap ml-auto" style="background-color: rgb(90,92,105);">
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown"
                    aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
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

            <style>
                .fas {
                    color: #fff !important;
                }

            </style>

            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                <div onclick="AlertCenter_(1)" class="nav-item dropdown no-arrow">
                    <a id="AlertCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">

                        <i class="fas fa-bell fa-fw"></i>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                        role="menu">
                        <h6 class="dropdown-header">Alerts Center</h6>
                        <div id="AlertCenter">

                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="mr-3">
                                    <div class="bg-primary icon-circle">
                                        <i class="fas fa-file-alt text-white"></i>
                                    </div>
                                </div>
                                <div>
                                    <span class="small text-gray-500">Today</span>
                                    <p>No Notifications Today!</p>
                                </div>
                            </a>

                        </div>
                    </div>

                </div>
            </li>

            <li class="nav-item dropdown no-arrow mx-1 text-white" role="presentation">
                <div onclick="AlertCenter_(0)" class="nav-item dropdown no-arrow">
                    <a id="MessageCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">

                        <i class="fas fa-envelope fa-fw"></i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                        role="menu">
                        <h6 class="dropdown-header">Message Alerts</h6>
                        <div id="MessageCenter">
                            <a class="d-flex align-items-center dropdown-item" href="#">
                                <div class="font-weight-bold">
                                    <div class="text-truncate">
                                        <span>No messages!
                                        </span>
                                    </div>
                                    <p class="small text-gray-500 mb-0">Plugin - Today</p>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                </div>
            </li>

            <script>
                AlertCenterCall(1);
                AlertCenterCall(0);

                const AlertCenter_ = (param) => {

                    let url = (param ? '/alert/alertcenter/off' : '/alert/messagecenter/off');

                    fetch(url, {
                            method: "get",
                            headers: {
                                'X-CSRF-TOKEN': "dasdsafc"
                            }
                        })
                        .then(res => {
                            if (res.status == 200)
                                return res.text();
                            else
                                swal("Alert Center", "Could not remove alerts!");
                        })
                        .then(text => {

                            (param ? AlertCenterCall(1) : AlertCenterCall(0))

                        })
                        .catch(res => {
                            //Print any error related to sending request
                            swal("Alert Center", `Failed to send a request for Alert Center -> ${res}`);
                        });


                }

            </script>

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
            <img style="width:60px;height:60px;" class="border rounded-circle img-profile"
                src="{{ asset('images/user-icon.svg') }}">
        @endif

        <strong>
            <span id="Name-Ref" class="d-none d-lg-inline mr-2 text-gray-600 small" style="color: #fff;">
                {{ $NameAndSurname }}
            </span>
        </strong>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
</nav> --> -->
