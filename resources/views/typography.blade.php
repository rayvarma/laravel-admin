<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/fontawesome-all.css')}}">
  
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    </head>
    <body>
        <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.html">Concept</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('includes.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
         <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content ">
             
                    <div class="row">
                        <div class="col-xl-10">
                            <!-- ============================================================== -->
                            <!-- pageheader  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="page-header" id="top">
                                        <h2 class="pageheader-title">Typography </h2>
                                        <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                                        <div class="page-breadcrumb">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">UI Elements</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">Typography</li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end pageheader  -->
                            <!-- ============================================================== -->
                            <!-- ============================================================== -->
                            <!-- overview  -->
                            <!-- ============================================================== -->
                            <div class="page-section" id="overview">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h2>Overview</h2>
                                        <p class="lead">Nam pulvinar interdum turpis a mattis. Etiam augue leo, mollis a massa sagittis, egestas pretium risus. Aliquam auctor nibh mauris, at fringilla elit lobortis sodales. Praesent volutpat felis et placerat elementum. </p>
                                        <ul class="list-unstyled arrow">
                                            <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Mauris bibendum massa ut porttitor congue.</li>
                                            <li>Morbi condimentum magna eget facilisis accumsan.</li>
                                            <li>Proin euismod eros nec libero efficitur, a dapibus mauris condimentum. </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end overview  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- ============================================================== -->
                                    <!-- headings  -->
                                    <!-- ============================================================== -->
                                    <div class="card" id="headings">
                                        <h5 class="card-header">Headings</h5>
                                        <div class="card-body">
                                            <h1>h1. Bootstrap heading</h1>
                                            <h2>h2. Bootstrap heading</h2>
                                            <h3>h3. Bootstrap heading</h3>
                                            <h4>h4. Bootstrap heading</h4>
                                            <h5>h5. Bootstrap heading</h5>
                                            <h6>h6. Bootstrap heading</h6>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end headings  -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- display headings  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="d-heading">
                                        <h5 class="card-header">Display Headings</h5>
                                        <div class="card-body">
                                            <h1 class="display-1">Display 1</h1>
                                            <h1 class="display-2">Display 2</h1>
                                            <h1 class="display-3">Display 3</h1>
                                            <h1 class="display-4">Display 4</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end display headings  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- body text  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="text">
                                        <h5 class="card-header">Body Text</h5>
                                        <div class="card-body">
                                            <p class="lead"> Maecenas eget metus quis justo semper malesuada id id leo. Mauris tristique libero mauris, vitae rutrum mi ultricies a. Vestibulum volutpat eu leo sit amet feugiat. </p>
                                            <p>Pellentesque pellentesque elementum sem, eu interdum magna. Aenean vestibulum, erat vel tincidunt luctus, ex orci interdum est, ut vehicula erat massa ut purus. Nam sit amet odio quis ante bibendum faucibus. Mauris eleifend lobortis justo vel dictum. Aenean lobortis eleifend turpis, sit amet ullamcorper dui euismod at. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end body text  -->
                                <!-- ============================================================== -->
                            </div>
                            <!-- ============================================================== -->
                            <!-- alignment  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="align">
                                        <h5 class="card-header">Alignment</h5>
                                        <div class="card-body">
                                            <h3 class="text-left">Left aligned text.</h3>
                                            <p class="text-left">Pellentesque vulputate arcu sed risus auctor tincidunt. Morbi eget massa turpis. Fusce aliquet dolor eu posuere tincidunt. Fusce ultricies luctus dui, dapibus pharetra risus semper non. .</p>
                                        </div>
                                        <div class="card-body border-top">
                                            <h3 class="text-center">Center aligned text.</h3>
                                            <p class="text-center">Pellentesque vulputate arcu sed risus auctor tincidunt. Morbi eget massa turpis. Fusce aliquet dolor eu posuere tincidunt. Fusce ultricies luctus dui, dapibus pharetra risus semper non. .</p>
                                        </div>
                                        <div class="card-body border-top">
                                            <h3 class="text-right">Right aligned text.</h3>
                                            <p class="text-right">Pellentesque vulputate arcu sed risus auctor tincidunt. Morbi eget massa turpis. Fusce aliquet dolor eu posuere tincidunt. Fusce ultricies luctus dui, dapibus pharetra risus semper non. .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end alignment  -->
                            <!-- ============================================================== -->
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- unordered list  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="u-list">
                                        <h5 class="card-header">Unordered list</h5>
                                        <div class="card-body">
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit
                                                    <ul>
                                                        <li>Phasellus iaculis neque</li>
                                                        <li>Purus sodales ultricies</li>
                                                        <li>Vestibulum laoreet porttitor sem</li>
                                                        <li>Ac tristique libero volutpat at</li>
                                                    </ul>
                                                </li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end unorderd list  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- ordered list  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="o-list">
                                        <h5 class="card-header">Ordered list</h5>
                                        <div class="card-body">
                                            <ol>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit</li>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end ordered list  -->
                                <!-- ============================================================== -->
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- ============================================================== -->
                                    <!-- unstyled  -->
                                    <!-- ============================================================== -->
                                    <div class="card" id="un-list">
                                        <h5 class="card-header">Unstyled</h5>
                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit</li>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end unstyled  -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- ============================================================== -->
                                    <!-- list styled  -->
                                    <!-- ============================================================== -->
                                    <div class="card" id="styled-list">
                                        <h5 class="card-header">List Styled</h5>
                                        <div class="card-body">
                                            <ul class="list-unstyled arrow">
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Consectetur adipiscing elit</li>
                                                <li>Integer molestie lorem at massa</li>
                                                <li>Facilisis in pretium nisl aliquet</li>
                                                <li>Nulla volutpat aliquam velit</li>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                                <li>Faucibus porta lacus fringilla vel</li>
                                                <li>Aenean sit amet erat nunc</li>
                                                <li>Eget porttitor lorem</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end list styled  -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- ============================================================== -->
                                    <!-- text elements  -->
                                    <!-- ============================================================== -->
                                    <div class="card" id="text-elements">
                                        <h5 class="card-header">Text Elements</h5>
                                        <div class="card-body">
                                            <p>You can use the mark tag to
                                                <mark>highlight</mark> text.</p>
                                            <p>
                                                <del>This line of text is meant to be treated as deleted text.</del>
                                            </p>
                                            <p>
                                                <s>This line of text is meant to be treated as no longer accurate.</s>
                                            </p>
                                            <p>
                                                <ins>This line of text is meant to be treated as an addition to the document.</ins>
                                            </p>
                                            <p><u>This line of text will render as underlined</u></p>
                                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                                            <p><strong>This line rendered as bold text.</strong></p>
                                            <p><em>This line rendered as italicized text.</em></p>
                                        </div>
                                    </div>
                                    <!-- ============================================================== -->
                                    <!-- end text elements  -->
                                    <!-- ============================================================== -->
                                </div>
                            </div>
                            <div class="row">
                                <!-- ============================================================== -->
                                <!-- blockquote  -->
                                <!-- ============================================================== -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="card" id="blockquote">
                                        <h5 class="card-header">Blockquote</h5>
                                        <div class="card-body">
                                            <blockquote class="blockquote">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                            </blockquote>
                                        </div>
                                        <div class="card-body border-top">
                                            <blockquote class="blockquote">
                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                                <footer class="blockquote-footer">Someone famous in
                                                    <cite title="Source Title">Source Title</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <!-- ============================================================== -->
                                <!-- end blockquote  -->
                                <!-- ============================================================== -->
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12 ">
                            <!-- ============================================================== -->
                            <!--side navbar  -->
                            <!-- ============================================================== -->
                            <div class="sidebar-nav-fixed">
                                <ul class="list-unstyled">
                                    <li><a href="#overview" class="active">Overview</a></li>
                                    <li><a href="#headings">Headings</a></li>
                                    <li><a href="#d-heading">Display Headings</a></li>
                                    <li><a href="#text">Body Text</a></li>
                                    <li><a href="#align">Alignment</a></li>
                                    <li><a href="#u-list">Unordered list</a></li>
                                    <li><a href="#o-list">Ordered list</a></li>
                                    <li><a href="#un-list">Unstyled list</a></li>
                                    <li><a href="#styled-list">Styled list</a></li>
                                    <li><a href="#text-elements">Inline text elements</a></li>
                                    <li><a href="#blockquote">Blockquote</a></li>
                                    <li><a href="#top">Back to Top</a></li>
                                </ul>
                            </div>
                            <!-- ============================================================== -->
                            <!-- side navbar  -->
                            <!-- ============================================================== -->
                        </div>
                    </div>
             
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
   
    </body>
</html>
