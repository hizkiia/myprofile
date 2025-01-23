@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div id="particles-js"></div>

<div class="projects-container text-center">
    <h1 class="text-white mb-4 animate-fade-in">My Projects</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card project-card animate-slide-up">
                <center class="mt-3">
                    <img src="{{ asset('image/LogoStayAwake.png') }}" width="70px" alt="StayAwake">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">StayAwake</h4>
                    <p class="lead text-dark text-center">(Backend)</p>
                    <p class="card-text text-justify">
                        Android-based app designed to monitor drivers in real-time while driving. It uses Convolutional Neural Networks and Computer Vision methods to identify signs of inattention or abnormal conditions in the driver's body, such as fatigue or drowsiness.
                    </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="btn btn-primary btn-md mb-3">View More</a>
                        <a href="https://github.com/aldiiperdanaa/stayawake" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card animate-slide-up delay-1">
                <center class="mt-3">
                    <img src="{{ asset('image/EuforiaHome.png') }}" width="70px" alt="EuforiaHome">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">EuforiaHome</h4>
                    <p class="lead text-dark text-center">(Backend)</p>
                    <p class="card-text text-justify">
                        Web-based platform designed to manage boarding house operations. Owners can manage billing, room bookings, payments, and other related tasks, while tenants can book rooms and access information.
                    </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="btn btn-primary btn-md mb-3">View More</a>
                        <a href="https://github.com/hizkiia/ekost" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card project-card animate-slide-up delay-2">
                <center class="mt-3">
                    <img src="{{ asset('image/Sudimoro.png') }}" width="70px" alt="Sudimoro Website">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">Sudimoro Website</h4>
                    <p class="lead text-dark text-center">(Fullstack)</p>
                    <p class="card-text text-justify">
                        Web-based platform for showing and managing information about Dusun Sudimoro. Features include a gallery, news section, UMKM info, and a contact form.
                    </p>
                    <p class="card-text text-center">
                        Website link: <a href="https://sudimoro.my.id">Click here</a>
                    </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="#" class="btn btn-primary btn-md mb-3">View More</a>
                        <a href="https://github.com/hizkiia/website-sudimoro" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection