<!doctype html>

<html>

    <head>

        <link rel="stylesheet" type="text/css" href="/css/stylesheet.css">

        <link rel="shortcut icon" type="image/x-icon" href="/img/icon.ico" />

    <title>

        @yield('title')

    </title>

    <meta name="description" content="David Garcia's @yield('title')">

    </head>

<body>

    <div class="divs">

        <header>

            <h2>

                @yield('title')

            </h2>

        </header>

        <img src="/img/logo.png" id="logo" href="https://www.crunchyroll.com/" target="_blank" rel="noopener noreferrer">

        <nav>

            <ul>
                <li> <a href="/" class="{{Request::is('/') ? "active" : ''}}"> Home </a> </li>
                <li> <a href="/profile" class="{{Request::is('profile') ? "active" : ''}}"> Profile </a> </li>
                <li> <a href="/faq" class="{{Request::is('faq') ? "active" : ''}}"> FAQ </a> </li>
                <li> <a href="/dashboard" class="{{Request::is('dashboard') ? "active" : ''}}"> Dashboard </a> </li>
                <li> <a href="/blog" class="{{Request::is('blog') ? "active" : ''}}"> Blog </a> </li>
            </ul>

        </nav>

    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <main class="main">
        @yield('content')
    </main>

    <footer>

        <aside class="footer-aside">

            <ul class="footer-ul-1">

                <li> <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf" target="_blank" rel="noopener noreferrer"> The HZ HBO-ICT Course and Examination Regulations (CER) </a> </li>

                <li> <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf" target="_blank" rel="noopener noreferrer"> The Implementation Regulations (IR) of the HBO-ICT programme </a> </li>

                <li> <a href="https://github.com/HZ-HBO-ICT" target="_blank" rel="noopener noreferrer"> Github environment of the HBO-ICT Course </a> </li>

            </ul>

            <ul class="footer-ul-2">

                <li> <a href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c" target="_blank" rel="noopener noreferrer"> Teams environment of the HBO-ICT Course </li>

                <li> <a href="https://learn.hz.nl/" target="_blank" rel="noopener noreferrer"> Learn environment </li>

                <li> <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank" rel="noopener noreferrer"> MyHZ </li>

            </ul>

            <a href="https://hz.nl/" target="_blank" rel="noopener noreferrer"> <img alt="HZ Logo" src="/img/hz-pic.png" title="HZ Logo" class="img"> </a>

        </aside>

    </footer>

</body>

</html>
