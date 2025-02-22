<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $actived ?></title>
    <link rel="stylesheet" href="./mvc/view/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./mvc/view/css/style.css">  
    <link rel="icon" type="image/png" href="./mvc/view/img/avt-circle.png" sizes="64x64">
    <meta name="google-site-verification" content="Z4XcBF08yhBgcrUNDDO0xKeMCOD89eLiq0ULObK0mOM" />
    <script src="https://unpkg.com/scrollreveal"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3ZSX8D08N4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3ZSX8D08N4');
</script>
</head>

<body data-bs-theme="dark" class="position-relative d-flex flex-column w-100">
  <div class="preloader"><div class="loader"></div><div class="loader loader2"></div></div>
    <header class="container-flude d-flex justify-content-center align-items-center w-100 border-bottom border-black" style="height: 80px;">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="logo w-25 h-100" style="border-radius: 100%; over-flow: hidden;">
                <a href="./admin" class="no-select d-flex h-100">
                    <img src="./mvc/view/img/logo1.png" alt="" style="height: 100%;">
                </a>
            </div>
            <div class="nav d-none d-md-flex justify-content-center ">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-light rounded-5 shadow-sm d-flex" id="pillNav2"
                    role="tablist"
                    style="--bs-nav-link-color: var(--primary-color); --bs-nav-link-hover-color: var(--primary-color); --bs-nav-pills-link-active-color: var(--bs-light); --bs-nav-pills-link-active-bg: black;">
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=words" class="text-black">
                            <button
                                class="nav-link <?php if ($actived == 'words') echo("active disabled"); ?> bold rounded-5"
                                id="home-tab2" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Vocabulary
                            </button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=sentences">
                            <button
                                class="nav-link <?php if ($actived == 'sentences') echo("active disabled"); ?> bold rounded-5"
                                id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                                aria-selected="false">Sentence</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=topics">
                            <button
                                class="nav-link <?php if ($actived == 'topics') echo("active disabled"); ?> bold rounded-5"
                                id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                                aria-selected="false">Topics</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=test">
                            <button
                                class="nav-link <?php if ($actived == 'test') echo("active disabled"); ?> bold rounded-5"
                                id="profile-tab2" data-bs-toggle="tab" type="button" role="tab"
                                aria-selected="false">Test</button></a>
                    </li>
                </ul>
            </div>
            <div class="search w-25">
                <form action="./index.php?page=search" class="border-secondary mx-auto p-3  d-none d-md-flex"
                    method="post">
                    <style>
                    .form-control {
                        background-color: var(--primary-color);
                        border: 1px solid #fff;
                    }

                    .form-control:focus {
                        box-shadow: none;
                        border: 1px solid #fff;
                        background-color: var(--primary-color);
                    }

                    .form-control:not(:placeholder-shown)+span,
                    .form-control:focus+span {
                        display: none;
                    }
                    </style>
                    <div class="form-input w-100 d-none d-sm-flex position-relative">
                        <input type="text" id="name" name="word" class="form-control border-none w-100" placeholder=" ">
                        <span class="position-absolute"
                            style="left: 1rem; top: 50%; transform: translateY(-50%); user-select: none; pointer-events: none;">Search</span>
                        <button class="btn btn-light position-absolute rounded-end" name="search-word"
                            style="right: 0; border-radius: 0;">
                            <i class="fa-solid fa-magnifying-glass mx-2" style="color: var(--primary-color)"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="cs-hover btn-icon-list ms-10 d-md-none p-1">
                <style>
                .btn-icon-list {
                    z-index: 10000;
                    margin: 1rem;
                    /* border-radius: .5rem; */
                }

                .btn-icon-list>div {
                    margin: .1rem 0;
                    height: .3rem;
                    width: 1.5rem;
                    border-radius: .2rem;
                }
                </style>
                <div class="bg-light"></div>
                <div class="bg-light"></div>
                <div class="bg-light"></div>
            </div>
        </div>
    </header>
    <nav class="nav-menu position-fixed overflow-hidden" style="z-index: 1; backdrop-filter: blur(5px);">
        <script>
        const btnList = document.querySelector('.btn-icon-list')
        const navMenu = document.querySelector('.nav-menu')
        btnList.addEventListener('click', () => {
            navMenu.classList.toggle('active')
        })
        </script>
        <style>
        nav {
            top: 0;
            right: 0;
            width: 0%;
            background-color: var(--primary-color);
            min-height: calc(100% - 5rem);
            transition: all .5s ease;
            margin-top: 5rem;
            scroll-behavior: none;
        }

        nav.active {
            width: 100%;
            position: fixed;
        }
        nav.active ul li a button{
            background-color: var(--primary-color);
        }
        </style>
        <ul class="text-center">
            <li class="p-3" style="font-size: 1.5rem;">
                <a href="index.php?page=words" class="text-nowrap bold">Vocabulary</a>
            </li>
            <li class="p-3" style="font-size: 1.5rem;">
                <a href="index.php?page=sentences" class="text-nowrap bold">Sentence</a>
            </li>
            
            <li class="p-3" style="font-size: 1.5rem;">
                <a href="index.php?page=topics" class="text-nowrap bold">Topics</a>
            </li>
            
            <li class="p-3" style="font-size: 1.5rem;">
                <a href="index.php?page=test" class="text-nowrap bold">Test</a>
            </li>
            
            <li class="p-3" style="font-size: 1.5rem;">
                <a href="index.php?page=search" class="text-nowrap bold">Search</a>
            </li>
        </ul>
    </nav>