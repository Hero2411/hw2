<button id="upbtn" title="Go to top"></button>
<button id="menubtn" title="Menu"></button>
<button id="menux" title="Close"></button>

<nav>

    <div id="linkmenu">
        <a href="/"> Home </a>
        <a href="/sets"> Set </a>


        @auth

            <a id="account" href="/account"> Account </a>
            <form class="logbutton" action="/logout" method="POST">
                @csrf
                <button>LogOut</button>

            </form>
        @else
            <form class="logbutton" action="/loginpage" method="GET">
                @csrf
                <button>Login/Register</button>

            </form>


        @endauth



    </div>

    <div id="logomenu">
        <a href="/" target="_self">
            <img src="/assets/img/logo.png" alt="Logo">
        </a>
    </div>
</nav>
