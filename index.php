<?php include 'mailSender.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link rel="stylesheet" href="styles/os_intro.css">
    <link rel="stylesheet" href="styles/fire_intro.css">
    <link rel="stylesheet" href="styles/corp_intro.css">
    <link rel="stylesheet" href="styles/info.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/buttons.css">
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="icon" href="salamander.ico">
    <script src="functions/menu.js"></script>
    <script src="https://raw.githubusercontent.com/emn178/js-sha3/master/build/sha3.min.js"></script>
    <meta name="author" content="Marek Horňak">
    <meta name="keywords" content="Salamander, Fire, Company">
    <meta name="description" content="Intro web to Salamander corporation">
    <title>Salamander corp.</title>
</head>
<body>

    <nav>
        <span class="menu-button" id="nav">
            <img src="img/menu.png" alt="" onclick="showMenu()">
        </span>
        <h1 class="menu-text" onclick="showLogo()">Salamander</h1>
    </nav>

    <header id="header">
        <!--<img src="img/salamander.png" alt="">-->
        <h1>Salamander corporation</h1>
        <p>IT solutions for better tomorrow</p>
    </header>

    <div class="logo" id="logo">
        <span class="escape" onclick="hideLogo()">&times;</span>
        <img src="img/sala_profile_brand.png" alt="">
    </div>

    <div class="search-modal" id="search-modal">
        <h1>Search anything</h1>
        <input type="text" placeholder="Search..." id="input">
        <button onclick="searchIt()" id="sbutton">Search</button>
    </div>

    <div class="login-form" id="log-form">
        <span class="close-log" onclick="hideLogin()">&times;</span>
        <form action="">
            <img src="img/avatar.png" alt="">
            <label for="user">Username</label><br>
            <input type="text" name="user"><br><br>
            <label for="pass">Password</label><br>
            <input type="text" name="pass"><br><br>
            <button type="submit">Login</button><br>
            <input type="checkbox" name="remember">
            <label for="chbox">Remember me</label><br>
            <a href="">Forgot password?</a>

        </form>
    </div>

    <aside id="menu">
        <div id="container">
            <span class="close" onclick="hideMenu()">&times;</span>
            <h2 class="menu-caption">Menu</h2>
            <a href="#salamander_intro" class="menu-link">Operating system</a>
            <a href="#fire_intro" class="menu-link">Programming language</a>
            <a href="#corporation_intro" class="menu-link">Corporation</a>
            <a href="#contact" class="menu-link">Contact</a>
            <a href="#map" class="menu-link">Map</a>
            <a href="#info" class="menu-link">Info</a>
        </div>
    </aside>

    <div class="buttons">
        <img src="img/search-dark.png" alt="" class="btn" id="search" onclick="showSearch()">
        <img src="img/darkmode.png" alt="" class="btn" id="mode" onclick="darkMode()">
        <img src="img/up-dark.png" alt="" class="btn" id="up" onclick="scrlUp()">
    </div>

    <div class="login">
        <img src="img/lock-dark.png" alt="" id="lock" onclick="showLogin()">
    </div>

    <div id="salamander_intro">
        <h1>Intro to SalamanderOS</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eveniet vitae maiores culpa dolorum consequatur numquam hic tempore! 
            Dolores repellat officiis qui fugiat, ullam ex nam dolore sit 
            praesentium consectetur deserunt!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Eveniet vitae maiores culpa dolorum consequatur numquam hic tempore! 
            Dolores repellat officiis qui fugiat, ullam ex nam dolore sit 
            praesentium consectetur deserunt!
        </p>

        <img src="" alt="">

        <h1>Benefits</h1>
        <div class="os_cards">
            <div class="os_card">
                <img src="img/salamander.png" alt="">
                <div class="desc">
                    <h3>Benefit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Deleniti ipsum provident necessitatibus in. Atque iste 
                        veniam velit quibusdam quia sit quidem aspernatur sunt 
                        omnis?
                    </p>
                </div>
            </div>
            <div class="os_card">
                <img src="img/salamander.png" alt="">
                <div class="desc">
                    <h3>Benefit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Deleniti ipsum provident necessitatibus in. Atque iste 
                        veniam velit quibusdam quia sit quidem aspernatur sunt 
                        omnis?
                    </p>
                </div>
            </div>
            <div class="os_card">
                <img src="img/salamander.png" alt="">
                <div class="desc">
                    <h3>Benefit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Deleniti ipsum provident necessitatibus in. Atque iste 
                        veniam velit quibusdam quia sit quidem aspernatur sunt 
                        omnis?
                    </p>
                </div>
            </div>
            <div class="os_card">
                <img src="img/salamander.png" alt="">
                <div class="desc">
                    <h3>Benefit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Deleniti ipsum provident necessitatibus in. Atque iste 
                        veniam velit quibusdam quia sit quidem aspernatur sunt 
                        omnis?
                    </p>
                </div>
            </div>
            
        </div>
    </div>

    <div id="fire_intro">
        <h1>What is Fire</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Animi eum deserunt ad unde cumque laudantium nobis sed 
            accusantium quis laborum recusandae maiores, tenetur 
            consequuntur cum tempore dignissimos eius nisi obcaecati.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Animi eum deserunt ad unde cumque laudantium nobis sed 
            accusantium quis laborum recusandae maiores, tenetur 
            consequuntur cum tempore dignissimos eius nisi obcaecati.
        </p>

        <img src="" alt="">

        <h1>How Fire works</h1>
        <div class="fire_cards">
            <div class="fire_card">
                <img src="img/salamander.png" alt="">
                <div class="step">
                    <h3>Step1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Saepe modi doloremque laudantium, et assumenda voluptas 
                        dolore harum quod vel, doloribus blanditiis aspernatur! 
                        Eos, dolore ratione repudiandae tempore modi voluptatem soluta!
                    </p>
                </div>
            </div>
            <div class="fire_card">
                <img src="img/salamander.png" alt="">
                <div class="step">
                    <h3>Step1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Saepe modi doloremque laudantium, et assumenda voluptas 
                        dolore harum quod vel, doloribus blanditiis aspernatur! 
                        Eos, dolore ratione repudiandae tempore modi voluptatem soluta!
                    </p>
                </div>
            </div>
            <div class="fire_card">
                <img src="img/salamander.png" alt="">
                <div class="step">
                    <h3>Step1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Saepe modi doloremque laudantium, et assumenda voluptas 
                        dolore harum quod vel, doloribus blanditiis aspernatur! 
                        Eos, dolore ratione repudiandae tempore modi voluptatem soluta!
                    </p>
                </div>
            </div>
            <div class="fire_card">
                <img src="img/salamander.png" alt="">
                <div class="step">
                    <h3>Step1</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Saepe modi doloremque laudantium, et assumenda voluptas 
                        dolore harum quod vel, doloribus blanditiis aspernatur! 
                        Eos, dolore ratione repudiandae tempore modi voluptatem soluta!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="corporation_intro">
        <h1>What is Salamander corporation</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Animi eum deserunt ad unde cumque laudantium nobis sed 
            accusantium quis laborum recusandae maiores, tenetur 
            consequuntur cum tempore dignissimos eius nisi obcaecati.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Animi eum deserunt ad unde cumque laudantium nobis sed 
            accusantium quis laborum recusandae maiores, tenetur 
            consequuntur cum tempore dignissimos eius nisi obcaecati.
        </p>

        <h1>What we do</h1>
        <div class="corp_cards">
            <div class="corp_card">
                <img src="img/salamander.png" alt="">
                <div class="offer">
                    <h3>Working</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Totam impedit veritatis facere vel quia non earum laboriosam 
                        neque blanditiis consequatur minus molestias nihil reiciendis, 
                        tenetur culpa placeat nostrum, voluptate odio.
                    </p>
                </div>
            </div>
            <div class="corp_card">
                <img src="img/salamander.png" alt="">
                <div class="offer">
                    <h3>Working</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Totam impedit veritatis facere vel quia non earum laboriosam 
                        neque blanditiis consequatur minus molestias nihil reiciendis, 
                        tenetur culpa placeat nostrum, voluptate odio.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2631.5479136685976!2d21.24546901519675!3d48.73322951746599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ee0f5bfc4632f%3A0xd413a57e654d5070!2sKomensk%C3%A9ho%2044%2C%20040%2001%20Ko%C5%A1ice!5e0!3m2!1ssk!2ssk!4v1652376024156!5m2!1ssk!2ssk" id="map" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <div id="contact">
        <h1>Contact us!</h1>
        <form action="" id="form">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Your name"><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder="Your email"><br>
            <label for="subject">Subject</label><br>
            <select name="subject" id="subject">
                <option value="">--</option>
                <option value="">Operating system</option>
                <option value="">Programming language Fire</option>
                <option value="">Web developing and hosting</option>
                <option value="">Cybersecurity</option>
                <option value="">Frameworks</option>
                <option value="">Tutorials</option>
                <option value="">Cryptocurrency</option>
                <option value="">Application offer</option>
                <option value="">Design studio</option>
                <option value="">Students program</option>
            </select><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea><br>
            <p class="success"> <?php echo $success; ?> </p>
            <p class="failure"> <?php echo $failure; ?> </p>
            <button type="submit" name="submit" data-submit="Sending...">Send message</button>
        </form>
    </div>

    <footer id="info">
        <div class="informations">
            <div class="about">
                <h1>About this webpage</h1>
                <pre>
                    Author: Marek Horňak
                    Mail: <a href="mailto:marek.hornak@student.spseke.sk">click here</a>
                    Number: 0903 ??? ???
                    Class: 2.B
                    Schoolyear: 2021/2022
                    School: SPŠE Košice
                    Address: Komenského 44
                </pre>
            </div>
            <div class="links">
                <h1>Extern links</h1>
                <pre>
                    <a href="#">Parkour-Traceurs</a>
                    <a href="#">How-to Parkour</a>
                    <a href="#">Official Parkour</a>
                    <a href="#">W3Schools</a>
                </pre>
            </div>
        </div>
        <div class="social-media">
            <img src="img/facebook.png" alt="">
            <img src="img/pinterest.jpg" alt="">
            <img src="img/instagram.jpg" alt="">
        </div>
        <p>Webdesign &copy; Marek Horňak</p>
    </footer>
    
</body>
</html>