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
    <?php
     include(__DIR__ . '/../../include/HeaderLink.php'); 
    ?>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="py-5">
    <div class="flex">

        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <?php include(__DIR__ . '/../../include/breadcrumb.php'); ?>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <?php include(__DIR__ . '/../../include/thisToday.php'); ?>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <?php include(__DIR__ . '/../../include/Notifications.php'); ?>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <?php include(__DIR__ . '/../../include/Account.php'); ?>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 2xl:col-span-12">
                    <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: General -->
                        <div class="col-span-12 mt-8">

                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/SellingRequest/worklist.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="package" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Selling Request</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/Customer/worklist.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="users" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Customer</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/Account/worklist.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="coins" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Account</div>
                                            </a>                                                
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/SecurityGuard/worklist.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="shield" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Security Guard</div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/TruckScale/worklist.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="truck" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Truck Scale</div>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/Environment/WorkList.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="sprout" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Environment</div>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/MasterData/ScrapList.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="server" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Master Data</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-span-12 sm:col-span-6 xl:col-span-4 intro-y home-box">
                                    <div class="report-box zoom-in color-hmc">
                                        <div class="box p-5 box-hmc">
                                            <a href="../../page/ReportReprint/Report.php">
                                                <div class="flex justify-center">
                                                    <i data-lucide="printer" class="report-box__icon text-white icon-home"></i>
                                                </div>
                                                <div class="text-3xl font-medium leading-8 mt-6 text-white text-center">Report & Re-print</div>
                                            </a>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: General -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
    <!-- BEGIN: JS Assets-->
    <?php include(__DIR__ . '/../../include/script.php'); ?>
    <!-- END: JS Assets-->
</body>

</html>