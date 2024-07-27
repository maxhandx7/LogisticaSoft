@extends('layouts.web')
@section('title', 'LogisticaSoft')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card text-center">
            <div class="card-body">
                <img src="{{ asset('images/lsoft.png') }}" class="img-fluid" alt="profile image" />
                <h4>Carlos A Ramirez C</h4>
                <p class="text-muted">PROGRAMACIÓN DELPHI</p>
                <p class="mt-4 card-text">
                    Gerente Técnico en LOGISTICASOFT, especializado en soluciones WMS de SERVINET.
                    Con experiencia en Delphi y AS400,
                    Carlos optimiza sistemas complejos para mejorar la eficiencia operativa y
                    la gestión logística.
                </p>
                <a href="{{ route('proyects') }}" class="btn btn-info btn-sm mt-3 mb-4">Proyectos</a>
                <div class="border-top pt-3">
                    <div class="row">
                        <div class="col-4">
                            <i class="fab fa-linkedin"></i>
                            <h6>
                                <a href="https://www.linkedin.com/in/carlos-a-ramirez-c-14181736/" target="_blank" class="text-primary font-weight-light link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" rel="noopener noreferrer">Carlos Ramirez</a>
                            </h6>
                            <p>Linkedin</p>
                        </div>
                        <div class="col-4">
                            <i class="fab fa-facebook"></i>
                            <h6>
                                <a href="https://www.facebook.com/profile.php?id=100002913333885" target="_blank" class="text-primary font-weight-light link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" rel="noopener noreferrer">LOGISTICASOFT</a>
                            </h6>
                            <p>Facebook</p>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-link"></i>
                            <h6>
                                <a href="#" target="_blank" class="text-primary font-weight-light link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" rel="noopener noreferrer">LOGISTICASOFT</a>
                            </h6>
                            <p>Webpage</p>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm mt-4">
                    <div class="container justify-content-center">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


@endsection
