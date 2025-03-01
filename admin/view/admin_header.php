<?php
if(isset($_POST['logout'])){
  session_destroy();
  header('location: ./index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ielts</title>
    <link rel="stylesheet" href="./view/admin.css" />
    <link rel="stylesheet" href="./view/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./view/img/favicon.ico" sizes="64x64">
    <meta name="google-site-verification" content="Z4XcBF08yhBgcrUNDDO0xKeMCOD89eLiq0ULObK0mOM" />
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3ZSX8D08N4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3ZSX8D08N4');
</script>
    <style>
    :root {
        --primary-color: #003cff;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-thumb {
        background: var(--primary-color);
        border-radius: 10px;
    }

    .bold {
        font-weight: bold;
    }

    hr {
        margin: 0;
    }

    ul {
        margin: 0;
        padding: 0;
    }

    li {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
        color: var(--text-color);
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }

    .blur {
        position: absolute;
        align-self: start;
        box-shadow: 0 0 1000px 50px #3300ff;
        z-index: -100;
    }

    .blur-right {
        position: absolute;
        right: 10rem;
        background-color: #003cff;
        box-shadow: 0 0 1000px 50px #3300ff;
        z-index: -100;
    }

    .cs-hover {
        cursor: pointer;
    }

    ::selection {
        background-color: var(--primary-color);
        color: white;
    }

    header {
        width: 100%;
        background-color: var(--primary-color);
    }

    .form-input,
    .form-input:focus {
        border: none;
        width: 100%;
        height: 100%;
        background-color: transparent;
        outline: none;
    }

    .form-select,
    .form-select:valid:focus {
        background-color: transparent;
        border: none;
        box-shadow: none;
        padding: 0;
    }
    </style>
</head>

<body data-bs-theme="dark" class="position-relative">
    <div class="preloader">
        <div class="loader"></div>
        <div class="loader loader2"></div>
    </div>
    <header id="header" class="container-flude d-flex justify-content-center align-items-center" style="height: 80px;">
        <div class="container d-flex justify-content-between align-items-center h-100">
            <div class="logo w-25 h-100">
                <a href="./../" class="no-select h-100">
                    <img src="./view/img/logo1.png" alt="" style="height: 100%;">
                </a>
            </div>
            <div class="nav d-none d-md-flex justify-content-center ">
                <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-light rounded-5 shadow-sm d-flex" id="pillNav2"
                    role="tablist"
                    style="--bs-nav-link-color: var(--primary-color); --bs-nav-pills-link-active-color: var(--bs-light); --bs-nav-pills-link-active-bg: var(--primary-color);">
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=add_topic">
                            <button
                                class="nav-link <?php if ($actived == 'add_topic') echo("active disabled"); ?> bold rounded-5"
                                data-bs-toggle="tab" type="button" role="tab" aria-selected="true">THÊM CHỦ
                                ĐỀ</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=add_vocabulary">
                            <button
                                class="nav-link <?php if ($actived == 'add_vocabulary') echo("active disabled"); ?> bold rounded-5"
                                data-bs-toggle="tab" type="button" role="tab" aria-selected="false">THÊM TỪ
                                VỰNG</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=add_sentences">
                            <button
                                class="nav-link <?php if ($actived == 'add_sentences') echo("active disabled"); ?> bold rounded-5"
                                data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Add_sentence</button></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="index.php?page=tiktok">
                            <button
                                class="nav-link <?php if ($actived == 'tiktok') echo("active disabled"); ?> bold rounded-5"
                                data-bs-toggle="tab" type="button" role="tab" aria-selected="false">Tiktok</button></a>
                    </li>
                </ul>
            </div>
            <div class="user w-25 d-flex justify-content-end">
                <div class="dropdown">
                    <button class="btn btn-light rounded-4 p-3" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-regular fa-circle-user"
                            style="color: var(--primary-color); font-size: 1.8rem;"></i>
                    </button>
                    <ul class="dropdown-menu shadow" style="background-color: var(--primary-color);">
                        <li>
                            <form action="" method="post">
                                <button class="dropdown-item text-white bold" type="button">Chào
                                    <?php echo $_SESSION['admin_name'] ?></button>
                            </form>
                        </li>
                        <li>
                           <a class="dropdown-item" href="index.php?page=tiktok">Tiktok</a>
                        </li>
                        <li>
                            <form action="" method="post">
                                <input class="dropdown-item text-white bold" type="submit" name="logout" value="Đăng xuất">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>