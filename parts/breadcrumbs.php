<div class="container-fluid breadcrumbs-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php if(function_exists('bcn_display')) : ?>
                    <div id="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php bcn_display(); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-xl-12 title"><h1> <?= the_title() ?></h1></div>
        </div>
    </div>
</div>
