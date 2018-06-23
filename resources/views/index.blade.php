@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section id="home">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h1 class="display-4">Welcome to my page</h1>
                            <a href="{{url('/download/lesson01')}}" class="btn btn-primary text-white">Download Resume</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                        </div>
                    </div>
                </div>

                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">

                        </div>
                    </div>
                </div>

            </div>
            <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon"></span>
            </a>

            <a href="#myCarousel" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>

    <section id="about">
        <div class="container py-5 text-center glow">
            <div class="row glow">
                <div class="col">
                    <h1 class="display-4 text-center">About Me</h1>
                    <p class="lead">My name is Ryan T. Belandres, I’m a Filipino and I’m proud of it. Currently I’ m studying at British
                        Columbia Institute of Technology (BCIT) as a web developer. I would describe myself as a very determined and highly motivated
                        person. I do take job seriously but I'm able to see things in perspective and believe I'm quite easy-going to work with. I am an
                        easy-going person and don’t get easily disturbed by down’s in my life. I love watching survival videos, hiking, and having great
                        intellectual conversations! I love giving trivia about science and animal facts. Feel free to have a look at my portfolio and don't
                        hesitate to contact me if you think I can be of service to you.
                    </p>
                </div>
            </div>
            <div class="row glow mt-3">
                <div class="col">
                    <h2>Educations</h2>
                    <p class="lead"><strong>British Columbia Institute Of Technology</strong> <br>
                        Computer Systems Technology (Diploma Part-time) <br>
                        July 2017 - Present</p>
                    <p class="lead"><strong>British Columbia Institute Of Technology</strong> <br>
                        Applied Web Development (Certificate) <br>
                        January 2016 - July 2017</p>
                    <p class="lead"><strong>University Of Mindanao</strong> <br>
                        Information Technology <br>
                        June 2009 - February 2012</p>
                    <p class="lead"><strong>Emilio Ramos National High School</strong> <br>
                        2004 - 2008</p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <h2>Skills</h2>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <p>html</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>CSS</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                            95%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Javascript</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            75%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>php</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <p>Jquery</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                            40%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Java</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                            65%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>SQL</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            60%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Bootstrap</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>ZEND Framework</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            50%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Laravel Framework</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            70%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Wordpress</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                            65%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Angular</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                            20%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col my-3">
                    <h2>Languages</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Tagalog</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>English</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            90%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Visaya</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Spanish</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:15%">
                            15%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col my-3">
                    <h2>Tools</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>Photoshop</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            90%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Lightroom</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Experience Design</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                            80%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Photomatix pro</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:95%">
                            95%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>PhpStorm</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>MS Word</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Eclipse</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                            75%
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p>Mac</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <p>MS Powerpoint</p>
                    <div class="progress my-3">
                        <div class="progress-bar progress-bg" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                            100%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photography">
        <div class="row">
            <div class="col">
                <h1 class="display-4 text-center my-3">Photography</h1>
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
        <div class="row">
            <div class="col" id="photos">
                <a href="img/imgL/iceberg.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/iceberg.jpg" alt="" class="column nature">
                </a>
                <a href="img/imgL/sahara.jpg" data-toggle="lightbox"  data-gallery="img-gallery">
                    <img src="img/thumbnails/sahara.jpg" alt="" class="column wildlife">
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