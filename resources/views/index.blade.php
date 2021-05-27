<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="asset('js/app.js')" defer></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="nav">
            <ul>
            	<li><a href="#"><img src="img/rrlogo.png" width="50%" height="auto"></a></li>
                <li><a href="#">{{__('Home')}}</a></li>
                <li><a href="#">{{__('collections')}}</a></li>
                <li><a href="#">{{__('watch history')}}</a></li>
                <li><a href="#">"{{__('AMBASSADORS')}}"</a></li>
                <li><a href="#">{{__('support')}}</a></li>
                <li><a href="#">{{__('ABOUT US')}}</a></li>
            	<li><a href="#">+7 777 555 11 11</a></li>
            	<li><a href="#">
            		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: #B97D4DFF"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            	</a></li>
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login',app()->getLocale()) }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register',app()->getLocale()) }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout',app()->getLocale()) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        @if(App()->getLocale() == 'en')
                        <li id="ru"><a href="{{route(Route::currentRouteName(),'ru')}}">RU</a></li>
                        @endif

                        @if(App()->getLocale() == 'ru')
                        <li id="en" ><a href="{{route(Route::currentRouteName(),'en')}}">EN</a></li>
                        @endif
            </ul>
        </nav>
    </header>

    <section>
        <div class="poster mb-5">
            <div class="poster1">
            	<p class="Text">{{__('Watch')}} <br>{{__('center')}}</p>
            	<a href="" class="btn btn-outline-light"><p class="textBtn">{{__('I WANT TO SELL AN ITEM ')}}</p></a>
            </div>
            <div class="poster2">
            	<img src="img/zch.png">
            </div>
            <div class="poster3">
            	<a href=""><h4 class="textCh1">00</h4><p class="textCh">{{__('Elite watches')}}</p></a><br><br>
            	<a href=""><h4 class="textCh1">01</h4><p class="textCh">{{__('Jewelry')}}</p></a><br><br>
            	<a href=""><h4 class="textCh1">02</h4><p class="textCh">{{__('Diamonds')}}</p></a><br><br>
            	<a href=""><h4 class="textCh1">03</h4><p class="textCh">{{__('Painting')}}</p></a><br><br>
            </div>
        </div>
        <div class="inner-section">
            <div class="inner-section-title mt-5">
                <h2 class="title">{{__('COLLECTION')}}</h2>
            </div>
            <div class="container mt-5" style="height: 500px;">
                <div class="row">
                    <div class="col-4">
                        <div class="card" style="width:300px">
                            <img class="card-image-top" src="img/ddd.gif" width="100%" height="180px">
                            <div class="card-body">
                                <h4 class="card-title">{{__('SMART WATCH')}}</h4>
                                <p class="card-text">{{__('Smart watches for businessmen')}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-dark">{{__('BUY')}}</a>
                                    <small class="text-muted">122.000 {{__('views')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-image-top" src="img/as.gif" width="100%" height="180px">
                            <div class="card-body">
                                <h4 class="card-title">{{__("WOMEN'S COLLECTION")}}</h4>
                                <p class="card-text">{{__('Stylish watches for charming Ladies')}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-dark">{{__('BUY')}}</a>
                                    <small class="text-muted">132.000 {{__('views')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-image-top" src="img/pexels-pixabay-221210.jpg" width="100%" height="180px">
                            <div class="card-body">
                                <h4 class="card-title">{{__('AMBASSADORS')}}</h4>
                                <p class="card-text">{{__('ROLEX GGG collection')}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="" class="btn btn-outline-dark">{{__('VIEW')}}</a>
                                    <small class="text-muted">132.000 {{__('views')}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            	
            </div>
        </div>
        <div class="section2">
        	<div class="sec3">
        		<iframe width="560" height="315" src="https://www.youtube.com/embed/jCRnQNh9o9s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        	</div>
        	<div class="sec4">
        		<p class="title2">{{__('SUBSCRIBE OUR CHANNEL')}}</p>
        		<a href="" class="btn btn-outline-light"><p class="textBtn">{{__('SUBSCRIBE')}}</p></a>
        	</div>
        </div>
    	
        <div class="section3">
        	<div class="footerInner1">
        		<p class="Inf"><b>{{__('CONTACTS')}}</b></p>
        		<div class="fWrap">
        		<div class="fI1">
        			<p class="adr">{{__('ADDRESS')}}</p>
        			<p class="adr2">{{__('Almaty')}}</p>
        			<p class="adr2">{{__('89 Kabanbai batyr st.')}}</p>
        			<br>
        			<p class="adr2">{{__('Astana')}}</p>
        			<p class="adr2">{{__('Kabanbai batyr avenue 46')}}</p>
        			<br><br>
        			<p class="adr">{{__('SCHEDULE')}}</p>
        			<p class="adr2">{{__('Mon-Fri')}} 10:00-20:00</p>
        			<p class="adr2">{{__('Sat')}} 12:00-18:00</p>
        			<p class="adr2">{{__('SUN WEEKEND')}} 	</p>
        		</div>
        		<div class="fI2">
        			<p class="adr">{{__('PHONE NUMBER')}}</p>
        			<p class="adr2">+7 777 555 11 11</p>
        			<p class="adr">WhatsApp</p><br>
        			<br>
        			<br>
        			<br>
        			<br>
        			<br>
        			<p class="adr">{{__('EMAIl ADDRESS')}}</p>
        			<p class="adr2">info@royaltime.kz</p>
        		</div>
        	</div>
        	</div>
        	<div class="footerInner2">
        		<form class="form" method="POST" action="{{route('questions',app()->getLocale())}}">
                    @csrf
        			<p class="adr">{{__('DO YOU HAVE ANY QUESTIONS?')}}</p>
        			<input id="question" name="question" autocomplete="off" type="textarea" class="vcx" placeholder="Enter your question" maxlength="150" required style="color: white">
        			<hr class="vcxz" color="#999789FF">
                    <button class="btn btn-primary">
                        {{__('Send')}}
                    </button>
        		</form>
        	</div>
        </div>
</body>
</html>