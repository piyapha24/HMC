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
                        Inbound Ticket
                    </h2>
                </div>
                <!-- BEGIN: Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Doc no.</label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="0000/0000-SCR" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Selling Item</label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="Steel scrap" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Delivery Date</label> 
                            <input id="input-state-1" type="text" class="form-control" placeholder="08-08-2024" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Pick-up Point</label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="Lab" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Location</label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="PDH Plant" disabled>
                            </div>
                        </div>
                    </div>
                    
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">Date</label> 
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="08-08-2024" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">Time</label> 
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="04:37:17 PM" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">Weight</label> 
                                <input id="input-state-1" type="text" class="form-control " placeholder="In" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">Quantity</label> 
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="00,000.000">
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">Unit</label> 
                                <input id="input-state-1" type="text" class="form-control" placeholder="KG" disabled>
                            </div>
                        </div>                   
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="08-08-2024" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="00:00:00 AM" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                
                                <input id="input-state-1" type="text" class="form-control" placeholder="Out" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                
                                <input id="input-state-1" type="text" class="form-control  input-state-1" placeholder="00,000.000">
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                 
                                <input id="input-state-1" type="text" class="form-control" placeholder="KG" disabled>
                            </div>
                        </div>                   
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3">                                 
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3">                                 
                                <input id="input-state-1" type="text" class="form-control" placeholder="Net" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3">
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="00,000.000">
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> 
                                 
                                <input id="input-state-1" type="text" class="form-control" placeholder="KG" disabled>
                            </div>
                        </div>                   
                    </div>
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Customer Information
                        </h2>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Customer name</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Contact Person</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Phone no.</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>                           
                        </div>
                    </div>
                    
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Driver Information
                        </h2>
                    </div>
                    
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Driver Name</label> 
                            <input id="input-state-1" type="text" class="form-control " placeholder="1กข 8955-0123" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Phone no</label> 
                             <input id="input-state-1" type="text" class="form-control " placeholder="ระยอง" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">ประเภทรถ</label> 
                             <input id="input-state-1" type="text" class="form-control " placeholder="รถพ่วง" disabled>                             
                            </div>                           
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">เอกสารแนบ</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="เอกสารแนบจาก Q-Time" disabled>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <label for="input-state-1" class="form-label">Attachment<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                            <form action="/file-upload" class="dropzone"> <div class="fallback"> <input name="file" type="file" multiple/> </div> <div class="dz-message" data-dz-message> <div class="text-lg font-medium">Drop files here or click to upload.</div> <div class="text-slate-500"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div> </div> </form> 
                        </div>                        
                    </div>
                   
                    
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