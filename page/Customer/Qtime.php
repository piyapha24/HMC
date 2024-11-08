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
    <style>
        .fc-day-today .fc-daygrid-day-frame {
            background-color: #f2f2f2 !important;
            box-shadow: inset 0 0 10px #9c9c9c;
        }
    </style>
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
                <!-- BEGIN: Info ROW-->
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                        <div class="mt-3">
                            <label for="input-state-1" class="form-label">ค้นหาชื่อบริษัท</label>
                            <div class="input-group search">
                                <input id="input-state-1 " type="text" class="search__input form-control input-state-1 input-group-text" placeholder="กรุณาค้นหา...">
                                <i data-lucide="search" class="search__icon input-group-text"></i>
                            </div>
                        </div>
                    </div>
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                        <label for="input-state-1" class="form-label">ค้นหาเลขใบงาน</label>
                        <div class="mt-3">
                            <div class="input-group search">
                                <input id="input-state-1 " type="text" class="search__input form-control input-state-1 input-group-text" placeholder="กรุณาค้นหา...">
                                <i data-lucide="search" class="search__icon input-group-text"></i>
                            </div>
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
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                        <div class="mt-3 dropdown">
                            <label for="input-state-1" class="form-label">Selling Item</label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="Steel Scrap" disabled>
                        </div>
                    </div>
                    <div class="flex flex-auto w-84 md:w-full px-5 items-center justify-start lg:justify-start">
                        <div class="mt-3">
                            <label for="input-state-1" class="form-label">Doc no.</label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="0001/0001-SCR" disabled>
                        </div>
                    </div>
                </div>
                <!-- BEGIN: Info ROW-->
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="mt-3">
                            <label for="input-state-1" class="form-label">Delivery Date</label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="25 Aug 2024" disabled>
                        </div>
                    </div>
                    <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="mt-3 dropdown">
                            <label for="input-state-1" class="form-label">Session</label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="รอบเช้า (08.00 น. -12.00 น.)" disabled>
                        </div>
                    </div>
                    <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="mt-3 dropdown">
                            <label for="input-state-1" class="form-label">Plant</label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="PDH" disabled>
                        </div>
                    </div>
                </div>

                <!-- BEGIN: Info ROW-->
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Calendar
                    </h2>

                </div>
                <div class="grid grid-cols-12 gap-5 mt-5">
                    <!-- BEGIN: Calendar Content -->
                    <div class="col-span-12 xl:col-span-12 2xl:col-span-12">
                        <div class="box p-5 text-center">
                            <div class="" id="calendar1"></div>
                        </div>
                    </div>

                    <!-- END: Calendar Content -->
                </div>
                <div class="flex flex-col pt-5 -mx-5">
                    <h3 class="text-lg font-medium mr-auto">
                        Q-Time Color
                    </h3>
                </div>

                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5">
                        <div class="flex items-center mt-4">
                            <div class="w-4 h-4 qtime-bg-gray mr-5"></div>
                            <span class="truncate ">สีเทา</span>
                            <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto px-2">วันว่างไม่มีขนสินค้า</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-4 h-4 qtime-bg-sky mr-5"></div>
                            <span class="truncate ">สีฟ้าอ่อน</span>
                            <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto px-2">วันที่ลูกค้าแก้ไขวันขนสินค้า รอ HMC ยืนยันกลับ</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-4 h-4 qtime-bg-cyan mr-5"></div>
                            <span class="truncate">สีฟ้า</span>
                            <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto px-2">วันที่ HMC จองตามใบงาน</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-4 h-4 qtime-bg-blue mr-5"></div>
                            <span class="truncate">สีน้ำเงิน</span>
                            <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto px-2">วันที่ลูกค้ายืนยันคิวจองและ HMC ยืนยันเรียบร้อย</span>
                        </div>
                        <div class="flex items-center mt-4">
                            <div class="w-4 h-4 qtime-bg-rose mr-5"></div>
                            <span class="truncate">สีแดง</span>
                            <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                            <span class="font-medium xl:ml-auto px-2">วันที่ไม่สะดวกขนสินค้า</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- END: Content -->
        </div>
        <!-- END: Content -->
    </div>
    <div id="basic-modal-preview" class="modal" tabindex="-1" aria-hidden="true" bis_skin_checked="1" style="">
        <div class="modal-dialog" bis_skin_checked="1">
            <div class="modal-content" bis_skin_checked="1">
                <div class="modal-body p-10 text-center" bis_skin_checked="1">
                    <div class="p-0">
                        <div class="p-5 text-center">
                            <div class="w-16 h-16 text-warning mx-auto mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="alert-circle" data-lucide="alert-circle" class="lucide lucide-alert-circle w-16 h-16 mr-2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg></div>
                            <div class="text-3xl mt-5">ยืนยัน! วันและเวลา</div>
                            <div class="text-slate-500 mt-2">เข้ารับสินค้า</div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="mt-3"> <label for="input-state-1" class="form-label">Delivery Date</label>
                                    <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">

                            <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="mt-3"> <label for="input-state-1" class="form-label">Session</label>
                                    <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                                <div class="mt-3">
                                    <label for="input-state-1" class="form-label">Remark</label>
                                    <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: buttom-->
                        <div class="flex flex-col lg:flex-row items-center justify-center p-5 -mx-5">
                            <button class="btn btn-primary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                                Confirm
                            </button>
                            <button class="btn btn-secondary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                                Exit
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="basic-modal-preview1" class="modal" tabindex="-1" aria-hidden="true" bis_skin_checked="1" style="">
        <div class="modal-dialog" bis_skin_checked="1">
            <div class="modal-content" bis_skin_checked="1">
                <div class="modal-body p-10 text-center" bis_skin_checked="1"><div class="p-0">
                        <div class="p-5 text-center">
                            <div class="w-16 h-16 text-warning mx-auto mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="x-circle" data-lucide="x-circle" class="lucide lucide-x-circle w-16 h-16 text-danger mx-auto mt-3"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></div>
                            <div class="text-3xl mt-5">ล็อควันขนไม่ได้ !</div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="mt-3"> <label for="input-state-1" class="form-label">Delivery Date</label>
                                    <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">

                            <div class="mt-6 lg:mt-0 flex-1 px-5   border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                                <div class="mt-3"> <label for="input-state-1" class="form-label">Session</label>
                                    <input id="input-state-1" type="text" class="form-control state--b-blue" placeholder="Input Auto" disabled>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: Info ROW-->
                        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                            <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                                <div class="mt-3">
                                    <label for="input-state-1" class="form-label">Remark</label>
                                    <input id="input-state-1" type="text" class="form-control input-state-1" placeholder="Input text">
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN: buttom-->
                        <div class="flex flex-col lg:flex-row items-center justify-center p-5 -mx-5">
                            <button class="btn btn-primary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                                Confirm
                            </button>
                            <button class="btn btn-secondary shadow-md mr-2 w-64 px-6 pl-6 mx-4" aria-expanded="false">
                                Exit
                            </button>

                        </div>
                    </div></div>
            </div>
        </div>
    </div>
    <?php include(__DIR__ . '/../../include/script.php'); ?>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

    <script>
        var eventc = [{
            title: 'sdasdas',
            start: '2024-11-05',
            allDay: false,
            editable: false,
            backgroundColor: '#ffffff'
        }]
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar1');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: eventc,
                eventContent: function(args, createElement) {
                    console.log(1);
                    args.backgroundColor = '#198754';
                    const text = '<button  data-tw-toggle="modal" data-tw-target="#basic-modal-preview" style="background-color: #B8E5FA;color: white;padding: 15px;margin-left: 10px;border-radius: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="sunrise" data-lucide="sunrise" class="lucide lucide-sunrise block mx-auto"><path d="M12 2v8"></path><path d="M5.2 11.2l1.4 1.4"></path><path d="M2 18h2"></path><path d="M20 18h2"></path><path d="M17.4 12.6l1.4-1.4"></path><path d="M22 22H2"></path><path d="M8 6l4-4 4 4"></path><path d="M16 18a4 4 0 00-8 0"></path></svg>เช้า </button> <button data-tw-toggle="modal" data-tw-target="#basic-modal-preview1" style="background-color: #00ADEF;color: white;margin-left: 10px;padding: 15px; border-radius: 5px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="sun" data-lucide="sun" class="lucide lucide-sun block mx-auto"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="M5 5l1.5 1.5"></path><path d="M17.5 17.5L19 19"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="M5 19l1.5-1.5"></path><path d="M17.5 6.5L19 5"></path></svg>บ่าย</button>';
                    return {
                        html: text
                    };
                },
                dayCellContent: function(info) {
                    console.log(info);
                    // Generate custom HTML for each day
                    var customHtml = `
                        <div>
                            <div>${info.dayNumberText}</div>
                            <button  data-tw-toggle="modal" data-tw-target="#basic-modal-preview" style="background-color: #D9DBE4;border-radius: 5px;color: white;padding: 15px;margin-left: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="sunrise" data-lucide="sunrise" class="lucide lucide-sunrise block mx-auto"><path d="M12 2v8"></path><path d="M5.2 11.2l1.4 1.4"></path><path d="M2 18h2"></path><path d="M20 18h2"></path><path d="M17.4 12.6l1.4-1.4"></path><path d="M22 22H2"></path><path d="M8 6l4-4 4 4"></path><path d="M16 18a4 4 0 00-8 0"></path></svg>เช้า </button> <button data-tw-toggle="modal" data-tw-target="#basic-modal-preview1" style="background-color: #D9DBE4;border-radius: 5px;color: white;margin-left: 10px;padding: 15px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="sun" data-lucide="sun" class="lucide lucide-sun block mx-auto"><circle cx="12" cy="12" r="4"></circle><path d="M12 2v2"></path><path d="M12 20v2"></path><path d="M5 5l1.5 1.5"></path><path d="M17.5 17.5L19 19"></path><path d="M2 12h2"></path><path d="M20 12h2"></path><path d="M5 19l1.5-1.5"></path><path d="M17.5 6.5L19 5"></path></svg>บ่าย</button>
                        </div>
                    `;
                    return {
                        html: customHtml
                    };
                },
                dateClick: function(info) {
                    alert('Clicked on: ' + info.dateStr);

                    // change the day's background color just for fun
                    //info.dayEl.style.backgroundColor = 'red';
                }
            });
            calendar.render();
        });
    </script>
</body>

</html>