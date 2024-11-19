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
                        Transfer Slip Information
                    </h2>
                </div>

                <!-- BEGIN: Info ROW-->
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                        <label for="input-state-1" class="form-label">Attachment<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                        <form action="/file-upload" class="dropzone">
                            <div class="fallback"> <input name="file" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-slate-500"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">
                        <div class="mt-3">
                            <label for="input-state-1" class="form-label">เอกสารใบตราชั่ง<span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500 text-danger">*</span></label>
                            <input id="input-state-1" type="text" class="form-control" placeholder="กรุณากดดาวน์โหลด">
                        </div>
                    </div>
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">

                    </div>
                    <div class="grow w-full px-5 items-center justify-start lg:justify-start">

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
                <div style="background-color: #fff;">
                    <!-- BEGIN: Info ROW-->
                    <!DOCTYPE html>

                    <html>
                    <header>
                        <style>
                            body {
                                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                            }

                            table {
                                border-collapse: collapse;
                            }

                            td {
                                padding: 1mm;
                                border: var(--border-normal);
                                position: relative;
                            }

                            tbody tr:nth-child(odd) {
                                background: #fff;
                            }

                            tbody th {
                                border-bottom: 1px solid gray;
                            }
                        </style>
                    </header>

                    <body>

                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse;">
                            <tr style="font-size: 7mm; font-weight: bold; line-height: 15mm;">
                                <td>แจ้งยอดโอนเงิน</td>
                                <td style="text-align: right;">รวมทั้งสิ้น : <span style="font-weight: bold; font-size:9mm;color:red;">86,937.50</span> บาท</td>

                            </tr>
                            <tr style=" font-size: 5mm; line-height: 5mm;">
                                <td>รหัสลูกค้า Customer Code: </td>
                                <td><span style="font-weight: bold; ">907738</span></td>
                            </tr>
                            <tr style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ccc; font-size: 5mm; line-height: 8mm;">
                                <td>ชื่อบริษัท Company Name: </td>
                                <td> <span style="font-weight: bold; ">บ.เพียรทำดี รีไซเคิล จำกัด</span></td>
                            </tr>
                        </table>
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; border: 1px solid black; margin-bottom: 10mm;">
                            <tr style="font-size: 5mm; background-color: #B8E5FA;">
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">ใบงานเลขที่ <br> Doc no.</td>
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">วันรับสินค้า <br> Delivery Date </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td style="border: 1px solid black; padding: 3mm;">2024/0493-SCR  </td>
                                <td style="border: 1px solid black; padding: 3mm;">10 Sep 2024 </td>
                            </tr>
                        </table>

                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; border: 1px solid black; margin-bottom: 10mm;">
                            <tr style="font-size: 5mm; background-color: #B8E5FA;">
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">รายการสินค้า <br> Selling Item</td>
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">จำนวน<br> Quantity  </td>
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">หน่วย <br>Unit </td>
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">ราคาต่อหน่วย <br> Unit Price  </td>
                                <td style="border: 1px solid black; padding: 3mm; padding: 3mm;font-weight: bold;">มูลค่ารวมก่อนภาษี <br> Pre-Vat Amount </td>
                            </tr>
                            <tr style="border: 1px solid black;">
                                <td style="border: 1px solid black; padding: 3mm;">Plastic sheet PP/PE (พลาสติก PP/PE, ถุงจัมโป้กรีดก้นถุง) </td>
                                <td style="border: 1px solid black; padding: 3mm;">5,000  </td>
                                <td style="border: 1px solid black; padding: 3mm;">กิโลกรัม</td>
                                <td style="border: 1px solid black; padding: 3mm;">16.25</td>
                                <td style="border: 1px solid black; padding: 3mm;">81.250.00</td>
                            </tr>
                        </table>
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; margin-bottom: 10mm;">
                            <tr style="font-size: 5mm;">
                                <td style="border: 0px ; padding: 3mm; padding: 0mm;font-weight: bold;"></td>
                                <td style="border: 0px ; padding: 3mm; padding: 0mm;font-weight: bold;"></td>
                                <td style="border: 0px ; padding: 3mm; padding: 0mm;font-weight: bold;"></td>
                                <td style="border: 0px ; padding: 3mm; padding: 0mm;font-weight: bold;"></td>
                                <td style="border: 0px ; padding: 3mm; padding: 0mm;font-weight: bold;"></td>
                            </tr>
                            <tr style="border: 0px ">
                                <td colspan="4" style="border: 0px solid black; padding: 3mm;text-align: right;"> ภาษีมูลค่าเพิ่ม (บาท) VAT 7% </td>
                                <td style="border: 1px solid black; padding: 3mm;">5,687.50 </td>
                            </tr>
                            <tr style="border: 0px ">
                                <td colspan="4" style="border: 0px solid black; padding: 3mm;text-align: right;"> จำนวนเงินรวมทั้งสิ้น (บาท) Total Amount</td>
                                <td style="border: 1px solid black; padding: 3mm;"> 86,937.50</td>
                            </tr>
                        </table>
                        
                        
                        
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; margin-bottom: 10mm;">
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; margin-bottom: 10mm;">
                            <tr>
                                <td colspan="2" style="border: 1px solid black; padding: 3mm;background-color: #B8E5FA;">รายละเอียดการโอนเงิน </td>                                
                                <td style="border: 1px solid black; padding: 3mm;background-color: #B8E5FA; width: 80mm;">หมายเหตุ </td>
                            </tr>
                            <tr style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ccc; margin-top: 10mm; margin-bottom: 10mm; ">
                                <td style="border: 1px solid black; padding: 3mm;">ชื่อบัญชี Account Name  </td>
                                <td style="border: 1px solid black; padding: 3mm;"><span style="font-weight: bold; ">: บจ.เอ็ชเอ็มซี โปลีเมอส์ </span> </td>
                                <td rowspan="3" style="border: 1px solid black; padding: 3mm; "> เอกสารใบแจ้งหนี้/ใบกำกับภาษี/ใบเสร็จรับเงิน บริษัทฯ จะนำส่งทางอีเมลในวันทำการถัดไป </td>
                            </tr>
                            <tr style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ccc; margin-top: 10mm; margin-bottom: 10mm; ">
                                <td style="border: 1px solid black; padding: 3mm;">ชื่อธนาคาร Bank Name </td>
                                <td style="border: 1px solid black; padding: 3mm;"><span style="font-weight: bold; ">: ธนาคารกรุงเทพ สาขามาบตาพุด</span> </td>
                            </tr>
                            <tr style="border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: #ccc; margin-top: 10mm; margin-bottom: 10mm; ">
                                <td style="border: 1px solid black; padding: 3mm;">เลขที่บัญชี Account Number  </td>
                                <td style="border: 1px solid black; padding: 3mm;"><span style="font-weight: bold; ">:  <span style="font-weight: bold; color:red;">443-0-13331-6 </span> </span> </td>
                            </tr>
                        </table>
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm;margin-top: 10mm; margin-bottom: 10mm;">
                            <tr>
                                <td style="border: 1px solid black; padding: 3mm;background-color: #B8E5FA;">Notification </td>
                            </tr>
                            <tr>
                                <td style="border: 1px solid black; padding: 3mm;">ขึ้นออโต้ <br> ขึ้นออโต้ <br> ขึ้นออโต้ </td>
                            </tr>
                        </table>
                        <table style="width: 200mm;  margin-left: 5mm;border-collapse: collapse; font-size: 5mm; margin-top: 10mm; margin-bottom: 10mm;">
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>



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