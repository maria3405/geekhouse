<!doctype html>
<html>
<head><meta charset = 'utf-8'>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125628399-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-125628399-1');
</script>
<title>Geekhouse</title>    
    <meta name="keywords" content="гик geek техника наука игры игра фильмы фильм сериалы сериал комиксы комикс аниме культура" />
    <meta name="description" content="Сайт для гигов. Здесь вы можете найти интересные новости о технике, науке, играх, фильмах, сериалах, комисах, аниме и культере.">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="{{asset('images/icon.ico')}}" type="image/x-icon">
    <link href="{{asset('/public/css/style.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <script src="js/script.js"></script>
</head>
<body>
	<header>
		<div id="logo">
            <a href="{{asset('index.html')}}">Geek<span class="colortext">House</span></a>
		</div>
        <div class="grid">
		
			 @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="{{asset('#')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
					
             <div id="menu">
			                 <nav tabindex="0">
                    <div tabindex="0">
                        <a href="{{asset('tech.html')}}">Техника</a>
                        <a href="{{asset('')}}">Наука</a>
                        <a href="{{asset('')}}">Игры</a>
                        <a href="{{asset('')}}">Фильмы</a>
                        <a href="{{asset('')}}">Сериалы</a>
                        <a href="{{asset('')}}">Комиксы</a>
                        <a href="{{asset('')}}">Аниме</a>
                        <a href="{{asset('')}}">Культура</a>
                    </div>
                </nav>
			            </div>
        </div>
	</header>
    <hr>
    <div class="grid grid-pad">
@yield("content")
    </div>
    <div id="preloader">
        <div id="preloader_preload"></div>    
    </div>
    <script type="text/javascript">
        var preloader = document.getElementById("preloader_preload");
        function fadeOutnojquery(el) {
            el.style.opacity = 1;
            var interpreloader = setInterval(function() {
                el.style.opacity = el.style.opacity - 0.05;
                if (el.style.opacity <=0.05)
                { 
                    clearInterval(interpreloader);
                    preloader.style.display = "none";
                }
            },16);
        }
        window.onload = function()
        {
            setTimeout(function()
                {
                    fadeOutnojquery(preloader);
                },500);
        };
    </script>
    <footer>    
        <div class="grid">
            <table>
                <tr>
                    <th>
                        <a href="{{asset('xml/info.xml')}}">Правила сообщества</a>   
                    </th>
                    <th>
                        Ищите в социальных сетях:
                    </th>
                    <th>                         
                        <a href="{{asset('https://www.instagram.com/geekhousenews/')}}"><img src="svg/instagram.svg" class="svg"/></a>
                        <a href="{{asset('http://vk.com/')}}"><img src="svg/vk.svg" class="svg"/></a> 
                        <a href="{{asset('http://facebook.com/')}}"><img src="svg/facebook.svg" class="svg"/></a>
                    </th>
                    <th>
                        <a href="{{asset('xml/sitemap.xml')}}">Карта сайта </a> 
                    </th>
                </tr>
            </table>
        </div>
    </footer>
</body>
</html>
