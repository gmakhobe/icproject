<!DOCTYPE html>
<html>

<head>

    <!-- Start: Header Content -->

    <!-- End: Header Content -->

    <link rel="stylesheet" href="/assets1/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer-1.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer-2.css">
    <link rel="stylesheet" href="/assets1/css/Dark-Footer.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="/assets1/css/Dark-NavBar.css">
    <link rel="stylesheet" href="/assets1/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="/assets1/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="/assets1/css/Pretty-Table-1.css">
    <link rel="stylesheet" href="/assets1/css/Pretty-Table.css">
    <link rel="stylesheet" href="/assets1/css/styles.css">
    <link rel="stylesheet" href="/assets1/css/Vertical-Left-SideBar-by-Jigar-Mistry.css">
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">
    <link rel="stylesheet" href="/assets1/css/profile.css">
    <link rel="stylesheet" href="/assets1/css/Article-List.css">
    <link rel="stylesheet" href="/assets1/css/Profile-Card-1.css">
    <link rel="stylesheet" href="/assets1/css/ideas.css">
    <link rel="stylesheet" href="/assets1/css/newSideNav.css">
    <link rel="stylesheet" href="/assets1/css/indicatorsAndStrategies.css">
<<<<<<< HEAD
</head>

<body>

    <!-- Start: Vertical Left-SideBar by Jigar Mistry -->
    @include('/user/layout/header-style-1')
    @include('/user/layout/side-nav')
    <!-- End: Vertical Left-SideBar by Jigar Mistry -->
    <!-- Start: Top Navbar -->

    <nav style="padding-right: 40%;"> <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a href="/user/profile/awards#">Awards</a></li>
            <li><a href="/user/profile/calender#">Calendar</a></li>
            <li><a style="color: rgb(245,67,67); font-size: 15px;">Search booster</a></li>
        </ul>
    </nav>

    
    <nav style="padding-right: 37.5%;"> <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a href="#">Engagement</a></li>
            <li><a href="#">My World</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Group</a></li>
            <li><a style="color: rgb(245,67,67); font-size: 12px;">POST</a></li>
        </ul>
    </nav>

    <nav> <!-- The nav link semantically marks your main site navigation -->
        <ul>
            <li><a style="color: blue; font-size: 12px;">TREND</a></li>
            <li><a style="color: blue; font-size: 12px;">VIEWED</a></li>
            <li><a style="color: blue; font-size: 12px;">PREVIOUS</a></li>
        </ul>
    </nav>

    <div class="book-store">
 <div class="main-wrapper">
    <div id="allLessons">
      <h4 style="padding-left: 1%;"> Financial Literacy: All Lessons<h4>
=======
    <link rel="stylesheet" href="/assets1/css/profilepage.css">
>>>>>>> 8e2140803e766a20a18eab0e695212bcdfdae3d8

</head>
@include('/user/layout/side-nav')

<script>
        $(document).ready(function(){
            $('.menu-container').hover(
                function(){
                    $('.profile-actions').slideDown('fast');
                  $('.list-icon').addClass('active');
                },
                function(){
                    $('.profile-actions').slideUp('fast');
                  $('.list-icon').removeClass('active');
                }
            );
            $('.profile-card').mouseleave(function(){
                $('.profile-actions').slideUp('fast');
                $('.profile-info').slideUp('fast');
                $('.profile-map').slideUp('fast');
            });

            $('.profile-avatar').hover(
                function(){
                    $('.profile-links').fadeIn('fast');
                },
                function(){
                    $('.profile-links').hide();
                }
            );
            $('.read-more').click(function(){
                $('.profile-map').slideUp('fast');
                $('.profile-info').slideToggle('fast');
                return false;
            });
            $('.view-map').click(function(){
                $('.profile-info').slideUp('fast');
                $('.profile-map').slideToggle('fast');
                return false;
            });
        });
</script>

<body>
    <div class="profile-card" style="padding-left:20%; width: 890px;">
        <div class="profile-cover">
            <div class="menu-container">
                <a class="list-icon" title="Expand"></a>          
            </div>
            
            <div class="profile-avatar">
                <a href="#"><img src="{{ $ProfilePicture }}" /></a>
            </div>

            <div class="profile-details">
                <h1>{{ $NameAndSurname }}</h1>
                <h3>@ {{ $Name }}</h3>
            </div>
        </div>


        <div class="profile-content">
        <br><br>

            <div class="row" style="padding-left: 7.5%;">


            <div class="column" style="background-color:#00134d; padding-left: 2%; width: 250px;">
                <p style=" padding-top: 5%; padding-left: 1%; font-size: 25px; color:white;">+27 61 758 2543</p>
              </div>


              <div class="column" style="background-color:#3d3d29; padding-left: 2%; width: 400px;">
                <p style="padding-top: 5%; padding-left: 1%; font-size: 25px; color:white;">darylnyawasha@gmail.com</p>
              </div>
           

              <div class="column" style="background-color:#660066; padding-left: 2%; width: 550px;">
                <p style="padding-top: 5%; padding-left: 1%; font-size: 25px; color:white;">176 Glenwood Road, Pretoria</p>  
              </div>

            </div>
        </div>
    </div>
</body>

</html>
