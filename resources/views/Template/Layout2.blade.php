<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('public/css/template2.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="ligne1">
            <div>
                <a href="">Particuliers</a>
                <a href="">Banque Privée</a>
                <a href="">Professionnels</a>
                <a href="">Entreprises</a>
            </div>
            <div>
                <a href="http://">Accessibilité</a>
                <div>
                    <ul>
                        <li><span class="fi fi-fr"></span>Francais</li>
                        <li><span class="fi fi-gb"></span>English</li>
                        <li><span class="fi fi-es"></span>Español</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="stick">
        <div class="hamb">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>
            <a href="http://">&nbsp;</a>
            <p>{{ $settings->slogan }}</p>
        </div>
        <div>
            <a href="">Devenir Client</a>
            <a href=""><i class="bi bi-person-lock"></i>Accéder à mes comptes</a>
        </div>
    </div>
    <div id="ConteneurPrincipal">

        <nav>
            <ul>
                <li>
                    <span>
                        <i class="bi bi-credit-card"></i>
                        <span>Gérer ses comptes</span>
                    </span>
                    <p>Devenir client, cartes & services</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-currency-euro"></i>
                        <span>Emprunter</span>
                    </span>
                    <p>Crédit immobilier - Consommation ...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-umbrella-fill"></i>
                        <span>Assurance</span>
                    </span>
                    <p>Auto - Habitation - Prévoyance...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-wallet2"></i>
                        <span>Epargner</span>
                    </span>
                    <p>Auto - Habitation - Prévoyance...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-graph-up-arrow"></i>
                        <span>Investir en Bourse</span>
                    </span>
                    <p>Marchéd en direct - Tarifs ...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Nous contacter</span>
                    </span>
                    <p>Urgence - Agences...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-person-rolodex"></i>
                        <span>Vous & Vos besoins</span>
                    </span>
                    <p>Vos Projets - Situation ...</p>
                </li>
                <li>
                    <span>
                        <i class="bi bi-qr-code"></i>
                        <span>Ma Banque</span>
                    </span>
                    <p>Connectez-vous à votre compte</p>
                </li>
            </ul>
        </nav>
        <div id="main">
            @yield('contenu')
        </div>
    </div>

    <script src="{{ asset('node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="{{ asset('public/js/template2.js') }}"></script>
    @yield('scripts')
</body>

</html>
