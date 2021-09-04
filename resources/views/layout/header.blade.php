
<header class="main-header">


    <a href="" class="logo">



        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="  logo-mini"> </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>A</b>DMIN</span>
    </a>


<!-- Logo -->

    <!-- Header Navbar: style can be found in header.less -->

    <nav class="navbar navbar-static-top">


        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

            <div class="btn">
        @foreach($companies as $value => $label)
            <a  class="btn {{session('company') == $value ? 'btn-success' : 'btn-warning'}}"  href="/setCompany/{{$value}}">{{$label}}</a>
        @endforeach


            </div>
        <div class="btn pull-right">

                <a class="btn {{'btn-warning'}}" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>


    </nav>

    <!-- Control Sidebar Toggle Button -->

</header>

