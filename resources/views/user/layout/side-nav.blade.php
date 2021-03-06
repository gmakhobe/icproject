
    <aside class="side-nav" id="show-side-navigation1">

        <div class="heading">
            @if ($IsBase64)
                <img class="img-profile" src="{{ $ProfilePicture }}">
            @else
                <img src="https://media.salon.com/2013/01/Facebook-no-profile-picture-icon-620x389.jpg"
                    class="img-profile">
            @endif
            <div class="info">
                <h3><a href="#"
                        style="letter-spacing: 4px;color: rgba(190,184,184,0.9); color: white; font-size: 20px;">{{ $NameAndSurname }}</a>
                </h3>
            </div>

        </div>

      <ul class="categories">
      <div style="padding-left: 30px;">
            </div>

            <li><i class="fa fa-home fa-fw" aria-hidden="true"></i>
                <a href="/user/dashboard">Home</a>
            </li>

            <li>
                <i class="fa fa-support fa-fw"></i><a href="/user/investment"> Investment</a>
            </li>

            <li>
                <i class="fa fa-user fa-fw"></i>
                <a href="/user/profile"> Profile</a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="/user/profile/awards">Awards</a></li>
                    <li><a href="/user/profile/calender">Calender</a></li>
                </ul>
            </li>


            <li><i class="fa fa-support fa-fw"></i><a href="/user/rawmate"> Raw-Mate</a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">Seller Profile</a></li>
                    <li><a href="#">Timeline</a></li>
                </ul>
            </li>

            <li><i class="fa fa-users fa-fw"></i><a href="/user/news">News & Events</a>
                <ul class="side-nav-dropdown">
                    <li><a href="/user/news/articles">Articles</a></li>
                    <!-- <li><a href="/user/news/where-to-invest">Where to Invest</a></li> -->
                    <li><a href="/user/news/podcasts">Podcast & Radio</a></li>
                    <li><a href="/user/news/channels">Channels</a></li>
                    <!-- <li><a href="#">Portfolio</a></li> -->
                    <li><a href="/user/news/blog">Blogs</a></li>
                </ul>
            </li>

            <li><i class="fa fa-upload fa-fw"></i><a href="/user/storeroom"> Store-Room</a>
            </li>

            <!--
            <li><i class="fa fa-bolt fa-fw"></i><a href="/user/ideas"> Ideas</a>
                <ul class="side-nav-dropdown">
                    <li><a href="/user/ideas/strategies-and-indicators#">Strategies & Indicators</a></li>
                    <li><a href="#">Job Listing</a></li>
                    <li><a href="/user/ideas/financial-literacy#">Financial Literacy</a></li>
                    <li><a href="#">Inventions</a></li>
                </ul>
            </li>
          -->

            <li><i class="fa fa-plus-square fa-fw"></i><a href="/user/create"> Create</a>
            </li>

            <!--
            <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a>
            </li>
            <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
                <ul class="side-nav-dropdown">
                    <li><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">ipsum dolor</a></li>
                    <li><a href="#">dolor ipsum</a></li>
                    <li><a href="#">amet consectetur</a></li>
                    <li><a href="#">ipsum dolor sit</a></li>
                </ul>
            </li>
          -->
        </ul>
    </aside>
    <section id="contents">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <i class="fa fa-align-right"></i>
                    </button>


          </div>


          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">



                    <script>
                        /*AlertCenterCall(1);
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


                        }*/

                    </script>

                    <div class="d-none d-sm-block topbar-divider"></div>

                    </ul>


                    <ul class="nav navbar-nav">



                        <li class="dropdown">

                        <li><a id="MessageCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                                aria-expanded="false" href="#"><i class="fa fa-comments" onclick="AlertCenter_(0)">
                                    <div class="nav-item dropdown no-arrow">

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
                                    <div class="shadow dropdown-list dropdown-menu dropdown-menu-right"
                                        aria-labelledby="alertsDropdown">
                                    </div>

                                </i>


                            </a></li>

                        <li>
                            <a id="AlertCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                                aria-expanded="false" href="#">
                                <i class="fa fa-bell-o dropdown-toggle nav-link" onclick="AlertCenter_(1)">
                                    <div class="nav-item dropdown no-arrow">


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
                                </i>

                            </a>
                        </li>
                        <li class="dropdown">


                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Portfolio</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i> Log out</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a>
                        </li>


          </div>
        </div>
      </nav>
      <!-- <footer>
        <nav style="height: 80px;background: linear-gradient(135deg,#9526a9 5% ,#23212f 95%); color: #ffffff;">
                <div style="padding-top: 1%; padding-left: 25%;">
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;&nbsp;&nbsp;&nbsp; Legal Aspects |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Disclosure |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Privacy |</span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Cookie Preference | </span>
                        <span style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">&nbsp;Contacts </span>
                </div>
            </nav>



    </footer> -->

                    </div>
                </div>
        </nav>


        <script src='http://code.jquery.com/jquery-latest.js'></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>

        <script src='js/main.js'></script>
