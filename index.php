<!DOCTYPE html>
<html>
  <head>
    <title>Homepage</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link type="text/css" href="css/reset.css" rel="stylesheet" media="all" />
    <link type="text/css" href="css/swiper.min.css" rel="stylesheet" media="all" />
    <link type="text/css" href="css/fonts.css" rel="stylesheet" media="all" />
    <link type="text/css" href="css/styles.css?_=1" rel="stylesheet" media="all" />
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/main.js" defer></script>
  </head>
  <body>
    <header>
      <div class="wrapper">
        <a class="logo" href="index.html">
          <img src="img/logo.png" alt="Rittershaus" />
        </a>
        <div class="our-lawyers">
          <a href="#">UNSERE ANWÄLTE</a>
        </div>
        <div class="burger-menu">
          <input type="checkbox" id="menu-opener" class="left" value="" />
          <label for="menu-opener" class="left">
            <span>&nbsp;</span>
          </label>
        </div>
        <?php include_once 'partials/menu.php'; ?>
      </div>
    </header>

    <section class="home-slider">
      <div class="swiper-container">
        <ul class="swiper-wrapper">
          <li class="swiper-slide" style="background-image: url('img/slider/home-slide-04.jpg')">
            <span class="slogan right bottom">„UNSER ANSPRUCH: WIR SIND ERSTKLASSIG<br/>&nbsp;IN RECHT. DOCH DAS GENÜGT UNS NICHТ...“</span>
          </li>
          <li class="swiper-slide" style="background-image: url('img/slider/home-slide-02.jpg')">
            <span class="slogan right bottom">"UNSER ANSPRUCH: WIR SIND ERSTKLASSIG<br/>&nbsp;IN RECHT. DOCH DAS GENÜGT UNS NICHТ..."</span>
          </li>
          <li class="swiper-slide" style="background-image: url('img/slider/home-slide-03.jpg')">
            <span class="slogan bottom left">"UNSER ANSPRUCH: WIR SIND ERSTKLASSIG<br/>&nbsp;IN RECHT. DOCH DAS GENÜGT UNS NICHТ..."</span>
          </li>
          <li class="swiper-slide" style="background-image: url('img/slider/home-slide-01.jpg')">
            <span class="slogan left bottom">"UNSER ANSPRUCH: WIR SIND ERSTKLASSIG<br/>&nbsp;IN RECHT. DOCH DAS GENÜGT UNS NICHТ..."</span>
          </li>
          <li class="swiper-slide" style="background-image: url('img/slider/home-slide-05.jpg')">
            <span class="slogan left bottom">"UNSER ANSPRUCH: WIR SIND ERSTKLASSIG<br/>&nbsp;IN RECHT. DOCH DAS GENÜGT UNS NICHТ..."</span>
          </li>
        </ul>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section>
      <div class="clear categories">
        <a href="#" class="category left">
          <img src="img/category-bg-01.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">Über rittershaus</h1>
            <p>Hier fehlt der Text</p>
            <p>Hier fehlt der Text</p>
          </div>
        </a>
        <a href="#" class="category left">
          <img src="img/category-bg-02.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">GESELLSCHAFTSRECHT/M&A</h1>
            <p style="letter-spacing:-0.3px;white-space:nowrap;">Rückgrat der Wirtschaft, Herzstück</p>
            <p>unserer Kompetenz.</p>
          </div>
        </a>
        <a href="personlichkeiten.html" class="category left">
          <img src="img/category-bg-03.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">PERSÖNLICHKEITEN</h1>
            <p>Anders beraten braucht</p>
            <p>Persönlichkeit.</p>
          </div>
        </a>
        <a href="#" class="category left">
          <img src="img/category-bg-04.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">KOMPETENZEN</h1>
            <p>Hier fehlt der Text</p>
            <p>Hier fehlt der Text</p>
          </div>
        </a>
        <a href="#" class="category left">
          <img src="img/category-bg-05.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">AUSZEICHNUNGEN</h1>
            <p>Rittershaus ist eine vielfach</p>
            <p>ausgezeichnete Kanzlei.</p>
          </div>
        </a>
        <a href="internationales.html" class="category left">
          <img src="img/category-bg-06.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">INTERNATIONALES</h1>
            <p>Hier fehlt der Text</p>
            <p>Hier fehlt der Text</p>
          </div>
        </a>
        <a href="#" class="category left">
          <img src="img/category-bg-07.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">KARRIERE</h1>
            <p>Hier fehlt der Text</p>
            <p>Hier fehlt der Text</p>
          </div>
        </a>
        <a href="#" class="category left">
          <img src="img/category-bg-08.png" alt=""/>
          <div class="description text-center">
            <h1 class="title title-medium">BLOG</h1>
            <p>Hier fehlt der Text</p>
            <p>Hier fehlt der Text</p>
          </div>
        </a>
      </div>
    </section>

    <footer class="text-center">
      <h1 class="contacts text-center title title-large">KONTAKT</h1>
      <div class="columns clear">
        <div class="column left">
          <h2 class="title title-medium">Büro Mannheim</h2>
    			<p>Harrlachweg 4</p>
    			<p>68163 Mannheim</p>
    			<p>Telefon: +49 (0)621 42 56-0</p>
    			<p>Fax: +49 (0)621 42 56-250</p>
    			<p>E-Mail: ma@rittershaus.net.</p>
          <p class="separator">&nbsp;</p>
          <p class="separator">&nbsp;</p>
    			<p class="text-bold with-arrow">Anfahrt Mannheim</p>
        </div>
        <div class="column left">
          <h2 class="title title-medium">Büro Frankfurt</h2>
    			<p>Mainzer Landstraße 61</p>
    			<p>60329 Frankfurt am Main</p>
    			<p>Telefon: +49 (0)69 27 40 40-0</p>
    			<p>Fax: +49 (0)69 27 40 40-250</p>
    			<p>E-Mail: ffm@rittershaus.net.</p>
          <p class="separator">&nbsp;</p>
          <p class="separator">&nbsp;</p>
    			<p class="text-bold with-arrow">Anfahrt Frankfurt a.M.</p>
        </div>
        <div class="column left">
          <h2 class="title title-medium">Büro München</h2>
    			<p>Maximiliansplatz 10 </p>
    			<p>Im Luitpoldblock</p>
    			<p>80333 München</p>
    			<p>Telefon: +49 (0)89 12 14 05-0</p>
    			<p>Fax: +49 (0)89 12 14 05-250</p>
    			<p>E-Mail: muc@rittershaus.net</p>
          <p class="separator">&nbsp;</p>
    			<p class="text-bold with-arrow">Anfahrt München</p>
        </div>
      </div>
      <div class="copyright text-center">
        <h3 class="title title-small">Rechtliche Hinweise &nbsp;&nbsp;&nbsp;&nbsp; Datenschutz</h3>
  			<p>© RITTERSHAUS Rechtsanwälte Partnerschaftsgesellschaft mbB</p>
      </div>
    </footer>
  </body>
</html>
