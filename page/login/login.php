<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Super flexible, powerful unlimited possibilities.">
    <meta name="keywords" content="Selling Application">
    <meta name="author" content="orange-thailand">
    <title>Selling Application</title>
    <!-- BEGIN: CSS Assets-->
    <?php include(__DIR__ . '/../../include/HeaderLink.php'); ?>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <div class="my-auto">
                    <img alt="Admin Template" class="-intro-x w-1/2 -mt-16" src="../../dist/images/LogoHMC.png">
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-3/4">
                    <h2 class="flex items-center mr-auto intro-x font-bold text-2xl xl:text-3xl text-center text-white">
                        <img alt="Selling Application" class="-intro-x-mt-16" src="../../dist/images/LogoHMC-WH.png">Selling Application
                    </h2>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email">
                        <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                    </div>
                    <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                        <div class="flex items-center mr-auto">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none text-white" for="remember-me">Remember me</label>
                        </div>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-outline-secondary py-3 px-4 w-full mt-3 xl:mt-0 align-top user_icon hmc" onclick="location.href='../../page/home/home.php';"><i data-lucide="user"></i><span>Login</span></button>
                    </div>
                    <div class="intro-x mt-8 my-auto intro-x xl:mt-24 text-slate-600 text-center border-5center">
                        <h3 class="border-center"><span class="text-primary text-slate-200">Login For HMC Employee</span></h3>
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <button class="btn btn-secondary py-3 px-4 w-full mt-3 xl:mt-0 align-top bg-white" onclick="location.href='../../page/home/home.php';"><img alt="Selling Application" class="-intro-x-mt-16 p-1" src="../../dist/images/365-logo.png"><span>Login via Sign-on 365</span></button>
                    </div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>


    <!-- BEGIN: JS Assets-->
    <?php include(__DIR__ . '/../../include/script.php'); ?>
    <!-- END: JS Assets-->
</body>

</html>