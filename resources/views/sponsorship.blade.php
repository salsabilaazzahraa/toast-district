
@extends('layouts.master')

@section('content')

<section class="py-5">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <span class="text-uppercase text-muted">
                    Partnership Opportunity
                </span>

                <h1 class="fw-bold display-5 mt-3">
                    Let's Create Something
                    <span class="text-warning">Delicious!</span>
                </h1>

                <p class="text-muted mt-3">
                    Toast.district membuka kesempatan kolaborasi dan kerja
                    sama sponsorship dengan berbagai pihak untuk menciptakan
                    pengalaman dan kegiatan yang menarik.
                </p>

                <a href="#requirements"
                    class="btn btn-dark rounded-pill px-4 mt-3">
                    Lihat Persyaratan
                </a>
            </div>

            <div class="col-lg-6">
                <div class="bg-light rounded-4 p-5 text-center">
                    <i class="bi bi-people display-1"></i>
                    <h4 class="fw-bold mt-3">Grow Together</h4>
                    <p class="text-muted mb-0">
                        Build meaningful partnerships with Toast.district.
                    </p>
                </div>
            </div>

        </div>

        <div class="row justify-content-center mt-5" id="requirements">
            <div class="col-lg-8">

                <div class="text-center mb-4">
                    <h2 class="fw-bold">Sponsorship Requirements</h2>
                    <p class="text-muted">
                        Beberapa informasi yang perlu disiapkan sebelum
                        mengajukan kerja sama.
                    </p>
                </div>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">

                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Informasi Kegiatan</h6>
                                <p class="text-muted mb-0">
                                    Nama, tema, dan tujuan kegiatan.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mb-4">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Proposal Kerja Sama</h6>
                                <p class="text-muted mb-0">
                                    Gambaran kegiatan dan bentuk kerja sama
                                    yang ditawarkan.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex gap-3">
                            <i class="bi bi-check-circle-fill text-success fs-4"></i>
                            <div>
                                <h6 class="fw-bold">Informasi Penanggung Jawab</h6>
                                <p class="text-muted mb-0">
                                    Nama dan kontak person yang dapat dihubungi.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-center mt-4">
                    <h5 class="fw-bold">Interested in collaborating?</h5>
                    <p class="text-muted">
                        Hubungi tim Toast.district untuk informasi lebih lanjut.
                    </p>

                    <a href="https://wa.me/62XXXXXXXXXX"
                        target="_blank"
                        class="btn btn-success rounded-pill px-4">
                        <i class="bi bi-whatsapp me-2"></i>
                        Hubungi via WhatsApp
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>

@endsection
