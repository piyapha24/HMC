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
            <div>
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto font-bold">
                        Document Information
                    </h2>
                </div>
                <!-- BEGIN: Info -->
                <div class="intro-y box px-5 pt-5 mt-5">
                    <!-- BEGIN: Info ROW-->
                    <!DOCTYPE html>

                    <html>
                    <header>
                        <style>
                            .new-page {
                                page-break-before: always;
                            }

                            .center {
                                text-align: center;

                            }

                            .left {
                                text-align: left;
                                margin-left: 6px;
                                /*margin-top: 10px;*/
                            }

                            .right {
                                text-align: right;
                                margin-right: 4px;
                            }

                            .teacher {
                                margin-left: 4px;
                            }

                            td {
                                height: 130px;
                                width: 120px;
                            }

                            :root {
                                --border-strong: 3px solid #777;
                                --border-normal: 1px solid gray;
                            }

                            body {
                                font-family: Georgia, 'Times New Roman', Times, serif;
                            }

                            table>caption {
                                font-size: 6mm;
                                font-weight: bolder;
                                letter-spacing: 1mm;
                            }


                            /* 210 x 297 mm */

                            table {
                                width: 297mm;
                                height: 210mm;
                                border-collapse: collapse;
                            }

                            td {
                                padding: 1mm;
                                border: var(--border-normal);
                                position: relative;
                                font-size: 2.1mm;
                                font-weight: bold;
                            }

                            tbody tr:nth-child(odd) {
                                background: #fff;
                            }

                            tbody tr:last-child {
                                border-bottom: var(--border-strong);
                            }

                            tbody tr> :last-child {
                                border-right: var(--border-strong);
                            }


                            /* top header */

                            .top_head>th {
                                width: 54mm;
                                height: 10mm;
                                vertical-align: bottom;
                                border-top: var(--border-strong);
                                border-bottom: var(--border-strong);
                                border-right: 1px solid gray;
                            }

                            .top_head :first-child {
                                width: 27mm;
                                border: var(--border-strong);
                            }

                            .top_head :last-child {
                                border-right: var(--border-strong);
                            }


                            /* left header */

                            tbody th {
                                border-left: var(--border-strong);
                                border-right: var(--border-strong);
                                border-bottom: 1px solid gray;
                            }

                            tbody>tr:last-child th {
                                border-bottom: var(--border-strong);
                            }


                            /* row */

                            tbody td>div {
                                height: 34mm;
                                overflow: hidden;
                            }

                            .vertical_span_all {
                                font-size: 5mm;
                                font-weight: bolder;
                                text-align: center;
                                border-bottom: var(--border-strong);
                            }

                            .vertical_span_all div {
                                height: 10mm;
                            }


                            /* td contents */

                            .left {
                                position: absolute;
                                top: 1mm;
                                left: 1mm;
                            }

                            .right {
                                position: absolute;
                                left: 1mm;
                                bottom: 1mm;
                            }

                            .teacher {
                                position: absolute;
                                right: 1mm;
                                bottom: 1mm;
                            }

                            .note {
                                font-size: 3mm;
                            }

                            .note :last-child {
                                float: right;
                            }

                            @page {
                                margin: 5mm;
                            }
                        </style>
                    </header>

                    <body>
                        <!-- Heading -->
                        <!-- Table -->
                        <table>

                            <!-- Day/Periods -->
                            <tr class="top_head">
                                <th scope="col">Day/Period</th>
                                <th scope="col">I</th>
                                <th scope="col">II</th>
                            </tr>
                            <tbody>
                                <!-- Monday -->
                                <tr>
                                    <th scope="row" class="center">
                                        <b>Monday</b>
                                    </th>
                                    <td class="vertical_span_all">
                                       
                                    </td>
                                    <td colspan=1>
                                        
                                    </td>
                                    
                                    

                                </tr>
                                
                            
                                
                                
                            </tbody>
                        </table>

                        <!-- Table -->
                        <table>

                            <!-- Day/Periods -->
                            <tr class="top_head">
                                <th scope="col">Day/Period</th>
                                <th scope="col">I</th>
                                <th scope="col">II</th>
                                <th scope="col">III</th>
                                <th scope="col">1:15-1:45</th>
                                <th scope="col">IV</th>
                                <th scope="col">V</th>

                            </tr>
                            <tbody>
                                <!-- Monday -->
                                <tr>
                                    <th scope="row" class="center">
                                        <b>Monday</b>
                                    </th>
                                    <td rowspan="6" class="vertical_span_all">
                                       
                                    </td>
                                    <td colspan=1>
                                        
                                    </td>
                                    
                                    

                                </tr>
                                <!-- Tuesday -->
                                <tr>
                                    <th scope="row" class="center">
                                        
                                    </th>
                                    <td colspan=1>
                                        
                                    </td>
                                    
                                    
                                </tr>
                            
                                <tr>
                                    <td class="center">
                                        
                                    </td>
                                    <td colspan=1>
                                        
                                    </td>
                                    
                                    
                                </tr>
                                <!-- Thursday -->
                                <tr>
                                    <td class="center">
                                        
                                    </td>
                                    
                                    <td colspan=1>
                                        
                                    </td>
                                    
                                    

                                </tr>
                                <!-- Friday -->
                                <tr>
                                    <td class="center">
                                        <b>Friday</b>
                                    </td>
                                    
                                    <td colspan=1>
                                    </td>
                                    
                                    

                                </tr>
                            </tbody>
                        </table>

                        <p class="new-page">
                </div>
</body>

</html>
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