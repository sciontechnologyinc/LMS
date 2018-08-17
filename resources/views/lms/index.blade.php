@extends('lms.master.template')

@section('header')
    @include('lms.partial.header')
@endsection

@section('footer')
    @include('lms.partial.footer')
@endsection

@section('home')
    @include('lms.pages.home')
@endsection

@section('booksearch')
    @include('lms.pages.booksearch')
@endsection

@section('about')
    @include('lms.pages.about')
@endsection

@section('contact')
    @include('lms.pages.contact')
@endsection

@section('booklist')
    @include('lms.pages.booklist')
@endsection