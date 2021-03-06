@extends('layouts.master')

@section('title')
    Trending Quotes
@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" type="text/css" />
@endsection

@section('content')
    <section class="quotes">
        <h1>Latest Quotes</h1>
        <article class="quote">
            <div class="delete"><a href="#">x</a></div>
            Quote Text
            <div>Created by <a href="#">Adam</a> on ..</div>
        </article>
        Pagination
    </section>
    
    <section class="edit-quote">
        <h1>Add a Quote</h1>
        <form>
            <div class="input-group">
                <label for="author">
                <input type="text" name="author" id="author" placeholder="Your name" />
            </div>
            <div class="input-group">
                <label for="quote">
                <textarea rows="5" name="quote" id="quote" placeholder="Quote"></textarea>
            </div>
            <button type="submit" class="btn">Submit Quote</button>
            {{ csrf_field() }} 
        </form>
    </section>
@endsection