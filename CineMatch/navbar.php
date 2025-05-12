<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">CineMatch</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Filmes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="abrir_chamado.php">Suporte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="consultar_chamado.php">Tickets suporte</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logoff.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<style>

    .navbar {
    background: #007bff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

.navbar .navbar-brand {
    font-size: 1.8rem;
    font-weight: 600;
    color: white !important;
    transition: color 0.3s ease;
}

.navbar .navbar-brand:hover {
    color: #ffd700 !important;
}

.navbar .nav-link {
    color: white !important;
    font-size: 1.1rem;
    font-weight: 500;
    padding: 10px 15px;
    transition: all 0.3s ease;
}

.navbar .nav-link:hover {
    color: #ffd700 !important;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
}

.navbar-toggler {
    border-color: rgba(255, 255, 255, 0.2);
}

.navbar-toggler-icon {
    background-color: white;
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.7);
}

.navbar-light .navbar-nav .nav-link:hover {
    color: white;
}

/* Efeito de transição suave no hover */
.navbar-collapse {
    transition: transform 0.3s ease-in-out;
}

.navbar-toggler.collapsed + .navbar-collapse {
    transform: scaleY(0);
    transform-origin: top;
}
</style>