<!doctype html />
<html lang="fr">
    <head>
        <meta charset = "UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Cyril Denize, sophrologue.
                                            La sophrologie permet de trouver des solutions durables, de s'améliorer, de préserver sa santé, de développer son potentiel et ses capacités d’adaptation." />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="favicon.ico" />
        
        <link rel="stylesheet" href="divDisplayNone.css" />
        <?php if (isset($_GET["page"])):?>
            <link rel="stylesheet" href="div\<?php echo $_GET['page'];?>.css" />
        <?php else: ?>
            <link rel="stylesheet" href="div\home.css" />
        <?php endif; ?>
    </head>
    <body>

    <nav id="navMenu" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <div class="col-2 col-sm-1"><img id="logo" src="img/logo.png" class="d-block w-100" alt="logo Cyril Denize" style="max-width: 115px"></div>
            <p id="titleMenu" class="buttonMenu" style="font-size: 24px; margin-top: 15px">Cyril Denize</p>
            <button id="buttonMenuMore" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav mx-auto">
                    <a id="homeButtonMenu" class="navbar-brand buttonMenu" href="">Accueil</a>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                    <a id="SpecialitesButtonMenu" class="nav-link dropdown-toggle buttonMenu" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Spécialités
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a id="cardioButtonMenu" class="dropdown-item" href="">Cohérence cardiaque</a></li>
                        <li><a id="stressButtonMenu"class="dropdown-item" href="">Gestion du stress</a></li>
                        <li><a id="devpersoButtonMenu" class="dropdown-item" href="">Développement sportif</a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                    <a id="therapieButtonMenu" class="nav-link dropdown-toggle buttonMenu" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        La thérapie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a id="defButtonMenu" class="dropdown-item" href="">Qu'est-ce que la sophrologie ?</a></li>
                        <li><a id="pourquiButtonMenu" class="dropdown-item" href="">Pour qui ?</a></li>
                        <li><a id="therapcomplButtonMenu" class="dropdown-item" href="">Une thérapie complémentaire à la médecine</br>et la psychologie</a></li>
                        <li><a id="deroulseanceButtonMenu" class="dropdown-item" href="">Le déroulement d'une scéance</a></li>
                    </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <a id="presentationButtonMenu" class="navbar-brand buttonMenu" href="">Qui suis-je ?</a>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <a id="questionsButtonMenu" class="navbar-brand buttonMenu" href="">FAQ</a>
                </ul>
                <ul class="navbar-nav mx-auto">
                    <a id="rendezvousButtonMenu" class="navbar-brand btn btn-info buttonMenu" href="" style="margin-right: 40px; max-width: 210px;">Prendre rendez-vous</a>
                </ul>
            </div>
        </div>
    </nav>
        

        <div id="menuFirst" style="margin-top: 110px">
            <div id="homeDiv" style="margin-bottom: 60px">
                <div class="container" id="carousselHome">
                    <div class="row row-cols-2">
                        <div class="col-0 col-md-1">&nbsp</div>
                        <div class="col-12 col-md-10">
                            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                </div>

                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a id="imgSophDef" href="">
                                            <img id="imgSophDef" src="img/carousel/sophdef.png" class="d-block w-100" alt="supperposition de pierres">
                                        </a>
                                    </div>
                                    
                                    <div class="carousel-item">
                                        <a id="imgSophQui" href="">
                                            <img src="img/carousel/sophqui.jpg" class="d-block w-100" alt="arbre et son reflet dans un lac">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a id="imgStress" href="">
                                            <img src="img/carousel/stress.jpg" class="d-block w-100" alt="grands arbres zen">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a id="imgCardio" href="">
                                            <img src="img/carousel/cardio.png" class="d-block w-100" alt="fille devant un solei couchant">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a id="imgDevSport" href="">
                                            <img src="img/carousel/devsport.png" class="d-block w-100" alt="course à pied">
                                        </a>
                                    </div>

                                    <div class="carousel-item">
                                        <a id="imgCabinet" href="">
                                            <img src="img/carousel/cabinet.png" class="d-block w-100" alt="medecin dans son cabinet">
                                        </a>
                                    </div>

                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-0 col-md-1">&nbsp</div>
                    </div>
                </div>
            </div>


            <div id="presentationDiv" class="chapter">
                <h3>Cyril Denize</h3>
                <div>
                    <h4>Présentation</h4>
                    <div class="containChapter">
                    <p>Illud tamen te esse admonitum volo, primum ut 
                        qualis es talem te esse omnes existiment ut, quantum a 
                        rerum turpitudine abes, tantum te a verborum libertate 
                        seiungas; deinde ut ea in alterum ne dicas, quae cum 
                        tibi falso responsa sint, erubescas. Quis est enim, 
                        cui via ista non pateat, qui isti aetati atque etiam 
                        isti dignitati non possit quam velit petulanter, etiamsi 
                        sine ulla suspicione, at non sine argumento male dicere? Sed 
                        istarum partium culpa est eorum, qui te agere voluerunt; laus
                        pudoris tui, quod ea te invitum dicere videbamus, 
                        ingenii, quod ornate politeque dixisti.</p>
                    </div>

                    <h4>Parcours</h4>
                    <div class="containChapter">
                    <p>Iamque lituis cladium concrepantibus internarum non 
                        celate ut antea turbidum saeviebat ingenium a veri 
                        consideratione detortum et nullo inpositorum vel conpositorum 
                        fidem sollemniter inquirente nec discernente a societate noxiorum 
                        insontes velut exturbatum e iudiciis fas omne discessit, et 
                        causarum legitima silente defensione carnifex rapinarum sequester
                        et obductio capitum et bonorum ubique multatio versabatur per 
                        orientales provincias, quas recensere puto nunc oportunum absque 
                        Mesopotamia digesta, cum bella Parthica dicerentur, et Aegypto, 
                        quam necessario aliud reieci ad tempus.</p>
                    </div>

                    <h4>Compétences</h4>
                    <div class="containChapter">
                    <p>Alii nullo quaerente vultus severitate adsimulata patrimonia sua 
                        in inmensum extollunt, cultorum ut puta feracium 
                        multiplicantes annuos fructus, quae a primo ad ultimum 
                        solem se abunde iactitant possidere, ignorantes profecto 
                        maiores suos, per quos ita magnitudo Romana porrigitur, 
                        non divitiis eluxisse sed per bella saevissima, nec opibus 
                        nec victu nec indumentorum vilitate gregariis militibus 
                        discrepantes opposita cuncta superasse virtute.</p>
                    </div>
                </div>
            </div>
            <div id="cardioDiv" class="chapter">
                <img src="img/fond/cardio.png" class="imgDiv" alt="fille devant un solei couchant">
                <div>
                    <h4>
                    Cohérence cardiaque
                    </h4>
                    <div class="containChapter">
                        <p>
                        Alors, pourquoi cette technique s’est-elle tant développée ces dernières années, quel intérêt et quelle complémentarité avec la sophrologie propose-t-elle ?
                        </p>
                        <p>
                        Il existe différentes façon de se mettre en cohérence : le yoga, la méditation, le chant, la prière… permettent d’atteindre un état de cohérence cardiaque. De même que l’évocation de certaines émotions agréables comme l’empathie, la compassion, la gratitude, la joie, associées à la respiration, et que nous utilisons régulièrement en sophrologie.
                        </p>
                    </div>
                </div>
            </div>
            <div id="stressDiv" class="chapter">
                <img src="img/fond/stress.jpg" class="imgDiv" alt="grands arbres zen">
                <div>
                    <h4>
                    Gestion du stress en entreprise
                    </h4>
                    <div class="containChapter">
                        <p>
                        La sophrologie connaît actuellement un essor certain en entreprise, notamment avec la prise en compte des risques psycho-sociaux et de la démarche Qualité de Vie au Travail. Des besoins s’expriment également côté salariés autour de la gestion du stress, des troubles musculo-squelettiques, de la récupération et de l’optimisation de la performance individuelle (créativité, concentration, prise de parole…)
                        </p>
                    </div>
                </div>
            </div>
            <div id="devpersoDiv" class="chapter">
                <img src="img/fond/devsport.png" class="imgDiv" alt="course à pied">
                <div>
                    <h4>
                    Développement sportif
                    </h4>
                    <div class="containChapter">
                        <p>
                        Mise au point dans les années 60, la sophrologie est une méthode pratique et efficace pour comprendre et vaincre les blocages psychiques et physiques d'un individu. Elle a fait ses preuves dans bien des domaines dont le sport. Pour parvenir à un haut niveau dans de bonnes conditions, beaucoup de sportifs utilisent la sophrologie en préparation mentale. Car à ce niveau, le mental fait toute la différence. Motivation, concentration, maîtrise du stress, confiance en soi sont en effet la clé de la réussite.
                        </p>
                    </div>
                </div>
            </div>
            <div id="appointmentDiv" class="chapter">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-12 col-sm-4" style="text-align: center; margin: 0;">
                            <h4>
                            Consultation en cabinet
                            </h4>
                            <h5>
                            Tarif :
                            </h5>
                            <img src="img/cabinet.png" class="d-block w-100" alt="medecin dans son cabinet">
                            <p>
                            Séance individuelle : 65 €
                            </p>
                            <p>
                            Possibilité de forfaits avec paiement en 2 ou 3 fois
                            </p>
                        </div>
                        <div class="col-12 col-sm-4" style="text-align: center; margin: 0;">
                            <h4>
                            Consultation en visio
                            </h4>
                            <h5>
                            Tarif :
                            </h5>
                            <img src="img/teleconsult.png" class="d-block w-100" alt="ordinateur portable, télétravail">
                            <p>
                            Séance individuelle : 65 €
                            </p>
                            <p>
                            Possibilité de forfaits avec paiement en 2 ou 3 fois
                            </p>
                        </div>
                        <div class="col-12 col-sm-4" style="text-align: center; margin: 0;">
                            <h4>
                            Consultation à domicile
                            </h4>
                            <h5>
                            Tarif :
                            </h5>
                            <img src="img/domicile.png" class="d-block w-100" alt="professionnel de santé examine une">
                            <p>
                            Séance individuelle : 70 €
                            </p>
                            <p>
                            Possibilité de forfaits avec paiement en 2 ou 3 fois
                            </p>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 50px">
                    <h4>
                    Modes de règlement
                    </h4>
                    <div class="containChapter">
                        <p>
                        Vous pouvez régler vos séances par Carte Bleue, Paypal, Chèque ou Virement (pour les séances à distance, le règlement doit être réalisé avant le rendez-vous).
                        </p><p>
                        Plusieurs mutuelles remboursent les séances de sophrologie.
                        </p>
                    </div>
                    <h4>
                    Conditions d'annulation
                    </h4>
                    <div class="containChapter">
                        <ul>
                        <li>
                        Si vous annulez ou reportez votre rendez-vous en cabinet ou à domicile moins de 48h à l’avance, le montant de l’acompte (15 €) sera retenu et donc non remboursable.
                        </li>
                        <li>
                        Si vous annulez ou ne vous connectez pas à votre rendez-vous en visio le jour de notre rendez-vous, la séance sera considérée comme réalisée.
                        </li>
                        <li>
                        Concernant les ateliers collectifs, en cas d’annulation hors délais, le montant de l’acompte sera retenu et donc non remboursable.
                        </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div id="questionsDiv" class="chapter">
                <img src="img/fond/faq.png" class="imgDiv" alt="pond dans un jardin">
                <div>
                    <h4>Question 1</h4>
                    <div class="containChapter">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet, felis et tempor pulvinar, lorem nulla molestie nisi, non condimentum ex est eu sapien. Sed posuere, turpis ac semper efficitur, magna ipsum lacinia massa, a congue nibh felis eu sem. Vivamus vel pellentesque risus. Praesent hendrerit, arcu in tempus porta, sem turpis lacinia libero, id viverra felis ipsum id massa. Maecenas porttitor dui eu enim suscipit porttitor. Integer tincidunt ex ut sollicitudin dictum. Pellentesque nec est sagittis mi laoreet condimentum eget gravida lacus. Suspendisse euismod elementum dolor, vel consequat leo dignissim non. Sed porttitor nec odio eu facilisis. Pellentesque vestibulum egestas arcu at tristique. Nullam vitae maximus urna. Aenean ac ex volutpat libero cursus vulputate vitae nec diam. Aenean vel egestas elit, ut blandit nibh. Donec sollicitudin mattis tincidunt. Morbi in tincidunt dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <h4>Question 2</h4>
                    <div class="containChapter">
                        <p>
                        Phasellus erat quam, ultricies et sapien eget, ullamcorper sagittis urna. Duis dapibus scelerisque lorem. Nam eu erat in tellus ultricies scelerisque eget non ex. Integer blandit orci eget tempus dapibus. Donec fermentum mollis magna ac scelerisque. Etiam imperdiet, quam non vestibulum aliquet, sem urna fringilla ligula, nec vehicula quam augue quis nisl. Nulla odio dui, bibendum in mattis sit amet, pretium vel lorem. Proin venenatis risus ornare, laoreet elit id, vehicula nunc. Proin blandit tincidunt congue. Nam quis libero et velit efficitur ullamcorper in vel nunc. Morbi a ligula odio. Nam semper justo est, a vulputate diam gravida sodales. Integer venenatis pulvinar arcu non hendrerit. Nulla egestas purus et rutrum lacinia. Pellentesque hendrerit consequat est id maximus. Mauris sollicitudin fermentum quam, ut rhoncus ipsum varius eget.
                        </p>
                    </div>
                    <h4>Question 3</h4>
                    <div class="containChapter">
                        <p>
                        Sed sagittis risus ac venenatis fringilla. Donec vestibulum felis sed orci pellentesque efficitur. Etiam et velit tristique, dignissim enim non, interdum nunc. Aenean fermentum ultricies ex porta sagittis. Duis ullamcorper posuere nibh. Praesent mattis pulvinar scelerisque. Phasellus in mollis tortor. Nullam justo purus, venenatis ut urna faucibus, faucibus pellentesque orci. Aenean volutpat posuere ex, nec porttitor lectus ultricies a. Praesent sit amet turpis id sem vehicula molestie non vel nulla. Nunc ac tortor vehicula lacus sagittis accumsan a sed risus. Fusce ullamcorper urna at euismod pellentesque. Donec et ornare arcu. Nulla efficitur nibh augue, sed placerat enim suscipit sodales.
                        </p>
                    </div>
                </div>
            </div>
            <div id="defDiv" class="chapter">
                <img src="img/fond/sophdef.png" class="imgDiv" alt="supperposition de pierres">
                <div>
                    <h4>
                    Qu’est-ce que la sophrologie ?
                    </h4>
                    <div class="containChapter">
                        </li>
                        Avec la sophrologie, vous trouvez par vous-même des solutions durables, vous améliorez et vous préservez votre santé, vous développez votre potentiel et vos capacités d’adaptation.

                        Parfaitement adaptée aux besoins actuels, la sophrologie apporte des réponses concrètes et durables.

                        Cette pratique est accessible à tous. Même aux plus cartésiens d’entre nous !

                        <ul>
                        <li>
                        Créée par un neuropsychiatre, la sophrologie s’est rapidement imposée comme technique thérapeutique.
                        </li>
                        <li>
                        La sophrologie a pour but d’apprendre à “s’écouter“, à mieux se connaître, comprendre ses besoins et ses propres mécanismes.
                        </li>
                        <li>
                        Reconnue comme complémentaire des soins et traitements prodigués par la médecine traditionnelle et la psychologie, la sophrologie apporte une aide dans de nombreux troubles, pathologies ou souffrances.
                        </li>
                        <li>
                        Pratiquée de manière régulière, la sophrologie permet de devenir acteur de sa santé. Elle s’utilise à des fins préventives, thérapeutiques ou tout simplement pédagogiques.
                        </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div id="cibleDiv" class="chapter">
                <img src="img/fond/sophqui.jpg" class="imgDiv" alt="pont dans un jardin">
                <div>
                    <h4>
                    Pour qui ?
                    </h4>
                    <div class="containChapter">
                        <p>
                        Pour toutes les personnes qui souhaitent retrouver de la confiance en eux en agissant sur le mauvais stress du quotidien, se retrouver en tant que personne à part entière.
                        </p>
                        <p>
                        Pour ceux qui souhaitent reprendre contact avec leur corps, réveiller en eux leurs ressources, leurs potentiels, remplir de bien-être leur quotidien en activant les touches du bonheur et de l'harmonie.
                        </p>
                        <p>
                        Apprendre à gérer ses émotions, retrouver un sommeil de qualité, prendre conscience de ses capacités, surmonter des situations difficiles.
                        </p>
                    </div>
                </div>
            </div>
            <div id="complementaireDiv" class="chapter">
                <img src="img/fond/complementaire.png" class="imgDiv" alt="medecin et sophrologie">
                <div>
                    <h4>
                    Une thérapie complémentaire à la médecine et la psychologie
                    </h4>
                    <div class="containChapter">
                        <p>
                        La sophrologie est de plus en plus reconnue par le corps médical en tant que thérapie complémentaire à la médecine et la psychologie. Elle séduit tant par sa rapidité d’action que par son peu de contre-indications.
                        </p>
                    </div>
                </div>
            </div>
            <div id="derouleseanceDiv" class="chapter">
                <img src="img/fond/derouleseance.png" class="imgDiv" alt="bébé examiné">
                <div>
                    <h4>
                    Explication sur le déroulement d’une séance
                    </h4>
                    <div class="containChapter">
                        </li>
                        La sophrologie est un travail qui s’inscrit dans une relation d’aide et d’alliance, d’écoute bienveillante et se déroule selon des règles strictes de confidentialité.

                        La séance se passe généralement en posture assise, toutefois selon les exercices et techniques proposées ainsi que les possibilités des patients les postures debout ou allongées peuvent être proposées.

                        Le sophrologue conduit les techniques avec sa voix, et le sophronisant développe ses capacités personnelles en respectant la répétition des séances et en appliquant les consignes données.

                        <ul>
                        <li>
                        La sophrologie apporte une dimension nouvelle en médecine par son approche globale dite psycho-corporelle (corps et mental). Elle ne se substitue pas à la médecine classique mais en est un complément efficace, qui permet de limiter les traitements et la chirurgie.
                        </li>
                        <li>
                        Elle permet notamment d’alléger les traitements médicamenteux (anxiolytiques, anti-douleurs) et de rendre le patient plus autonome dans sa prise en charge.
                        </li>
                        <li>
                        Il n’est pas question d’utiliser la sophrologie pour soigner, mais pour accompagner les patients à accepter leur maladie et/ou à devenir participatifs dans leur processus de guérison. Elle est également reconnue pour améliorer le mieux-être au quotidien. Elle propose des outils adaptés aux besoins de chacun, et permet d’améliorer la qualité de vie des personnes et de leurs proches.
                        </li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div id="legalDiv" class="chapter">
                <h3>Mentions légales</h3>
                <div>
                    <h4>A propos du site</h4>
                    <div class="containChapter">
                        <p>Titulaire et résponsable du site : Cyril Denize</p>
                        <p>Développeurs en charge de la création du site : <a class="link" href="https://www.linkedin.com/in/valentin-charbonneau-4a4488220">Valentin Charbonneau</a> et <a class="link" href="https://www.linkedin.com/in/titouan-clapier-07048a220">Titouan Clapier</a></p>
                    </div>
                    <h4>Informations sur l'entreprise</h4>
                        <div class="containChapter">
                            <p style="font-style: italic;">A compléter</p>
                        </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    <footer style="text-align: center; margin-top: 60px">
        <p>Site créé par <a target="_blank" class="link" href="https://www.linkedin.com/in/valentin-charbonneau-4a4488220">Valentin Charbonneau</a> et <a target="_blank" class="link" href="https://www.linkedin.com/in/titouan-clapier-07048a220">Titouan Clapier</a> &nbsp&nbsp | &nbsp&nbsp &copy Cyril Denize &nbsp&nbsp | &nbsp&nbsp <a class="link" id="buttonLegalNotice" href="">Mentions Légales</a></p>
    </footer>
    <script src="navButtons.js"></script>
</html>