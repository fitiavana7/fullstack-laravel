@extends('layouts.app')

@section('content')
    <div class='header fixed-top'>
        <img src="{{ asset('./style-pro/pics/logo.jpeg') }}" alt="mon logo">
        <div class="navigation">
            <a class='active-nav' href="{{ route('acceuil') }}"><i class="fa fa-home"></i><h4>acceuil</h4></a>
            <a href="{{ route('voir') }}"><i class="fa fa-list-alt"></i><h4>liste</h4></a>
            <a href="{{ route('ajouter') }}"><i class="fa fa-send"></i><h4>s'inscrire</h4></a>
            <a href="" class="perso-btn" id="userBtn"><i class="fa fa-user"></i> <x-userButton user='test@gmail.com'/></a>
        </div>
    </div>
    <div class='landing'>
        <div class="landing-content">
            <h1><b>E</b>cole de <b>M</b>anagement et d'<b>I</b>nnovation <b>T</b>echnologique</h1>
            <p>Situe a Fianarantsoa , l'EMIT est parmi les meilleurs ecoles en informatique a Madagascar .
            L'ecole sort des eleves competents et talentueux , leaders et disciplines . Les enseignants sont jeunes , experimentes , des pro en informatique , des docteurs et des professeurs . 
            EMIT , ensemble pour une innovation ! </p>
            <div class="button-container">
                <a href="" >
                    <button class="mon-boutton btn btn-info">S'INSCRIRE</button>
                </a>
            </div>
        </div>
        <div class="link">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-google"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <script>
        let userBtn = document.getElementById('userBtn') ;
        userBtn.onmouseenter = function(){
            userBtn.innerHTML = "<i class='fa fa-arrow-left'></i><h6>deconnexion</h6>" ;
        };
        userBtn.onmouseleave = function(){
            userBtn.innerHTML = "<i class='fa fa-user'></i> <x-userButton user='test@gmail.com'/>" ;
        };
    </script>
@endsection