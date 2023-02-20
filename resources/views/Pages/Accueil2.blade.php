@extends('Template.Layout2')
<link rel="stylesheet" href="{{ asset('public/css/Accueil2.css') }}">
@section('contenu')
    <section id="AccueilSection1">
        <h2>BIENVENUE SUR MABANQUE.BNPPARIBAS</h2>
        <p>Des solutions adaptées pour tous besoins : gestion et
            ouverture de compte en ligne, simulation de crédit,
            assurance, épargne… une banque présente à vos côtés au quotidien.</p>

        <div class="container">
            <div>
                <div>
                    <p><i class="bi bi-keyboard"></i></p>
                    <p>100% accessible en ligne</p>
                    <p>Accédez à votre compte en ligne depuis votre smartphone ou votre ordinateur</p>
                    <p><a href="">Ouvrir un Compte</a></p>
                </div>
                <div>
                    <p>Sans bouger de chez vous, ouvrez votre compte en ligne et effectuez toutes vos opérations bancaires
                    </p>
                </div>
            </div>
            <div>
                <div>
                    <p><i class="bi bi-award"></i></p>
                    <p>Meilleurs Services</p>
                    <p>Nous vous offrons des solutions inovantes</p>
                    <p><a href="">Ouvrir un Compte</a></p>

                </div>
                <div>
                    <p>Un service client dédié vous accompagne 24h/24</p>
                </div>
            </div>
            <div>
                <div>
                    <p><i class="bi bi-shield-fill-check"></i></p>
                    <p>Services Securisés</p>
                    <p>Vos opérations bancaires sont couvertes à 100%</p>
                    <p><a href="">Ouvrir un Compte</a></p>

                </div>
                <div>
                    <p>Nous utilisons les dernières technologies de sécurité sur nos plateformes</p>
                </div>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
    <script type="module" src="{{asset('public/js/Accueil.js')}}"></script>
@endsection
