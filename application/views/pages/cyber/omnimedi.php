<section class="product_listing">
    <article class="container">
        <div class="row">

            <div class="col-md-9 col-xs-12">
                <div class="imnipress">
                    <h2 class="content-title-omnipress fw-bold text-center">ROBUST DICOM IMAGE COMPRESSOR</h2>
                    <h3 class="text-center fw-bold">OmniMedical</h3>
                    <p>OmniMedical is a comprehensive and highly customizable DICOM image optimizer designed to
                        compress bulky medical files by up to 95%.</p>
                    <p>With perceptually lossless compression and our proprietary visual analytics,
                        OmniMedical can quickly compress hundreds of files without missing a single detail.
                        OmniMedical is the ideal solution for addressing the large digital footprints that
                        accompany quality DICOM files.
                    <p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/1.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/2.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/3.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="imnipress-list">
                    <h4 class="contenmnipress fw-bold">FEATURES</h4>
                    <ul>
                        <li> Customizable compression qualities.</li>
                        <li> Supports all valid DICOM image formats.</li>
                        <li>Reduce storage and transmission costs Up to 95% compression per DICOM.</li>
                        <li> Interactive GUI to preview changes.</li>
                        <li>Centralized model, easy to deploy.</li>
                        <li>Lightweight, portable, compatible.</li>
                        <li>Adjustable, standards-compliant output.</li>
                    </ul>
                </div>
                <div class="imnipress-list">
                    <p>OmniMedical helps to reduce DICOM image by up to 95%, allowing hospitals or clinics to archive records with lesser storage space.</p>
                    <p>With the compression, the DICOM digital images can now be shared with patient via Internet.</p>

                </div>
                <div class="imnipress-list">
                    <h4 class="contenmnipress fw-bold">BENEFITS</h4>
                    <ul>
                        <li>High compression rate for sharing via Internet.</li>
                        <li>Huge cost saving in storage space for archiving.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <ul class="nav flex-column nav-tabs nav-tabs-vertical bg-light rounded shadow-sm p-3" id="tabVertical" role="tablist">

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-center " href="<?= base_url('Home/omnicom'); ?>">
                            <i class="fas fa-compress-alt me-2 text-primary"></i> OmniCompressor
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-center" href="<?= base_url('Home/omnistreams'); ?>">
                            <i class="fas fa-stream me-2 text-info"></i> OmniStream
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-center" href="<?= base_url('Home/omnimedia'); ?>">
                            <i class="far fa-image me-2 text-success"></i> OmniImage
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link active d-flex align-items-center" href="<?= base_url('Home/omnimedical'); ?>">
                            <i class="fas fa-notes-medical me-2 text-danger"></i> OmniMedical
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-center" href="<?= base_url('Home/omniviewer'); ?>">
                            <i class="fas fa-eye me-2 text-warning"></i> OmniViewer
                        </a>
                    </li>

                </ul>
            </div>
        </div>


        <style>
            .imnipress-list li {
                font-weight: 400;
            }

            .imnipress p {
                font-weight: 500;
            }

            .carousel-item img {
                height: 500px;
            }

            .carousel-indicators li {
                position: relative;
                -ms-flex: 0 1 auto;
                flex: 0 1 auto;
                width: 10px;
                height: 10px;
                margin-right: 3px;
                margin-left: 3px;
                text-indent: -999px;
                cursor: pointer;
                background-color: rgba(255, 255, 255, .5);
                border-radius: 100%;
            }

            .content-title-omnipress {
                font-size: 20px;
            }

            .imnipress h3 {
                font-size: 30px;
                font-weight: 600;
            }


            .imnipress-list,
            .imnipress {
                margin-top: 10px;
            }

            .nav-tabs .nav-item .nav-link.active {
                color: #1c1f21;
                font-weight: 600;
            }
            .nav-tabs.nav-tabs-vertical {
                position: sticky;
                top: 100px;
                width: 100%;
            }
            .nav-item a{
                gap: 15px;
            }
            .nav>.nav-item>.nav-link:active, .nav>.nav-item>.nav-link:focus, .nav>.nav-item>.nav-link:hover {
    color: #000;
}
            @media(max-width:991px) and (min-width:768px) {
                .carousel-item img {
                    height: inherit;
                }
            }

            @media(max-width:767px) and (min-width:426px) {
                .carousel-item img {
                    height: inherit;
                }
            }
            @media(max-width:425px) {
                .carousel-item img {
                    height: inherit;
                }
            }
        </style>
</section>