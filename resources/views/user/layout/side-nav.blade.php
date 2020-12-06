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

            <ul class="nav navbar-nav">
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                  <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                </ul>
              </li>
              <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
              <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
              <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>


       <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

      <script src='js/main.js'></script>

