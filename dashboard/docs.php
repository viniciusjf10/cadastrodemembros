<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Rinobot Team</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="icon" type="image/png" href="../images/LogoTopoPagina.jpg" />

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>
                        <!--//col-->


                        <div class="app-utilities col-auto">
                            <div class="app-utility-item app-notifications-dropdown dropdown">
                                <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
                                    data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                    title="Notifications">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                        <path fill-rule="evenodd"
                                            d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                    </svg>
                                    <span class="icon-badge">3</span>
                                </a>
                                <!--//dropdown-toggle-->

                                <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                    <div class="dropdown-menu-header p-3">
                                        <h5 class="dropdown-menu-title mb-0">Notifica????es</h5>
                                    </div>
                                    <!--//dropdown-menu-title-->
                                    <div class="dropdown-menu-content">
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-receipt" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                            <path fill-rule="evenodd"
                                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">A IronCup com??ar?? no dia XX/XX/XXXX</div>
                                                        <div class="meta"> 1 dia atr??s</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href=""></a>
                                        </div>
                                        <!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-receipt" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                            <path fill-rule="evenodd"
                                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">A Smile come??ar?? no dia XX/XX/XXXX</div>
                                                        <div class="meta"> 1 dia atr??s</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href=""></a>
                                        </div>
                                        <!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-receipt" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                            <path fill-rule="evenodd"
                                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">A pr??xima reuni??o geral ser?? em XX/XX/XXXX
                                                        </div>
                                                        <div class="meta"> 1 dia atr??s</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href=""></a>
                                        </div>
                                        <!--//item-->
                                    </div>
                                    <!--//dropdown-menu-content-->
                                </div>
                                <!--//dropdown-menu-->
                            </div>
                            <!--//app-utility-item-->


                            <div class="app-utility-item app-user-dropdown dropdown">
                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false"><img src="assets/images/user.png"
                                        alt="user profile"></a>
                                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                    <!-- <li><a class="dropdown-item" href="">Account</a></li>
								<li><a class="dropdown-item" href="">Settings</a></li>
								<li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="../index.php">Log Out</a></li>
                                </ul>
                            </div>
                            <!--//app-user-dropdown-->
                        </div>
                        <!--//app-utilities-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-header-content-->
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="index.php"><img class="logo-icon me-2" src="../images/LogoTopoPagina.jpg"
                            alt="logo"><span class="logo-text">Rinobot Team</span></a>

                </div>
                <!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link active" href="index.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                        <path fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">P??gina Inicial</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="docs.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                                        <path fill-rule="evenodd"
                                            d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Documentos</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->


                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
                                <span class="nav-icon">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Cadastros</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                                <!--//submenu-arrow-->
                            </a>
                            <!--//nav-link-->
                            <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link"
                                            href="cadastrarmembro.php">Adicionar membro</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="listarmembro.php">Listar
                                            membros</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="alterarmembro.php">Alterar
                                            membro</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="deletarmembro.php">Deletar
                                            membro</a></li>
                                </ul>
                            </div>
                        </li>
                        <!--//nav-item-->


                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
                                <span class="nav-icon">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Externas</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                                <!--//submenu-arrow-->
                            </a>
                            <!--//nav-link-->
                            <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="404.html">P??gina 404</a></li>
                                </ul>
                            </div>
                        </li>
                        <!--//nav-item-->

                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="contatos.php">
                                <span class="nav-icon">
                                    <svg width="24px" height="24px" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.5 8a5.5 5.5 0 118.596 4.547 9.005 9.005 0 015.9 8.18.75.75 0 01-1.5.045 7.5 7.5 0 00-14.993 0 .75.75 0 01-1.499-.044 9.005 9.005 0 015.9-8.181A5.494 5.494 0 013.5 8zM9 4a4 4 0 100 8 4 4 0 000-8z" />
                                        <path
                                            d="M17.29 8c-.148 0-.292.01-.434.03a.75.75 0 11-.212-1.484 4.53 4.53 0 013.38 8.097 6.69 6.69 0 013.956 6.107.75.75 0 01-1.5 0 5.193 5.193 0 00-3.696-4.972l-.534-.16v-1.676l.41-.209A3.03 3.03 0 0017.29 8z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Contatos importantes</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->


                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="help.html">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Preciso de ajuda</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                    </ul>
                    <!--//app-menu-->
                </nav>
                <!--//app-nav-->
            </div>
            <!--//sidepanel-inner-->
        </div>
        <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Documentos dispon??veis</h1>
                    </div>

                </div>
                <!--//row-->

                <div class="row g-4">
                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-pdf pdf-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Termo de
                                        <br>compromisso</a></h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> PDF</li>
                                        <li><span class="text-muted">Tamanho:</span> 3MB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-excel excel-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Listagem de <br>membros</a>
                                </h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> Excel</li>
                                        <li><span class="text-muted">Tamanho:</span> 64KB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-excel excel-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Listagem de <br>membros
                                        para <br>transporte</a></h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> Excel</li>
                                        <li><span class="text-muted">Tamanho:</span> 64KB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-excel excel-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Listagem de <br>membros
                                        para <br>hospedagem</a></h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> Excel</li>
                                        <li><span class="text-muted">Tamanho:</span> 64KB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-powerpoint ppt-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Apresenta????o <br>geral </a>
                                </h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> PPT</li>
                                        <li><span class="text-muted">Tamanho:</span> 5.3MB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-powerpoint ppt-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Apresenta????o <br>categorias
                                    </a></h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> PPT</li>
                                        <li><span class="text-muted">Tamanho:</span> 5.3MB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-md-4 col-xl-3 col-xxl-2">
                        <div class="app-card app-card-doc shadow-sm h-100">
                            <div class="app-card-thumb-holder p-3">
                                <span class="icon-holder">
                                    <i class="fas fa-file-powerpoint ppt-file"></i>
                                </span>
                                <a class="app-card-link-mask" href="#file-link"></a>
                            </div>
                            <div class="app-card-body p-3 has-card-actions">

                                <h4 class="app-doc-title truncate mb-0"><a href="#file-link">Apresenta????o <br>gest??o
                                    </a></h4>
                                <div class="app-doc-meta">
                                    <ul class="list-unstyled mb-0">
                                        <li><span class="text-muted">Tipo:</span> PPT</li>
                                        <li><span class="text-muted">Tamanho:</span> 5.3MB</li>
                                    </ul>
                                </div>
                                <!--//app-doc-meta-->

                                <div class="app-card-actions">
                                    <div class="dropdown">
                                        <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                class="bi bi-three-dots-vertical" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                            </svg>
                                        </div>
                                        <!--//dropdown-toggle-->
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><svg width="1em" height="1em"
                                                        viewBox="0 0 16 16" class="bi bi-download me-2"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                                        <path fill-rule="evenodd"
                                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                                    </svg>Download</a></li>
                                        </ul>
                                    </div>
                                    <!--//dropdown-->
                                </div>
                                <!--//app-card-actions-->

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <footer class="app-footer">
                        <div class="container text-center py-3">
                            <small class="copyright">Rinobot Team <br>
                                Time de Garotas de Programa
                            </small>

                        </div>
                    </footer>
                    <!--//app-footer-->

                </div>
                <!--//app-wrapper-->

                <!-- Javascript -->
                <script src="assets/plugins/popper.min.js"></script>
                <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


                <!-- Page Specific JS -->
                <script src="assets/js/app.js"></script>

</body>

</html>