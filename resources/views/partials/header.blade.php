<header>
    <div class="container">

        <div class="left-side">
            <h1>Logo</h1>
        
            <ul class="d-flex justify-content-center gap-3">
                <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                <li class="{{ Request::route()->getName() === 'about' ? 'active' : '' }}"><a
                    href="{{ route('about') }}">About</a></li>
              </ul>
        </div>

        <div>
            <button class="btn btn-primary">Something</button>
        </div>
    </div>
</header>