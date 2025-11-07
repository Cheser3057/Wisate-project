<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Travel</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            line-height: 20px;
            font-size: 15px;
        }

        html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        body {
            margin: 0px;
            padding: 0px;
        }
        .layar-dalam {
            width: 1000px;
            margin: auto;
        }
        .layar-penuh {
            width: 100%
        }
        nav {
            z-index: 100;
            color: #fff;
            text-align: center;
            position: fixed;
            border-bottom: 1px solid #b1b1b1;
            line-height: 60px;
            width: 100%;
            transition: background-color 0.5s ease;
        }
        nav.putih {
            background-color: #fff;
        }

        nav .logo{
            float: left;
            position: relative;
            line-height: 55px;
            text-align: center;
        }
        nav .logo img {
            vertical-align: middle;
            width: 120px;
        }
        nav .menu{
            float: right;
            height: 60px;
            max-width: 600px;
        }

        nav .menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;display: flex;

        }

        nav .menu ul li {
            list-style-type: none;
            float: left;
            line-height: 60px;
        }

        nav ul li a {
            color: #fff;
            text-align: center;
            padding: 0px 16px 0px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* PERBAIKAN PADA HEADER DAN VIDEO */
        header {
            position: relative;
            height: 100vh;
            width: 100%;
            overflow: hidden;
            z-index: 2;
        }

        header video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        header .intro {
            z-index: 100;
            color: #fff;
            text-align: center;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        header .intro h3{
            font-size: 50px;
            margin: 0;
            padding: 0;
        }

        .tombol {
            background-color: #6bc87e;
            height: 40px;
            line-height: 42px;
            color: #fff;
            text-decoration: none;
            display: inline-block;
            padding: 0px 20px 0px 20px;
            font-size: 15px;
            border-radius: 4px;
        }

        header .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: #000;
            opacity: 50%;
            z-index: 0;
        }

        .tombol-menu {
            position: relative;
            top: 1.7rem;
            right: 1rem;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 20px;
        }

        .tombol-menu .garis {
            height: 3px;
            background-color: #fff;
        }

        section {
            padding: 50px 0px 50px 0px;
        }
        section h3 {
            font-size: 30px;
        }
        section h3::after {
            content: "";
            border-bottom: 5px solid #c86b85;
            width: 52px;
            display: block;
            margin: 20px auto;
        }

        #aboutus,#team,#blog {
            text-align: center;
        }

        section p.ringkasan {
            font-style: italic;
            font-size: 18px;
            color: #ababab;
        }

        section .konten-isi p {
            font-style: normal;
        }

        nav.putih {
            background-color: #fff;
        }

        nav.putih .tombol-menu .garis {
            background-color: #333;
        }

        nav.putih ul li a {
            color: #333;
        }

        nav .logo img.hitam {
            display: none;
        }
        section.abuabu {
            background-color: #f5f6f6;
        }

        .support, .tim, .blog {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .support h6, .tim h6 {
            margin: 0px;
            margin-top: 20px;
            padding: 0px;
            font-size: 18px;
            font-weight: bold;
        }

        .support img {
            width: 50px;
        }

        .support div, .tim div {
            text-align: center;
            width: 26%;
        }
        section#gallery {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            overflow: hidden;
            padding: 10px 0px 10px 0px;
        }
        section#gallery div {
            padding: 10px;
        }
        section#gallery div img {
            height: 100px;
            border-radius: 5px;
        }
        section#gallery div img:hover {
            transition: all 0.2s ease-in-out;
            transform: scale(1.1);
        }
        section.quote {
            background:url('gambar/background-bromo.jpg') no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            text-align: center;
            color: #fff;
            font-size: 20px;
            font-style: italic;
            padding: 100px;
        }
        section.quote .layar-dalam {
            display: inline;
            background: url(gambar/quote-icon.png) no-repeat;
            padding: 40px;
        }
        .tim img {
            width: 100%;
            box-shadow: 0px -10px 30px #ccc;
            border-radius: 5px;
        }
        .blog .area {
            width: 47%;
            box-shadow: 0px -10px 30px #ccc;
            border-radius: 5px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .blog div.area div {
            width: 50%;
        }

        .blog .area .gambar {
            border-radius: 5px 0px opx 5px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        .blog .area .text article {
            padding: 40px;
        }
        .blog .area .text article h4 {
            margin: 0px;
        }
        .blog .area .text article a {
            color: #333;
            text-decoration: none;
            transition: color 0.5s ease;
        }
        .blog .area .text article a:hover {
            color: #ccc;
        }
        footer {
            padding: 50px 0px 50px 0px;
            background-color: #343a40;
            color: #fff;
        }

        footer .layar-dalam {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        footer .layar-dalam div {
            width: 20%;
        }

        footer .layar-dalam h5 {
            margin-top: 0px;
            font-size: 20px;
            font-weight: bold;
        }
        
        @media screen and (max-width:991.98px) {
            .layar-dalam {
                width: 90%;
            }
            nav .menu ul{
                display: none;
                margin-top: 60px;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }

            nav .menu ul li {
                width: 100%;
                border-bottom: 1px solid #ccc;
                background-color: #fff;
                line-height: 40px;
            }

            nav .menu ul li a {
                color: #333;
            }

            .tombol-menu {
                display: flex;
                
            }
        }
    </style>
</head>
<body>
    <nav>
        <div class="layar-dalam">
            <div class="logo">
                <a href=""><img src="asset/logo utama.png" class="putih" alt=""></a>
                <a href=""><img src="asset/logo utama.png" class="hitam" alt=""></a>
            </div>
            <div class="menu">
                <a href="#" class="tombol-menu">
                    <span class="garis"></span>
                    <span class="garis"></span>
                    <span class="garis"></span>
                </a>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="layar-penuh">
        <header id="home">
            <div class="overlay"></div>
            <video autoplay muted loop>
                <source src="gambar/indonesia.mp4" type="video/mp4" />
            </video>
            <div class="intro">
                <h3>Visit Cilongok</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, impedit!</p>
                <p>
                    <a href="" class="tombol">MORE INFO</a>
                </p>
            </div>
        </header>
        <main>
            <section id="aboutus">
                <div class="layar-dalam">
                    <h3>About us</h3>
                    <p class="ringkasan">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, incidunt.</p>
                    <div class="konten-isi">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nemo sequi, corrupti sunt exercitationem voluptates iste ab commodi quod quis?</p>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="support">
                <div class="layar-dalam support">
                    <div>
                        <img src="gambar/matahari.png" alt="">
                        <h6>In Every Condition</h6>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eni eius reprehenderit eligendi, molestiae et voluptate!
                        </p>
                    </div>
                    <div>
                        <img src="gambar/tas.png" alt="">
                        <h6>Professional Team</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, aperiam adipisci. Ratione in enim explicabo.</p>
                    </div>
                    <div>
                        <img src="gambar/kompas.png" alt="">
                        <h6>Expert Hikers</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, aperiam adipisci. Ratione in enim explicabo.</p>
                    </div>
                </div>
            </section>
            <section id="gallery">
                <div><img src="gambar/foto1.jpg" alt=""></div>
                <div><img src="gambar/foto2.jpg" alt=""></div>
                <div><img src="gambar/foto3.jpg" alt=""></div>
                <div><img src="gambar/foto4.jpg" alt=""></div>
                <div><img src="gambar/foto5.jpg" alt=""></div>
                <div><img src="gambar/foto6.jpg" alt=""></div>
                <div><img src="gambar/foto7.jpg" alt=""></div>
                <div><img src="gambar/foto8.jpg" alt=""></div>
            </section>
            <section class="quote">
                <div class="layar-dalam">
                    <p>Jogja terbuat dari rindu, pulang dan angkringan.</p>
                </div>
            </section>
            <section id="team">
                <div class="layar-dalam">
                    <h3>Our Team</h3>
                    <p class="ringkasan">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam, tempora!</p>
                    <div class="tim">
                        <div>
                            <img src="gambar/tim1.jpg" alt="">
                            <h6>Jhon Dea</h6>
                            <span>indonesia</span>
                        </div>
                        <div>
                            <img src="gambar/tim2.jpg" alt="">
                            <h6>Dia fens</h6>
                            <span>France</span>
                        </div>
                        <div>
                            <img src="gambar/tim3.jpg" alt="">
                            <h6>Micael</h6>
                            <span>Spain</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="abuabu" id="blog">
                <div class="layar-dalam">
                    <h3>Lastest Blog</h3>
                    <p class="ringkasan">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, fugiat!</p>
                    <div class="blog">
                        <div class="area">
                            <div class="gambar" 
                            style="background-image: url('gambar/blog1.jpg')"></div>
                            <div class="text">
                                <article>
                                    <h4><a href="">What About Bromo?</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad at, atque dolores non reiciendis totam!</p>
                                </article>
                            </div>
                        </div>
                        <div class="area">
                            <div class="gambar" 
                            style="background-image: url('gambar/blog2.jpg')"></div>
                            <div class="text">
                                <article>
                                    <h4><a href="">What Yogyakarta?</a></h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad at, atque dolores non reiciendis totam!</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer id="contact">
            <div class="layar-dalam">
                <div>
                    <h5>Info</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, sunt?
                </div>
                <div>
                    <h5>Contact</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, sunt?
                </div>
                <div>
                    <h5>Help</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, sunt?
                </div>
                <div>
                    <h5>Site map</h5>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, sunt?
                </div>
            </div>
            <div class="layar-dalam">
                <div class="copyright">
                    &copy: 2025 curug cipendok
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <x-js></x-js>
</body>
</html>