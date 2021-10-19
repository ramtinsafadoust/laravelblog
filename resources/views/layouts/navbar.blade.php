<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li>
            </ul>
            @if ( auth()->check() )

           
                <ul>
                    
                    <li> <a href="/admin/articles" class="btn btn-primary">{{auth()->user()->name}}</a></li>
                    <br>
                   
                    <li>     <form action="{{route('logout')}}" method="POST">
                        @csrf

                        <button class="btn btn-danger">Logout</button>
                        </form></li>
                    
                   
                    
                </ul>

                @else
                <ul>

                    <li><a href="{{route('login')}}" class="btn btn-info">Login</a></li>
                </ul>
            @endif
        </div>
    </div>
</nav>