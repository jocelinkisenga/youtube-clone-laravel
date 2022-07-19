@extends('layouts.index')
@section('content')
    <div class="header">
        <div class="header__left">
            <i id="menu" class="icon-bars"></i>
            <img src="images/youtubelogo.svg" alt="" />
        </div>
        <div class="header__search">
            <form action="">

                <input type="text" placeholder="Search" />
                <button><i class="material-icons">search</i></button>
            </form>
        </div>
        <div class="header__icons">
            <i class="icon-search display-this"></i>
            <i class="icon-videocam"></i>
            <i class="icon-apps"></i>
            <i class="icon-notifications"></i>
            <i class="icon-account_circle display-this"></i>
        </div>
    </div>
    <div class="mainBody">
        <div class="sidebar">
            <div class="sidebar__categories">
                <div class="sidebar__category">
                    <i class="icon-home"></i>
                    <span>Accueil</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-local_play"></i>
                    <span>Explorer</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-subscript"></i>
                    <span>Abonnements</span>
                </div>
            </div>
            <hr />
            <div class="sidebar__categories">
                <div class="sidebar__category">
                    <i class="icon-library_music"></i>
                    <span>Bibliothèque</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-history"></i>
                    <span>Historique</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-play_arrow"></i>
                    <span>Vos vidéos</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-watch_later"></i>
                    <span>A regarder plus tard</span>
                </div>
                <div class="sidebar__category">
                    <i class="icon-thumbs-up"></i>
                    <span>Videos "j'aime"</span>
                </div>
            </div>
            <hr />
        </div>


        <div class="videos">
            <h1>Pour vous</h1>
            <div class="videos__container">
            @foreach($videos as $video)
                <div class="video">
                    <div class="video__thumbnail">
                    <a href="{{route('single',['id'=>$video->id])}}">
                        <video width="100%" controls class="youtube_video" src="{{asset('uploads/uploads/'.$video->video)}}"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" >
                        </video>
                    </a>
                     </div>

                    <div class="video__details">
                        <div class="author">
                            <a href=""><img src="images/famille.jpg" alt="" /></a>
                        </div>
                        <div class="title">
                            <h3>{{$video->title}}</h3>
                            <a href="">{{$video->user->name}}</a>
                            <span>{{$video->visites->count()}} vues • Il y a une {{$video->created_at->diffForHumans()}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
@endsection