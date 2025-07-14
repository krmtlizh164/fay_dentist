<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Fay Dentist' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            padding-top: 56px;
        }
        .article-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }
        footer {
            margin-top: 2rem;
            padding: 1rem 0;
            background-color: #f8f9fa;
        }
        .card-img-top {
            height: 300px;
            object-fit: cover;
            object-position: top;
        }

        /* Untuk efek hover */
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Fay Dentist</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang-kami">Tentang Kami</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <?php if (session()->get('logged_in')): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <?= session()->get('username') ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if (session()->get('role') === 'admin'): ?>
                                    <li><a class="dropdown-item" href="/admin">Dashboard Admin</a></li>
                                <?php endif; ?>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Daftar</a>
                        </li>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>

    <main class="container py-4">
        <?= $this->renderSection('content') ?>
    </main>

    <footer class="bg-light text-center py-3">
        <div class="container">
            <p>&copy; <?= date('Y') ?> Fay Dentist. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
