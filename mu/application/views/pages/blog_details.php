<div role="main" class="main">

    <section class="page-header page-header-dark page-header-text-light"
        style="background-image: url(<?=base_url('assets/admin/uploads/'.$banner);?>);"
    >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb justify-content-start">
                        <li><a href="<?= base_url('/'); ?>">Kay</a></li>
                        <li class="active">Blogs</li>
                    </ul>
                </div>
            </div>
            <div class="row text-left">
                <div class="col-md-12">
                    <h1><?=$news_title;?></h1>
                    <p class="lead"> On <?=date('d M, Y', strtotime($news_date));?>, By <?=$publisher;?></p>
                </div>
            </div>
        </div>
    </section>




<section class="blog-detail-page section-b-space ratio2_3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 blog-detail mb-3">
                <p><?=$news_content;?></p>
            </div>
        </div>
    </div>
</section>



