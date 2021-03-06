<div id="header">
    <nav class="nav-extended">
        <div class="nav-wrapper" style="background-color: #2e6da4">
            <a href="#" class="brand-logo" style="padding-left: 10px"> Operator</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

            {{--right top corner links--}}
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="operator_profile">Profile</a></li>
                <li><a href="operator_change_password">Settings</a></li>
                <li><a href="operator_sign_out">Sign out</a></li>
            </ul>

            {{----}}
            <ul class="side-nav" id="mobile-demo">

            </ul>
            {{--navbar--}}
            <ul class="tabs tabs-transparent">
                <li class="tab"><a target="_self" @yield('tab5') href="operator"><i class="material-icons left">home</i>home</a></li>

                <li class="tab"><a target="_self" @yield('tab2') href="operator_search_tickets"><i class="material-icons left">done</i>issue tickets</a></li>
            </ul>
        </div>
    </nav>


</div>