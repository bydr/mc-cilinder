<?php
global $template_dir;
?>

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