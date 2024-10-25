<!DOCTYPE html>

<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="../dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Selling Application">
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
    <!-- BEGIN: Mobile Menu -->
    <?php include(__DIR__ .  '/../../include/side-nav-mobile.php'); ?>
    <!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        <?php include(__DIR__ .  '/../../include/side-nav.php'); ?>
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
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
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto font-bold">
                        Customer Information
                    </h2>
                </div>
                <!-- BEGIN: Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        
                        
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Role name</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Customer" disabled>
                            </div>
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Customer Code<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label> <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Customer name<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>                        
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">User name<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Password<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Contact Person<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Phone no.<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">เลขทะเบียนโรงงาน<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Customer" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Address<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>                        
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail รับงาน 1<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail สำหรับเรียกเก็บเงิน 1<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail รับงาน 2<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail สำหรับเรียกเก็บเงิน 2<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>User Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>E-mail Notification Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Menu User Setting
                        </h2>
                    </div>
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Selling Request Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Customer Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Security Guard Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Truck Scale Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Environment Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Master Data Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Report Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                        <div class="flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label>Re-print Menu Status</label>
                                <div class="form-switch mt-2">
                                    <input type="checkbox" class="form-check-input">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    
                    <!-- BEGIN: buttom-->
                    <div class="flex flex-col lg:flex-row items-center justify-center p-5 -mx-5">
                        <button class="btn btn-primary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                            Submit
                        </button>
                        <button class="btn btn-secondary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                            Exit
                        </button>

                    </div>
                </div>
                <!-- END: Info -->
            </div>
            <!-- END: Content -->
        </div>
        <!-- END: Content -->
    </div>

    <?php include(__DIR__ . '/../../include/script.php'); ?>
</body>

</html>