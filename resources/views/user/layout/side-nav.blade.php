<html lang="ko">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">




       <aside class="side-nav" id="show-side-navigation1">

      <div class="heading">
              @if ($IsBase64)
                    <img class="border rounded-circle img-profile" src="{{ $ProfilePicture }}">
                @else
                  <img src="https://media.salon.com/2013/01/Facebook-no-profile-picture-icon-620x389.jpg" class="border rounded-circle img-profile">
                @endif
        <div class="info">

          <h3><a href="#"  style="letter-spacing: 3px;color: rgba(190,184,184,0.9); color: white;">{{ $NameAndSurname }}</a></h3>



                  </div>
      </div>

      <ul class="categories">
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
              <li><a href="#">Awards</a></li>
            </ul>
        </li>


        <li><i class="fa fa-support fa-fw"></i><a href="/user/rawmate"> Raw-Mate</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Seller Profile</a></li>
            <li><a href="#">Timeline</a></li>
          </ul>
        </li>

        <li><i class="fa fa-users fa-fw"></i><a href="#">News & Events</a>
          <ul class="side-nav-dropdown">
            <li><a href="/user/news/articles">Articles</a></li>
            <li><a href="/user/news/where-to-invest">Where to Invest</a></li>
            <li><a href="/user/news/podcasts">Podcast & Radio</a></li>
            <li><a href="/user/news/channels">Channels</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="/user/news/blog">Blogs</a></li>
          </ul>
        </li>

        <li><i class="fa fa-upload fa-fw"></i><a href="#"> Store-Room</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Dashboard</a></li>
          </ul>
        </li>

        <li><i class="fa fa-bolt fa-fw"></i><a href="/user/ideas"> Ideas</a>
          <ul class="side-nav-dropdown">
            <li><a href="/user/ideas/strategies-and-indicators#">Strategies & Indicators</a></li>
            <li><a href="#">Job Listing</a></li>
            <li><a href="#">Financial Literacy</a></li>
            <li><a href="#">Inventions</a></li>
          </ul>
        </li>

        <li><i class="fa fa-plus-square fa-fw"></i><a href="#"> Create</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Event</a></li>
            <li><a href="#">Company</a></li>
            <li><a href="#">Service</a></li>
          </ul>
        </li>

        <p>Example:</p>
        <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a></li>
        <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Lorem ipsum</a></li>
            <li><a href="#">ipsum dolor</a></li>
            <li><a href="#">dolor ipsum</a></li>
            <li><a href="#">amet consectetur</a></li>
            <li><a href="#">ipsum dolor sit</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>


          </div>

          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

            <!-- End : Alert Messages -->

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

        </ul>

            <ul class="nav navbar-nav">
              
              <li class="dropdown">

              <li><a  id="MessageCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#"><i class="fa fa-comments" onclick="AlertCenter_(0)">
                        <div  class="nav-item dropdown no-arrow">

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

                        </i>


              </a></li>

              <li>
              <a id="AlertCenterCount" class="dropdown-toggle nav-link" data-toggle="dropdown"
                        aria-expanded="false" href="#">
                 <i class="fa fa-bell-o dropdown-toggle nav-link"  onclick="AlertCenter_(1)">
                <div  class="nav-item dropdown no-arrow">


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
                </i>

                </a>
                </li>
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fw"></i>Activity log</a></li>
                  <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> Settings</a></li
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>
              <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>

            </ul>

            <
          </div>
        </div>
      </nav>


       <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script src='js/main.js'></script>

