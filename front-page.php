<?php get_header(); ?>

<?php
global $template_dir;
echo file_get_contents($template_dir.'/modal-configurator.php');
?>

    <div class="container-fluid main-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>M&C Deurcilinders</h1>
                    <h3>Dé manier om zelf uw thuis veiliger te maken</h3>
                    <div class="subtitle">Al vanaf € 44,95 incl. BTW verkrijgbaar</div>
                </div>
                <div class="col-lg-6 d-none d-lg-block right-side">
                    <div class="row">
                        <div class="col-lg-6 item">
                            <div class="img-wrapper">
                                <img class="svg" src="<?= $template_dir ?>/img/clock.svg" alt="clock">
                            </div>
                            <div class="text">Voor 23:59 uur besteld is de volgende dag geleverd*</div>
                        </div>
                        <div class="col-lg-6 item">
                            <div class="img-wrapper">
                                <img class="svg" src="<?= $template_dir ?>/img/truck.svg" alt="truck">
                            </div>
                            <div class="text">Altijd gratis verzenden in Nederland en België</div>
                        </div>
                        <div class="col-lg-6 item">
                            <div class="img-wrapper">
                                <img class="svg" src="<?= $template_dir ?>/img/calendar.svg" alt="calendar">
                            </div>
                            <div class="text">Eenvoudig en gratis retour, 30 dagen bedenktijd</div>
                        </div>
                        <div class="col-lg-6 item">
                            <div class="img-wrapper">
                                <img class="svg" src="<?= $template_dir ?>/img/phone.svg" alt="phone">
                            </div>
                            <div class="text">Gratis support voor en na uw aankoop</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid main-sub-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 step-wrapper">
                    <div class="step active modal-configurator__btn-show">
                        <div class="green-square">1</div>
                        <h3>Hoeveel cilinders heeft u nodig?</h3>
                    </div>
                </div>
                <div class="col-lg-12 help-btn-block-wrapper">
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
            </div>
        </div>
    </div>

    <div class="container-fluid main-header-add d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-6 item">
                    <div class="img-wrapper">
                        <img class="svg" src="<?= $template_dir ?>/img/clock.svg" alt="clock">
                    </div>
                    <div class="text">Voor 23:59 uur besteld is de volgende dag geleverd*</div>
                </div>
                <div class="col-sm-3 col-6 item">
                    <div class="img-wrapper">
                        <img class="svg" src="<?= $template_dir ?>/img/calendar.svg" alt="calendar">
                    </div>
                    <div class="text">Eenvoudig en gratis retour, 30 dagen bedenktijd</div>
                </div>
                <div class="col-sm-3 col-6 item">
                    <div class="img-wrapper">
                        <img class="svg" src="<?= $template_dir ?>/img/truck.svg" alt="truck">
                    </div>
                    <div class="text">Altijd gratis verzenden in Nederland en België</div>
                </div>
                <div class="col-sm-3 col-6 item">
                    <div class="img-wrapper">
                        <img class="svg" src="<?= $template_dir ?>/img/phone.svg" alt="phone">
                    </div>
                    <div class="text">Gratis support voor en na uw aankoop</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid series-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading1">Je hebt je bestelling bijna afgerond</div>
                    <div class="subtitle">Kies vanuit welke serie je de cilinders geleverd wil hebben</div>
                </div>
            </div>
            <div class="row offer-table">
                <div class="col-xl-3 col-md-4 col-sm-6 left-side">
                    <div class="header">
                        <div class="title">Kenmerken</div>
                        <div class="subtitle">Alle cilinders zijn voorzien van:</div>
                        <ul class="check-list">
                            <li>Gratis verzending</li>
                            <li>100% geld terug binnen 30 dagen</li>
                            <li>Beoordeeld met een <strong>9.3</strong> op <span class="blue">Kiyoh</span></li>
                            <li>5 jaar garantie</li>
                            <li>Veilig achteraf betalen</li>
                        </ul>
                    </div>
                    <div class="d-none d-sm-block body">
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-blue.svg"
                                                     alt="info-blue"></span>Sleutel
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Slag- / klop- en boorbeveiliging
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Pickbeveiliging
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>SKG 3* gekeurd
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Kerntrekbeveiliging
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Verhoogd profiel
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Stalen brug
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>2 zijdig bedienbaar
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Meenemer
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Certificaat
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Kopieerbeveiliging
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Sluitplan geschikt
                        </div>
                        <div><span class="info"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                     alt="info-black"></span>Gekleurde sleutels
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 col-sm-6 right-side">
                    <div class="row offer-table-slider">
                        <div class="col-lg-3 item">
                            <div class="header">
                                <div class="title">M&C Color plus</div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole.png" alt="keyhole">
                                </div>
                                <div class="price">€44.92</div>
                                <div class="btw">incl. BTW</div>
                                <div class="cilinders">1 cilinders</div>
                                <div class="sleutels">3 sleutels</div>
                            </div>
                            <div class="body">
                                <div>
                                    <div class="definition d-sm-none">Sleutel</div><div>Keersleutel</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-blue.svg"
                                                                      alt="info-blue"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Slag- / klop- en boorbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Pickbeveiliging</div><div>Goed beveiligd</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">SKG 3* gekeurd</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Kerntrekbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Verhoogd profiel</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Stalen brug</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">2 zijdig bedienbaar</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div>
                                    <div class="definition d-sm-none">Meenemer</div><div>rvs</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Certificaat</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Kopieerbeveiliging</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Sluitplan geschikt</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Gekleurde sleutels</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="make-order-wrapper">
                                    <button class="btn btn-blue make-order">Nu bestellen</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 item">
                            <div class="header">
                                <div class="title">M&C Matrix</div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole.png" alt="keyhole">
                                </div>
                                <div class="price">€49.95</div>
                                <div class="btw">incl. BTW</div>
                                <div class="cilinders">1 cilinders</div>
                                <div class="sleutels">3 sleutels</div>
                                <div class="choose-key-type">Kies hier color of metalen sleutels</div>
                            </div>
                            <div class="body">
                                <div>
                                    <div class="definition d-sm-none">Sleutel</div><div>Snijsleutel</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-blue.svg"
                                                                      alt="info-blue"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Slag- / klop- en boorbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Pickbeveiliging</div><div>Zwaar beveiligd</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">SKG 3* gekeurd</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Kerntrekbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Verhoogd profiel</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Stalen brug</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">2 zijdig bedienbaar</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div>
                                    <div class="definition d-sm-none">Meenemer</div><div>rvs</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Certificaat</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Kopieerbeveiliging</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Sluitplan geschikt</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Gekleurde sleutels</div><div>ja, beide mogelijk</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="make-order-wrapper">
                                    <button class="btn btn-blue make-order">Nu bestellen</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 item selected">
                            <div class="header">
                                <div class="title">M&C Condor <img class="svg" src="<?= $template_dir ?>/img/like.svg"
                                                                   alt="like"></div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole.png" alt="keyhole">
                                </div>
                                <div class="price">€59.96</div>
                                <div class="btw">incl. BTW</div>
                                <div class="cilinders">1 cilinders</div>
                                <div class="sleutels">3 sleutels</div>
                            </div>
                            <div class="body">
                                <div>
                                    <div class="definition d-sm-none">Sleutel</div><div>Keersleutel</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-blue.svg"
                                                                      alt="info-blue"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Slag- / klop- en boorbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Pickbeveiliging</div><div>Zwaar beveiligd</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">SKG 3* gekeurd</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Kerntrekbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Verhoogd profiel</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Stalen brug</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">2 zijdig bedienbaar</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div>
                                    <div class="definition d-sm-none">Meenemer</div><div>rvs</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Certificaat</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Kopieerbeveiliging</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Sluitplan geschikt</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Gekleurde sleutels</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="make-order-wrapper">
                                    <button class="btn btn-blue make-order">Nu bestellen</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 item">
                            <div class="header">
                                <div class="title">M&C Move</div>
                                <div class="img-wrapper">
                                    <img src="<?= $template_dir ?>/img/keyhole.png" alt="keyhole">
                                </div>
                                <div class="price">€59.96</div>
                                <div class="btw">incl. BTW</div>
                                <div class="cilinders">1 cilinders</div>
                                <div class="sleutels">3 sleutels</div>
                            </div>
                            <div class="body">
                                <div>
                                    <div class="definition d-sm-none">Sleutel</div><div>Keersleutel</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-blue.svg"
                                                                      alt="info-blue"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Slag- / klop- en boorbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Pickbeveiliging</div><div>Extra zwaar beveiligd</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">SKG 3* gekeurd</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Kerntrekbeveiliging</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Verhoogd profiel</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Stalen brug</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">2 zijdig bedienbaar</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div>
                                    <div class="definition d-sm-none">Meenemer</div><div>rvs</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Certificaat</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Kopieerbeveiliging</div><div>jae</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="yes">
                                    <div class="definition d-sm-none">Sluitplan geschikt</div><div>ja</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="no">
                                    <div class="definition d-sm-none">Gekleurde sleutels</div><div>nee</div>
                                    <span class="info d-sm-none"><img class="svg" src="<?= $template_dir ?>/img/info-black.svg"
                                                                      alt="info-black"></span>
                                </div>
                                <div class="make-order-wrapper">
                                    <button class="btn btn-blue make-order">Nu bestellen</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <h1>M&C Deurcilinders</h1>
                    <div class="subtitle">M&C cilinders, de manier om zelf uw thuis veiliger te maken, deze sloten zijn
                        beveiligd tegen vele soorten inbraak!
                    </div>
                    <div class="content-wrapper">
                        <div class="read-more-block-wrapper">
                            <div class="read-more-block">
                                <div class="mist"></div>
                                <p>Het komt steeds vaker voor dat inbrekers gebruikmaken van het kerntrekken of het cilinder
                                    breken. Nieuwe woningen (vanaf 2016) zijn tegen dit zogenaamde kerntrekken beschermd, maar
                                    bestaande woningen hebben meestal sloten met cilinders met SKG2* en zijn dus niet goed
                                    beveiligd. Inbrekers draaien een geharde schroef in de cilinder en trekken zo heel eenvoudig
                                    de cilinder uit de deur. Binnen 20 a 30 seconden zijn ze in uw woning. Het maakt niet uit of
                                    je 1 slot hebt of een 3 puntsluiting. Na het verwijderen van de cilinder kan je met elke
                                    schroevendraaier of bouwsleutel naar binnen. Om gemakkelijke inbraken te voorkomen moet u uw
                                    huis dus voorzien van kerntrekbeveiliging!</p>
                                <p>Om erachter te komen welke cilinder in uw deur zit, kunt u kijken naar de sterren in de
                                    driehoek.</p>
                                <p>Uw woning kan op twee manieren worden beveiligd tegen kerntrekken. </p>
                                <p>Een dure en lastige oplossing is om uw oorspronkelijke deurbeslag te vervangen naar
                                    deurbeslag met kerntrekbeveiliging. Echter, in de praktijk is dit niet de beste oplossing en
                                    kost het voor veel mensen vaak veel tijd en moeite om het deurbeslag te vervangen.</p>
                                <p>Een efficiëntere en betaalbaardere oplossing is om alleen uw deurcilinders te vervangen.
                                    Deurcilinders zijn namelijk zeer eenvoudig zelf te vervangen en te monteren.</p>
                                <p>Op onze website hebben wij een video geplaatst waarin duidelijk stap voor stap
                                    wordt uitgelegd hoe u uw cilinder eruit kan halen en hoe u deze met onze cilindermeter
                                    eenvoudig kunt opmeten. Wanneer u deze stappen hebt gevolgd is het daarna heel gemakkelijk
                                    om de nieuwe cilinder te monteren.</p>
                                </div>
                            <div class="read-more-btn-wrapper">
                                <span class="read-more-open">Lees meer <img class="svg" src="<?= $template_dir ?>/img/read-more-open.svg" alt="read-more-open"></span>
                                <span class="read-more-close">Ineenstorting  <img class="svg" src="<?= $template_dir ?>/img/read-more-close.svg" alt="read-more-close"></span>
                            </div>
                        </div>
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <h3>Zorg voor de juiste kerntrekbeveiliging</h3>
                                        <p>Wij adviseren voor bestaande en nieuwe woningen SKG 3* deurcilinders met een
                                            gehard stalen brug van M&C om zo uw woning optimaal tegen inbrekers te
                                            beschermen. Deze deurcilinders hebben naast de kerntrekbeveiliging ook een
                                            gehard stalen brug. zo zijn de deurcilinders ook bestand tegen het cilinder
                                            breken.</p>
                                    </td>
                                    <td>
                                        <h3>Keurmerk</h3>
                                        <p><img class="float-right" src="<?= $template_dir ?>/img/table-logo.jpg"
                                                alt="table-logo">
                                            Al onze M&C cilinders hebben het Politie Keurmerk Veilig Wonen (PVWK) en SKG
                                            3* keurmerk en worden geleverd met certificaat.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h3>Snelle Levering</h3>
                                        <p>Heeft u snel nieuwe cilinders nodig met kerntrekbeveiliging, omdat er net is
                                            ingebroken of omdat uw nieuwe deuren een andere maat hebben. Besteld u voor
                                            17:00 uur dan zorgen wij dat uw bestelling dezelfde dag wordt verstuurd
                                            (uitgezonderd op zondag).</p>
                                    </td>
                                    <td>
                                        <h3>Sluitplan</h3>
                                        <p>Of bent u op zoek naar een sluitplan met SKG 3* cilinders met
                                            kerntrekbeveiliging, boorbeveiliging, breekbeveiliging, beveiligd tegen
                                            kloppen
                                            en zo kunnen we wel doorgaan met de cilinder van M&C. Wij kunnen deze voor u
                                            verzorgen. Neem daarvoor contact met ons op om alles door te geven.</p>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div id="accordion" class="accordion d-md-none">
                            <div class="card">
                                <div class="card-header" id="heading1">
                                    <h3 class="" data-toggle="collapse" data-target="#collapse1"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Zorg voor de juiste kerntrekbeveiliging
                                        <img class="svg arrow-down-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-down-collapsed.svg" alt="arrow-down-collapsed">
                                        <img class="svg arrow-up-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                    </h3>
                                </div>
                                <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Wij adviseren voor bestaande en nieuwe woningen SKG 3* deurcilinders met een
                                            gehard stalen brug van M&C om zo uw woning optimaal tegen inbrekers te
                                            beschermen. Deze deurcilinders hebben naast de kerntrekbeveiliging ook een
                                            gehard stalen brug. zo zijn de deurcilinders ook bestand tegen het cilinder
                                            breken.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading2">
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse2"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Keurmerk
                                        <img class="svg arrow-down-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-down-collapsed.svg" alt="arrow-down-collapsed">
                                        <img class="svg arrow-up-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                    </h3>
                                </div>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Al onze M&C cilinders hebben het Politie Keurmerk Veilig Wonen (PVWK) en SKG
                                            3* keurmerk en worden geleverd met certificaat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading3">
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse3"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Snelle Levering
                                        <img class="svg arrow-down-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-down-collapsed.svg" alt="arrow-down-collapsed">
                                        <img class="svg arrow-up-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                    </h3>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Heeft u snel nieuwe cilinders nodig met kerntrekbeveiliging, omdat er net is
                                            ingebroken of omdat uw nieuwe deuren een andere maat hebben. Besteld u voor
                                            17:00 uur dan zorgen wij dat uw bestelling dezelfde dag wordt verstuurd
                                            (uitgezonderd op zondag).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading4">
                                    <h3 class="collapsed" data-toggle="collapse" data-target="#collapse4"
                                        aria-expanded="false" aria-controls="collapseOne">
                                        Sluitplan
                                        <img class="svg arrow-down-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-down-collapsed.svg" alt="arrow-down-collapsed">
                                        <img class="svg arrow-up-collapsed arrow-collapsed" src="<?= $template_dir ?>/img/arrow-up-collapsed.svg" alt="arrow-up-collapsed">
                                    </h3>
                                </div>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Of bent u op zoek naar een sluitplan met SKG 3* cilinders met
                                            kerntrekbeveiliging, boorbeveiliging, breekbeveiliging, beveiligd tegen
                                            kloppen
                                            en zo kunnen we wel doorgaan met de cilinder van M&C. Wij kunnen deze voor u
                                            verzorgen. Neem daarvoor contact met ons op om alles door te geven.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid requirements-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading1">M&C Deurcilinders voldoen aan de strengste eisen</div>
                    <div class="subtitle-wrapper">
                        <button class="btn btn-white d-none d-lg-block">Cilinders bestellen</button>
                        <div class="subtitle">
                            M&C Condor is beveiligd tegen boren, openpikken, kerntrekken, de slagmethode
                            en de impressietechniek
                        </div>
                    </div>
                </div>
            </div>
            <div class="row items-row">
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant.svg" alt="pick-resistant">
                        </div>
                        <div class="text">Beveiligd tegen openpikken</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant2.svg" alt="pick-resistant2">
                        </div>
                        <div class="text">Breek - beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant3.svg" alt="pick-resistant3">
                        </div>
                        <div class="text">Klop - beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant4.svg" alt="pick-resistant4">
                        </div>
                        <div class="text">Kerntrek- beveiliging</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant5.svg" alt="pick-resistant5">
                        </div>
                        <div class="text">Beveiligd tegen boren</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant6.svg" alt="pick-resistant6">
                        </div>
                        <div class="text">Geschikt voor alle sluitplannen</div>
                    </div>
                </div>
                <div class="col">
                    <div class="item">
                        <div class="img-wrapper">
                            <img src="<?= $template_dir ?>/img/pick-resistant7.svg" alt="pick-resistant7">
                        </div>
                        <div class="text">5 jaar garantie</div>
                    </div>
                </div>
                <div class="col d-lg-none btn-glass-wrapper">
                    <div class="item">
                        <button class="btn btn-glass">Cilinders<br>bestellen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid features-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="item">
                        <div class="title-wrapper">
                            <h2>M&C Condor  pluspunten</h2>
                            <img src="<?= $template_dir ?>/img/feature1.jpg" alt="feature1">
                        </div>
                        <ul class="check-list">
                            <li>SKG 3* keurmerk en daarbij een gehard stalen brug</li>
                            <li>Beschermd en verhoogd sleutelprofiel</li>
                            <li>Standaard voorzien van nood en gevarenfunctie</li>
                            <li>Flexibel: geschikt voor elk sluitplan</li>
                            <li>De platte sleutel en past op 2 manieren</li>
                            <li>Inclusief certificaat</li>
                        </ul>
                        <p>M&C Condor heeft standaard een nood en gevarenfunctie. Dit betekent dat de cilinder
                            tweezijdig te bedienen is – ook wanneer er een sleutel in de andere zijde van de cilinder
                            zit.</p>
                        <p>M&C Condor is leverbaar in de kleuren nikkel, messing en zwart.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="item">
                        <div class="title-wrapper">
                            <h2>M&C Color + Pluspunten</h2>
                            <img class="bordered" src="<?= $template_dir ?>/img/feature2.jpg" alt="feature2">
                        </div>
                        <ul class="check-list">
                            <li>SKG 3* keurmerk en daarbij een gehard stalen brug</li>
                            <li>Beschermd sleutelprofiel</li>
                            <li>Scherpe prijs</li>
                            <li>Goed en bewezen product</li>
                            <li>Eenvoudig en prettig in gebruik</li>
                            <li>Snelle levering</li>
                        </ul>
                        <p>M&C Color plus is net zoals de Condor ook leverbaar met een knop of een pushknop. Heeft u een
                            raam of brievenbus naast de deur zitten heeft u een pushknop nodig om te voldoen aan het
                            politie keurmerk veilig wonen.</p>
                        <p><strong> Een bestelling van meerdere M&C cilinders worden altijd direct gelijksluitend
                                gemaakt.</strong></p>
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

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
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

<?php get_footer(); ?>
