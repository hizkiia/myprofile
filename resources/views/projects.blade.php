@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div id="particles-js"></div>

<div class="projects-container text-center">
    <h1 class="text-white mb-4 animate-fade-in">My Projects</h1>
    <div class="row">
        <div class="mt-2 col-md-4">
            <div class="card project-card animate-slide-up">
                <center class="mt-3">
                    <img src="{{ asset('image/LogoStayAwake.png') }}" width="70px" alt="StayAwake">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">StayAwake</h4>
                    <p class="lead text-dark text-center">(Backend)</p>
                    <p style="font-size: 14px;" class="card-text text-justify">
                        Android-based app designed to monitor drivers in real-time while driving.
                        It uses Convolutional Neural Networks and Computer Vision methods to identify signs of inattention or abnormal conditions
                        in the driver's body, such as fatigue or drowsiness. Upon detecting such indications, StayAwake will activate an alarm to
                        increase the driver's alertness. Thus, this application plays an active role in preventing traffic accidents that can be
                        caused by drowsiness while driving. I contributed as a backend developer using NodeJs with Express JS framework and MongoDB database. </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="https://github.com/aldiiperdanaa/stayawake" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 col-md-4">
            <div class="card project-card animate-slide-up delay-1">
                <center class="mt-3">
                    <img src="{{ asset('image/EuforiaHome.png') }}" width="70px" alt="EuforiaHome">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">EuforiaHome</h4>
                    <p class="lead text-dark text-center">(Backend)</p>
                    <p style="font-size: 14px;" class="card-text text-justify">
                        Web-based platform designed to manage boarding house operations.
                        It has two main components: user and system. The user component includes boarding house owners and tenants.
                        Owners can manage billing, room bookings, payments, and other related tasks, while tenants can book rooms, make payments,
                        and access boarding house information. The system component consists of a database and a web application. The database stores
                        all necessary information, and the web application provides an interface for user interaction. I contributed as a backend developer using PHP with the CodeIgniter 4 framework and MySQL database. </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="https://github.com/hizkiia/ekost" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2 col-md-4">
            <div class="card project-card animate-slide-up delay-2">
                <center class="mt-3">
                    <img src="{{ asset('image/Sudimoro.png') }}" width="70px" alt="Sudimoro Website">
                </center>
                <div class="card-body">
                    <h4 class="card-title text-center">Sudimoro Website</h4>
                    <p class="lead text-dark text-center">(Fullstack)</p>
                    <p style="font-size: 14px;" class="card-text text-justify">
                        Web-based platform for showing and managing information about Dusun Sudimoro.
                        Key features include a gallery showcasing local art, food, culture, and places;
                        a news section for articles; UMKM information highlighting local businesses; and a contact form for inquiries.
                        I made this website using CSS and JavaScript with Bootstrap 5 framework as a frontend, PHP with the CodeIgniter 4 framework as a backend and MySQL database. </p>
                    <p class="card-text text-center">
                        Website link: <a href="https://sudimoro.my.id">Click here</a>
                    </p>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <a href="https://github.com/hizkiia/website-sudimoro" class="btn btn-primary btn-md mb-3">Visit Repository</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection