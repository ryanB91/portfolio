@extends('layouts.app')

@section('title', 'Photography')

@section('content')
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-5">
                    <h1 class="pt-5 mt-5">Photography</h1>
                </div>
            </div>
            <div class="row mb-3">
                <div id="myBtnContainer" class="col text-center">
                    <button class="btn btn-light active-btn" onclick="filterSelection('all')"> Show all</button>
                    <button class="btn btn-light" onclick="filterSelection('nature')"> Nature</button>
                    <button class="btn btn-light" onclick="filterSelection('wildlife')"> Wildlife</button>
                    <button class="btn btn-light" onclick="filterSelection('photo-effects')"> Photo Effects</button>
                    <button class="btn btn-light" onclick="filterSelection('people')"> People</button>
                </div>
            </div>
        </div>
    </header>
    <section id="photography">
        <div class="row">
            <div class="col" id="photos">
                <a href="img/imgL/iceberg.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/iceberg.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/sahara.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/sahara.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/miracle.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/miracle.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/tinuyanfalls.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/tinuyanfalls.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/tube.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/tube.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/frogy.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/frogy.jpg" alt="" class="column wildlife">
                </a>
                <a href="img/imgL/hiking.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/hiking.jpg" alt="" class="column people">
                </a>
                <a href="img/imgL/hiking2.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/hiking2.jpg" alt="" class="column people">
                </a>
                <a href="img/imgL/crocs.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/crocs.jpg" alt="" class="column wildlife">
                </a>
                <a href="img/imgL/3d.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/3d.jpg" alt="" class="column photo-effects">
                </a>
                <a href="img/imgL/mountain.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/mountain.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/winter.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/winter.jpg" alt="" class="column people">
                </a>
                <a href="img/imgL/outofbound.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/outofbound.jpg" alt="" class="column photo-effects">
                </a>
                <a href="img/imgL/portonfire.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/portonfire.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/portonfire2.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/portonfire2.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/backcountry.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/backcountry.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/citylights.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/citylights.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/solo.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/solo.jpg" alt="" class="column people">
                </a>
                <a href="img/imgL/fireworks.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/fireworks.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/island.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/island.jpg" alt="" class="column nature">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center py-3">
                <p>Check my instagram for more photos...</p>
                <a href="https://www.instagram.com/ryanbelandres/"><i class="fab fa-instagram" style="font-size: 35px"></i></a>
            </div>
        </div>
    </section>

@stop