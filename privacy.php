<?php
session_start();
include('admin/db_connect.php');
ob_start();
$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
foreach ($query as $key => $value) {
        if (!is_numeric($key))
                $_SESSION['system'][$key] = $value;
}
ob_end_flush();
include('header.php');


?>

<!--font awesome css-->
<link href="vendor/font-awesome/css/all.min.css" rel="stylesheet" type="text/css">
<!-- Bootstrap css-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/top.css">
<!-- Style css-->

</head>

<body>

        <header class="header">
                <nav class="navbar navbar-style">
                        <div class="container">

                                <!--Logo Section-->
                                <div class="nav navbar-header">
                                        <a href="index.php" class="navbar-brand">
                                                <img src="img/logos.png" alt="logo" width="150">
                                        </a>
                                </div>
                                <!--End of Logo Section-->
                                <ul class="nav navbar navbar-right" id="mainNav">
                                        <div class="container">
                                                <li class="nav-item"><i class="fa fa-home mr-2"></i><a href="index.php?page=home"> Home</a></li>
                                                <?php if (isset($_SESSION['login_id'])) : ?>
                                                        <li class="nav-item"><i class="fa fa-clipboard-check mr-2"></i><a href="userboard.php"> Dashboard</a> </li>
                                                        <li class="nav-item"><i class="fa fa-clipboard-list mr-2"></i><a href="status.php"> Status of Report</a></li>
                                                        <li class="nav-item"><i class="fa fa-clipboard-list mr-2"></i><a href="missing_receivedList.php"> Missing Persons</a></li>


                                                        <div class=" dropdown mr-4"><i class="fa fa-user mr-2"></i>
                                                                <a href="#" class="text-black dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_fname'] ?> <?php echo $_SESSION['login_lname'] ?></a>
                                                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                                                        <a class="dropdown-item" href="profile.php" id=""><i class="fa fa-users"></i> My Account</a>
                                                                        <a class="dropdown-item" href="change-password.php"><i class="fa fa-cog"></i> Settings</a>
                                                                        <a class="dropdown-item" href="reportList.php"><i class="fa fa-list"></i> Report List</a>
                                                                        <a class="dropdown-item" href="cancelled_reports.php"><i class="fa fa-ban"></i> Cancelled Reports</a>
                                                                        <a class="dropdown-item" href="admin/ajax.php?action=logout2" data-toggle="modal" data-target="#logoutModal"><i class="fa fa-power-off"></i> Logout</a>
                                                                </div>
                                                        </div>


                                                <?php else : ?>
                                                        <li class="nav-item"><i class="fa fa-user"></i><a href="javascript:void(0)" id="login_now"> Login</a></li>
                                                <?php endif; ?>

                                </ul>
                        </div>
                        </div>
                        <?php include('footer.php') ?>
                        <?php include('functions.php') ?>

                </nav>

                <body>
                        <div class="container p-4 text-dark">
                                <div data-custom-class="body">
                                        <div>
                                                <strong>
                                                        <span style="font-size: 26px;">
                                                                <span data-custom-class="title">PRIVACY NOTICE</span>
                                                        </span>
                                                </strong>
                                        </div>

                                        <div>
                                                <span style="color: rgb(127, 127, 127);"><strong>
                                                                <span style="font-size: 15px;">
                                                                        <span data-custom-class="subtitle">Last updated <bdt class="question">December 02, 2021</bdt>
                                                                        </span>
                                                                </span>
                                                        </strong>
                                                </span>
                                        </div>
                                        <hr>
                                        <div><br>
                                        </div>
                                        <div><br></div>
                                        <div><br>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <span style="color: rgb(127, 127, 127);">
                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                <span data-custom-class="body_text">Thank you for choosing to be part of our community at <bdt class="question">Barang Balasing</bdt>
                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="block-component">
                                                                                        </bdt>
                                                                                </span>
                                                                        </span>, doing business as <span style="color: rgb(89, 89, 89);">
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="question">Bullseye: Complaint Reporting Manangament System of Barangay Balasing</bdt>
                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                </span>
                                                                        </span> ("<span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                        <bdt class="block-component">
                                                                                        </bdt>
                                                                                        <bdt class="question"><strong>Bullseye: Complaint Reporting Manangament System of Barangay Balasing</strong>
                                                                                        </bdt>
                                                                                        <bdt class="else-block">

                                                                                </span>
                                                                                </bdt>
                                                                        </span>
                                                                </span>
                                                        </span>
                                                </span>
                                                </span>
                                                <span data-custom-class="body_text">," "<strong>we</strong>," "<strong>us</strong>," or "<strong>our</strong>"). We are committed to protecting your personal information and your right to privacy. If you have any questions or concerns about this privacy notice or our practices with regard to your personal information, please contact us at <bdt class="question">barangaybalasing@yahoo.com</bdt>.
                                                </span>
                                                </span>
                                                </span>
                                        </div>

                                        <div style="line-height: 1.5;"><br>
                                        </div>

                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text">This privacy notice describes how we might use your information if you:</span>
                                                        </span>
                                                </span>

                                                <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="block-component"></bdt>
                                                                                </span></span></span></span></span>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Visit our website<bdt class="block-component"></bdt> at <bdt class="question">
                                                                                        <a href="https://bullseye.com.ph" target="_blank" data-custom-class="link">https://bullseye.com.ph</a>
                                                                                </bdt>
                                                                                <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                </span></span></span></span></span></span></span>
                                                        </span>
                                                </li>
                                        </ul>
                                        <div>
                                                <bdt class="block-component"><span style="font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                        <bdt class="block-component">
                                                                                                        </bdt>
                                                                                                </span></span></span></span></span></span></span></span>
                                                        </li>
                                                        </ul>
                                                        <div>
                                                                <bdt class="block-component"><span style="font-size: 15px;">
                                                                                <span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);">
                                                                                                <span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span></span></span></span></span></span></span></span>
                                                                        </li>
                                                                        </ul>
                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);">
                                                                                                <span data-custom-class="body_text">
                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span></span></span>
                                                                        </div>
                                                                        <ul>
                                                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                        <span data-custom-class="body_text">Engage with us in other related ways ― including any sales, marketing, or events<span style="font-size: 15px;">
                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                        <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span></span></span></span></span>
                                                                                </li>
                                                                        </ul>
                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text">In this privacy notice, if we refer to:</span>
                                                                                        </span>
                                                                                </span>
                                                                                <span style="font-size: 15px;">
                                                                                        <span style="color: rgb(127, 127, 127);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span>
                                                                                                        </span></span></span></span>
                                                                        </div>
                                                                        <ul>
                                                                                <li style="line-height: 1.5;">
                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                        <span data-custom-class="body_text">"<strong>Website</strong>," we are referring to any website of ours that references or links to this policy<span style="font-size: 15px;">
                                                                                                                        <span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span></span></span>
                                                                                </li>
                                                                        </ul>
                                                                        <div>
                                                                                <bdt class="block-component"><span style="font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(127, 127, 127);">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span></span></span></span></span></span>
                                                                                        </li>
                                                                                        </ul>
                                                                                        <div>
                                                                                                <bdt class="block-component">
                                                                                                        <span style="font-size: 15px;">
                                                                                                                <span style="font-size: 15px;">
                                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </bdt>
                                                                                        </div>
                                                                                        <ul>
                                                                                                <li style="line-height: 1.5;">
                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">"<strong>Services</strong>," we are referring to our<span style="font-size: 15px;">
                                                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                                                <span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                </span>
                                                                                                                                                        </span>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span> Website,<span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <span style="font-size: 15px;">
                                                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                                                                <span style="font-size: 15px;">
                                                                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                                                </bdt>
                                                                                                                                                                                        </span>
                                                                                                                                                                                </span>
                                                                                                                                                                        </span>
                                                                                                                                                                </span>
                                                                                                                                                        </span>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                        <span style="font-size: 15px;">
                                                                                                                <span style="color: rgb(127, 127, 127);">
                                                                                                                        <span data-custom-class="body_text"> and other related services, including any sales, marketing, or events<span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <span style="font-size: 15px;">
                                                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                                                                <span style="font-size: 15px;">
                                                                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                        </span>
                                                                                                                                                                                </span>
                                                                                                                                                                        </span>
                                                                                                                                                                </span>
                                                                                                                                                        </span>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                        </span>
                                                                                                        </span>
                                                                                                        </span>
                                                                                                </li>
                                                                                        </ul>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span data-custom-class="body_text">The purpose of this privacy notice is to explain to you in the clearest way possible what information we collect, how we use it, and what rights you have in relation to it. If there are any terms in this privacy notice that you do not agree with, please discontinue use of our Services immediately.
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;"><br>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <strong>Please read this privacy notice carefully, as it will help you understand what we do with the information that we collect.
                                                                                                                                </strong>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>

                                                                                        <!--Table of contents-->

                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(0, 0, 0);">
                                                                                                                        <strong><span data-custom-class="heading_1">TABLE OF CONTENTS</span></strong>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;"><br>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#infocollect">
                                                                                                                <span style="color: rgb(89, 89, 89);">1. WHAT INFORMATION DO WE COLLECT?
                                                                                                                </span>
                                                                                                        </a>
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#infouse">
                                                                                                                <span style="color: rgb(89, 89, 89);">2. HOW DO WE USE YOUR INFORMATION?</span>
                                                                                                        </a>
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                <a data-custom-class="link" href="#infoshare">3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</a>
                                                                                                        </span>
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span>
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                                </span><span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#inforetain">
                                                                                                                <span style="color: rgb(89, 89, 89);">4. HOW LONG DO WE KEEP YOUR INFORMATION?</span></a>
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <span style="color: rgb(89, 89, 89);">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#infosafe">
                                                                                                                <span style="color: rgb(89, 89, 89);">5. HOW DO WE KEEP YOUR INFORMATION SAFE?</span>
                                                                                                        </a>
                                                                                                        <span style="color: rgb(127, 127, 127);">
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                        <span style="color: rgb(89, 89, 89);"><a data-custom-class="link" href="#privacyrights">6. WHAT ARE YOUR PRIVACY RIGHTS?</a></span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#DNT">
                                                                                                                <span style="color: rgb(89, 89, 89);">7. CONTROLS FOR DO-NOT-TRACK FEATURES</span></a>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;">
                                                                                                        <a data-custom-class="link" href="#policyupdates">
                                                                                                                <span style="color: rgb(89, 89, 89);">8. DO WE MAKE UPDATES TO THIS NOTICE?</span>
                                                                                                        </a>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <a data-custom-class="link" href="#contact">
                                                                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;">9. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span>
                                                                                                </a>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <a data-custom-class="link" href="#request">
                                                                                                        <span style="color: rgb(89, 89, 89);">10. HOW CAN YOU REVIEW, UPDATE OR DELETE THE DATA WE COLLECT FROM YOU?</span>
                                                                                                </a>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <br>
                                                                                        </div>
                                                                                        <div id="infocollect" style="line-height: 1.5;">
                                                                                                <span style="color: rgb(127, 127, 127);">
                                                                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                <span id="control" style="color: rgb(0, 0, 0);">

                                                                                                                                        <!--Answer-->

                                                                                                                                        <strong><span data-custom-class="heading_1">1. WHAT INFORMATION DO WE COLLECT?</span>
                                                                                                                                        </strong>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <br>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span data-custom-class="heading_2" style="color: rgb(0, 0, 0);">
                                                                                                        <span style="font-size: 15px;"><strong>Personal information you disclose to us</strong>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </div>

                                                                                        <div>
                                                                                                <div>
                                                                                                        <br>
                                                                                                </div>
                                                                                                <div style="line-height: 1.5;">
                                                                                                        <span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <strong><em>In Short: </em>
                                                                                                                                                        </strong>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <strong><em> </em></strong>
                                                                                                                                                        <em>We collect personal information that you provide to us.</em>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div style="line-height: 1.5;">
                                                                                                <br>
                                                                                        </div>
                                                                                        <div style="line-height: 1.5;">
                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                <span data-custom-class="body_text">We collect personal information that you voluntarily provide to us when you <span style="font-size: 15px;">
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                        </span>register on the </span>
                                                                                                                <span style="font-size: 15px;">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component">
                                                                                                                                </bdt>Website, <bdt class="block-component">
                                                                                                                        </span>
                                                                                </bdt>
                                                                                <span data-custom-class="body_text">
                                                                                        <span style="font-size: 15px;">
                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                </bdt>
                                                                                        </span>
                                                                                </span>
                                                                                <span data-custom-class="body_text">express an interest in obtaining information about us or our products and Services, when you participate in activities on the <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                        <span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                </span>
                                                                </bdt>
                                                                </span>
                                                                </span>
                                                                </span>
                                                                <bdt class="block-component">

                                                                </bdt>
                                                                </span>
                                                                </span>
                                                                <span data-custom-class="body_text"> or otherwise when you contact us.</span>
                                                                </span>
                                                                </span>
                                                        </div>
                                                        <div style="line-height: 1.5;">
                                                                <br>
                                                        </div>

                                                        <div style="line-height: 1.5;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                <span data-custom-class="body_text">The personal information that we collect depends on the context of your interactions with us and the <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                        <span style="font-size: 15px;">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span style="font-size: 15px;">
                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                        <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                                </span>
                                                </bdt>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                                <span style="font-size: 15px;">, the choices you make and the products and features you use. The personal information we collect may include the following:
                                                        <bdt class="block-component"></bdt>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                        </div>

                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text"><strong>Personal Information Provided by You.</strong> We collect <span style="font-size: 15px;">
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">names</bdt>;
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">phone numbers</bdt>;
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">email addresses</bdt>;
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">mailing addresses</bdt>;
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">usernames</bdt>;
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>
                                                                                        <bdt class="question">passwords</bdt>;
                                                                                </span><span data-custom-class="body_text">
                                                                                        <bdt class="forloop-component"></bdt>and other similar information.
                                                                                </span>
                                                                                <span data-custom-class="body_text">
                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                        <bdt class="block-component">
                                                                                                <bdt class="block-component"></bdt>
                                                                                        </bdt>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                                        </span>
                                        </div>

                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text">All personal information that you provide to us must be true, complete and accurate, and you must notify us of any changes to such personal information.<bdt class="block-component"></bdt>
                                                                        <span data-custom-class="body_text"><span style="font-size: 15px;">
                                                                                        <bdt class="statement-end-if-in-editor">
                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                        <span style="font-size: 15px;">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="statement-end-if-in-editor">
                                                                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                </bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                        <bdt class="statement-end-if-in-editor">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                        </bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>

                                        <div style="line-height: 1.5;">
                                                <span data-custom-class="heading_2" style="color: rgb(0, 0, 0);">
                                                        <span style="font-size: 15px;"><strong>Information collected from other sources</strong>
                                                        </span>
                                                </span>
                                        </div>
                                        <div>
                                                <div>
                                                        <br>
                                                </div>
                                                <div style="line-height: 1.5;">
                                                        <span style="color: rgb(127, 127, 127);">
                                                                <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                        <span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span data-custom-class="body_text"><strong><em>In Short: </em></strong><em>We may collect limited data from public databases, marketing partners,
                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                        <span style="font-size: 15px;"><em><span data-custom-class="body_text">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                        </span></em></span></span>and other outside sources.</em>
                                                                                                </span>
                                                                                        </span>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                                        </span>
                                                </div>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text">In order to enhance our ability to provide relevant marketing, offers and services to you and update our records, we may obtain information about you from other sources, such as public databases, joint marketing partners, affiliate programs, data providers,<span style="color: rgb(89, 89, 89);">
                                                                                <span style="font-size: 15px;">
                                                                                        <span data-custom-class="body_text">
                                                                                                <bdt class="block-component"></bdt>
                                                                                        </span>
                                                                                </span>
                                                                        </span> as well as from other third parties. This information includes mailing addresses, job titles, email addresses, phone numbers, intent data (or user behavior data), Internet Protocol (IP) addresses, social media profiles, social media URLs and custom profiles, for purposes of targeted advertising and event promotion.<span style="color: rgb(89, 89, 89);">
                                                                                <span style="font-size: 15px;">
                                                                                        <span data-custom-class="body_text">
                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                        <span style="font-size: 15px;">
                                                                                                                <span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </span>
                                                                                </span>
                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                        <bdt class="block-component">
                                                                                                <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                                                        <span data-custom-class="body_text">
                                                                                                                <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                <bdt class="statement-end-if-in-editor">
                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                </bdt>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </bdt>
                                                                                </span>
                                                                        </span>
                                                                        <bdt class="block-component"></bdt>
                                                                </span>
                                                        </span>
                                                </span>
                                                </span>
                                                </span>
                                                </span>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>
                                        <div id="infouse" style="line-height: 1.5;">
                                                <span style="color: rgb(127, 127, 127);">
                                                        <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                <span id="control" style="color: rgb(0, 0, 0);"><strong>
                                                                                                <span data-custom-class="heading_1">2. HOW DO WE USE YOUR INFORMATION?</span></strong>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                                        </span>
                                                </span>
                                        </div>

                                        <div>
                                                <div style="line-height: 1.5;">
                                                        <br>
                                                </div>
                                                <div style="line-height: 1.5;">
                                                        <span style="color: rgb(127, 127, 127);">
                                                                <span style="color: rgb(89, 89, 89); font-size: 15px;">
                                                                        <span data-custom-class="body_text">
                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span data-custom-class="body_text">
                                                                                                        <strong>
                                                                                                                <em>In Short:

                                                                                                                </em>
                                                                                                        </strong>
                                                                                                        <em>We process your information for purposes based on legitimate business interests, the fulfillment of our contract with you, compliance with our legal obligations, and/or your consent.</em>
                                                                                                </span>
                                                                                        </span>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                                        </span>
                                                </div>
                                        </div>

                                        <div style="line-height: 1.5;">
                                                <br>
                                        </div>
                                        <div style="line-height: 1.5;">
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text">We use personal information collected via our <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                <span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                        <span style="font-size: 15px;">
                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component">
                                                                                                                                        </bdt>Website<bdt class="block-component">
                                                                                                                                </span></bdt>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </span>
                                                                                </span>
                                                                        </span> for a variety of business purposes described below. We process your personal information for these purposes in reliance on our legitimate business interests, in order to enter into or perform a contract with you, with your consent, and/or for compliance with our legal obligations. We indicate the specific processing grounds we rely on next to each purpose listed below.<bdt class="block-component"></bdt></span></span></span>
                                        </div>
                                        <div style="line-height: 1.5;"><br></div>
                                        <div style="line-height: 1.5;">
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text">We use the information we collect or receive:<bdt class="block-component"></bdt>
                                                                </span>
                                                        </span>
                                                </span>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                        <span data-custom-class="body_text">
                                                                                <strong>To facilitate account creation and logon process.</strong> If you choose to link your account with us to a third-party account (such as your Google or Facebook account), we use the information you allowed us to collect from those third parties to facilitate account creation and logon process for the performance of the contract.
                                                                                <span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;">
                                                                                                <span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                <bdt class="block-component"><span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                                        <span style="font-size: 15px;">
                                                                                                                                                                                <span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                                                                                <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                                <span data-custom-class="body_text">
                                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                                </span>
                                                                                                                                                                                                        </span>
                                                                                                                                                                                                </span>
                                                                                                                                                                                        </span>
                                                                                                                                                                                </span>
                                                                                                                                                                        </span>
                                                                                                                                                                </span>
                                                                                                                                                        </span>
                                                                                                                                                </span>
                                                                                                                                        </span>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </bdt>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </span>
                                                                                </span>
                                                                        </span>
                                                                </span>
                                                        </span>
                                                        </span></span></span></span></span>
                                                </li>
                                        </ul>

                                        <div>
                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span data-custom-class="body_text">
                                                                        <bdt class="block-component"></bdt>
                                                                </span>
                                                        </span>
                                                </span>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;">
                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                        <span data-custom-class="body_text">
                                                                                <strong>To post testimonials.</strong> We post testimonials on our <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                <span style="font-size: 15px;">
                                                                                                        <span data-custom-class="body_text">
                                                                                                                <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                        <span style="font-size: 15px; color: rgb(89, 89, 89);">
                                                                                                                                <span style="font-size: 15px;">
                                                                                                                                        <span data-custom-class="body_text">
                                                                                                                                                <bdt class="block-component"></bdt>Website<bdt class="block-component">

                                                                                                                                        </span>
                                                                                                                                        </bdt>
                                                                                                                                </span>
                                                                                                                        </span>
                                                                                                                </span>
                                                                                                        </span>
                                                                                                </span>
                                                                                        </span>
                                                                                </span> that may contain personal information. Prior to posting a testimonial, we will obtain your consent to use your name and the content of the testimonial. If you wish to update, or delete your testimonial, please contact us at <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                        <bdt class="block-component"></bdt>
                                                                                                        <bdt class="question">barangaybalasing@yahoo.com</bdt>
                                                                                                        <bdt class="else-block"></bdt>
                                                                                                </span></span></span> and be sure to include your name, testimonial location, and contact information.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span>
                                                </li>
                                        </ul>
                                        <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                        <bdt class="block-component"></bdt>
                                                                </span></span></span></div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Request feedback. </strong>We may use your information to request feedback and to contact you about your use of our <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                        </span></bdt></span></span></span></span></span></span></span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></li>
                                        </ul>
                                        <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                        <bdt class="block-component"></bdt>
                                                                </span></span></span></div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To enable user-to-user communications.</strong> We may use your information in order to enable user-to-user communications with each user's consent.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></span></span></span></li>
                                        </ul>
                                        <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                        <bdt class="block-component"></bdt>
                                                                </span></span></span></div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To manage user accounts. </strong>We may use your information for the purposes of managing our account and keeping it in working order.<bdt class="statement-end-if-in-editor"></bdt></span></span></span></li>
                                        </ul>
                                        <div>
                                                <bdt class="block-component"></bdt>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To send administrative information to you. </strong>We may use your personal information to send you product, service and new feature information and/or information about changes to our terms, conditions, and policies.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                </span></span></span></span></span></span></li>
                                        </ul>
                                        <div>
                                                <bdt class="block-component"></bdt>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To protect our Services. </strong>We may use your information as part of our efforts to keep our <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                        </span></bdt></span></span></span></span></span></span></span> safe and secure (for example, for fraud monitoring and prevention).<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                        </span></span></span></span></span></span></span></span></span></li>
                                        </ul>
                                        <div>
                                                <bdt class="block-component"></bdt>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To enforce our terms, conditions and policies for business purposes, to comply with legal and regulatory requirements or in connection with our contract.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></span></span></span></strong></span></span></span></li>
                                        </ul>
                                        <div>
                                                <bdt class="block-component"></bdt>
                                        </div>
                                        <ul>
                                                <li style="line-height: 1.5;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>To respond to legal requests and prevent harm. </strong>If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond.<span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></li>
                                        </ul>
                                        <p style="font-size: 15px;">
                                                <bdt class="block-component"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                        <p style="font-size: 15px;">
                                                <bdt class="block-component"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                        <p style="font-size: 15px;">
                                                <bdt class="block-component"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                        <p style="font-size: 15px;">
                                                <bdt class="block-component"></bdt></span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                        <div>
                                                <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></span></span></span></span></span></span></span></span></span></li>
                                                </ul>
                                                <div>
                                                        <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></li>
                                                        </ul>
                                                        <div>
                                                                <bdt class="block-component"><span style="font-size: 15px;"></bdt></span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px;">
                                                                                <bdt class="block-component"></bdt>
                                                                        </span>
                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"></span></bdt>
                                                                </div>
                                                                <div style="line-height: 1.5;"><br></div>
                                                                <div id="infoshare" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">3. WILL YOUR INFORMATION BE SHARED WITH ANYONE?</span></strong></span></span></span></span></span></div>
                                                                <div style="line-height: 1.5;"><br></div>
                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em> We only share information with your consent, to comply with laws, to provide you with services, to protect your rights, or to fulfill business obligations.</em></span></span></span></div>
                                                                <div style="line-height: 1.5;"><br></div>
                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may process or share your data that we hold based on the following legal basis:<bdt class="block-component"></bdt></span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Consent:</strong> We may process your data if you have given us specific consent to use your personal information for a specific purpose.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                        </span></span></span></span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                </span></span></span></bdt>
                                                                                                                </span></span></span></span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Legitimate Interests:</strong> We may process your data when it is reasonably necessary to achieve our legitimate business interests.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span></span></span></span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Performance of a Contract:</strong> Where we have entered into a contract with you, we may process your personal information to fulfill the terms of our contract.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span></span></span></span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Legal Obligations:</strong> We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span></span></span></span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Vital Interests:</strong> We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></span></span></span></span></li>
                                                                </ul>
                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">More specifically, we may need to process your data or share your personal information in the following situations:</span></span></span></div>
                                                                <ul>
                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Business Transfers.</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.</span></span></span></li>
                                                                </ul>
                                                                <div><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                </span></span></span></span></span></span></span></span></span></li>
                                                                        </ul>
                                                                        <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                        <bdt class="block-component"></bdt>
                                                                                                </span></span></span></span></span></span></span></span></li>
                                                                                </ul>
                                                                                <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                <bdt class="block-component"></bdt>
                                                                                                        </span></span></span></span></span></bdt></span></span></span></span></span></span></span></span></li>
                                                                                        </ul>
                                                                                        <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                </span></span></span></span></span></span></span></span></li>
                                                                                                </ul>
                                                                                                <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                        </span></span></span></div>
                                                                                                <ul>
                                                                                                        <li style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong>Business Partners. </strong>We may share your information with our business partners to offer you certain products, services or promotions.</span></span></span><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span></span></span></span></span></li>
                                                                                                </ul>
                                                                                                <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                        </span></span></span></span></span></span></span></span></li>
                                                                                                        </ul>
                                                                                                        <div><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></span></li>
                                                                                                                </ul>
                                                                                                                <div style="line-height: 1.5;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                        </span></div>
                                                                                                                <div><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                <bdt class="block-component"><span data-custom-class="heading_1"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                                                        </span>
                                                                                                                                                                                                        <bdt class="block-component"><span data-custom-class="body_text">
                                                                                                                                                                                                                        <bdt class="block-component"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                                                                                                                                                <bdt class="block-component">
                                                                                                                                                                                                                                                                                                        </span></bdt>
                                                                                                                                                                                                                </span>
                                                                                                                                                                                                </span></span></span></span></span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="inforetain" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">4. HOW LONG DO WE KEEP YOUR INFORMATION?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em> We keep your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.</em></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We will only keep your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting or other legal requirements). No purpose in this notice will require us keeping your personal information for longer than <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                </span></span></span>
                                                                                                                                                <bdt class="block-component"></bdt>the period of time in which users have an account with us<bdt class="block-component"></bdt><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="else-block"></bdt>
                                                                                                                                                                </span></span></span>.
                                                                                                                                        </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">When we have no ongoing legitimate business need to process your personal information, we will either delete or anonymize such information, or, if this is not possible (for example, because your personal information has been stored in backup archives), then we will securely store your personal information and isolate it from any further processing until deletion is possible.<span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                </span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="infosafe" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">5. HOW DO WE KEEP YOUR INFORMATION SAFE?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em> We aim to protect your personal information through a system of organizational and technical security measures.</em></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We have implemented appropriate technical and organizational security measures designed to protect the security of any personal information we process. However, despite our safeguards and efforts to secure your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security, and improperly collect, access, steal, or modify your information. Although we will do our best to protect your personal information, transmission of personal information to and from our <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                                <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                                                                                        </span></bdt></span></span></span></span></span></span></span> is at your own risk. You should only access the <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                                <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                                                                                        </span></bdt></span></span></span></span></span></span></span> within a secure environment.<span style="color: rgb(89, 89, 89);">
                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                </span><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div id="privacyrights" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">6. WHAT ARE YOUR PRIVACY RIGHTS?</span></strong></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short:</em></strong><em> <span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><em>
                                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                                </em></span></span></span>You may review, change, or terminate your account at any time.</em><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"> </span></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you are a resident in the EEA or UK and you believe we are unlawfully processing your personal information, you also have the right to complain to your local data protection supervisory authority. You can find their contact details here: <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(48, 48, 241);"><span data-custom-class="body_text"><a data-custom-class="link" href="https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" rel="noopener noreferrer" target="_blank"><span style="font-size: 15px;">https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm</span></a></span></span></span></span></span>.</span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you are a resident in Switzerland, the contact details for the data protection authorities are available here: <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(48, 48, 241);"><span data-custom-class="body_text"><span style="font-size: 15px;"><a data-custom-class="link" href="https://www.edoeb.admin.ch/edoeb/en/home.html" rel="noopener noreferrer" target="_blank">https://www.edoeb.admin.ch/edoeb/en/home.html</a></span></span></span></span></span></span>.<bdt class="block-component"></bdt>
                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                        </span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you have questions or comments about your privacy rights, you may email us at <span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="question">barangaybalasing@yahoo.com</bdt>
                                                                                                                                                                </span></span></span>.<span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                        </span></span></span></span></span></span></span></span></span></span></span></div>
                                                                                                                <div style="line-height: 1.5;"><br></div>
                                                                                                                <div style="line-height: 1.5;"><span data-custom-class="heading_2" style="color: rgb(0, 0, 0);"><span style="font-size: 15px;"><strong>Account Information</strong></span></span></div>
                                                                                                                <div>
                                                                                                                        <div><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you would at any time like to review or change the information in your account or terminate your account, you can:<bdt class="forloop-component"></bdt></span></span></span></span></span></span></div>
                                                                                                                        <ul>
                                                                                                                                <li style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                        <bdt class="question">Contact us using the contact information provided.</bdt>
                                                                                                                                                                                </span></span></span></span></span></span></li>
                                                                                                                        </ul>
                                                                                                                        <div><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                <bdt class="forloop-component"></bdt>
                                                                                                                                                                        </span></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, we may retain some information in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with applicable legal requirements.<span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                                                        </span></span></span></span></span></span></span><span data-custom-class="body_text">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><u>Opting out of email marketing:</u></strong> You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list — however, we may still communicate with you, for example to send you service-related emails that are necessary for the administration and use of your account, to respond to service requests, or for other non-marketing purposes. To otherwise opt-out, you may:<span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                <bdt class="forloop-component"></bdt>
                                                                                                                                                                        </span></span></span></span></span></span></div>
                                                                                                                        <ul>
                                                                                                                                <li style="line-height: 1.5;">
                                                                                                                                        <bdt class="question"><span data-custom-class="body_text">Contact us using the contact information provided.</span></bdt>
                                                                                                                                </li>
                                                                                                                        </ul>
                                                                                                                        <div>
                                                                                                                                <bdt class="forloop-component"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="font-size: 15px;">
                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                </span></span></span></span></span></span></span></span></bdt>
                                                                                                                        </div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div id="DNT" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">7. CONTROLS FOR DO-NOT-TRACK FEATURES</span></strong></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Most web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal your privacy preference not to have data about your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, we do not currently respond to DNT browser signals or any other mechanism that automatically communicates your choice not to be tracked online. If a standard for online tracking is adopted that we must follow in the future, we will inform you about that practice in a revised version of this privacy notice.</span></span> </span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div id="caresidents" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">8. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?</span></strong></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><strong><em>In Short: </em></strong><em> Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.</em></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.</span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you are under 18 years of age, reside in California, and have a registered account with <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                                        <bdt class="block-component"></bdt>the Website<bdt class="block-component">
                                                                                                                                                                                                                </span></bdt></span></span></span></span></span></span></span>, you have the right to request removal of unwanted data that you publicly post on the <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                                        <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                                                                                                </span></bdt></span></span></span></span></span></span></span>. To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the <span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                                        <bdt class="block-component"></bdt>Website<bdt class="block-component">
                                                                                                                                                                                                                </span></bdt></span></span></span></span></span></span></span>, but please be aware that the data may not be completely or comprehensively removed from all our systems (e.g. backups, etc.).<span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                        </bdt>
                                                                                                                                                                </span></span></span></span></span></span></span></span></span></span></span></bdt></span></span></span></span></span></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div id="policyupdates" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">9. DO WE MAKE UPDATES TO THIS NOTICE?</span></strong> </span> </span> </span> </span> </span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><em><strong>In Short: </strong> Yes, we will update this notice as necessary to stay compliant with relevant laws.</em></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">We may update this privacy notice from time to time. The updated version will be indicated by an updated "Revised" date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy notice, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy notice frequently to be informed of how we are protecting your information.</span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div id="contact" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">10. HOW CAN YOU CONTACT US ABOUT THIS NOTICE?</span></strong> </span> </span> </span> </span> </span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">If you have questions or comments about this notice, you may <span style="color: rgb(89, 89, 89); font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="block-component"></bdt>email us at <bdt class="question">barangaybalasing@yahoo.com</bdt>
                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                </span></span><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"> or by post to:</span></span></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text"><span style="font-size: 15px;"><span style="color: rgb(89, 89, 89);"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                                        <bdt class="question">Barang Balasing</bdt>
                                                                                                                                                                                </span></span></span></span></span><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span data-custom-class="body_text">
                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                </span></span></bdt></span></span></span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="question">Barangay Balasing</bdt><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span>
                                                                                                                                        </span></bdt></span></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                <bdt class="question">Santa Maria</bdt><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                                <bdt class="block-component"></bdt>, <bdt class="question">Bulacan</bdt>
                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                <bdt class="question">3022</bdt>
                                                                                                                                                                <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                        </span><span style="font-size: 15px;">
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                        </span></span>
                                                                                                                                        </span></bdt></span></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <bdt class="block-component"></bdt>
                                                                                                                                                                </span></span></span>
                                                                                                                                                <bdt class="question">Philippines</bdt><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                                                </span></span></span></bdt>
                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                </span></span></span><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;">
                                                                                                                                                                                                        <bdt class="statement-end-if-in-editor"></bdt>
                                                                                                                                                                                                </span></span></span></bdt>
                                                                                                                                                                </span></span></span>
                                                                                                                                        </span></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89);">
                                                                                                                                                                        <bdt class="statement-end-if-in-editor"><span style="color: rgb(89, 89, 89);"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                                        <bdt class="block-component">
                                                                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                                                </span></span></span>
                                                                                                                                                                </span></span></span><span style="font-size: 15px;"><span data-custom-class="body_text"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px;"><span data-custom-class="body_text">
                                                                                                                                                                                        <bdt class="statement-end-if-in-editor">
                                                                                                                                                                                                <bdt class="block-component"></bdt>
                                                                                                                                                                                </span></span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div id="request" style="line-height: 1.5;"><span style="color: rgb(127, 127, 127);"><span style="color: rgb(89, 89, 89); font-size: 15px;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span id="control" style="color: rgb(0, 0, 0);"><strong><span data-custom-class="heading_1">11. HOW CAN YOU REVIEW, UPDATE, OR DELETE THE DATA WE COLLECT FROM YOU?</span></strong> </span> </span> </span> </span> </span></div>
                                                                                                                        <div style="line-height: 1.5;"><br></div>
                                                                                                                        <div style="line-height: 1.5;"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span style="font-size: 15px; color: rgb(89, 89, 89);"><span data-custom-class="body_text">Based on the applicable laws of your country, you may have the right to request access to the personal information we collect from you, change that information, or delete it in some circumstances. To request to review, update, or delete your personal information, please <bdt class="block-component"></span></bdt><span data-custom-class="body_text">visit: <bdt class="question">https://bullseye.com.ph</bdt>
                                                                                                                                                        <bdt class="else-block"></bdt>
                                                                                                                                                </span></span><span data-custom-class="body_text">.</span></span></span></div>
                                                                                                                        <style>
                                                                                                                                ul {
                                                                                                                                        list-style-type: square;
                                                                                                                                }

                                                                                                                                ul>li>ul {
                                                                                                                                        list-style-type: circle;
                                                                                                                                }

                                                                                                                                ul>li>ul>li>ul {
                                                                                                                                        list-style-type: square;
                                                                                                                                }

                                                                                                                                ol li {
                                                                                                                                        font-family: Arial;
                                                                                                                                }
                                                                                                                        </style>
                                                                                                                </div>


                </body>

                </html>
                </label>


                </form>
                </div>
                </div>
                <div class="pt-5 my-5">

                        <footer class="text-dark text-center text-lg-start ">


                                <!-- Copyright -->
                                <div class="container">
                                        <div class="small text-center text-muted">Copyright © 2022 - <?php echo $_SESSION['system']['name'] ?> | <a href="index.php?=home/" target="_blank">BullSeye</a></div>
                                </div>

                        </footer>

                </div>

                </div>
                <script>
                        $('#terms').click(function() {
                                if ('<?php echo !isset($_SESSION['login_id']) ? 1 : 0 ?>' == 1) {
                                        uni_modal("Login", 'login.php', "large");
                                        return false;
                                }
                                uni_modal("Type of Report", 'category.php');
                        })
                        $('#terms-frm').submit(function(e) {
                                e.preventDefault()
                                start_load()
                                if ($(this).find('.alert-danger').length > 0)
                                        $(this).find('.alert-danger').remove();
                                $.ajax({
                                        url: 'admin/ajax.php?action=signup',
                                        method: 'POST',
                                        data: $(this).serialize(),
                                        error: err => {
                                                console.log(err)
                                                $('#signup-terms button[type="submit"]').removeAttr('disabled').html('Create');

                                        },
                                        success: function(resp) {
                                                if (resp == 1) {
                                                        location.reload();
                                                } else {
                                                        $('#signup-frm').prepend('<div class="alert alert-danger">Email already exist.</div>')
                                                        end_load()
                                                }
                                        }
                                })
                        })
                </script>
</body>

</html>