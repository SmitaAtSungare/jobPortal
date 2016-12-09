<!DOCTYPE html>
<html lang="en">
<head>

{{-- <link rel='icon' href='images/event icon.png' type='image/x-icon'> --}}

<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="{{asset('images/ico/favicon.ico')}}">
<title>@yield('title')</title>

<meta name = "_token" content="{{ csrf_token() }}">

@yield('seo')

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

@stack('header')
{{-- <link href="{{asset('css/ace.min.css')}}" rel="stylesheet"> --}}
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css')}}" rel="stylesheet">

{{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('css/select2.min.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('css/responsive.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('js/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css')}}" rel="stylesheet"> --}}
{{-- <link href="{{asset('css/main.css')}}" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{ asset('js/jquery-ui/jquery-ui.css') }}">
<script type="text/javascript">
  // $(function(){
  //   $.ajaxSetup({
  //     headers : {
  //       'X-CSRF-Token' : $('meta[name="_token"]').attr('content')
  //     },
  //     type : 'POST'
  //   });
  // });
</script>
</head>
<!--/head-->
<body>
<header id="header">
  <div class="container">
    <div class="row"> </div>
  </div>
  <div class="navbar navbar-inverse" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="/">
        <h1><img src="/images/logo.png" alt="logo"></h1>
        </a> </div>
      <div class="collapse navbar-collapse text-right">
            <a href="employer"><button class="btn btn-default"><i class="fa fa-user" aria-hidden="true"></i> Employer Zone</button></a>        
        <button class="btn btn-default" id = "authBtn"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Login | Sign Up</button>
      </div>
      <div class="search">
        <form role="form">
        </form>
      </div>
    </div>
  </div>
</header>
<!--/#header-->
@include('layouts.loginpop')