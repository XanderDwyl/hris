@extends('layouts.master')

@section('title', 'Page Title')

@section('header')
  <header id="site-header-sticky-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HRIS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="home" class="text-large-md">Home</a>
            </li>
            <li>
              <a href="about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
@stop

@section('content')
  <div id="container-wrapper">
    <div class="container">
      <div class="content">
        <h1>Human Resource Information System</h1>
      </div>
    </div>
  </div>
@stop
