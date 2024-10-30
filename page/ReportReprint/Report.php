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
            <!-- BEGIN: Content -->
            <div class="content">


                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entriesv</div>
                    </div>
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0  mr-5">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                            </div>
                        </div>
                        <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0 mr-5">
                            <button class="dropdown-toggle dropdown-toggle btn px-2 box w-full font-normal mr-5" aria-expanded="false" data-tw-toggle="dropdown"> Status All <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content overflow-y-auto h-32">
                                    <li> <a href="" class="dropdown-item">In Progress</a> </li>
                                    <li> <a href="" class="dropdown-item">Complete</a> </li>
                                    <li> <a href="" class="dropdown-item">Cancel</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0 mr-5">
                            <button class="dropdown-toggle dropdown-toggle btn px-2 box w-full font-normal mr-5 ml-5" aria-expanded="false" data-tw-toggle="dropdown"> Type All <i data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content overflow-y-auto h-32">
                                    <li> <a href="" class="dropdown-item">Work list SCR</a> </li>
                                    <li> <a href="" class="dropdown-item">Work list ADR</a> </li>
                                    <li> <a href="" class="dropdown-item">Work list GRD</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="calendar" data-lucide="calendar" class="lucide lucide-calendar w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> 
                                    <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>


                        
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table-fixed table table-report -mt-2">
                            
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Plant</th>
                                    <th class="whitespace-nowrap">Doc no.</th>
                                    <th class="text-center whitespace-nowrap">Selling Item</th>
                                    <th class="text-center whitespace-nowrap">Location</th>
                                    <th class="text-center whitespace-nowrap">Customer</th>
                                    <th class="text-center whitespace-nowrap">Requester</th>
                                    <th class="text-center whitespace-nowrap">Confirm Date</th>
                                    <th class="text-center whitespace-nowrap">Next Step</th>
                                    <th class="text-center whitespace-nowrap">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">
                                    
                                    <td class="text-left">PP</td>
                                    <td class="text-left">2024/0457-SCR</td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Steel scrap</a>                                        
                                    </td>
                                    <td class="text-center">PP Plant</td>                                    
                                    <td class="text-left">วงศ์พานิช</td>
                                    <td class="text-center">Operation</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 25 Aug 2024 </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center"> In </div>
                                    </td>
                                    <td class="w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3 inProgressBox" href="javascript:;">Inprogress</a>                                           
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- END: table row -->
                                <tr class="intro-x">
                                    
                                    <td class="text-left">PP</td>
                                    <td class="text-left">2024/0457-SCR</td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Steel scrap</a>                                        
                                    </td>
                                    <td class="text-center">PP Plant</td>                                    
                                    <td class="text-left">วงศ์พานิช</td>
                                    <td class="text-center">Operation</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-danger"> <i data-lucide="square" class="w-4 h-4 mr-2"></i> 25 Aug 2024 </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center"> In </div>
                                    </td>
                                    <td class="w-56">
                                        <div class="flex justify-center items-center">
                                            <a class="flex items-center mr-3 inProgressBox" href="javascript:;">Inprogress</a>                                           
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- END: table row -->
                                <tr class="intro-x">
                                    
                                    <td class="text-left">PP</td>
                                    <td class="text-left">2024/0455-GRD</td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Grade 7</a>                                        
                                    </td>
                                    <td class="text-center">Sub Warehouse</td>                                    
                                    <td class="text-left">NBJ</td>
                                    <td class="text-center">Operation</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 25 Aug 2024 </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center"> None </div>
                                    </td>
                                    <td class="w-56">
                                        <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 CancelBox" href="javascript:;"> Cancel </a>                                           
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- END: table row -->
                                <tr class="intro-x">
                                    
                                    <td class="text-left">PP</td>
                                    <td class="text-left">2024/0451-SCR</td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap">Wooder pallet</a>                                        
                                    </td>
                                    <td class="text-center">Sub Warehouse</td>                                    
                                    <td class="text-left">เพียรทำดี</td>
                                    <td class="text-center">Kittisak</td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center text-success"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> 25 Aug 2024 </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex items-center justify-center"> None </div>
                                    </td>
                                    <td class="w-56">
                                        <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3 CompleteBox" href="javascript:;"> Complete </a>                                          
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- END: table row -->
                               
                                
                            </tbody>
                        </table>
                        <!-- END: table box -->
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- BEGIN: Delete Confirmation Modal -->
                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                    <div class="text-3xl mt-5">Are you sure?</div>
                                    <div class="text-slate-500 mt-2">
                                        Do you really want to delete these records?
                                        <br>
                                        This process cannot be undone.
                                    </div>
                                </div>
                                <div class="px-5 pb-8 text-center">
                                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                    <button type="button" class="btn btn-danger w-24">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
            </div>
            <!-- END: Content -->
        </div>
        <!-- END: Content -->
    </div>

    <?php include(__DIR__ . '/../../include/script.php'); ?>
</body>

</html>