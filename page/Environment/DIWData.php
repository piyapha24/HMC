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
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="calendar" data-lucide="calendar" class="lucide lucide-calendar w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>


                        <div class="dropdown">
                            <button class="btn btn-primary shadow-md mr-2 dropdown-toggle btn px-6 pl-6 mx-4" onclick="location.href='CreateDIWdata.php';">
                                Master New
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                            </button>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">

                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">Plant</th>
                                    <th class="whitespace-nowrap">ปริมาณคงเหลือ</th>
                                    <th class="whitespace-nowrap">ปริมาณได้รับอนุญาต</th>
                                    <th class="text-center whitespace-nowrap">ระยะเวลาสิ้นสุดสัญญา</th>
                                    <th class="text-center whitespace-nowrap">ระยะเวลาสิ้นสุดกรมโรงงาน</th>
                                    <th class="text-center whitespace-nowrap">ชื่อกรมโรงงาน</th>
                                    <th class="text-center whitespace-nowrap">Status Envi</th>
                                    <th class="text-center whitespace-nowrap">Status</th>
                                    <th class="text-center whitespace-nowrap">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="intro-x">

                                    <td class="text-left">PP</td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap text-success">500 KG</a>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap text-success">1000 KG</a>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td>
                                        <a href="" class="font-medium whitespace-nowrap ">บรรจุภัณฑ์กระดาษ</a>
                                    </td>
                                    <td class="text-center">วงศ์พานิช</td>
                                    <td class="w-40">
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                            </button>
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-down" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                                <!-- END: table row -->
                            </tbody>
                        </table>
                        <!-- END: table box -->
                        <table class="table-fixed table table-report -mt-2 ">
                            <thead class="bg-blue-500 m-2 p-2 text-white">
                                <tr>
                                    <th class="whitespace-nowrap" colspan="5">ปริมาณการขนย้าย</th>
                                    <th class="whitespace-nowrap">Scrap No.</th>
                                    <th class="whitespace-nowrap">Selling Item</th>
                                    <th class="text-center whitespace-nowrap">ระยะเวลาสิ้นสุดสัญญา</th>
                                    <th class="text-center whitespace-nowrap">ระยะเวลาสิ้นสุดกรมโรงงาน</th>
                                    <th class="text-center whitespace-nowrap">Status</th>
                                    <th class="text-center whitespace-nowrap">Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-left" colspan="5"><a href="" class="font-medium whitespace-nowrap text-success">200 KG</a></td>
                                    <td class="text-left">HMC-001</td>
                                    <td class="text-left">Paper</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="w-40">
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                            </button>
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="text-left" colspan="5"><a href="" class="font-medium whitespace-nowrap text-success">200 KG</a></td>
                                    <td class="text-left">HMC-001</td>
                                    <td class="text-left">Paper</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="w-40">
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                            </button>
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="text-left" colspan="5"><a href="" class="font-medium whitespace-nowrap text-success">200 KG</a></td>
                                    <td class="text-left">HMC-001</td>
                                    <td class="text-left">กระดาษย่อย</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="w-40">
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                            </button>
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td class="text-left" colspan="5"><a href="" class="font-medium whitespace-nowrap text-success">200 KG</a></td>
                                    <td class="text-left">HMC-002</td>
                                    <td class="text-left">Peper Drum</td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="font-medium whitespace-nowrap text-success">01-10-2025</a>
                                    </td>
                                    <td class="w-40">
                                        <div class="progress mt-3">
                                            <div class="progress-bar w-2/3 bg-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                    </td>
                                    <td class="w-40">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                            </button>
                                            <div class="flex items-center justify-center"> <i data-lucide="chevron-right" class="w-4 h-4 mr-1"></i> </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- BEGIN: Data List -->
                        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                            <table class="table table-report -mt-2">

                                <thead>
                                    <tr>
                                        <th class="whitespace-nowrap"></th>
                                        <th class="whitespace-nowrap"></th>
                                        <th class="whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                        <th class="text-center whitespace-nowrap"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="intro-x">

                                        <td class="text-left">PP</td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-warning">800 KG</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-warning">1000 KG</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-warning">25-10-2025</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-warning">25-10-2025</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap ">เศษโลหะสแตนเลท</a>
                                        </td>
                                        <td class="text-center">3K</td>
                                        <td class="w-40">
                                            <div class="progress mt-3">
                                                <div class="progress-bar w-4/5 bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">80%</div>
                                            </div>
                                        </td>
                                        <td class="w-40">
                                            <div class="flex flex-wrap">
                                                <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                                </button>
                                                <div class="flex items-center justify-center"> <i data-lucide="chevron-down" class="w-4 h-4 mr-1"></i> </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- END: table row -->
                                </tbody>
                            </table>
                            <!-- END: table box -->
                            <table class="table table-report -mt-2">

                               
                                <tbody>
                                    <tr class="intro-x">

                                        <td class="text-left">PP</td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-danger">900 KG</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-danger">1000 KG</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-danger">31-10-2025</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap text-danger">31-10-2025</a>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap ">เศษพลาสติก</a>
                                        </td>
                                        <td class="text-center">SE</td>
                                        <td class="w-40">
                                            <div class="progress mt-3">
                                                <div class="progress-bar w-11/12 bg-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">91.5%</div>
                                            </div>
                                        </td>
                                        <td class="w-40">
                                            <div class="flex flex-wrap">
                                                <button class="btn btn-border-none mr-2" aria-expanded="false">
                                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="pencil"></i> </div>
                                                </button>
                                                <div class="flex items-center justify-center"> <i data-lucide="chevron-down" class="w-4 h-4 mr-1"></i> </div>
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