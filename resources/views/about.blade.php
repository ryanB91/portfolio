@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section id="about" class="mt-5 pt-5 pb-3">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-5">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/mypics/profile.jpg" alt="" class="img-fluid rounded-circle w-60 mb-3">
                            <h3>Ryan Belandres</h3>
                            <p class="lead">Phone: 604-849-1023</p>
                            <p class="lead">Email: ryanbelandres123@gmail.com</p>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="https://www.instagram.com/ryanbelandres/"><i class="fab fa-instagram" style="font-size: 35px"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="https://www.facebook.com/RyanBelandresPhotography/"><i class="fab fa-facebook" style="font-size: 35px"></i></a>
                                </div>
                                <div class="p-4">
                                    <a href="https://github.com/ryanB91"><i class="fab fa-github" style="font-size: 35px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="lead">My name is Ryan T. Belandres, I’m a Filipino and I’m proud of it. Currently I’ m studying at British
                        Columbia Institute of Technology (BCIT) as a web developer. I would describe myself as a very determined and highly motivated
                        person. I do take job seriously but I'm able to see things in perspective and believe I'm quite easy-going to work with. I am an
                        easy-going person and don’t get easily disturbed by down’s in my life. I love watching survival videos, hiking, and having great
                        intellectual conversations! I love giving trivia about science and animal facts. Feel free to have a look at my portfolio and don't
                        hesitate to contact me if you think I can be of service to you.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="edu">
        <div class="dark-overlay">
            <div class="row text-center">
                <div class="col p-3">
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
        </div>
    </section>
    <section>
        <div class="col">
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <img src="img/mypics/profile.jpg" alt="" class="card-img-top mb-3">
                        <div class="card-body">
                            <h3>Project 1</h3>
                            <p>
                                <small class="sampleD">html</small>
                                <small class="sampleD">css</small>
                                <small class="sampleD">javascript</small>
                                <small class="sampleD">Bootstrap</small>
                                <small class="sampleD">Laravel</small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop