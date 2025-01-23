@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div id="particles-js" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: -1;"></div>

<div class="container">
    <h1 class="about-title text-white animate-fade-in">Contact Me</h1>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label lead about-text text-light animate-slide-up">Name</label>
            <input type="text" class="form-control animate-slide-up" id="name" name="name" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label lead about-text text-light animate-slide-up">Email</label>
            <input type="email" class="form-control animate-slide-up" id="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label lead about-text text-light animate-slide-up">Message</label>
            <textarea class="form-control animate-slide-up" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary animate-slide-up">Send</button>
    </form>
</div>
@endsection