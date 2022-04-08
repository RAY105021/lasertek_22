<html lang="en" class="no-js">

<head>
    <title>社會參與 - <?php echo $_GET['web']; ?></title>
    <meta charset="UTF-8">
    <meta name="keywords" content="LASER TEK, lasertek, 雷科股份有限公司, 社會責任,社會參與" />
    <meta name="description" content="社會參與" />
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

    <h1>ESG永續發展 社會參與 <?php echo $_GET['web']; ?></h1>

    <!-- header  -->
    <?php include 'header.php'; ?>

    <main class="cd-main-content">

        <!-- 主要內容表列 -->

        <!-- 首頁專用橫幅 -->

        <div class="paralasic_csr" data-paralasic="0.4">
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
                        <li><a href="#">ESG永續發展</a> > </awqqli>
                        <li><a href="csr_news.php">社會參與</a> > </li>
                        <li><?php echo $_GET['web']; ?></li>
                    </ul>
                </div>


                <!--產品選單-->
                <div class="product_menu">
                    <ul class="product_menu_ul">

                        <li class="product_select33 product_menu_light_service product_menu_width">
                            <div class="product_menu_table">
                                <a class="button-big_localhost" href="csr_news.php">
                                    <div class="product_menu_table_img_service"><img src="img/line-icon-27_1.svg" alt="社會參與"></div>
                                    <div class="product_menu_table_select">
                                        <div class="product_select100 typeface_bold_white_service">社會參與</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="product_select33 product_menu_light_service product_menu_width">
                            <div class="product_menu_table">
                                <a class="button-big" href="csr_communication.php">
                                    <div class="product_menu_table_img_service"><img src="img/line-icon-28.svg" alt="利害關係人"></div>
                                    <div class="product_menu_table_select">
                                        <div class="product_select100 typeface_bold_white_service">利害關係人</div>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="product_select33 product_menu_light_service product_menu_width">
                            <div class="product_menu_table">
                                <a class="button-big" href="csr_report.php">
                                    <div class="product_menu_table_img_service"><img src="img/line-icon-31.svg" alt="CSR報告"></div>
                                    <div class="product_menu_table_select">
                                        <div class="product_select100 typeface_bold_white_service">ESG報告</div>
                                    </div>
                                </a>
                            </div>
                        </li>


                    </ul>
                </div>


                <h3 av-animation="fadeInDown">社會參與</h3>
                <h4 av-animation="fadeInUp">歷年雷科參與CSR捐助事蹟與活動花絮</h4>

                <div class="ltt_box_content_all white_bg">

                    <div class="layout_style_100 ltt_service_content_table">
                        <!-- 新增系结的URL变数 -->
                        <?php
                        switch ($_GET['csr']) {
                            case 1:
                        ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150331_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150331_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150331_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150331_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150810_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20150810_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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
                                                <img src="img/csr/csr_20151019_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20151102_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20151106_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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
                                        <div class="ltt_service_content_table_text">
                                            <p>【捐贈單位】雷科股份有限公司【受贈單位】屏東縣地磨兒國小【受贈者】伍麗華 校長</p>
                                            <p>八八風災後，地磨兒國小德文校區、大社校區、達來校區受創，部落居民分別移住到山下永久屋。但部落居民還是希望能讓孩子接受原住民族教育的沉浸，讓孩子可以回到部落讀書。 因此，雷科股份有限公司除了為感謝地磨兒國小合唱團於雷科尾牙之演出，且為關懷偏遠地區學校，透過捐款方式，補助學校經費以租用交通車，接孩子回到部落學校讀書， 使受資助學生得以在良好的環境下學習與成長。 </p>

                                        </div>
                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160201_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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
                                        <div class="ltt_service_content_table_text">
                                            <p>【捐贈單位】雷科股份有限公司【受贈單位】高雄市愛樂文化藝術基金會【受贈者】朱宏昌 執行長</p>
                                            <p>從2009年起，高雄春天藝術節持續邀請國際團隊及在地演出團隊，更自創品牌-草地音樂會、寶寶音樂會，為高雄染上濃郁的藝文氣息及自信， 在今年嚴選超過30檔國內外音樂、戲劇、舞蹈、傳統戲曲、親子等表演節目，其中多檔為台灣唯一場。雷科股份有限公司為支持幫助高雄藝文活動永續發展， 贊助2016高雄春天藝術節，帶動藝文結合高科技企業合作，促進藝術深根市民生活，共創人文城市、人文企業的魅力形象。 </p>
                                        </div>
                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160201_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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
                                        <div class="ltt_service_content_table_text">
                                            <p>肯定國軍對台南震災，今天下午雷科股份有限公司鄭再興董事長率14家南部企業公司，到旗山陸軍八軍團進行敬軍活動，並致贈五十萬元慰問金，感謝國軍在這次震災的救災愛民的辛勞付出， 八軍團指揮官季連成中將親自接待，鄭再興董事長表示，每逢重大災情，國軍救災如同作戰，讓國人有安全、安心的力量，真的謝謝國軍官兵弟兄無時無刻的付出，守護國人安全。 </p>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160308_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160328_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160328_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160328_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160328_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160425_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="csr_input">
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

                                        <div class="ltt_service_content_table_text">
                                            <p>員工是企業最佳策略夥伴，亦是公司最重要的資產，並期望同仁能在工作中持續成長。雷科提供同仁在職進修補助，讓同仁能實現人生目標與理想。恭喜蘇浩仟、胡佳益、陳虹銘三位同仁，錄取國立高雄大學亞太工商管理學系105年度產碩專班。</p>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160701_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160715_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160715_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160715_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160715_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160901_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160901_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20160901_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161103_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161126_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161126_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161126_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161126_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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
                                        <div class="ltt_service_content_table_text">
                                            <p>這裡是一個沒有銀色的雪花， 沒有七彩霓虹聖誕樹的節日，生活只是在挑水、飢餓、疾病中度過。在上帝的眼裡，每個孩子是一樣的珍貴、應該一樣的被期待。當我們看見這個匱乏、就捲起袖子，成為那個禱告。這裡的需要，不是一雙鞋子，是為一個生命尋找出口，是為一個孩子的生存找機會，邀請你成為這個改變，由一雙舊鞋開始。 </p>
                                            <p>【捐贈數量總計】衣服5箱、鞋子2箱、袋子2箱。<a href="https://www.step30.org/" target="_blank"> 活動網頁：舊鞋。救命</a></p>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161201_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161201_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20161231_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170111_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170322_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170425_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170826_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20170905_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171003_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171003_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInUp">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171003_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171017_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171228_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171228_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInUp">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20171228_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <iframe height="290" src="https://www.youtube.com/embed/eFlZ9X2hgYg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <iframe height="290" src="https://www.youtube.com/embed/EllnOCu1HmU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <iframe height="290" src="https://www.youtube.com/embed/2HIvluqCR3g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180126_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>



                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180221_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="csr_input">
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

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180717_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180802_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180802_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180802_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180802_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180802_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <iframe height="300" src="https://www.youtube.com/embed/iVO85A3GedQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 30:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                        <div class="ltt_service_content_table_text">
                                            <p>校友服務中心於8月21日舉辦「乘風萬里‧轉動人生—培育國際視野清寒獎助學金」感恩茶會，邀請捐款人頒獎給107年度獲獎學生，並播放106年首批受奬學生返國感恩影片，衛生福利部南區兒童之家的小朋友受邀參與演出精采的英語劇場，大小學生夢想起飛，場面十分溫馨而有趣。</p>
                                            <p>蔡秀芬副校長表示，許多學生因為家庭經濟因素，無法實現出國學習的夢想，乘風萬里獎學金專為培育弱勢學生國際視野，增進國際移動能力而設立，這筆來自捐贈人熱心與期許的獎學金，希望帶給學生走向世界的勇氣，追求自我實踐，翻轉人生，未來也能傳承愛心，貢獻社會。</p>
                                            <p>出席本次茶會的捐款人之一，傑出校友、曾任校友總會理事長、雷科公司董事長鄭再興說，校友會非常支持努力上進的學弟妹，讓他們在沒有經濟壓力下，順利出國追求夢想；他並表示，企業的社會責任，就是從在地做起，鼓勵學弟妹未來能取之於社會、用之於社會。EMBA校友、高都汽車副董事長余榮輝則勉勵學生效法以色列科技建國的精神，學習先進國家的經驗，成為台灣社會與經濟發展的棟樑。</p>
                                            <p>今年共有4位學生獲得乘風萬里獎學金，分別是生物科學系碩士班徐顗雯至日本高知大學、企管系醫務管理碩士班林柏宏至捷克科技大學（Czech Technical University in Prague）、企管系詹孟凌至法國里昂管理學院（EMLYON Business School）、及通訊工程研究所陳宏宇至美國德克薩斯大學達拉斯分校（The University of Texas at Dallas）。</p>
                                            <p>靠著助學貸款完成大學學業的徐顗雯感性分享，自己曾經以為出國交換是遙不可及的夢想，大三得知學校提供豐富的獎學金後，決定直升中山碩士班，也因為乘風萬里獎學金，她鼓起勇氣申請出國交換。9月份即將第一次踏出國門，徐顗雯充滿感謝與興奮之情，也對自己有更高的期許和目標，她將前往日本高知大學，主修環境教育與生態保育，志在環境教育工作，為台灣生態保育作出貢獻。</p>
                                            <p>茶會在教育所校友吳苡菱老師的熱心安排下，衛生福利部南區兒童之家的小朋友受邀參與並演出精采的英語劇場《I don’t want to go to school!》。南區兒童之家主任張銀旭表示，孩子們來到中山大學特別開心，除了孩子們有一表演的舞台，更難得有機會與師長、貴賓及認真進取的同學們齊聚一堂，感受大學的愛心與關懷，讓這場茶會別具意義！</p>
                                            <p>中山大學「乘風萬里‧轉動人生—培育國際視野清寒獎助學金」計畫，專為培育弱勢學生國際視野，增進國際移動能力而設立，全額補助經濟弱勢學生赴海外研修經費，包括：全程機票、學費及生活費等，讓學生無後顧之憂，追求夢想。</p>
                                            <p>本文章轉載自『國立中山大學校友服務中心』</p>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180824_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180824_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>鄭再興董事長頒發獎</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 31:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                        <div class="layout_box_product_100 csr_article_content">
                                            <img src="img/csr/csr_20180913_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 32:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                        <div class="ltt_service_content_table_text">
                                            <p>捐助君鴻酒店『月圓滿。愛飛翔』吳淡如畫展之『慈善義賣』活動，捐助嘉惠社會公益團體、財團法人至善福利基金會、財團法人桃園市藍迪基金會。</p>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20180921_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 33:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20181103_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>
                                </div>

                            <?php
                                break;
                            case 34:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                        <div class="ltt_service_content_table_text">
                                            <p>文章轉載自國立中山大學管理學院 <a href="https://www.cm.nsysu.edu.tw/p/406-1024-195851,r3671.php?Lang=zh-tw" target="_blank">文章來源</a></p>
                                            <p>為促進南臺灣產業永續發展，2016 年5 月16 日由高市府、工研院、中山大學共同成立「南臺灣跨領域科技創新中心」，由本院資管系吳仁和教授擔任中心主任，中心任務旨在進行台灣南部產業調查研究，對市場需求和技術水準進行盤點，以期協助產、官、學、研跨領域技術合作，解決以往學研單位技術研發與產業需求脫節的困境，引導南部產業高值化發展。</p>
                                            <p>吳仁和指出，根據2015 年農委會統計農業產值與產量，南高屏三縣市可謂全台農業產業發展重心，然而，農業所得低連帶影響農業就業人口的投入和技術引進等缺乏，「這也是全台灣農業產業發展困境的縮影」。有鑑於此，中心提出「新興科技創新營運模式發展之研究—以新農業為例」整合計畫，以南台灣為示範地，從創新技術、管理與營運模式、社會實踐三個面向的子計畫切入探討分析，期望成功推動台灣農業創新創業，提高農民所得並提供青農回鄉誘因。</p>
                                            <p>本計畫共區分為三個子計畫，分別為「台灣農產品新生產加工技術重點發展計畫（創新農科技術）」、「新興科技與新農業創新生態系統（創新營運模式）」和「新興科技與新農業創新生態系統之社會影響及精進方案建構（輔導農業社區進行生態系統改造）」，根據各計畫專業需求，延攬管院、社科院與他校相關科系教師一同參與。</p>
                                            <p class="orange">價值鏈去中間化 資源共享共創價值</p>
                                            <p>台灣傳統農業，農民負責農產品之栽種與採收，採收後的農產品必須經過層層的流通環節，依靠在批發、零售等大中小盤商收購並分銷至各通路，經過輾轉的運送過程後才會送至消費者手中，有時也會因時間與距離的因素，導致產品的不新鮮、損耗，進而大幅降低其價值。本計畫期望建構一個平台生態系，將傳統農業價值活動專業化解構，在各步驟中透過科技予以強化或加值。</p>
                                            <p>以清洗加工為例，子計畫一針對大氣電漿殺菌與高壓殺菌技術研發，協助農友農產品清洗、加工提升一級產品品質；以品牌行銷銷售為例，子計畫二陸續與農友協同建構官網（給魚）並共同經營社群行銷，中心希望不僅給與即時性的幫助，更能幫助農民製作產品履歷、設計/經營粉絲團、官網、商城、品牌以及社群行銷等，提升農友們對科技使用的能力（給釣竿+捕魚能力）；最終目的希望能結合政、產、學、研、需求端（消費端）的能量，共同建構友善大地的平台生態系（永續魚塘），使農民能在農村就能生活（不須在都市當農民工），讓農村永續。</p>
                                            <p>吳主任表示，中心也期待志願團協助整合具企業社會責任 (CSR)之企業、支持友善農作之企業、組織或個體等，來建構平台生態系（魚池），先推動C2F (Customer to Farmer)，讓青農能先有部分的計畫性生產，以穩定其收入，並由子計畫三實踐農村復甦，透過區域經營、休閒觀光等創造正向循環。</p>
                                            <p>此計畫首先將場域鎖定於高雄東九區及屏東185縣道（沿山公路）兩大區域，為了支持友善大地的理念以及對消費者的健康承諾，執行團隊嚴格把關參與農友，要求其所生產農產品必須經過有機或無毒認證，並具備友善大地理念並勇於接受新思維等素質。截至2018年11月，已有約30位秉持對土地的情感，堅持使用對土地友善農法耕作的農友自發性加入生態系。「農村創新、公益轉型」是此計畫的中心理念，期以「去中間化」的公益轉型模式，讓農產品供應鏈變成一個透明、閉環的生態系統，目前已與其中6位青農協同合作社群行銷；與台東大學跨校合作為3位青農建置官網；幫助1位青農進行二級產品加工並已進入銷售階段。</p>
                                            <p>此外，在8月份C2F的操作中藉由電子商務平台和實體通路整合，讓農友和消費者直接接觸，實踐計畫性生產概念，為5位農友創造約98萬銷售額。吳主任表示，「此計畫就是希望訓練農友和現代科技對接，轉換傳統閉門造車的做法為每個生產步驟加值，並在透明化的生態系中共享資源，即使中心團隊抽離後，農友們也能彼此合作運作產業鏈。」</p>
                                            <p class="orange">好計畫 我投入！ 中山EMBA校友CSR企業以行動支持農友</p>
                                            <p>為幫助有理念農民開拓銷售通路、安心生產，中心也積極尋找重視CSR的民間企業合作，其中更包含許多中山EMBA校友企業的主動投入，如舊振南李雄慶董事長（EMBA-6）、育華興業股份有限公司李瑞國董事長（EMBA-3）、鈦騰複合材料股份有限公司劉榮添總經理（EMBA-20）、巴巴事業黃烱輝董事長（EMBA-14）、雷科股份有限公司鄭再興董事長（EMBA-6）、中信造船韓育霖總經理（EMBA-8）、沅水企業股份有限公司劉信陸董事長（EMBA-9）等。</p>
                                            <p>鄭再興董事長表示，他一直很鼓勵年輕人創業。當初從吳教授得知該計劃是以一個整合平台有系統的協助農民生產及銷售農產品，並能幫助在地農民生活及提高青年回鄉務農意願，因此立即響應支持。其實，雷科長期以來也以辦理如中低收入戶學童寒暑期營隊、淨山、慈善畫作義賣、清寒獎助金、管院EMBA中心整修計劃捐款等各種方式來回饋母校和社會，「雖然之前也向個別農民買過農產品當作親友贈禮，但可以藉由一個計劃，從生產到銷售的過程都能幫助到農民的方式還是頭一次！」</p>
                                            <p>吳主任指出，校友們不是直接出錢採購水果禮盒，而是在了解這個計畫理念後，認同並決定以具體行動幫助小農，「我們誠摯的感謝EMBA學長姊用行動支持『農村創新、公益轉型』的理念」。中山的校友向來熱心回饋，這次回饋的對象轉移在高雄經濟發展的根基-農業上，不僅直接幫助農民，更與中心一起參與建構平台生態系（永續魚塘），扮演驅動需求的重任。對中心來說，他們是計畫得以落實、農村社會創新與價值創造的目標得以實現的第一批支持者，藉由他們的行動登高一呼，一定會激發更多企業以這種方式幫助地方發展。</p>
                                            <p>「未來，中心將持續推動該理念與計畫性生產，讓農民在種植前能預先知道訂單在哪裡，使其安心生產，幫助南台灣農村的永續發展。」過去單打獨鬥的農業生產模式只會導致產業衰微，透過本計畫所提倡的透明化循環產業生態系的運作，農友會知道生產、加工、營銷等產業鏈上的資訊與運作，跟有共同理念的其他農友共同合作，可以一起議價，甚至成立協會，追求產業共好。「我們最終目標是幫助農友建立一個創新農業平台生態系與營運模式，透過科技賦能、資源共享與價值共創，實踐『農村創新、公益轉型』理念以促使農村永續發展。」</p>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>南臺灣跨領域科技創新中心吳仁和主任</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>新農業計畫提出去中間化，農產生態循環系統示意圖</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>中心團隊至六龜區公所進行平台說明會</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>中心與六龜區參與計畫農友合影</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>芳林芭樂農園鄭宗林農友</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>自然果鋪農友採收新鮮鳳梨</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>農友以柴燒烘焙金鑽鳳梨加工製成果乾</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>農友自釀果醋、鳳梨醬，經屏科大檢驗無添加防腐劑</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>農友陳章信種植有機火龍果和無毒蜜棗檸檬</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>南臺灣跨領域中心與農民進行農產品加工事項輔導</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>中心團隊與電商平台南農電舖洽談農產上架合作事宜</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="layout_box_product_33 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20190115_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>中心團隊與電商平台南農電舖洽談農產上架合作事宜</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>


                                    </div>

                                </div>
                    </div>

                <?php
                                break;
                            case 35:
                ?>
                    <div class="ltt_box_content_all">
                        <div class="layout_style_100 ltt_service_content_table white_bg">
                            <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                            <div class="csr_date"><?php echo $_GET['date']; ?></div>

                            <div class="layout_box_product_100 csr_article_content">
                                <img src="img/csr/csr_20190628_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                            </div>
                            <div class="csr_input">
                                <input type="button" value="回上一頁" onclick="history.back()">
                            </div>
                        </div>
                    </div>

                <?php
                                break;
                            case 36:
                ?>
                    <div class="layout_style_100 ltt_service_content_table white_bg">
                        <div class="ltt_box_content_all">
                            <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                            <div class="csr_date"><?php echo $_GET['date']; ?></div>

                            <div class="layout_box_product_100 csr_article_content">
                                <img src="img/csr/csr_20190804_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                            </div>
                            <div class="csr_input">
                                <input type="button" value="回上一頁" onclick="history.back()">
                            </div>
                        </div>

                    </div>

                <?php
                                break;
                            case 37:
                ?>
                    <div class="layout_style_100 ltt_service_content_table white_bg">
                        <div class="ltt_box_content_all">
                            <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                            <div class="csr_date"><?php echo $_GET['date']; ?></div>

                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down"> <img src="img/csr/csr_20191018_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>
                            <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                <div class="tactics_down"><img src="img/csr/csr_20191018_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                            </div>

                            <div class="csr_input">
                                <input type="button" value="回上一頁" onclick="history.back()">
                            </div>
                        </div>


                    </div>

                <?php
                                break;
                            case 38:
                ?>
                    <div class="layout_style_100 ltt_service_content_table white_bg">
                        <div class="ltt_box_content_all">
                            <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                            <div class="csr_date"><?php echo $_GET['date']; ?></div>

                            <div class="ltt_service_content_table_text">
                                <p><a href="https://www.cm.nsysu.edu.tw/p/404-1024-228342.php?Lang=zh-tw&utm_source=Facebook_PicSee" target="_blank">文章來源：國立中山大學 管理學院</a></p>
                                <p>歷時多年，中山管院EMBA中心「雷科國際會議廳（簡稱雷科廳）」於本(3)月24日揭牌正式啟用。雷科廳由雷科董事長、中山EMBA第6屆校友鄭再興及雷科公司總共捐贈600萬進行翻修並以其命名，在熱鬧的揭牌儀式後，鄭再興董事長也立即帶領雷科公司董事、監察人、薪酬委員等在雷科廳召開了董監事會議，對於雷科廳的完工感到非常驕傲。</p>
                                <p>揭牌儀式當天聚集多位嘉賓，包含中山大學鄭英耀校長、管理學院黃三益院長、郭瑞坤副院長、葉淑娟副院長、資管系梁定澎教授、企管系張純端主任、財管系退休教授劉德明教授，以及管院校友會謝龍隱會長（EMBA-16）、王駿龍秘書長（EMBA-16）、管院校友黃來福學長（EMBA-3）等都親自前來祝賀。</p>
                                <p>鄭再興董事長對於雷科廳的完工感到相當興奮，於揭幕儀式前就早早抵達會場，頻頻環顧會議廳的空間與設備並給予高度讚賞。鄭董事長也在這重要的日子邀請母親和二姊一起參與，鄭董事長和母親一起揭開紅布條，並接受黃三益院長致贈感謝獎盃，其母親的驕傲之情溢於言表，也為儀式注入滿滿溫馨感。</p>
                                <p>黃三益院長於現場分享了自2015年接管圖資11樓空間至今的修繕歷程，歷經頂樓漏水工程、因莫蘭蒂強颱導致天花板坍塌、打造EMBA中心設計招標，以及由於經費有限擇以較急需使用的北側教室優先施工…等，雷科國際會議廳的設計標至2017年年底始完成，並於今年3月完成驗收。黃院長特別感念鄭董事長與雷科公司的幫助，提供音響設備、傢具贊助的學長姐們，和一路參與執行的同仁們，「大家同心協力才能打造出這樣世界級規格的國際會議廳。」</p>
                                <p>鄭英耀校長也表示，中山大學的校友對於母校的向心力與支持是有目共睹的，無論是對學校或是院系所，他對於每一份力量都充滿感謝。他也提到與鄭再興董事長的淵源，除了同姓氏、都是中山人，「連生日都是同一天，所以一定要跟我一樣持續為中山貢獻！」語畢引來滿堂歡笑。</p>
                                <p>中山EMBA中心包含由龍慶鋼鐵謝進南董事長（EMBA-2）捐贈命名的「博士廳」、由中信造船韓育霖副董事長（EMBA-8）捐贈命名的「中信廳」、由永記造漆張德盛副董事長（EMBA-1）捐贈命名的「添永廳」、24日揭牌的「雷科國際會議廳」和多間研討室，目前主要提供EMBA授課及管院內各單位學術活動使用，讓管院師生的學習環境再升級。</p>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <div class="tactics_up_span">
                                        <p>揭牌儀式由(左起)管院黃三益院長、鄭英耀校長、鄭再興董事長母親、鄭再興董事長共同揭牌。</p>
                                    </div>
                                </div>
                            </div>


                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>揭牌儀式由(左起)管院黃三益院長、鄭英耀校長、鄭再興董事長母親、鄭再興董事長共同揭牌</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <div class="tactics_up_span">
                                        <p>鄭再興董事長致詞。</p>
                                    </div>
                                </div>
                            </div>


                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <div class="tactics_up_span">
                                        <p>管院黃三益院長(左)致贈感謝盃給鄭再興董事長母親(中)。</p>
                                    </div>
                                </div>
                            </div>


                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <div class="tactics_up_span">
                                        <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                    </div>
                                </div>
                            </div>


                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_05_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>


                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>

                            <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>



                            <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                <div class="tactics_down">
                                    <img src="img/csr/csr_20200326_13.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                    <!--<div class="tactics_up_span">
                                                    <p>管院校友會謝龍隱會長(左)獻花給鄭再興董事長。</p>
                                                </div>-->
                                </div>
                            </div>


                            <div class="layout_box_product_100 csr_input">
                                <input type="button" value="回上一頁" onclick="history.back()">
                            </div>


                        <?php
                                break;
                            case 39:
                        ?>

                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"> <img src="img/csr/csr_20200501_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200501_12.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>








                        <?php
                                break;
                            case 40:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"> <img src="img/csr/csr_20200504_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20200504_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>


                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 41:
                        ?>

                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"> <img src="img/csr/csr_20201014_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20201014_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"> <img src="img/csr/csr_20201014_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down"><img src="img/csr/csr_20201014_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down"> <img src="img/csr/csr_20201014_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>"></div>
                                    </div>


                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 42:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>國立中山大學管理學院大學社會責任計畫（USR）與高雄在地企業雷科股份有限公司合作，於旗山區舉辦企業員工家庭日主題活動。與以往家庭日不同的是，大學與企業一起體驗稻米收割，並呼應聯合國的「全球永續發展目標」（Sustainable Development Goals, SDGs）多項指標，賦予活動更深遠的意義，希望藉由合作專案培養企業對於永續農業、社會參與的認知，藉由實際走入社區，增進企業的在地認同感及永續發展動能。</p>
                                        <p>中山大學管院副院長郭瑞坤表示，雷科企業的福委會長期策辦家庭日，此次由中山以培養永續知能及社會關懷實踐來發想、籌劃雷科員工日──「旗山農遊趣‧食農教育暨農村體驗主題日」，透過連結在地有機米型農與旗山糖廠社區，讓企業員工與家眷共同體驗食農教育、農事，並了解米食文化，也呼應聯合國全球永續發展目標第2項指標「促進可持續農業」，以及第12項指標「採用可持續的消費和生產模式」。透過輕鬆有趣的割稻、打穀到煮椪糖，在日常生活、休閒活動中就能響應全球永續發展目標，也為未來發想企業社會責任奠下永續發展基礎概念。</p>
                                        <p>「日品．元品有機米」為在地型農陳毅鴻打造的有機米品牌，此次活動從實地講解、割稻活動，到米食加工點心的品嚐，讓企業員工能夠全面的了解在地有機農業的現況。另一方面，中山大學更串聯旗山在地社區，邀請旗山糖廠社區發展協會安排農村體驗活動，讓雷科公司同仁與眷屬親身體驗傳統文化，例如竹製古早童玩、香蕉絲編織體驗等。旗山區公所社會課林靜芳課長也領來一車爆米香，現場壓力爐的巨大爆炸聲響增添歡樂氣氛，員工紛紛回饋體驗過程相當新鮮有趣、收穫滿載。中山大學財管所學生袁鈺雯提到，因課程參訪參加這次CSR實作觀摩，跟著走入社區體驗後，才看見原來旗山除了老街觀光以外，還能有不同面向的玩法和學習。</p>
                                        <p>中山大學傑出校友、雷科股份有限公司董事長鄭再興指出，企業期待這不僅是一次性的活動，希望同仁有機會實際了解在地的農業、農村發展，並以身體力行支持有機農業的推展。最重要的，還是將企業的力量確實回饋給在地農友及社區，建立善的循環，永續服務在地，促進地方發展。像這樣支持城市近郊與農村地區的經濟和社會聯繫，也正符合全球永續發展目標第11項指標：建設包容、安全、有抵禦災害能力和可持續的城市。</p>

                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>鄭再興董事長（左）與國立中山大學管理學院郭瑞坤副院長（右）協力收割稻穗。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>全體合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科企業同仁與眷屬將收割的稻子送入打穀機。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>企業企業同仁帶幼兒一起煮椪糖。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>畢業於本校EMBA的雷科黃萌義總經理體驗煮椪糖。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科企業同仁學習如何整草，將已打穀的稻草束成傘狀。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>農事後中午用餐。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科企業同仁購買在地有機米與農特產。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201031_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>體驗現場爆米香。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <iframe width="100%" height="415" src="https://www.youtube.com/embed/k0tK06boDLs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


                                        </div>
                                    </div>




                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 43:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>雷科ESG超前佈署，特別委託國立中山大學公共事務管理研究所與領導力管理顧問公司協助編撰永續報告書，並且透過學生與公司同仁的互動交流，共同腦力激盪。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>




                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 44:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>雷科股份有限公司攜手國立中山大學管理學院，為鼓勵學生應用專業學科知識於實際工作場域、培養學術及實務經驗兼備之人才並增進管院師生與實務界的互動交流，和提供企業專業技術，以創造雙贏機會，為此與共同合作。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201121_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>


                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 45:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>雷科今日接待學生的參訪團是由國立中山大學人力資源管理研究所趙必孝、王喻平教授帶隊，此次學生有博士生也有碩士生，由雷科管理處主管先介紹公司簡介，再透過人管所碩士生-盧宸茵簡介暑期在雷科實習時執行的專案，讓大家了解雷科與中山人管所的合作，並透過學生的發問與董事長的回答了解到公司組織的運作，可以讓同學除了了解到學校所學習的理論，更能知道企業界實際的運作，這就是產學交流最主要的目的，期待下次再相會~</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>國立中山大學人力資源管理研究所趙必孝、王喻平教授帶隊。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科管理處主管先介紹公司簡介。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>人管所碩士生-盧宸茵簡介暑期在雷科實習時執行的專案。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>學生的發問與董事長的回答了解到公司組織的運作。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201127_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>


                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>


                            </div>


                        <?php
                                break;
                            case 46:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201128_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">

                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20201128_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">

                                        </div>
                                    </div>




                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>



                            <?php
                                break;
                            case 47:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="ltt_service_content_table_text">
                                            <div class="news_writer">2021/07/08 高培德</div>
                                            <p>國立中山大學管理學院USR計畫攜手高雄在地企業雷科合推「翻轉‧築夢‧高雄」圓夢實踐計畫，來台8年越南籍新住民陳黃燕(圖一及圖二右一)透過高市湖內公舘社區發展協會推薦提案「圓夢之房」，計畫利用住處成立工作室，並搭配線上課程、經營網路社群及影片官網頻道，建立新住民與台灣社會互動平台。</p>
                                            <p>計畫主持人、中山大學管理學院副院長郭瑞坤(圖一左一)陪同雷科董事長鄭再興(圖一左二)、經理張晉豪(圖一右二)等人訪視工作室，並與雷科課長郭國基(圖二左一)等人合影留念，陳黃燕表示，因育兒辭去原有工作，嘗試經營網路拍賣，透過直播、拍攝影片接觸網路社群，「圓夢之房」設置隔音直播間，專注工作不受外界干擾，並藉由網路與新住民姊妹交流互動。</p>
                                        </div>

                                        <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20210708_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            </div>
                                        </div>

                                        <div class="ltt_service_content_table_text">
                                            <p>「圓夢之房」涵蓋新住民線上課程、影片官網頻道經營等兩部分，預計2021年3月至10月開辦28次課程及上傳14支影片，陳黃燕計畫透過課程分享學習華語經驗、介紹台灣常用語彙、在台新住民生活等。</p>
                                            <p>計畫主持人、中山大學管理學院副院長郭瑞坤表示，圓夢實踐計畫鼓勵自主提案，陳黃燕「圓夢之房」自許透過網路行銷改善生活品質，團隊期盼她化身台越文化橋樑，協助新住民姊妹解決生活適應難題。</p>
                                        </div>

                                        <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20210708_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">

                                            </div>
                                        </div>

                                        <div class="ltt_service_content_table_text">
                                            <p>雷科透過圓夢實踐計畫，攜手中山大學管院合作落實大學及企業社會責任，響應「新住民在台灣」社會關懷議題，企業人員協助陳黃燕募集攝影、錄音、腳架等影音設備加速圓夢。</p>
                                        </div>

                                        <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/csr/csr_20210708_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            </div>
                                        </div>

                                        <div class="ltt_service_content_table_text">
                                            <p>以上文字圖片來源<a href="https://freshweekly.tw/?pn=vw&id=x68q697hcpa8#vw" target="_bland">鮮週報</a></p>
                                            <p>其他相關新聞 | <a href="https://udn.com/news/story/7327/5586855?utm_source=lineapi&utm_medium=share" target="_bland">聯合新聞網</a> | <a href="https://tw.appledaily.com/life/20210708/BHJAXKZW5FHSXDOSQ54KL2YCRY/" target="_bland">蘋果新聞網</a> | <a href="https://news.ltn.com.tw/news/life/breakingnews/3596275" target="_bland">自由時報</a> | <a href="https://www.ner.gov.tw/news/60e6a8eec0338c0008981aaa" target="_bland">國立教育廣播電台</a> | <a href="https://focus.586.com.tw/2021/07/08/p173250/" target="_bland">焦點時報</a> | <a href="http://www.chnewstv.com/bbs/viewthread.php?tid=35241&extra=page%3D1&frombbs=1" target="_bland">中華新報</a> | <a href="https://www.storm.mg/localarticle/3801621" target="_bland">風傳媒</a></p>
                                        </div>




                                        <div class="csr_input">
                                            <input type="button" value="回上一頁" onclick="history.back()">
                                        </div>
                                    </div>


                                </div>


                            </div>

                        <?php
                                break;
                            case 48:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>ESG為近年來用於評估企業永續經營的關鍵指標。國立中山大學管理學院USR計畫與高雄在地企業雷科股份有限公司、在地有機農「日品‧元品有機米」合作，於日品‧元品有機米旗山基地，辦理「種夏：畊一畝田」活動，對於「社會面-S」、「環境面-E」議題加以回應，進行USR與 CSR合作，將企業資源逐步導入在地，強化企業的社會影響力，建立大學與企業合作推行社會責任的典範。</p>
                                        <p>活動現場舉行有象徵雙方合作之「稻田認養儀式」，先由雷科公司向有機農致贈「稻田認養」支票；再由有機農回贈貼有聯名標誌的「雷科米」給雷科公司。雷科公司董事長鄭再興表示，雙方聯名推出「雷科米」，將提供給企業同仁、客戶群、供應商，以及社會上有需求的高關懷對象，使各關係人都能享用到無毒健康的有機稻米。</p>
                                        <p>中山大學管院副院長郭瑞坤指出，「種夏：畊一畝田」是對企業既有CSR的延續與創新（2020年舉辦「旗山農遊趣」活動），由管院USR團隊所規劃，結合包含：「企業稻田認養」、「插秧」與「收割」農事活動。企業向有機農認養「一甲農地」，實際支持有機耕作；農民提供企業優質的農產品，獲得收益的保障。讓企業與農民在合作中，逐步建立夥伴關係，並透過活動，參與稻米生長的完整歷程。因應COVID-19疫情影響，管院USR團隊將七月的插秧活動進行調整，在符合防疫規範前提下，邀請雷科公司董事長鄭再興和經理張晉豪，共同參與稻米插秧過程，經由實地勞作與機械工作演示，展現企業CSR行動，並且呼應多項聯合國永續發展目標（SDGs）。</p>
                                        <p>郭瑞坤副院長進一步表示，中山與雷科公司的CSR合作，強調的是增強企業的在地連結，並與農村產業結合為主要特色。雷科公司與日品有機米的合作，藉由高雄在地企業與有機農訂定契作，保障農民的收益，鼓勵健康有機無毒的農業生產。透過多方合作，捲動與旗山在地社區、產業的參與，有效促進高雄城鄉關係的正向交流。</p>
                                        <p>雷科公司董事長鄭再興表示，從去年的收割到今年的插秧，不僅象徵著飲水思源，更象徵著公司對於CSR工作的長期投入，與在地產業持續合作，更希望透過公司的拋磚引玉，吸引更多企業一同加入，關心環境永續，促進在地發展。管理處經理張晉豪則提到，雷科公司的CSR工作由管理處負責執行，在活動推行上，一方面以永續發展為目標，進行逐年創新；一方面，希望將永續精神推廣到職場，邀請公司同仁一同參與，將CSR化為企業永續發展的DNA。</p>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>日品‧元品有機米指導參與人員插秧</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科公司致贈支票予日品‧元品有機米（左2起：日品‧元品有機米陳毅鴻、陳家成、雷科董事長鄭再興、中山管院副院長郭瑞坤）</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興（左）與中山管院副院長郭瑞坤（右），共同插立「認養標示牌」</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院副院長郭瑞坤致詞，表達「種夏：畊一畝田」是從插秧開始，期待年底美好收穫的果實。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興插秧。</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>日品‧元品有機米負責人陳毅鴻進行插秧教學。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210726_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院與雷科公司、日品‧元品有機米合作「種夏‧畊一畝田」活動，大合照（左起：雷科公司經理張晉豪、雷科公司董事長鄭再興、中山管院副院長郭瑞坤、日品‧元品有機米陳毅鴻、陳家成）。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                            </div>


                        <?php
                                break;
                            case 49:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210903_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                        <?php
                                break;
                            case 50:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210912_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                        <?php
                                break;
                            case 51:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>【公事所提供】讓銀髮族勇敢築夢！國立中山大學管理學院「產學合創‧在地共融：建構大學合作式培力推廣服務」USR計畫與雷科股份有限公司、高雄市兩岸合作事務促進會合作，推動「翻轉‧築夢‧高雄」圓夢實踐計畫。團隊來到高雄市杉林區，跟著提案人黃淑萍，一同走入社區照顧關懷據點，為銀髮族帶來老歌新編的「音活操」。</p>
                                        <p>「翻轉‧築夢‧高雄」圓夢實踐計畫是由雷科公司董事長鄭再興發起，作為雷科公司CSR行動的重點項目，中山管院USR團隊作為承辦方，扮演企業CSR行動的專業顧問，規劃符合企業CSR需求的內容，以及提供專案推動所需的執行人力，並對提案人提供專業的輔導諮詢協助，使其能永續經營。圓夢實踐計畫提供管道，讓提案人為自己內心的想法發聲，由自身的夢想出發，成為一個築夢者與追逐快樂的人。</p>
                                        <p>圓夢實踐計畫，從案件徵集、初審、訪視、複審，歷時半年，在2021年2月正式開始執行，為中山管院與雷科公司USR&CSR合作專案的主軸之一，計畫聚焦「關懷社會議題」提案，定名為「翻轉‧築夢‧高雄」，目的是要翻轉以往提案人作為受助者的角色，希望透過提案人「自主提案方式」申請，藉由計畫的執行，讓關乎提案的關係人，例如：家庭、社區、服務對象得以受惠，因為圓夢實踐計畫的導入改變現況。</p>
                                        <p>提案人黃淑萍提出的「動滋動滋 卡拉是OK」，以「音樂體適能」為切入點，結合高齡照護議題，希望帶著自行編製的舞蹈課程，進入高雄在地社區的C級巷弄長照站及B級複合型服務中心。由自身生活所在的社區開始，將活力帶到高雄市杉林區、美濃區各個社區，預計進行5個單位、40堂課，帶領75名以上的長者活絡身心，期望達成延緩老化、健康老化，以及心靈活化等成效。最後將成果編制成教案教材，公開發布於網路平台推廣。杉林區的大愛生態社區關懷協會，是提案人黃淑萍進行的第一個據點。活動邀請銀髮族長者圍繞成大Ｕ型，或站或坐，搭配韻律氣球、經典老歌，長輩們手舞足蹈，神色專注，不時露出開懷的笑容，場面溫馨。</p>
                                        <p>計畫主持人、中山管院副院長郭瑞坤表示，圓夢實踐計畫的辦理目的，在於「讓想做事的人能有自己的舞台」，提案人黃淑萍本身喜歡跳舞，希望將跳舞運動的樂趣，帶到社區關懷據點，服務更多的長輩，這是計畫團隊一致肯定的工作項目。共同主辦方、兩岸合促會常務理事黃德成（EMBA校友）亦表示，能與社區長者們一同投入在「音活操」，能夠暫時地將工作事務忘卻，是非常快樂的事情。國家邁入高齡化社會，提案人黃淑萍帶領社區長者，使其身心更加健康，並且凝聚社區的情感與夥伴關係。</p>
                                        <p>大愛生態社區關懷協會總幹事白莉娜則分享，大愛社區為2009年莫拉克風災後，由慈濟基金會所興建的永久居留屋群，屬於多元族群的社區，成員包含桃源區、那瑪夏區原住民，以及甲仙區、六龜區居民，生活狀況與過去有巨大的改變。如何凝聚社區共識與認同感，與社區長輩共創理想的環境，是社區工作重要的責任。這次圓夢實踐計畫，透過企業與中山大學合作，將課程帶入社區關懷據點的長輩身上，活動成果令人十分驚艷，社區非常樂意支持。</p>
                                        <p>社區長者潘新華先生亦分享，這次參與課程的成員，主要是六龜區故鄉來的鄰居，彼此間較為熟識。特別喜歡這次課程的安排，讓年長的人運動，排解生活上的煩悶，不然老年人體力有限，已有許多事務無法完成，老師跟社區的感情很好，大家玩得很開心。提案人黃淑萍小姐表示，支持她持續築夢的最大動力，是看見社區長輩們跟著音樂活動、歌唱，臉上的一抹笑容，讓她想為長輩們多做一些事情，這是她提案圓夢實踐計畫最主要的原因。社區長者、志工對她給予極大的包容，讓她有自信能夠持續進行下去。</p>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>「動滋動滋 卡拉是OK」提案人黃淑萍帶領「音活操」</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>「翻轉‧築夢‧高雄」圓夢實踐計畫捐贈支票儀式（圖中左依序為提案人黃淑萍、雷科公司管理處張晉豪經理、兩岸合促會黃德成常務理事、中山管院副院長郭瑞坤教授）</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院副院長郭瑞坤教授致詞，介紹USR_CSR計畫合作</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>合促會黃德成常務理事分享活動參與心得（圖右為兩岸合促會黃德成常務理事）</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>協會志工與社區長者進行手作香包活動</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>社區長者參與暖身活動</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>社區長者進行手作香包成果展示</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>社區長者跟著經典老歌，進行肢體活動</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_2021_10_04_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>提案人透過「翻轉‧築夢‧高雄」圓夢實踐計畫，USR_CSR專案合作，進入社區實踐夢想</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                            </div>


                            <?php
                                break;
                            case 52:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>【公事所提供】國立中山大學管理學院大學社會責任（USR）計畫與高雄在地企業雷科股份有限公司在高雄旗山區的有機農地，舉辦「秋收：稻香樂饗」生聲不息田園音樂會企業社會責任活動。結合秋天的割稻農事、田園音樂會、DIY體驗、以及社區導覽。與在地有機農「日品‧元品有機米」、「高雄市旗山區糖廠社區」合作，並邀請「高雄市愛樂文化藝術基金會（國樂絲竹團）」、「六藝樂集樂團」進行音樂演出，捲動214名參與者共同加入。期望透過參與農事現場，體驗農村日常，並將音樂欣賞融入在地環境，多元化地促進高雄城鄉關係交流。</p>
                                        <p>本次活動藉由雷科公司舉辦的家庭日，結合企業社會責任（CSR）推動與藝文參與，不僅於企業內部推廣CSR，更透過USR加成CSR，加深企業與旗山在地社區、產業連結。中山大學校友、雷科公司董事長鄭再興表示，透過「企業契作認養」回應企業治理的ESG面向，結合音樂演出，為公司同仁眷屬、學校與社區夥伴帶來音樂饗宴。雷科公司希望在員工眷屬、在地社區，在利害關係人之間，種下永續的種子。雷科永續部門人員，更利用活動期間進行CSR理念宣導，以及如何透過活動呼應聯合國永續發展指標（SDGs）。</p>
                                        <p>中山大學管理學院副院長郭瑞坤強調，過去人們要觀賞秋收音樂會，需要前往台東池上參與，現在只要在高雄旗山，就可以享受藝術的雅緻與土地生命故事的連結。中山管院USR團隊從去年開始協助雷科公司規劃CSR活動，由插秧到割稻，希望為企業的田間體驗注入不同的能量，與高雄人分享秋收喜悅。</p>
                                        <p>本次活動亦由中山大學管院教師帶領學生全程參與，除了共享活動的樂趣，同時也讓管院學生實地參與CSR工作，並與企業同仁做第一線的接觸。中山大學管理學院院長黃三益指出，企業社會責任教育是目前全世界管理學院都極為重視的項目，中山管院特別重視的是在於和在地企業的連結，一起達成社會的共好，並對學生未來就業產生實質幫助。活動過程間更由管院院長、副院長為代表，致贈竹藝編織的QR code（雷科公司網址），象徵學校、企業、社區關係的緊密連結。</p>
                                        <p>本次活動特別搭建表演舞台，透過中西音樂藝術的交會，於高雄旗山共譜田園秋收的美好樂章。中山大學校友、高雄市愛樂文化藝術基金會執行長朱宏昌表示，透過樂團與企業活動的合作，將音樂藝術的美好帶給每位市民，感謝企業對藝文團體的投入，在追求利益的商業考量外，也成為藝文團體長期的後盾。六藝樂集團長林桐毅(中山大學校友)亦表示，表演團體與企業、學校的三方合作，是一個很好的開始，在田園的演出更是一次特別的經驗。因應本次活動，兩個表演團隊分別設計了表演曲目。</p>
                                        <p>中山管院團隊指出，本次活動不僅在原先CSR專案的努力方向上，持續關心「農業永續」與「城鄉連結」，更將CSR提升到「人文藝術層面的關懷」，由大學社會責任的推動，協力企業落實社會責任理念，不僅照顧到公司同仁的身心，更回饋高雄在地社區，將「藝術美感」與「在地生活」做美與善的結合。</p>
                                        <!--<p>社區長者潘新華先生亦分享，這次參與課程的成員，主要是六龜區故鄉來的鄰居，彼此間較為熟識。特別喜歡這次課程的安排，讓年長的人運動，排解生活上的煩悶，不然老年人體力有限，已有許多事務無法完成，老師跟社區的感情很好，大家玩得很開心。提案人黃淑萍小姐表示，支持她持續築夢的最大動力，是看見社區長輩們跟著音樂活動、歌唱，臉上的一抹笑容，讓她想為長輩們多做一些事情，這是她提案圓夢實踐計畫最主要的原因。社區長者、志工對她給予極大的包容，讓她有自信能夠持續進行下去。</p>-->
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院致贈雷科公司竹編QR code(圖左起:中山管院副院長郭瑞坤、中山管院院長黃三益、雷科公司董事長鄭再興、雷科公司總經理黃萌義、中山管院副院長葉淑娟)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院副院長郭瑞坤簡介田園音樂會</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院學生、IBMBA國際生參與活動</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>六藝樂集演出</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>在地有機農帶領參與人員割稻、打穀</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>有機農進行割稻體驗教學</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>高雄市旗山區糖廠社區人員講解DIY體驗</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>高雄愛樂文化藝術基金會國樂絲竹團進行演出</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>參與人員進行農村DIY體驗</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科公司進行CSR宣導、介紹SDGs(圖中上:雷科公司經理張晉豪)</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <!--<p>參與人員進行農村DIY體驗</p>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211116_12.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>「秋收:稻香樂饗」生聲不息田園音樂會活動合影</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                            </div>


                            <?php
                                break;
                            case 53:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>(中央社訊息服務20210507 14:46:18)雷科(股)公司今年與高雄市救國團合作辦理「愛．分享聚光圓夢計畫」，將邀請前鎮區6所國小115位弱勢學童參與。藉由教導植物種子手作課程，將用心創作的成品於活動後，由救國團放置網路平台，引薦善心人士完成學童心願。昨日首場於紅毛港國小開跑，參與學童開心不已，萬分期待能完成心願。手作課程利用各式各項不用形狀植物種子，運用自身創意來完成獨一無二的成品，學童各自發揮天馬行空的創意，用十分專注及認真的態度將作品完美呈現，期盼換得心願禮品。</p>
                                        <p>紅毛港國小丁吉文校長致詞時表示，很感謝雷科企業和救國團提供這個機會，讓孩子們可以學習不同技藝手作及圓夢的機會，透過聚光圓夢計畫能適時完成孩子小小的心願，成就大大的夢想。參加的洪同學表示，我的心願是一台氣炸鍋，因為奶奶年紀大，不適合太油膩的食物，希望能讓她吃得健康一點，很高興能參加這個活動，期待完成心願。</p>
                                        <P>主辦單位雷科企業鄭再興董事長表示，善盡社會責任是企業永續經營政策，我們長期以來關懷弱勢積極參與各項公益活動，同時期許孩童未來有能力時亦能回饋給需要的人，讓良善的種子不斷循環。</P>
                                        <p>訊息來源：社團法人中國青年救國團</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210507_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210507_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 54:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20210709_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 55:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 56:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>中山大學學生藉由CSR課程來到雷科參訪，由公司管理處經理張晉豪簡介雷科歷年來參與CSR活動與行動，並由雷科公司董事長鄭再興分享個人的理念，透過學生與董事長間的互動、交流，讓中山大學學生更能了解CSR的實際作為有哪些。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山大學蔡錦昌助理教授(圖右)贈送雷科董事長鄭再興(圖左)感謝狀。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興(圖正中央)與中山大學師生合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211015_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>


                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 57:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>雷科公司董事長鄭再興與同學分享經營公司的理念，並由公司管理處經理張晉豪簡介公司歷年事蹟，透過董事長與學生雙方間的問答，讓學生更了解公司的運作和企業在社會扮演的角色。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興(圖右)回答同學的提問。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>南華大學副校長林辰璋(圖左)贈送雷科董事長鄭再興(圖右)紀念禮品。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興(圖左)與南華大學師生合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興(圖中央)與南華大學師生合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                            <p>雷科董事長鄭再興(圖左)與南華大學師生合照。</p>
                                            -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211106_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                                
                            </div>


                            <?php
                                break;
                            case 58:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211111_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 59:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                    <div class="ltt_service_content_table_text">
                                        <p>臺中教育大學EMBA藉由企業參訪機會來到雷科進行參訪，透過此次參訪雷科，公司董事長鄭再興向學生分享公司經營理念以及雷科所要進行的事項，另外公司管理處經理張晉豪也向同學簡介公司近年所進行的ESG舉措。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與臺中教育大學師生在雷科門口合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>臺中教育大學管理學院院長林欣怡(圖左)贈送雷科董事長鄭再興先生(圖右)紀念禮品。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興(圖左三)與臺中教育大學教授合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                                
                            </div>


                            <?php
                                break;
                            case 60:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                        <p>今年受邀到第九屆徐生明國際少棒錦標會場擺設攤位，共同參與活動，感受少棒熱血。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                             -->
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>第九屆徐生明國際少棒錦標會場擺設攤位。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211127_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>參與少棒的美濃國小棒球隊球員與雷科攤位合照。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 61:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211201_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 62:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>去(2020)年，雷科看見全球的趨勢，開始為ESG部屬，特別委託國立中山大學公共事務管理研究所與領導力管理顧問公司協助編撰永續報告書，並且透過學生與公司同仁的互動交流，共同腦力激盪，並在今年推行了雷科第一本永續報告書(名稱為2020 ESG Report雷科股份有限公司永續報告書)，可謂是雷科的永續元年。有鑑於去年的合作，今年雷科再次舉辦工作坊，針對全球氣候變遷如何因應，開設屬於雷科的淨零策略工作坊，並再度邀請中山大學管學院學生以及媒合領導力企業管理顧問有限公司，共同替雷科在碳淨零排放給予方案參考，希望藉由學生端與公司端的交流，找出公司可行的方案。</p>
                                        <p>活動內容首先由雷科公司向同學及參與貴賓簡介，公司歷程以及現行節能減碳舉措及碳排放的規劃，在公司分享過程中，雷科董事長鄭再興也向大家分享雷科現行在綠色能源的投資，太陽能板的建置、魚電共生等，另公司管理處經理張晉豪也向學生報告今年預估的碳排量，並將今年公司對於電能節約的重大措施，如廠區更換空壓機等，並表示未來會加強員工的教育訓練，節能減碳要從裡到外。</p>
                                        <p>接著由中山大學學生進行分組報告，藉由報告提供其他企業或不同行業別現行的減碳措施，並呈現施行減碳措施帶來的效益及問題，此外，根據雷科永續報告書內容所提供的資訊，來給予建議及減碳舉措未來方向，從學生報告中，雷科發現公司缺乏對於碳減量的目標訂製，這也成為雷科未來朝向的目標，此外公司管理處經理張晉豪也向中山學生提出疑問，公司在環境議題可以施行的計劃或是活動，讓更多民眾一同響應永續議題，透過雙方的交流，激盪出不少解決方案。</p>
                                        <p>最後交由領導力公司來統整未來雷科的目標及走向，並盤點現行雷科實施的舉措，並提供雷科未來可以進行的措施，也向學生說明現在世界流行的議題及概念，並讓公司和學生知悉未來的趨勢以及需要具備工具和準備。</p>
                                        <p>雷科在與學生的交流過程中獲得許多收穫，並對於公司未來碳排規畫有一定雛形，冀望在未來雷科能達成所訂下的目標，此外這也是屬於產學合作的部分，透過實際的操作，學生對於未來到職場上的運用會更加熟悉，盼望透過這樣的合作培養更多永續人才。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211204_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                                <p>雷科董事長鄭再興與同學分享公司理念。</p>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211204_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                                <p>第九屆徐生明國際少棒錦標會場擺設攤位。</p>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211204_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                                <p>參與少棒的美濃國小棒球隊球員與雷科攤位合照。</p>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211204_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <!--
                                            <div class="tactics_up_span">
                                                <p>第九屆徐生明國際少棒錦標會場擺設攤位。</p>
                                            </div>
                                            -->
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 63:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211216_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 64:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>【公事所提供】國立中山大學管理學院大學社會責任（USR）計畫與高雄在地企業雷科股份有限公司合作投入「翻轉‧築夢‧高雄」圓夢實踐計畫。計畫提案人之一陳玫綺為員工親子家庭舉辦「親子共創工作坊」，以「地球：蓋亞」為主題，創作最後一幅畫作，為計劃畫下完美尾聲，同時將企業社會責任（CSR）活動成果，回饋企業同仁眷屬，將藝術美學帶給企業成員，以藝術共創的形式，增進家庭親子關係，內化企業永續的DNA。</p>
                                        <p>本次工作坊在雷科公司交誼廳舉行，在西班牙藝術家雷普耶斯（Juan Ripollés）畫作環繞下，由提案人陳玫綺引導，完成共創畫作。中山大學校友、雷科公司董事長鄭再興表示，能將圓夢實踐計畫的推動，帶回到公司本身場域，在意義上格外不同，透過計畫實踐的效益，促進孩童的正向成長，希望在他們的內心埋下藝術種子，在未來能開出燦爛的花朵。雷科公司與中山大學USR結合CSR合作相當多元，也期待更多的企業夥伴能共襄盛舉。</p>
                                        <p>提案人陳玫綺為服務於非營利組織的教保員，她希望透過圓夢計畫，發展自身對繪畫的熱愛，並與自身專業結合，和服務對象—憨兒合作，於照護機構舉辦「攜手共創藝術工作坊」。計畫執行9個月來，已舉辦9場共創工作坊，服務對象超過81人次。</p>
                                        <p>中山大學管理學院副院長郭瑞坤表示，圓夢實踐計畫不僅提供提案人與憨兒藝術參與的機會，更強化了企業的公司治理，透過大學端與企業端社會責任的合作，雷科的CSR工作，在兩年間已有很大的改變，包含提升企業領導階層與基層同仁的共同參與，以及進一步把公司的理念與推動CSR的決心，凝聚成企業永續的發展藍圖。如同共創畫關係裡，每個人都極為重要，透過彼此的協助豐富生命的色彩。大學以及企業和現代社會的關係需要著彼此，透過共創完成美好社會的願景，中山大學管理學院USR計畫與雷科公司的合作，提供了良好的社會實踐案例，共同回應永續發展課題。</p>
                                        <p>陳玫綺表示，最初提案的目的，是要將她從繪畫中獲得的快樂，帶給每一名參與者。每一幅畫作，都是她與參與人一筆一劃共同完成。同時，透過企業資源的挹注，讓她能使用更好的媒材，讓作品獲得更佳的品質。雷科公司經理張晉豪也表示，隨著疫情逐漸緩解，雷科公司將協助舉辦展覽，使作品成果能被更多人看見。</p>
                                        <p>在工作坊結束前，陳玫綺帶領所有成員一同為世界祈福，將心願與作畫顏料傾撒在作品之上，為一年以來受新冠疫情影響，所造成的社會環境不安獻上撫慰。參與的雷科公司同仁林妍汝表示，公司一直以來提供員工很好的家庭教養環境，透過參與CSR活動，不僅讓親子能夠同樂，也為她與孩子建立了珍貴的回憶。</p>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>提案人陳玫綺帶領參與家庭繪製共創畫</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中「親子共創工作坊」活動開場，介紹「翻轉‧築夢‧高雄」圓夢實踐計畫</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>大學與企業USRXCSR合作，以藝術共創的形式，內化企業永續的DNA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>中山管院與雷科公司合作「翻轉‧築夢‧高雄」圓夢實踐計畫，於雷科公司辦理「親子共創工作坊」，將CSR效益擴及公司同仁眷屬子女</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>提案人陳玫綺帶領參與家庭製作繪畫材料</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>提案人陳玫綺帶領參與家庭繪製共創畫</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>畫作完成前，為世界祈福</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211223_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>「親子共創工作坊」以「地球：蓋亞」為題，完成「星星的力量」作品</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>
                            </div>


                            <?php
                                break;
                            case 65:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <div class="ltt_service_content_table_text">
                                        <p>「愛·分享 聚光圓夢計畫」在救國團所執行的項目中，計畫的對象主要為偏遠地區或弱勢學童，參與計畫的學童透過手作技藝課程的作品，藉由愛心人士的認購，來兌換自己的心願，盼望這些學童能體會到社會的溫暖，這項計畫已持續許久也將愛送到千餘名學童心中，未來也將持續下去。</p>
                                        <p>此次高雄市救國團「愛·分享 聚光圓夢計畫」的服務對象為高雄市前鎮區的弱勢學童，而雷科身處前鎮區在地企業，並長期關注及耕耘在地之發展，另董事長曾為救國團副主任委員，因而高雄市救國團與雷科聯繫，對於雷科來說，這是難得且珍貴的機會，雙方經討論後一拍即合，開始合作計畫並執行。</p>
                                        <p>雷科響應此計畫，不僅在過程中收穫頗多，也讓在地學童獲得幫助、圓夢，雷科如同農夫在種子澆水，期盼未來它們能茁壯成長，並把雷科當作榜樣去學習、模仿，在自己能力範圍內，一同回饋社會，成為正向的循環。</p>
                                        <p>在12月16、22、23及24號，由雷科總經理黃萌義、財務長唐靜玲以及管理處經理張晉豪，分別至前鎮區仁愛、鎮昌、紅毛港、愛群及復興國小向參與「愛·分享 聚光圓夢計畫」的88位學童贈禮，贈禮儀式對於雷科及學童來說極具意義，不僅雷科將學童禮物送到他們手中，同時也是學童期待許久的時刻，心願得以實現，也剛好配合節日，雷科扮演孩童的聖誕老公公，在聖誕節的前夕將學童的禮物送到其手中，讓學童有個難忘的聖誕節禮物，藉由這過程教育學童正確的觀念，物品的獲得並非予取予求。另雷科總經理黃萌義也向老師及學童分享公司理念，企業在經營的同時也要善盡企業社會責任，身為前鎮地區在地企業，更要將在地社區照顧好，並期望學童長大成人後，將此時受到幫助，也回饋給社會需要幫助的人，成為善的循環。</p>
                                        <p>雷科見拿到禮物的學童們喜悅模樣，也成為雷科持續耕耘的養分，雷科冀望透過這微小的舉動，讓學童的生活更添色彩，雷科盼望透過雙方的互動，可以讓學童懷抱著希望的光芒勇敢的去追尋夢想，發現社會存在著溫暖，並達成自己的目標， 感謝高雄市救國團給予雷科機會，讓雷科能與高雄市救國團共同替學童盡一份心力，日後若有需求，雷科必定不吝給予協助、參與計畫，也冀望透過此次的合作，能加深彼此間及社區的連結，拓展未來發展的空間。</p>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>捐贈高雄市救國團。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>高雄市救國團贈送感謝狀。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>高雄市救國團贈送鋁線手作藝品。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_14.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_15.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮仁愛國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮仁愛國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_16.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮鎮昌國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮鎮昌國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_18.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>鎮昌國小會回贈卡片。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_17.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮紅毛港國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮紅毛港國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_19.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮愛群國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮愛群國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_20.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮復興國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInLeft">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_12.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮復興國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_50 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_13.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                            <div class="tactics_up_span">
                                                <p>愛分享聚光圓夢計畫-贈禮復興國小。</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20211224_21.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
                                        <input type="button" value="回上一頁" onclick="history.back()">
                                    </div>
                                </div>

                            </div>


                            <?php
                                break;
                            case 66:
                        ?>
                            <div class="layout_style_100 ltt_service_content_table white_bg">
                                <div class="ltt_box_content_all">
                                    <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                    <div class="csr_date"><?php echo $_GET['date']; ?></div>
                                    <!--
                                    <div class="ltt_service_content_table_text">
                                        <p>雷科自2016年起持續贊助徐生明棒球發展協會，協助該協會活動經費，持續為少棒盡一份棉薄之力。</p>
                                    </div>
                                     -->
                                    <div class="layout_box_product_100 company_table_left ltt_box_product_right wow slideInRight">
                                        <div class="tactics_down">
                                            <img src="img/csr/csr_20220107_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                        </div>
                                    </div>

                                    <div class="csr_input">
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
    <?php include 'menu_csr.php'; ?>


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