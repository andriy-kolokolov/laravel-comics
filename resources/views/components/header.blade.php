<header class="d-flex justify-content-between p-4">
    <div class="logo">
        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="nav-logo">
    </div>
    <nav class="nav">
        <ul class="nav__list d-flex fs-5 gap-3 fw-bold m-0 p-0">
            <li class="nav-list__item"><a href="/characters">CHARACTERS</a></li>
            <li class="nav-list__item"><a href="/comics">COMICS</a></li>
            <li class="nav-list__item"><a href="/movies">MOVIES</a></li>
            <li class="nav-list__item"><a href="/tv">TV</a></li>
            <li class="nav-list__item"><a href="/games">GAMES</a></li>
            <li class="nav-list__item"><a href="/collectibles">COLLECTIBLES</a></li>
            <li class="nav-list__item"><a href="/videos">VIDEOS</a></li>
            <li class="nav-list__item"><a href="/fans">FANS</a></li>
            <li class="nav-list__item"><a href="/news">NEWS</a></li>
            <li class="nav-list__item"><a href="/shop">SHOP</a></li>
        </ul>
    </nav>
    <div class="search d-flex align-items-center">
        <div class="search__input">
            <input type="text" name="search" id="search">
        </div>
    </div>
</header>


<script>
    let currentPath = window.location.pathname;
    let navItems = document.querySelectorAll('.nav-list__item');

    navItems.forEach(function(item) {
        let link = item.querySelector('a');
        if (link.getAttribute('href') === currentPath) {
            item.classList.add('active');
        }
    });
</script>
