<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }

    body {
        background: url(https://images.unsplash.com/photo-1695982207128-c291197f5eda?crop=entropy&cs=srgb&fm=jpg&ixid=M3wzMjM4NDZ8MHwxfHJhbmRvbXx8fHx8fHx8fDE2OTk0OTkyMTF8&ixlib=rb-4.0.3&q=85);
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    header {
        position: relative;
        background: hsla(0, 0%, 0%, .6);
        padding: 1rem 0;
        z-index: 999;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: min(90%, 800px);
        margin-inline: auto;
        color: #fff;
    }

    nav ul {
        display: flex;
        list-style: none;
        gap: 2rem;
    }

    nav a {
        text-decoration: none;
        color: #fff;
    }

    nav a:hover {
        color: #4FC3F7;
    }

    .hamburger {
        display: none;
        cursor: pointer;
    }

    @media (max-width: 600px) {

        .toggle {
            transition: ease-in-out 550ms;
            transform: translate(0px);
            opacity: 1;
            display: block;
        }

        .header-container {
            width: 100%;
            padding: 0 1rem;
        }

        nav ul {
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: hsla(0, 0%, 0%, .5);
            backdrop-filter: blur(10px);
            transform: translateX(-500px);
            opacity: 0;
        }

        nav li {
            padding: 1rem;
            cursor: pointer;
        }

        nav li:hover {
            background: hsla(0, 0%, 0%, .7);
        }

        .hamburger {
            display: block;
        }
    }
</style>

<body>
    <header>
        <div class="header-container">
            <span>Logo</span>
            <nav id="nav">
                <ul id="nav-ul">
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <span class="hamburger" id="button"><i class="fa-solid fa-bars"></i></span>
        </div>
    </header>
</body>
<script>
    const btn = document.getElementById('button');
    const nav = document.getElementById('nav-ul');

    btn.addEventListener('click', function() {
        nav.classList.toggle('toggle');
    });
</script>

</html>
