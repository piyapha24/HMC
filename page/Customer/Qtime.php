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
		.fc-day-today .fc-daygrid-day-frame{
			background-color: #f2f2f2!important;
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
                            <span class="font-medium xl:ml-auto px-2">วันที่ลูกค้าแก้ไขวันขนสินค้า  รอ HMC  ยืนยันกลับ</span>
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
                            <span class="font-medium xl:ml-auto px-2">วันที่ลูกค้ายืนยันคิวจองและ HMC  ยืนยันเรียบร้อย</span>
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
                                                <div class="modal-body p-10 text-center" bis_skin_checked="1"> This is totally awesome blank modal! </div>
                                            </div>
                                        </div>
                                    </div>
<div id="basic-modal-preview1" class="modal" tabindex="-1" aria-hidden="true" bis_skin_checked="1" style="">
                                        <div class="modal-dialog" bis_skin_checked="1">
                                            <div class="modal-content" bis_skin_checked="1">
                                                <div class="modal-body p-10 text-center" bis_skin_checked="1"> This is totally awesome blank modal! </div>
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
			events:eventc,
			eventContent: function (args, createElement){
				console.log(1);
				args.backgroundColor='#198754';
			  const text = '<button  data-tw-toggle="modal" data-tw-target="#basic-modal-preview" style="background-color: #B8E5FA;color: white;padding: 15px;margin-left: 10px;border-radius: 5px;">เช้า </button> <button data-tw-toggle="modal" data-tw-target="#basic-modal-preview1" style="background-color: #00ADEF;color: white;margin-left: 10px;padding: 15px; border-radius: 5px;">บ่าย</button>';
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
                            <button  data-tw-toggle="modal" data-tw-target="#basic-modal-preview" style="background-color: #D9DBE4;border-radius: 5px;color: white;padding: 15px;margin-left: 10px;">เช้า </button> <button data-tw-toggle="modal" data-tw-target="#basic-modal-preview1" style="background-color: #D9DBE4;border-radius: 5px;color: white;margin-left: 10px;padding: 15px;">บ่าย</button>
                        </div>
                    `;
                    return { html: customHtml };
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