<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Importation des icôns sur google fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="{{asset('styles/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('icomoon/style.css')}}">

    <link rel="shortcut icon" href="{{asset('images/elvin.PNG')}}" type="image/x-icon">
    <title>Mon Youtube Perso</title>
</head>

<body>
	 <div class="wrapper">
            <header>
                <div class="header__logo">
                    <a href="#">
                        <img src="{{asset('assets/images/header/hamburger.png')}}" alt="navigation button" class="header__hamburger-logo">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/header/yt-logo.png')}}" alt="YouTube logo" class="header__yt-logo">
                    </a>
                </div>
                <div class="search">
                    <form>
                        <input type="text" name="search" id="search__input" placeholder="Search">
                        <a href="#">
                            <img src="{{asset('assets/images/header/search.png')}}" alt="Search Icon" class="search__icon">
                        </a>
                    </form>
                </div>
                <div class="header__icons header__logo">
                    <a href="#">
                        <img src="{{asset('assets/images/header/grid.png')}}" alt="grid icon" class="header__icons--grid">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/header/upload.png')}}" alt="grid icon" class="header__icons--upload">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/header/bell.png')}}" alt="grid icon" class="header__icons--bell">
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/header/profile-placeholder.png')}}" alt="grid icon" class="header__icons--profile">
                    </a>
                </div>
            </header>
            <div class="main-wrapper">
                <div class="left"></div>
                <main>
                    <div class="main__video">
                        <div class="main__video-container">
                                <iframe width="560" height="315" src="{{asset('uploads/uploads/'.$video->video)}}" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="main__description">
                            <p>{{$video->title}}</p>
                            <p>{{$video->visites->count()}} views</p>
                            <a href="#">
                                
                            </a>
                        </div>
                        <div class="main__sub-description">
                            <a href="#">
                                <img class="main__name" src="{{asset('assets/images/describe-name.jpg')}}" alt="name">
                            </a>
                            <a href="#">
                                <img class="main__subscriptions" src="{{asset('assets/images/subscribed.jpg')}}" alt="subscriptions">
                            </a>
                            <p>{{$video->description}}</p>
                        </div>
                        <div class="main__more">
                            <a href="#" >
                                <p>SHOW MORE</p>
                            </a>
                        </div>
                    </div>
                    <aside class="aside">
                        <div class="aside__top-container">
                            <p>Up next</p>
                            <a href="#">AUTOPLAY</a>
                        </div>
                       <a href="">
                            <img  class="aside__video" src="{{asset('assets/images/aside-pic.jpg')}}" alt="Next video">
                        </a>
                        
                        <div class="aside__more">
                            <a href="#">SHOW MORE</a>
                        </div>
                    </aside>

                    <section>
                        <div>
                            <div class="section__comments">
                                <p>{{$video->comments->count()}} Comments</p>
                            </div>
                            <div class="section__sort-container">
                                <a href="#">
                                    <i class="icon-bars"></i>
                                    <p>SORT BY</p>
                                </a>
                            </div>
                            <div class="section__profile">
                                <img src="{{asset('assets/images/profile_icon.png')}}" alt="profile_icon"> 
                            </div>
                            <div class="input__container">
                           
                                <form method="POST" action="{{route('comment')}}">
                                @csrf
                                    <Textarea type="text"  name="comment" id="comment" placeholder="add a comment"></Textarea><br>
                                    @if(Auth::user())
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    @endif
                                    <input type="hidden" name="video_id" value="{{$video->id}}">
                                     <span><button type="submit">commenter</button></span>
                                </form>
                            </div>
                        </div>
                        <div>
                         @foreach($video->comments as $comment)
                            <div class="comments">
                           
                                <img src="{{asset('assets/images/profile_icon.png')}}" alt="profile icon" width="50">
                                <p class="comments__name">{{$comment->user->name}} <a href="#">10 months ago</a> </p>
                                <p class="comments__comment">{{$comment->comment}}.</p>
                           
                            </div>
                        @endforeach
                            
                        </div>
                    </section>

                </main>
            </div>
        </div>
	</body>

</html>