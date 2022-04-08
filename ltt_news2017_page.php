<html lang="en" class="no-js">

<head>
    <title>最新消息 - <?php echo $_GET['web']; ?></title>
    <meta charset="UTF-8">
    <meta name="keywords" content="LASER TEK, lasertek, 雷科股份有限公司, 社會責任, 最新消息<?php echo $_GET['years']; ?>" />
    <meta name="description" content="最新消息<?php echo $_GET['years']; ?>" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="zh-tw">
    <link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/animations.css"> <!-- Animation style -->
    <link rel="stylesheet" href="css/section_index.css"> <!-- 首頁內容 style -->
    <link rel="stylesheet" href="css/balloon.css"> <!-- 提示框 style -->
    <link rel="stylesheet" href="css/accounts_butt_two.min.css"> <!-- 按鈕 style -->
    <link rel="stylesheet" href="css/layout_page_style.css"> <!-- 版面 style -->
    <script src=" js/modernizr.js"> </script> <!-- Modernizr -->
    <!--動畫使用-->
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
            new WOW().init();
        };
    </script>
    <!--內頁專用-->
    <link rel="stylesheet" href="css/section_page.css"> <!-- 首頁內容 style -->
    <!--表單-->
    <link rel="stylesheet" href="css/table.css">
     <!--客服浮動+回上一頁-->
    <script type="text/javascript" src="js/service.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-82641040-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-82641040-3');
    </script>

    <!-- 隱私權政策 -->
    <script id="cookieWarn" src="js/cookie-warn.js" data-debug="true"></script>


</head>

<body class="nav-is-fixed">

    <h1>最新消息- <?php echo $_GET['web']; ?></h1>

    <!-- header  -->
    <?php include 'header.php'; ?>

    <main class="cd-main-content">

        <!-- 主要內容表列 -->

        <!-- 首頁專用橫幅 -->

        <div class="paralasic_news" data-paralasic="0.4">
            <h2 class="wow fadeInDown">持續創新改善 全員追求卓越</h2>
            <h5 class="wow fadeInDown">Continuous innovation and improvement <br>All employees pursue excellence</h5>
        </div>


        <!-- 各單位專用橫幅 -->
        <!--
        <div id="paralasic02">
            <video class="masthead-video" autoplay loop muted poster="img/index_laser.jpg">
                <source src="mov/laser.mp4" type="video/mp4" width="auto">
                <source src="mov/laser.webm" type="video/webm" width="auto">
            </video>
            <h2 class="wow fadeInDown">持續創新改善 全員追求卓越</h2>
        </div>
         -->
        <!-- 
             配合以上橫幅
             影片使用 class="ltt_container"
             圖片使用 class="ltt_container_img"
         -->

        <div class="ltt_container_img">



            <!--產品表列-->
            <section class="ltt_news_all02">

                <!--麵包屑-->
                <div id="breadcrumbs">
                    <ul>
                        <li><a href="index.php">首頁</a> > </li>
                        <li><a href="#">最新消息</a> > </li>
                        <li><a href="ltt_news2017.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
                        <li><?php echo $_GET['web']; ?></li>
                    </ul>
                </div>


                <!--產品選單-->
                <div class="product_menu">
                    <ul class="product_menu_ul">

                    </ul>
                </div>


                <h3 av-animation="fadeInDown">最新消息 </h3>
                <!--<h4 av-animation="fadeInUp">對於重大訊息只做重點性揭露，若欲查詢完整公告資訊，請連結至<a href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>查閱完整資料。</h4>-->

                <div class="ltt_box_content_all white_bg">

                    <div class="layout_style_100 ltt_service_content_table">
                        <!-- 新增系结的URL变数 -->
                        <?php
                        switch ($_GET['news']) {
                            case 1:
                        ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收310,831仟元，與去年同期相比增加150,766仟元，增加94.19%，累計本公司2016年12月集團自結合併營收共2,004,085仟元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 2:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170111_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170111_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 3:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170126_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 4:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收166,429仟元，與去年同期相比增加38,689仟元，增加30.29%，累計本公司2017年1月集團自結合併營收共166,429仟元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>

                                    </div>
                                </div>

                            <?php
                                break;
                            case 5:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170301_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 6:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收221,584仟元，與去年同期相比增加132,365仟元，增加148.36%，累計本公司2017年2月集團自結合併營收共388,013仟元，較去年同期增加78.84%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 7:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170322_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 8:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170328_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 9:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收280,193仟元，與去年同期相比增加124,030仟元，增加79.42%，累計本公司2017年3月集團自結合併營收共668,206仟元，較去年同期增加79.09%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 10:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170428_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>



                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 11:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170821_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 12:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收238,052仟元，與去年同期相比增加80,555仟元，增加51.15%，累計本公司2017年4月集團自結合併營收共906,258仟元，較去年同期增加70.79%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 13:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170525_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 14:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收156,186仟元，與去年同期相比減少26,714仟元，減少14.61%，累計本公司2017年5月集團自結合併營收共1,062,44仟元，較去年同期增加48.90%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 15:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170609_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20170609_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 16:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收194,095仟元，與去年同期相比增加49,726仟元，增加34.44%，累計本公司2017年6月集團自結合併營收共1,256,539仟元，較去年同期增加46.47%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 17:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收155,075仟元，與去年同期相比增加18,472仟元，增加13.52%，累計本公司2017年7月集團自結合併營收共1,411,614仟元，較去年同期增加41.94%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 18:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收187,924仟元，與去年同期相比增加29,763仟元，增加18.82%，累計本公司2017年8月集團自結合併營收共 1,599,538仟元，較去年同期增加38.77%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 19:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171003_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 20:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收 209,999仟元，與去年同期相比增加 15,437仟元，增加 7.93%，累計本公司2017年9月集團自結合併營收共 1,809,537仟元，較去年同期增加34.32%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 21:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171017_00.png" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 22:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171101_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>

                                    </div>
                                </div>

                            <?php
                                break;
                            case 23:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收 158,852仟元，與去年同期相比減少16,121仟元，減少9.21%，累計本公司2017年10月集團自結合併營收共 1,968,389仟元，較去年同期增加29.31%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 24:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171117_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>



                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 25:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171130_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 26:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收 148,559仟元，與去年同期相比減少22,508仟元，減少13.16%，累計本公司2017年11月集團自結合併營收共 2,116,948仟元，較去年同期增加25.02%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 25:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171130_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 26:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收 148,559仟元，與去年同期相比減少22,508仟元，減少13.16%，累計本公司2017年11月集團自結合併營收共 2,116,948仟元，較去年同期增加25.02%。/td>
                                                    </tr>
                                                    <tr>
                                                        <td>上述營收數字係本公司每月於<a aria-label="前往網站" data-balloon-pos="up" href="https://mops.twse.com.tw/mops/web/t05st01" target="_blank">公開資訊觀測站</a>申報之數字，最終之營收數字以經會計師簽證之財務報告為準。</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 27:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171214_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 28:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171221_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171221_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>


                            <?php
                                break;
                            case 29:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171228_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2017/news_20171228_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_100 csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>





                        <?php
                                break;
                        }
                        ?>

                    </div>
                </div>
        </div>
        </section>
        <!--公司產品服務 ＥＮＤ-->


        <!-- footer -->
        <?php include 'footer.php'; ?>

        </div>

    </main>


    <!-- menu -->
    <?php include 'menu_news.php'; ?>


    <!-- search  -->
    <?php include 'search.php'; ?>


    <!-- right 各單位快速連結 桌機版+平板手機  -->
    <?php include 'right_service.php'; ?>

    <!-- 客服專線 -->
    <?php include 'service_wid.php'; ?>


    <!-- TOP-->
    <a href="" id="scroll-to-top"></a>


    <!-- 網站基本架構 -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->


    <!-- 滾動式底圖 -->
    <script async type="text/javascript" src="js/paraLasic.1.1.js"></script>
    <!--置頂-->
    <script type="text/javascript" src="js/illbeback.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#scroll-to-top").illBeBack();
        });
    </script>


</body>

</html>