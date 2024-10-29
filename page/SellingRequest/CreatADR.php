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
                        Document Information
                    </h2>
                </div>
                <!-- BEGIN: Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Doc no.<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="0000/0000-ADR" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Requester<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="Name Auto" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Create Date<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control" placeholder="08-08-2024 04:37:17 PM" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Delivery Date<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label> <input id="input-state-1" type="text" class="form-control input-state-1 datepicker" placeholder="Input text" data-single-mode="true">
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Session<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>รอบเช้า (08.00 น. -12.00 น.)</option>
                                    <option>รอบบ่าย (13.00 น. -17.00 น.)</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Plant<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>PP</option>
                                    <option>PDH</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Requester Information
                        </h2>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Find Employee name</label>
                                <div  class="input-group search">
                                    <input id="input-state-1 " type="text" class="search__input form-control input-state-1 input-group-text" placeholder="กรุณาค้นหา...">
                                    <i data-lucide="search" class="search__icon input-group-text"></i>
                                </div>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Department</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                    </div>
                    
                    <!-- BEGIN: Info ROW-->
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Selling Item Information
                        </h2>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Selling Item<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>Steel Scrap</option>
                                    <option>เศษเหล็ก</option>
                                    <option>Grade 5</option>
                                    <option>Grade 6</option>
                                    <option>Grade 7</option>
                                    <option>Paper drum</option>
                                    <option>Wooder pallet</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-auto w-64 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Unit Price: THB</label> <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                        <div class="flex flex-auto w-64 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">Unit</label> <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class=" flex flex-auto w-1/2 md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Scrap no.</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3"> 
                                <label for="input-state-1" class="form-label">ชื่อกรมโรงาน</label> 
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">ระยะเวลาเริ่มต้น - สิ้นสุดสัญญา</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">ระยะเวลาเริ่มต้น - สิ้นสุดโรงงาน</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                            <div class="mt-3"> <label for="input-state-1" class="form-label">ปริมาณที่ได้รับอนุญาต / KG</label> <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                            <div class=" progress mt-3">
                                <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">60%</div>
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
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail รับงาน 1</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">E-mail สำหรับเรียกเก็บเงิน 1</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto font-bold">
                            Pick-up Point & HMC Contact Person
                        </h2>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Pick-up Point<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>KNS</option>
                                    <option>LAB</option>
                                    <option>SMC</option>
                                    <option>Store</option>
                                    <option>KNS PP</option>
                                    <option>LAB Sub Warehouse</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-auto md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Location<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>PP Plant</option>
                                    <option>PDH Plant</option>
                                    <option>Sub Warehouse</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-auto md:w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3 dropdown">
                                <label for="input-state-1" class="form-label">Plant<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <select class="form-select sm:mr-2 input-state-1" aria-label="กรุณาเลือก">
                                    <option>PP</option>
                                    <option>PDH</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Contact Person Name (Pick-up Point)</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Phone no.</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Address</label>
                                <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                            </div>
                        </div>                        
                    </div>
                    <!-- BEGIN: Info ROW-->
                    <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">HMC Contact Person<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
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
                        <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                            <div class="mt-3">
                                <label for="input-state-1" class="form-label">Remark<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                                <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
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