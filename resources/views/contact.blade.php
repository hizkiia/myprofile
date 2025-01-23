@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<h1>Contact Me</h1>
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection