<?php
global $template_dir;
?>

<div class="dr-modal modal-configurator">
    <div class="dr-modal-content">
        <div class="dr-modal-close">
            <span class="icon icon-close"></span>
        </div>
        <p class="heading2 text-uppercase">KEUZEHULP</p>

        <div class="dr-tabs-wrapper">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#menu0">
                        <span class="step-item__tab">
                            <span class="step-item__counter">1</span>
                            <span class="step-item__title heading3">Aantal cilinders</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu1">
                        <span class="step-item__tab">
                            <span class="step-item__counter">2</span>
                            <span class="step-item__title heading3">Maten/knoppen</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#menu2">
                        <span class="step-item__tab">
                            <span class="step-item__counter">3</span>
                            <span class="step-item__title heading3">Wensen</span>
                        </span>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="menu0" class="container tab-pane active">
                    <div class="tab-pane__body">
                        <p class="tab-pane__title">Hoeveel gelijksluitende cilinders heeft u nodig?</p>
                        <div class="radius-4 help-btn-block help-btn-block__light help-btn-block__custom d-flex">
                            <button class="btn btn-blue">1</button>
                            <button class="btn btn-blue">2</button>
                            <button class="btn btn-blue">3</button>
                            <button class="btn btn-white">4</button>
                            <button class="btn btn-white">5</button>
                            <button class="btn btn-white">6</button>
                            <button class="btn btn-white">7</button>
                            <button class="btn btn-white">8</button>
                            <button class="btn btn-white">9</button>
                            <button class="btn btn-white">10</button>
                        </div>
                    </div>
                    <div class="tab-pane__footer">
                        <div class="row">
                            <div class="col">
                                <p><b>7</b> resultaten van <b class="c-accent">€ 44.95</b> tot <b class="c-accent">€
                                        69.00</b></p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5">
                                <div class="dr-btn-group justify-content-center justify-content-sm-end">
                                    <a href="#" class="dr-btn btn btn-blue max-w-130">Volgende</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="tab-pane__body">
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="table-wrapper">
                                    <table class="table table-rowed">
                                        <thead class="table-thead">
                                        <tr class="table-row">
                                            <th class="table-cell"></th>
                                            <th class="table-cell" colspan="2"><span class="table-cell__wrapper">Cilindermaat
                                            </th>
                                            <th class="table-cell"><span class="table-cell__wrapper">Knop</span></th>
                                            <th class="table-cell"><span
                                                        class="table-cell__wrapper">Kleur cilinder</span></th>
                                        </tr>
                                        </thead>
                                        <tbody class="table-tbody">
                                        <tr class="table-row is-active">
                                            <td class="table-cell table-cell__iterator">
                                            <span class="table-cell__wrapper">
                                                1
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="size-cilinder" id="id-size-cilinder">
                                                    <option value="value1">65mm</option>
                                                    <option value="value2">65mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="shortSideBtn-cilinder" id="id-shortSideBtn-cilinder">
                                                    <option value="value1">58mm</option>
                                                    <option value="value2">58mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="longSideBtn-cilinder" id="id-longSideBtn-cilinder">
                                                    <option value="value1">Geen knop</option>
                                                    <option value="value2">Geen knop</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <span class="color-cilinder"></span>
                                                <select class="custom-select custom-select__standart"
                                                        name="color-cilinder" id="id-color-cilinder">
                                                    <option value="messing">Messing</option>
                                                    <option value="zwart">Zwart</option>
                                                    <option value="nikkel">Nikkel</option>
                                                </select>
                                            </span>
                                            </td>
                                        </tr>
                                        <tr class="table-row is-active">
                                            <td class="table-cell table-cell__iterator">
                                            <span class="table-cell__wrapper">
                                                2
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="size-cilinder" id="id-size-cilinder">
                                                    <option value="value1">65mm</option>
                                                    <option value="value2">65mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="shortSideBtn-cilinder" id="id-shortSideBtn-cilinder">
                                                    <option value="value1">58mm</option>
                                                    <option value="value2">58mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="longSideBtn-cilinder" id="id-longSideBtn-cilinder">
                                                    <option value="value1">Geen knop</option>
                                                    <option value="value2">Geen knop</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <span class="color-cilinder"></span>
                                                <select class="custom-select custom-select__standart"
                                                        name="color-cilinder" id="id-color-cilinder">
                                                    <option value="messing">Messing</option>
                                                    <option value="zwart" selected>Zwart</option>
                                                    <option value="nikkel">Nikkel</option>
                                                </select>
                                            </span>
                                            </td>
                                        </tr>
                                        <tr class="table-row">
                                            <td class="table-cell table-cell__iterator">
                                            <span class="table-cell__wrapper">
                                                3
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="size-cilinder" id="id-size-cilinder">
                                                    <option value="value1">65mm</option>
                                                    <option value="value2">65mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="shortSideBtn-cilinder" id="id-shortSideBtn-cilinder">
                                                    <option value="value1">58mm</option>
                                                    <option value="value2">58mm</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <select class="custom-select custom-select__standart"
                                                        name="longSideBtn-cilinder" id="id-longSideBtn-cilinder">
                                                    <option value="value1">Geen knop</option>
                                                    <option value="value2">Geen knop</option>
                                                </select>
                                            </span>
                                            </td>
                                            <td class="table-cell">
                                            <span class="table-cell__wrapper">
                                                <span class="color-cilinder"></span>
                                                <select class="custom-select custom-select__standart"
                                                        name="color-cilinder" id="id-color-cilinder">
                                                    <option value="messing">Messing</option>
                                                    <option value="zwart">Zwart</option>
                                                    <option value="nikkel" selected>Nikkel</option>
                                                </select>
                                            </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="#" class="more-info-btn c-accent">Verberg informatie
                                    <span class="icon">
                                        <svg width="14" height="9" viewBox="0 0 14 9" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
<path d="M7.00296 5.4608L1.76537 0.223436C1.6215 0.0792244 1.42914 -0.000108869 1.22403 -0.000108871C1.01881 -0.000108874 0.82657 0.0792244 0.682472 0.223436L0.223773 0.682362C0.0794478 0.826346 8.59282e-08 1.01882 8.34823e-08 1.22392C8.10365e-08 1.42903 0.0794478 1.62127 0.223773 1.76537L6.45958 8.00129C6.60413 8.14596 6.79729 8.22518 7.00262 8.22461C7.20886 8.22518 7.40179 8.14607 7.54646 8.00129L13.7762 1.77118C13.9206 1.62708 14 1.43483 14 1.22961C14 1.02451 13.9206 0.832265 13.7762 0.688054L13.3175 0.229241C13.019 -0.0693121 12.533 -0.0693121 12.2345 0.229241L7.00296 5.4608Z"
      fill="#2FB2CA"/>
</svg>
                                    </span>
                                </a>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="configurator-instruction">
                                    <p class="">Haal de cilinder uit de deur en meet hem op zoals de afbeelding.
                                        <br><br> <b>Let op:</b> Een cilinder mag aan de buitenzijde maximaal 3 mm
                                        uitsteken.</p>
                                    <!--                                    <img src="-->
                                    <? //= $template_dir ?><!--/img/instruction_img_1.png" alt="">-->
                                    <img src="wp-content/themes/mc-cilinder/img/instruction_img_1.png" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane__footer">
                        <div class="row">
                            <div class="col">
                                <p><b>7</b> resultaten van <b class="c-accent">€ 44.95</b> tot <b class="c-accent">€
                                        69.00</b></p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5">
                                <div class="dr-btn-group justify-content-center justify-content-sm-end">
                                    <a href="#" class="dr-btn btn btn-gray max-w-130">Terug</a>
                                    <a href="#" class="dr-btn btn btn-blue max-w-130">Volgende</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="container tab-pane fade">
                    <div class="tab-pane__body">
                        <p class="tab-pane__title">Wij begrijpen dat het kiezen van een veilige cilinder soms moeilijk
                            kan zijn. Laat ons u helpen zodat u de juiste keuze kunt maken.</p>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <div class="checkbox-list">
                                    <p class="heading3 checkbox-list__title d-flex align-items-center">
                                        Doorax waardering
                                        <span class="icon info icon-pseudo"></span>
                                    </p>
                                    <div class="checkbox-list__inner">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>
                                            <span class="checkbox-box">
                                                <svg width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1662 0L4.16621 5.94527L1.83388 3.63443L0 5.45194L4.16625 9.5805L12 1.81755L10.1662 0Z" fill="inherit"/></svg>
                                            </span>
                                            <span class="checkbox-text">Goed beveiligd</span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span class="checkbox-box">
                                                <svg width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1662 0L4.16621 5.94527L1.83388 3.63443L0 5.45194L4.16625 9.5805L12 1.81755L10.1662 0Z" fill="inherit"/></svg>
                                            </span>
                                            <span class="checkbox-text">Zwaar beveiligd</span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span class="checkbox-box">
                                                <svg width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1662 0L4.16621 5.94527L1.83388 3.63443L0 5.45194L4.16625 9.5805L12 1.81755L10.1662 0Z" fill="inherit"/></svg>
                                            </span>
                                            <span class="checkbox-text">Extra zwaar beveiligd</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="checkbox-list">
                                    <p class="heading3 checkbox-list__title d-flex align-items-center">
                                        SKG waardering
                                        <span class="icon info icon-pseudo"></span>
                                    </p>
                                    <div class="checkbox-list__inner">
                                        <label class="checkbox">
                                            <input type="checkbox" checked>
                                            <span class="checkbox-box">
                                                <svg width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1662 0L4.16621 5.94527L1.83388 3.63443L0 5.45194L4.16625 9.5805L12 1.81755L10.1662 0Z" fill="inherit"/></svg>
                                            </span>
                                            <span class="checkbox-text">SKG** 2 sterren</span>
                                        </label>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span class="checkbox-box">
                                                <svg width="12" height="10" viewBox="0 0 12 10" xmlns="http://www.w3.org/2000/svg">
<path d="M10.1662 0L4.16621 5.94527L1.83388 3.63443L0 5.45194L4.16625 9.5805L12 1.81755L10.1662 0Z" fill="inherit"/></svg>
                                            </span>
                                            <span class="checkbox-text">SKG** 3 sterren</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane__footer">
                        <div class="row">
                            <div class="col">
                                <p><b>7</b> resultaten van <b class="c-accent">€ 44.95</b> tot <b class="c-accent">€
                                        69.00</b></p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-5">
                                <div class="dr-btn-group justify-content-center justify-content-sm-end">
                                    <a href="#" class="dr-btn btn btn-gray max-w-130">Terug</a>
                                    <a href="#" class="dr-btn btn btn-blue max-w-130">Bekijk aanbod</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
