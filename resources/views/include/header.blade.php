<div class="navbar-section">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">دانشگاه آزاد اسلامی</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('home') }}">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('master.create') }}">اساتید</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('not.found') }}">دانشجو</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
