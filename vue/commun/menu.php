<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2">
    <a class="navbar-brand m-auto" href="?page=home">Development Community</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($page === "contact")
                    echo "active"; ?>" href="?page=contact">Nous
                    contactés</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page === "equipes")
                    echo "active"; ?>" href="?page=equipes">L'équipes</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link <?php if ($page === "collaborations")
                    echo "active"; ?>" href="?page=collaborations">Nos collaborations</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link <?php if ($page === "candidature")
                    echo "active"; ?>" href="?page=candidature">Formulaire de candidature</a>
            </li>
        </ul>
    </div>
</nav>