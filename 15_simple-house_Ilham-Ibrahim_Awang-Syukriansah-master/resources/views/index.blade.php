@extends('layout.header')
@section('konten')
@section('title')
    menu
@endsection
<main>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
        <p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
    </header>
    
    <div class="tm-paging-links">
        <nav>
            <ul>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link active">Pizza</a></li>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
                <li class="tm-paging-item"><a href="#" class="tm-paging-link">Noodle</a></li>
            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        <!-- gallery page 1 -->
        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            @foreach($menu1 as $pisa)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{$pisa->image}}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">{{$pisa->nama}}</h4>
                        <p class="tm-gallery-description">{{$pisa->deskripsi}}</p>
                        <p class="tm-gallery-price">{{$pisa->harga}}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach
        </div> <!-- gallery page 1 -->
        
        <!-- gallery page 2 -->
        <div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
            @foreach($menu2 as $salad)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{$salad->image}}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">{{$salad->nama}}</h4>
                        <p class="tm-gallery-description">{{$salad->deskripsi}}</p>
                        <p class="tm-gallery-price">{{$salad->harga}}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach
        </div> <!-- gallery page 2 -->
        
        <!-- gallery page 3 -->
        <div id="tm-gallery-page-noodle" class="tm-gallery-page hidden">
            @foreach($menu3 as $mie)
            <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="{{$mie->image}}" alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title">{{$mie->nama}}</h4>
                        <p class="tm-gallery-description">{{$mie->deskripsi}}</p>
                        <p class="tm-gallery-price">{{$mie->harga}}</p>
                    </figcaption>
                </figure>
            </article>
            @endforeach
        </div> <!-- gallery page 3 -->
    </div>
    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="img/img-01.jpg" alt="Image" class="img-fluid" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box"> 
                    <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
                    <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
                    <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection