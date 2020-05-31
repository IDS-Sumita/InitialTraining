<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="javascript:void(0)" onclick="location.href='<?= BASEURL ?>'">
        <?= SYSTEM_NAME ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ページリンク
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="javascript:void(0)" onclick="location.href='<?= BASEURL ?>'">
                        Demo
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)" onclick="location.href='<?= BASEURL ?>'">
                        Shibuya
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)" onclick="location.href='<?= BASEURL ?>'">
                        Fukasaku
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>