@extends('layouts.app')

@section('title', 'Contact')

@section('content')

    <!-- CONTACT SECTION -->
    <header id="page-header">
        <div class="container">
            <div class="row">
                <div class="col text-center pt-5">
                    <h1 class="pt-5 mt-5">Contact Me</h1>
                </div>
            </div>
        </div>
    </header>
    <section id="contact" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pb-3">
                    <div class="card p-3">
                        <div class="card-body">
                            <h4>Get In Touch</h4>
                            <a href="https://www.instagram.com/ryanbelandres/"><i class="fab fa-instagram" style="font-size: 35px"></i></a>
                            <a href="https://www.facebook.com/RyanBelandresPhotography/"><i class="fab fa-facebook" style="font-size: 35px"></i></a>
                            <a href="https://github.com/ryanB91"><i class="fab fa-github" style="font-size: 35px"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card p-3">
                        <div class="card-body">
                            @if(isset($message))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> Your message has been sent.
                                </div>
                            @else
                                <h3 class="text-center">Please fill out this form to contact us</h3>
                                <hr>
                                {!! Form::open(['route' => 'contact.store']) !!}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                                        </div>
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <p>Name field is required.</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                                        </div>
                                        @if($errors->has('email'))
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <p>Email field is required.</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {!! Form::number('phoneNumber', null, ['class' => 'form-control', 'placeholder' => 'Phone Number']) !!}
                                        </div>
                                        @if($errors->has('phoneNumber'))
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <p>Phone number field is required.</p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {!! Form::textarea('msg', null, ['class' => 'form-control', 'placeholder' => 'Message']) !!}
                                        </div>
                                        @if($errors->has('msg'))
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <p>Message field is required.</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-12">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-outline-success btn-block']) !!}
                                    </div>
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop