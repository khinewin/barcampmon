<header id="navigation">
    <div class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bars fa-lg"></span>
                </button>

                <a  class="navbar-brand" href="{{route('home')}}">
                    <i class="fa fa-dashboard fa-2x"></i> Dashboard
                </a>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" >
                    <li class="scroll"><a href="{{route('manageTopicBoard')}}"><i class="fa fa-list-alt"></i> Manage Topic Board</a></li>
                    <li class="scroll"><a href="{{route('manageSponsor')}}"><i class="fa fa-gift"></i> Manage Sponsor</a></li>
                    <li class="scroll"><a href="{{route('manageGallery')}}"><i class="fa fa-photo"></i> Manage Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- Authentication Links -->

                </ul>
            </div>


        </div>
    </div><!--/navbar-->
</header> <!--/#navigation-->
