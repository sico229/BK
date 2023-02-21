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
    <section id="AccueilSection2">
        &nbsp;
    </section>
    <section id="AccueilSection3">
        <h2>Comment ça marche?</h2>
        <div class="stepsWrapper">
            <div>
                <div><span>1</span></div>
                <p>
                <h3 class="w-100 text-center text-bold">Demande en ligne</h3>
                <p>Remplissez votre demande d'ouverture de compte en ligne en quelques minutes, sans bouger de chez vous sur
                    nos plateformes sécurisées</p>
                </p>
            </div>
            <div>
                <div><span>2</span></div>
                <p>
                <h3 class="w-100 text-center text-bold">Envoyez vos documents</h3>
                <p>Une fois votre demande d'ouverture de compte acceptée, vous enverrez les documents justificatifs de votre
                    identité et de votre domicile</p>
                </p>
            </div>
            <div>
                <div><span>3</span></div>
                <p>
                <h3 class="w-100 text-center text-bold">Votre compte activé</h3>
                <p>Après etude de vos documents, votre compte en ligne est activé et vous recevez vos identifiants pour vous
                    connecter</p>
                </p>
            </div>




        </div>
        <a href="http://">Ouvrir compte en ligne</a>
    </section>

    <section id="AccueilSection6">
        <div class="container row">
            <div class="col-md-6">
                <h4>Bénéficiez de votre carte Visa dès l'ouverture de votre compte en ligne</h4>
                <p>Nous vous offrons les meilleures solutions de payement avec les dernières technologie de sécurité</p>
            </div>
            <div class="col-md-6">
                {{-- <div class="credit-card visa">
                    <div class="card-front">
                        <div class="card-logo">
                            <img src="https://blog.logomyway.com/wp-content/uploads/2022/02/visa-logo-2.jpg"
                                alt="Visa Logo">
                        </div>
                        <div class="card-number">1234 5678 9012 3456</div>
                        <div class="card-holder-name">John Doe</div>
                        <div class="expiration-date">MM/YY</div>
                    </div>
                    <div class="card-back">
                        <div class="security-code">123</div>
                        <div class="card-logo"></div>
                    </div>
                </div> --}}

                <img class="img img-fluid" src="{{ asset('public/img/Banque-en-ligne.png') }}" alt="">
            </div>

        </div>
    </section>

    <section id="AccueilSection4">
        <h2>Nous vous accompagnons dans vos projets</h2>
    </section>



    <section id="AccueilSection5">
        <div class="row px-0 mx-0">
            <div class="col-md-6">
                <img src="{{ asset('public/img/amiesshoppingete.jpg') }}" alt="conso" class="img img-fluid">
            </div>
            <div class="col-md-6">
                <h4 class="w-100 text-center">Obtenez votre prêt en 72H</h4>
                <p class="w-100 text-center">
                    Nous vous proposons diverses formule de prêts sur mesure spécialement étudiées pour vous accompagner
                    dans vos projets
                </p>
                <p class="w-100 text-center">Simuler gratuitement votre prêt en ligne et obtenez une réponse de principe
                    dans un delai de 24H</p>
                <p class="justify-center">
                    <a href="http://">Demander un Prêt</a>
                </p>
            </div>
        </div>
    </section>

    <section id="AccueilSection7">
        <div>s</div>
        <div>
            <div>
                <h4 class="w-100 text-center">Simulateur de Prêt</h4>
                <p>Evaluez gratuitement votre prêt sans engagement de votre part</p>
                <select class="form-control">
                    <option value="">Type de Prêt</option>
                    <option value="">Prêt Consommation</option>
                    <option value="">Prêt Immobilier</option>
                    <option value="">Prêt Consommation</option>
                    <option value="">Prêt Personnel</option>
                </select>
                <p class="my-0">Montant Souhaité: <span></span></p>
                <p class="my-0">Durée de remboursement: <span></span></p>
                <div class="ranger">
                    <input type="range" min="500" max="150000" step="500" value="5000">
                    <span>0</span>
                    <span>10000</span>
                </div>

            </div>


        </div>
    </section>
@endsection
@section('scripts')
    <script type="module" src="{{asset('public/js/template2.js')}}"></script>
    <script type="module" src="{{asset('public/js/Accueil.js')}}"></script>
@endsection
