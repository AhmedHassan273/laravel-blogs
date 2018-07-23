<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">my blog</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/posts/create">Create A Post</a>
                    </li>
                    
                    
                    <li class="nav-link">
                        <img src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Account-512.png" width="30" height="30" alt="user">
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/">{{ Auth::user()->name }}</a>
                    </li>

                    <li class="nav-item">
                        <form class="nav-link" action="/logout" method="post">
                            {{ csrf_field() }}
                            
                            <input type="image" class="nav-item"src="https://cdn1.iconfinder.com/data/icons/basic-ui-elements-color/700/010_x-512.png" width="30" height="30" alt="log out">
                        </form>
                    </li>

                    @else
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="/login">Log In</a>
                        </li>
                @endif
            </ul>
        </div>
    </div>
</nav>