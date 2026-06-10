<section class="product_listing">
    <article class="container">
        <div class="row">

            <div class="col-md-9 col-xs-12">
                <div class="imnipress">
                    <h2 class="content-title-omnipress fw-bold text-center">Powerful Video Compression Toolkit</h2>
                    <h3 class="text-center fw-bold">OmniStream</h3>
                    <p>OmniStream is a highly customizable video optimization toolkit capable of compressing
                        video files by up to 95% with less than 1% loss.</p>
                    <p>Ready to be used as stand-alone or via web for security agencies or home viewing configurations, OmniStream is the ideal solution for addressing the large digital footprints that accompany quality video files</p>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/image (26).png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/image (27).png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/image (28).png" alt="Third slide">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="<?= base_url() ?>assets/frontasset/images/image (25).png" alt="First slide">
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
                        <li> Up to 90% compression per stream.</li>
                        <li> Interactive GUI to preview changes</li>
                        <li> Lightweight, portable, compatible.</li>
                        <li> Standards-compliant output, web ready Adjustable video and audio qualities.</li>
                        <li>Supports .mp4, .avi, and .mov formats. </li>
                        <li>Supported on Windows</li>
                    </ul>
                </div>
                <div class="imnipress-list">
                    <p>OmniCompressor reduces bandwidth consumption by up to 90% for live video streams and huge saving in storage capacity.</p>
                    <p>OmniCompressor supports most brands of cameras and video formats such as 4K (UHDTV), 1080p (HDTV), MJPEG, H.264, H.265</p>

                </div>
                <div class="imnipress-list">
                    <h4 class="contenmnipress fw-bold">BENEFITS</h4>
                    <ul>
                        <li>Huge reduction in bandwidth usage and storage.</li>
                        <li>Cost saving in long term investment.</li>
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
                        <a class="nav-link d-flex active align-items-cente " href="<?= base_url('Home/omnistreams'); ?>">
                            <i class="fas fa-stream me-2 text-info"></i> OmniStream
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-cente " href="<?= base_url('Home/omnimedia'); ?>">
                            <i class="far fa-image me-2 text-success"></i> OmniImage
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-cente " href="<?= base_url('Home/omnimedical'); ?>">
                            <i class="fas fa-notes-medical me-2 text-danger"></i> OmniMedical
                        </a>
                    </li>

                    <li class="nav-item mb-2">
                        <a class="nav-link d-flex align-items-cente " href="<?= base_url('Home/omniviewer'); ?>">
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

            .nav-tabs .nav-item .nav-link.active {
                color: #1c1f21;
                font-weight: 600;
            }

            .imnipress-list,
            .imnipress {
                margin-top: 10px;
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