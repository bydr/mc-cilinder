<?php
/*
Template Name: Catalog Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumbs'); ?>

    <div class="container-fluid catalog-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-wrapper">
                    <p>Ben je op zoek naar een nieuw cilinderslot? Omdat je bijvoorbeeld de huissleutel kwijt bent of
                        een nieuw huis hebt gekocht? Het cilinderslot zorgt ervoor dat je de deur open en dicht kan
                        draaien. Door de cilinder te vervangen kan de deur niet meer worden geopend met oude sleutels.
                        Een cilinderslot kopen is bij Doorax heel eenvoudig. Kies het aantal gelijksluitende cilinders,
                        geef de cilindermaat en uitvoering door en bepaal het aantal sleutels dat je wilt ontvangen.
                        Klik op cilinderslot bestellen en reken direct af. De cilindersloten worden gratis bezorgd en je
                        ontvangt op alle sloten 5 jaar garantie. Op zoek naar een goedkoop en veilig cilinderslot?
                        Bekijk hier al onze cilindersloten.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid filters-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 d-none d-lg-block sidebar-left">
                    <?php get_template_part('parts/sidebar'); ?>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="nav-block">
                        <button class="btn btn-blue navbar-toggler d-lg-none collapsed" type="button" data-toggle="collapse" data-target="#filters-dropdown"
                                aria-controls="filters-dropdown" aria-expanded="false" aria-label="Toggle navigation">
                            Filter<img class="svg" src="<?= $template_dir ?>/img/filter.svg"
                                       alt="filter">
                        </button>
                        <div class="collapse navbar-collapse filters-dropdown d-lg-none" id="filters-dropdown">
                            <div class="sidebar-inner">
                                <div class="filters">
                                    <h3>Welke cilinders heeft u nodig?</h3>

                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="1">10</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <!--  <option selected>Choose...</option>-->
                                            <option value="1">10</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect03">
                                            <option value="1">Geen knop</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    <div class="btn-wrapper">
                                        <button class="btn btn-blue">Cilinder toevoegen
                                            <img class="svg" src="<?= $template_dir ?>/img/plus.svg" alt="plus">
                                        </button>
                                    </div>
                                    <hr>
                                    <h3>Aantal sleutels<span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-gray.svg"
                                                                               alt="info-gray"></span></h3>

                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option value="1">Kies het aantal sleutels</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <hr>
                                    <h3>SKG waardering</h3>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer">SKG ** 2 strren
                                            <input type="checkbox" checked="checked" class="personalDataCheckbox"><span
                                                    class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer">SKG ** 3 strren
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <hr>
                                    <h3>Merken</h3>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer">SKG ** 2 strren
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer">SKG ** 3 strren
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <hr>
                                    <h3>Kleur cilinder</h3>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer"><span class="nickel"></span>Nikkel
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer"><span class="brass"></span>Messing
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkcontainer-wrapper">
                                        <label class="checkcontainer"><span class="black"></span>Zwart
                                            <input type="checkbox" class="personalDataCheckbox"><span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <hr>
                                    <button class="btn reset-filter"><img class="svg" src="<?= $template_dir ?>/img/reset-filter.svg"
                                                                          alt="reset-filter">Reset filter
                                    </button>

                                </div>


                            </div>
                        </div>

                        <div class="nav-wrapper">
                            <ul class="nav">
                                <li class="nav-item">
                                    <span class="nav-link">Sorteren:</span>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Aanbevolen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Prijs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Levertijd</a>
                                </li>
                            </ul>
                            <span class="results">9 resultaten</span>
                        </div>
                    </div>

                    <div class="row catalog-row">
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                    <button class="btn btn-blue">Aanbeloven</button>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                    <button class="btn btn-blue">Aanbeloven</button>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                    <button class="btn btn-blue">Aanbeloven</button>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6 item">
                            <div class="inner">
                                <div class="top">
                                    <span class="shipping"><strong>do 9 april</strong> in huis</span>
                                </div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole-catalog.png" alt="keyhole-catalog">
                                </div>
                                <div class="title"><a href="#"><h3>Cilinderslot M&C Color+</h3></a></div>
                                <div class="protection">Goed beveiligd</div>
                                <div class="desc">
                                    <div class="definition">Cilinder: 32/32</div><div class="value">€ 44.95</div>
                                    <div class="definition">3 sleutels</div><div class="value free">Gratis</div>
                                    <div class="definition">Totaal incl. BTW</div><div class="value total-price">€ 44.95</div>
                                </div>
                            </div>
                        </div>
                        <div class="load-more-block d-sm-none text-center">
                            <button class="btn btn-blue load-more">Laat meer zien
                                <img class="svg" src="<?= $template_dir ?>/img/play-button-down.svg" alt="play-button-down">
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid accordion-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="accordion" class="accordion">
                        <div class="card">
                            <div class="card-header" id="heading1">
                                <h3 class="" data-toggle="collapse" data-target="#collapse1"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Vervangen van een cilinderslot
                                    <img class="svg arrow-down-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-down-collapsed.svg"
                                         alt="arrow-down-collapsed">
                                    <img class="svg arrow-up-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                </h3>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <p>Een cilinderslot vervangen kun je met behulp van ons stappenplan en video
                                        tutorial eenvoudig zelf doen. Het vervangen van een cilinderslot kost je slechts
                                        1 minuut. Heb je toch hulp nodig? Geen probleem. Onze klantenservice helpt je
                                        graag verder. Kosten cilinderslot vervangen? Het vervangen van een cilinderslot
                                        kan je natuurlijk ook uitbesteden.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading2">
                                <h3 class="collapsed" data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Wat kost een cilinderslot?
                                    <img class="svg arrow-down-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-down-collapsed.svg"
                                         alt="arrow-down-collapsed">
                                    <img class="svg arrow-up-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                </h3>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Wat kost een cilinderslot? Het is een vraag die vaak wordt gesteld. Het antwoord
                                        op deze vraag is voor iedereen verschillend. De kosten cilinderslot zijn
                                        afhankelijk van o.a. het merk, de grootte en eventuele toevoegingen zoals een
                                        knop of een andere kleur. De prijs van een cilinderslot is dus gebaseerd op jouw
                                        wensen en behoeften. Bij Doorax heb je al een cilinderslot vanaf € 44,95. Voor
                                        17:00 uur besteld, morgen in huis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading3">
                                <h3 class="collapsed" data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    Is een cilinderslot veilig?
                                    <img class="svg arrow-down-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-down-collapsed.svg"
                                         alt="arrow-down-collapsed">
                                    <img class="svg arrow-up-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                </h3>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Niet alle cilindersloten zijn veilig. Die van Doorax wel. Onze cilindersloten
                                        zijn namelijk SKG 2* of 3* gecertificeerd. Cilinders met een SKG3 keurmerk
                                        behoren tot de veiligste cilinders die er bestaan. SKG staat voor Stichting
                                        Kwaliteit Gevelgebouw. Zij testen hang- en sluitwerk op sterkte, duurzaamheid en
                                        inbraakwerendheid. SKG3 cilinders zijn momenteel de beste die verkrijgbaar zijn
                                        op het gebied van veiligheid. Ze hebben meerdere kenmerken die ervoor zorgen dat
                                        inbrekers het erg moeilijk krijgen om binnen te komen. Dat is niet de enige
                                        reden waarom je een veilig cilinderslot bij Doorax koopt. Naast het SKG3
                                        keurmerk beschikken onze cilindersloten over kerntrekbeveiliging,
                                        slag/klop/pickbeveiliging, hardstalen brug en een certificaat waardoor sleutels
                                        nooit zonder jouw toestemming nagemaakt kunnen worden.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <h3 class="collapsed" data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapseOne">
                                    De verschillende soorten cilindersloten
                                    <img class="svg arrow-down-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-down-collapsed.svg"
                                         alt="arrow-down-collapsed">
                                    <img class="svg arrow-up-collapsed arrow-collapsed"
                                         src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                </h3>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Al onze sloten zijn veilig. Maar welke soorten cilindersloten kun je bij ons
                                        bestellen? Het assortiment van Doorax bestaat uit profielcilinders voor het
                                        zogenaamde insteekslot. Dit is de cilinder die het meest wordt gebruikt bij
                                        deuren in woningen. Alleen de cilinder en klink zijn zichtbaar wanneer de deur
                                        gesloten is.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid articles-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>M&C Deurcilinders</h2>
                    <p>
                        M&C cilinders heeft alles wat u nodig heeft voor een goed en beveiligd cilinderslot. Het SKG 3*
                        keurmerk betekent al dat uw cilinder beveiligd is tegen het boren, kloppen, kerntrekken,
                        slagmethode en impressietechniek. Maar wat M&C zo speciaal maakt is dat ze standaard voorzien
                        zijn voor gehard stalen brug en daardoor nagenoeg onbreekbaar. M&C is kwa prijs ook zeer goed
                        vertegenwoordigd. Een vergelijkbaar ander merk zit veelal op bijna het dubbele van de prijs.
                        Daardoor is M&C een zeer gewild product als u uw deurcilinders wil vervangen met SKG 3 sterren
                        cilinders. Zo weet u zeker dat uw sloten goed beveiligd zijn.
                    </p>
                    <p>
                        Heeft u vragen over de M&C
                        cilinders kunt u altijd contact met ons opnemen. Wij begrijpen goed dat u hulp kunt gebruiken om
                        zeker te weten dat u de juiste maten besteld. Toch de verkeerde maat besteld? Geen probleem dit
                        kunnen wij zonder problemen voor u oplossen.
                    </p>
                </div>
            </div>
            <div class="row btn-wrapper">
                <div class="col">
                    <button class="btn btn-blue">Cilinder opmeten
                        <img class="svg" src="<?= $template_dir ?>/img/play-button.svg" alt="play-button">
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-blue">M&C Cilindermeter
                        <img class="svg" src="<?= $template_dir ?>/img/pdf-button.svg" alt="pdf-button">
                    </button>
                </div>
                <div class="col">
                    <button class="btn btn-blue">M&C Brochure
                        <img class="svg" src="<?= $template_dir ?>/img/pdf-button.svg" alt="pdf-button">
                    </button>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>