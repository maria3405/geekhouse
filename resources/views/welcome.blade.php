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
    <link rel="shortcut icon" href="images/icon.ico" type="image/x-icon">
    <link href="{{asset('/public/css/style.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <script src="js/script.js"></script>
</head>
<body>
	<header>
		<div id="logo">
            <a href="index.html">Geek<span class="colortext">House</span></a>
		</div>
        <div class="grid">
             <div id="menu">
                 <nav tabindex="0">
                    <div tabindex="0">
                        <a href="tech.html">Техника</a>
                        <a href="">Наука</a>
                        <a href="">Игры</a>
                        <a href="">Фильмы</a>
                        <a href="">Сериалы</a>
                        <a href="">Комиксы</a>
                        <a href="">Аниме</a>
                        <a href="">Культура</a>
                    </div>
                </nav>
            </div>
        </div>
	</header>
    <hr>
    <div class="grid grid-pad">
        <div class="col-1-2">
            <div class="news">
                <a href ="recenziya-na-film-liga-spravedlivosti.html">
                    <img src="images/1.jpg" alt="Лига Справедливости" />
                    <div class="text">            
                        <h3>Рецензия на фильм «Лига Справедливости»</h3>
                        <span>Мнение о самой долгожданной премьере этого года</span>               
                    </div> 
                </a>  
            </div>
        </div>
        <div class="col-1-2">
            <div class="aside">
                <a href="destiny-2-beta-pervye-vpechatleniya.html">
                    <img src="images/destiny-2.jpg" alt="Destiny" />
                    <h2>«Destiny 2. Beta»: Первые впечатления</h2> 
                </a>
                <span>В преддверии открытого бета тестирования Destiny 2 на консолях нынешнего поколения делимся первыми впечатлениями от увиденного</span> 
                <hr>
            </div>        
            <div class="aside">
                <a href="retsenziya-natajnu-koko-pixar.html">
                    <img src="images/Coco.jpg" alt="Тайна Коко" />
                    <h2>Рецензия на мультфильм «Тайна Коко»</h2>
                </a>
                <span>Самое дорогое, что есть в жизни каждого человека — семья, но часто дорожить ей мы начинаем слишком поздно. Мнение о фильме «Тайна Коко» от студии Pixar</span> 
                <hr>
            </div>
            <div class="aside">
                <a href="tizer-i-oblozhki-komiksa-phoenixressurection.html">
                    <img src="images/Phoenix-Resurrection-featured.jpg" alt="Джин Грей" />
                    <h2>Реклама!<br>Комикс «Phoenix: Resurrection»</h2>
                </a>
                <span>Можно купить на официальном сайте.<br> Подробнее о комексе читайте в статье о возвращении Джин Грей</span>
                <hr>
            </div>
        </div>
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
                        <a href="xml/info.xml">Правила сообщества</a>   
                    </th>
                    <th>
                        Ищите в социальных сетях:
                    </th>
                    <th>                         
                        <a href="https://www.instagram.com/geekhousenews/"><img src="svg/instagram.svg" class="svg"/></a>
                        <a href="http://vk.com/"><img src="svg/vk.svg" class="svg"/></a> 
                        <a href="http://facebook.com/"><img src="svg/facebook.svg" class="svg"/></a>
                    </th>
                    <th>
                        <a href="xml/sitemap.xml">Карта сайта </a> 
                    </th>
                </tr>
            </table>
        </div>
    </footer>
</body>
</html>