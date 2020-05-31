<?php
/*
Template Name: Product Page
*/
?>

<?php get_header(); ?>

<?php get_template_part('parts/breadcrumbs'); ?>

    <div class="container-fluid requirements-section-mini d-none d-md-block">
        <div class="container">
            <div class="row items-row">
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant.svg" alt="pick-resistant">
                        </div><div class="text">Beveiligd tegen<br>openpikken</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant2.svg" alt="pick-resistant2">
                        </div><div class="text">Breek -<br>beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant3.svg" alt="pick-resistant3">
                        </div><div class="text">Klop -<br>beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant4.svg" alt="pick-resistant4">
                        </div><div class="text">Kerntrek-<br>beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant5.svg" alt="pick-resistant5">
                        </div><div class="text">Beveiligd tegen<br>boren</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant6.svg" alt="pick-resistant6">
                        </div><div class="text">Geschikt voor<br>alle sluitplannen</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant7.svg" alt="pick-resistant7">
                        </div><div class="text">5 jaar<br>garantie</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid product-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 product-content">
                    <div class="row">
                        <div class="col left-side">
                            <div class="gallery-wrapper">
                                <div class="product-gallery" id="product-gallery">
                                    <img alt="product1 alt"
                                         title="product1 title"
                                         src="<?= $template_dir ?>/img/product1.png"
                                         data-image="<?= $template_dir ?>/img/product1.png"
                                         data-description="ImageDescription">
                                    <img alt="product2 alt"
                                         title="product2 title"
                                         src="<?= $template_dir ?>/img/product2.png"
                                         data-image="<?= $template_dir ?>/img/product2.png"
                                         data-description="ImageDescription">
                                    <img alt="product3 alt"
                                         title="product3 title"
                                         src="<?= $template_dir ?>/img/product3.png"
                                         data-image="<?= $template_dir ?>/img/product3.png"
                                         data-description="ImageDescription">
                                    <img alt="product4 alt"
                                         title="product4 title"
                                         src="<?= $template_dir ?>/img/product4.png"
                                         data-image="<?= $template_dir ?>/img/product4.png"
                                         data-description="ImageDescription">
                                    <img alt="product5 alt"
                                         title="product5 title"
                                         src="<?= $template_dir ?>/img/product5.png"
                                         data-image="<?= $template_dir ?>/img/product5.png"
                                         data-description="ImageDescription">
                                    <img alt="product5 alt"
                                         title="product5 title"
                                         src="<?= $template_dir ?>/img/product5.png"
                                         data-image="<?= $template_dir ?>/img/product5.png"
                                         data-description="ImageDescription">
                                </div>
                                <div class="free-block">
                                    <img class="shot-small" src="<?= $template_dir ?>/img/shot-small.png" alt="shot-small">
                                    <div class="img-wrapper">
                                        <img class="svg" src="<?= $template_dir ?>/img/gift.svg" alt="gift">
                                    </div><div class="text">Tijdelijk gratis flacon t.w.v. <span class="blue">€ 7,50</span></div>
                                </div>
                            </div>
                            <div class="video-wrapper">
                                <iframe width="560" height="349" src="http://www.youtube.com/embed/hAf7uWdsQHM?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="manual-block">
                                <a href="#">
                                    <img class="svg" src="<?= $template_dir ?>/img/pdf.svg" alt="pdf">
                                    <span>M&C Cilindermeter</span>
                                </a>
                                <a href="#">
                                    <img class="svg" src="<?= $template_dir ?>/img/pdf.svg" alt="pdf">
                                    <span>M&C Brochure</span>
                                </a>

                            </div>

                        </div>
                        <div class="col right-side">
                            <div class="bd-callout bd-callout-blue">
                                <div class="step active">
                                    <div class="green-square">1</div>
                                    <h3>Aantal cilinders</h3>
                                </div>
                                <div class="gray-text">Kies het aantal gelijksluitende cilinders</div>
                                <div class="help-btn-block">
                                    <button class="btn btn-blue">1</button><button
                                            class="btn btn-blue">2</button><button
                                            class="btn btn-blue">3</button><button
                                            class="btn btn-blue">4</button><button
                                            class="btn btn-white">5</button><button
                                            class="btn btn-white">6</button><button
                                            class="btn btn-white">7</button><button
                                            class="btn btn-white">8</button><button
                                            class="btn btn-white">9</button><button
                                            class="btn btn-white">10</button><a class="more" href="#">Meer dan 10 cilinders?</a>
                                </div>
                            </div>

                            <div class="bd-callout">
                                <div class="step active">
                                    <div class="green-square">2</div>
                                    <h3>Cilinder maat & kleur</h3>
                                </div>
                                <div class="gray-text">Selecteer hier uw wensen per cilinder. Let op: Een cilinder mag
                                    aan de buitenzijde maximaal 3 mm uitsteken.</div>
                                <div class="def-header">
                                    <span>Cilindermaat<span class="info">
                                            <img class="svg" src="<?= $template_dir ?>/img/info-gray.svg" alt="info-gray"></span>
                                    </span><span>Knop<span class="info">
                                            <img class="svg" src="<?= $template_dir ?>/img/info-gray.svg" alt="info-gray"></span>
                                    </span><span>Kleur<span class="info">
                                            <img class="svg" src="<?= $template_dir ?>/img/info-gray.svg" alt="info-gray"></span>
                                    </span>
                                </div>
                                <div class="input-group-wrapper">
                                    <span class="count">1</span>
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="1">37</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <!--  <option selected>Choose...</option>-->
                                            <option value="1">47</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect03">
                                            <option value="1">Geen knop</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect04">
                                            <option value="1">Nikkel</option>
                                            <option value="2">Messing</option>
                                            <option value="3">Zwart</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group-wrapper">
                                    <span class="count">2</span>
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="1">65</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <!--  <option selected>Choose...</option>-->
                                            <option value="1">58</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect03">
                                            <option value="1">Geen knop</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect04">
                                            <option value="1">Nikkel</option>
                                            <option value="2">Messing</option>
                                            <option value="3">Zwart</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group-wrapper">
                                    <span class="count">3</span>
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="1">37</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <!--  <option selected>Choose...</option>-->
                                            <option value="1">17</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect03">
                                            <option value="1">Geen knop</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect04">
                                            <option value="1">Nikkel</option>
                                            <option value="2">Messing</option>
                                            <option value="3">Zwart</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group-wrapper not-active">
                                    <span class="count">4</span>
                                    <div class="input-group">
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option value="1">37</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect02">
                                            <!--  <option selected>Choose...</option>-->
                                            <option value="1">47</option>
                                            <option value="2">20</option>
                                            <option value="3">30</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect03">
                                            <option value="1">Geen knop</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <select class="custom-select" id="inputGroupSelect04">
                                            <option value="1">Nikkel</option>
                                            <option value="2">Messing</option>
                                            <option value="3">Zwart</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bd-callout">
                                <div class="step active">
                                    <div class="green-square">3</div>
                                    <h3>Aantal sleutels</h3>
                                </div>
                                <div class="gray-text">Standaard worden er totaal 5 sleutels geleverd bij 2
                                    cilinders.</div>
                                <div class="input-group m-t-15">
                                    <select class="custom-select" id="inputGroupSelect06">
                                        <option value="1">Kies het totaal aantal sleutels</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <ul class="check-list">
                                <li><strong>za 14 maart</strong> in huis</li>
                            </ul>

                        </div>
                    </div>
                    <div class="row row-sidebar-cart d-xl-none back-gray">
                        <div class="col-xl-12">
                            <div class="row ">
                                <div class="col left-side">
                                    <?php get_template_part('parts/widget-usps'); ?>
                                </div>
                                <div class="col right-side">
                                    <?php get_template_part('parts/widget-cart'); ?>
                                </div>

                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs-wrapper">
                                <ul class="nav nav-tabs" id="product-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Informatie over de Condor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Hoe te bestellen?</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Specificaties</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="product-tab-content">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                        <h3>M&C cilinders omschrijving</h3>
                                        <p>
                                            M&C Condor deurcilinder met SKG 3* keurmerk. Bestand tegen openpikken,
                                            boren, kloppen, kerntrekken de slagmethode, impressietechniek en door de
                                            stalen brug ook tegen het cilinder breken en dit zelfs zonder deurbeslag.
                                            Daarnaast is de M&C Condor en Matrix bij ons ook altijd 2 zijdig bedienbaar
                                            ook wel genoemd nood en gevarenfunctie. Hierdoor is de cilinder tweezijdig
                                            bedienbaar ook al zit de sleutel aan de andere zijde van de cilinder.
                                        </p>
                                        <p><strong>Een bestelling van meerdere cilinders maken wij altijd gratis en
                                                direct gelijksluitend.</strong></p>
                                        <p>De M&C Condor het paradepaartje van M&C. Een nieuwe cilinder met nog meer
                                            veiligheids elementen en met meer dan 5 miljoen verschillende sluitingen en
                                            nagenoeg onbreekbaar.</p>
                                        <p><strong>Keurmerk</strong></p>
                                        <p>Al onze M&C cilinders hebben het Politie Keurmerk Veilig Wonen (PVWK) het
                                            SKG 3* keurmerk en worden geleverd met certificaat.</p>
                                        <p><strong>M&C Deurcilinders pluspunten</strong></p>
                                        <p>SKG 3* extra zwaar inbraakwerend<br>
                                            Beschermd en verhoogd sleutelprofiel<br>
                                            Keersleutel<br>
                                            mogelijkheden voor grote sluitplannen<br>
                                            Scherpe prijs<br>
                                            Kwalitatief zeer goed<br>
                                            Eenvoudig en prettig in gebruik<br>
                                            Snelle levering</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                        <h3>M&C cilinders omschrijving 2</h3>
                                        <p>
                                            M&C Condor deurcilinder met SKG 3* keurmerk. Bestand tegen openpikken,
                                            boren, kloppen, kerntrekken de slagmethode, impressietechniek en door de
                                            stalen brug ook tegen het cilinder breken en dit zelfs zonder deurbeslag.
                                            Daarnaast is de M&C Condor en Matrix bij ons ook altijd 2 zijdig bedienbaar
                                            ook wel genoemd nood en gevarenfunctie. Hierdoor is de cilinder tweezijdig
                                            bedienbaar ook al zit de sleutel aan de andere zijde van de cilinder.
                                        </p>
                                        <p><strong>Een bestelling van meerdere cilinders maken wij altijd gratis en
                                                direct gelijksluitend.</strong></p>
                                        <p>De M&C Condor het paradepaartje van M&C. Een nieuwe cilinder met nog meer
                                            veiligheids elementen en met meer dan 5 miljoen verschillende sluitingen en
                                            nagenoeg onbreekbaar.</p>
                                        <p><strong>Keurmerk</strong></p>
                                        <p>Al onze M&C cilinders hebben het Politie Keurmerk Veilig Wonen (PVWK) het
                                            SKG 3* keurmerk en worden geleverd met certificaat.</p>
                                        <p><strong>M&C Deurcilinders pluspunten</strong></p>
                                        <p>SKG 3* extra zwaar inbraakwerend<br>
                                            Beschermd en verhoogd sleutelprofiel<br>
                                            Keersleutel<br>
                                            mogelijkheden voor grote sluitplannen<br>
                                            Scherpe prijs<br>
                                            Kwalitatief zeer goed<br>
                                            Eenvoudig en prettig in gebruik<br>
                                            Snelle levering</p>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                        <h3>M&C cilinders omschrijving 3</h3>
                                        <p>
                                            M&C Condor deurcilinder met SKG 3* keurmerk. Bestand tegen openpikken,
                                            boren, kloppen, kerntrekken de slagmethode, impressietechniek en door de
                                            stalen brug ook tegen het cilinder breken en dit zelfs zonder deurbeslag.
                                            Daarnaast is de M&C Condor en Matrix bij ons ook altijd 2 zijdig bedienbaar
                                            ook wel genoemd nood en gevarenfunctie. Hierdoor is de cilinder tweezijdig
                                            bedienbaar ook al zit de sleutel aan de andere zijde van de cilinder.
                                        </p>
                                        <p><strong>Een bestelling van meerdere cilinders maken wij altijd gratis en
                                                direct gelijksluitend.</strong></p>
                                        <p>De M&C Condor het paradepaartje van M&C. Een nieuwe cilinder met nog meer
                                            veiligheids elementen en met meer dan 5 miljoen verschillende sluitingen en
                                            nagenoeg onbreekbaar.</p>
                                        <p><strong>Keurmerk</strong></p>
                                        <p>Al onze M&C cilinders hebben het Politie Keurmerk Veilig Wonen (PVWK) het
                                            SKG 3* keurmerk en worden geleverd met certificaat.</p>
                                        <p><strong>M&C Deurcilinders pluspunten</strong></p>
                                        <p>SKG 3* extra zwaar inbraakwerend<br>
                                            Beschermd en verhoogd sleutelprofiel<br>
                                            Keersleutel<br>
                                            mogelijkheden voor grote sluitplannen<br>
                                            Scherpe prijs<br>
                                            Kwalitatief zeer goed<br>
                                            Eenvoudig en prettig in gebruik<br>
                                            Snelle levering</p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="col-xl-4 d-none d-xl-block">
                    <?php get_template_part('parts/sidebar-cart'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid delivery-section">
        <div class="container">
            <div class="row items-row">
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img-wrapper">
                            <img class="svg" src="<?= $template_dir ?>/img/clock-alt.svg" alt="clock">
                        </div><div class="text">Voor 23:59 uur besteld is de volgende dag geleverd*</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img-wrapper">
                            <img class="svg" src="<?= $template_dir ?>/img/truck-alt.svg" alt="truck">
                        </div><div class="text">Altijd gratis verzenden in Nederland en België</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img-wrapper">
                            <img class="svg" src="<?= $template_dir ?>/img/calendar-alt.svg" alt="calendar">
                        </div><div class="text">Eenvoudig en gratis retour, 30 dagen bedenktijd</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <div class="img-wrapper">
                            <img class="svg" src="<?= $template_dir ?>/img/phone-alt.svg" alt="phone">
                        </div><div class="text">Gratis support voor en na uw aankoop</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid reviews-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 kiyoh-wrapper">
                    <img src="<?= $template_dir ?>/img/kiyoh-logo.jpg" alt="kiyoh-logo">
                    <div class="desc-wrapper">
                        <div class="rating">
                            <img class="svg" src="<?= $template_dir ?>/img/star.svg" alt="star">
                            <img class="svg" src="<?= $template_dir ?>/img/star.svg" alt="star">
                            <img class="svg" src="<?= $template_dir ?>/img/star.svg" alt="star">
                            <img class="svg" src="<?= $template_dir ?>/img/star.svg" alt="star">
                            <img class="svg" src="<?= $template_dir ?>/img/star.svg" alt="star">
                        </div>
                        <div class="votes-text"><span class="votes">1296</span>beoordelingen</div>
                    </div>
                </div>
            </div>
            <div class="row review-slider">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Hans</div>
                                <div>
                                    <span class="date">16-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Ook mijn nieuwe woning wilde ik weer voorzien van M&C cilindersloten. Je kunt deze bij
                                diverse aanbieders kopen, echter bij MR-beveiliging was de bestelpagina het meest
                                duidelijk. Er zijn immers zoveel mogelijkheden en opties, De bestelde sloten waren snel
                                en keurig geleverd, na montage hadden we moeite met de gekozen knop bediening. Na
                                overleg met Marcel is dit super opgelost en zijn we zeer tevreden. Ons huis nu voorzien
                                de beste veilige sloten, bedankt MR-beveiliging!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Maurice</div>
                                <div>
                                    <span class="date">16-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Tijdens het bestelproces is er een goede productselector beschikbaar die je goed helpt
                                het juiste slot te kiezen. Het bestelproces is verder snel en eenvoudig. Ook fijn dat je
                                goed je afhaallocatie kunt selecteren.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Laila</div>
                                <div>
                                    <span class="date">14-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Er was iets onduidelijk op de website. Telefonisch goed geholpen. Goede service. Daarna
                                via mail duidelijke info. Sleutels binnen 1 dag in huis. Prijs ook een stuk lager als
                                bij de sleutelmaker in de buurt. Bedankt voor de top service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Hans</div>
                                <div>
                                    <span class="date">16-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Ook mijn nieuwe woning wilde ik weer voorzien van M&C cilindersloten. Je kunt deze bij
                                diverse aanbieders kopen, echter bij MR-beveiliging was de bestelpagina het meest
                                duidelijk. Er zijn immers zoveel mogelijkheden en opties, De bestelde sloten waren snel
                                en keurig geleverd, na montage hadden we moeite met de gekozen knop bediening. Na
                                overleg met Marcel is dit super opgelost en zijn we zeer tevreden. Ons huis nu voorzien
                                de beste veilige sloten, bedankt MR-beveiliging!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Maurice</div>
                                <div>
                                    <span class="date">16-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Tijdens het bestelproces is er een goede productselector beschikbaar die je goed helpt
                                het juiste slot te kiezen. Het bestelproces is verder snel en eenvoudig. Ook fijn dat je
                                goed je afhaallocatie kunt selecteren.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="top">
                            <div class="avatar-block">
                                <img class="svg" src="<?= $template_dir ?>/img/avatar.svg" alt="avatar">
                            </div>
                            <div class="desc-block">
                                <div class="name">Laila</div>
                                <div>
                                    <span class="date">14-02-2020</span>
                                    <span class="rating">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                          <img class="svg" src="<?= $template_dir ?>/img/star-sm.svg" alt="star-sm">
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <p>
                                Er was iets onduidelijk op de website. Telefonisch goed geholpen. Goede service. Daarna
                                via mail duidelijke info. Sleutels binnen 1 dag in huis. Prijs ook een stuk lager als
                                bij de sleutelmaker in de buurt. Bedankt voor de top service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content-wrapper">
                    <h2>Veel gestelde vragen <a class="see-all" href="#">See all</a></h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>
                                    <h3>Hoe selecteer ik een halve cilinder?</h3>
                                    <p>Heeft u een halve deurcilinder nodig? Bijvoorbeeld bij een schuifpui, garagedeur
                                        of een deur waar aan de buitenzijde een blindplaat op zit.</p>
                                    <a class="read-more-link" href="#">Lees verder...</a>
                                </td>
                                <td>
                                    <h3>Welke kant een knop bij gelijke zijde?</h3>
                                    <p>Heeft u een deurcilinder waarvan beide zijde dezelfde maat hebben. Bijvoorbeeld
                                        een 32mm aan de ene zijde en 32mm aan de andere zijde. dan maakt het niet uit of
                                        u een knop selecteert bij de lange zijde of de korte zijde.</p>
                                    <a class="read-more-link" href="#">Lees verder...</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h3>Welke maat kies ik bij een 30/30 60mm deurcilinder?</h3>
                                    <p>Mijn bestaande deurcilinder heeft een lengte van 30/30 60mm. Wat moet ik nu
                                        kiezen en past het wel...</p>
                                    <a class="read-more-link" href="#">Lees verder...</a>
                                </td>
                                <td>
                                    <h3>Welke M&C sleutel moet ik kiezen om na te bestellen?</h3>
                                    <p>Wilt u extra sleutels bestellen maar u weet niet precies welke sleutel u heeft?
                                        Bestel een M&C Color pro sleutel en wij zien aan de code welke series sleutel u
                                        moet hebben.</p>
                                    <a class="read-more-link" href="#">Lees verder...</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <h2>M&C Cilinder bestellen</h2>
                    <p>Wij maken uw M&C bestelling altijd direct gelijksluitend. Wilt u de cilinder set niet
                        gelijksluitend hebben geef dit aan in het opmerkingsveld bij uw bestelling. Of maak een
                        aparte bestelling voor een andere set M&C Cilinders. Altijd gratis verzendkosten.</p>
                    <p>Besteld u voor 17:00 uur dan wordt uw bestelling vandaag nog verzonden*. Heeft u haast? Bel
                        ons en uw bestelling wordt vanavond nog bij u afgeleverd.</p>
                    <p>Wij hebben standaard alle M&C cilinders op voorraad. Voor elk slot hebben wij de perfecte
                        cilinder. Na het maken van uw keuze ziet u direct de totaalprijzen alle M&C series. Van de
                        M&C Color pro, M&C Matrix en de M&C Condor. De cilinders van M&C zijn veelal 2mm langer dan
                        de ouderwetse deurcilinders. Heeft u een 30/30 60mm cilinder dan kiest u bij M&C voor 32/32
                        65mm.</p>
                    <p>Heeft u een langere cilinder nodig kiest u de maat van de cilinder die het dichtste bij uw
                        bestaande cilinder komt. Probeer niet verder dan 3mm buiten uw deurbeslag uit te steken met
                        uw deurcilinder. Al zijn de M&C cilinders altijd direct uitgevoerd met een stalen brug.</p>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>