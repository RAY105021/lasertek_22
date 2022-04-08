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
                        <li><a href="ltt_news2018.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>座談會貴賓合影</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>黃志芳勉勵企業在科技化的浪潮下，更要加緊調整腳步，跟上科技趨勢</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>外貿協會董事長黃志芳（中）與主講人台灣藝術公司董事長林富男（左）、雷科董事長鄭再興合影</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>三三會青年會副執行長、中國信託副總經理于迺文促成此次座談會成立</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>鄭再興分享談到他創業與跨域成功的經驗</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>林富男與貴賓分享他身為企業第二代創業成功與失敗的經驗</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>座談會交流熱烈</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180104_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <div class="tactics_up_span">
                                                    <p>座談會一景</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ltt_service_content_table_text">
                                            <p>中評社高雄1月4日電（作者 洪威喆）為因應南台灣產業全球化與轉型，並整合南部企業接班人的力量，建立多元創新與合作，外貿協會在三三會青年會鼓勵下，於日前在高雄辦事處，邀請2位南台灣傑出企業家─台灣藝術股份有限公司（8479）董事長林富男及雷科股份有限公司(6207)董事長鄭再興，以自己的親身體驗，來與南台灣企業接班人共同商討目前台灣企業普遍面臨到的企業轉型、順利接班、創新發展、產業整合與聯盟等問題，期冀企業明日之星一同合作，共創未來。 </p>
                                            <p>此次座談會內容包括雷科董事長鄭再興的“創業與跨業成功經驗分享”，以及台灣藝術公司董事長林富男暢談“如何成功接班進而創新、發展經驗分享”，在綜合議題時還有三三青年會副執行長于迺文、一路發國際物流執行長特助張瑋倫一起探討“如何保持永續創新的產業競爭優勢”、“企業接班如何成功轉型或多角化經營”及“如何異業結盟，加值產業運作”等議題。 </p>
                                            <p>外貿協會董事長黃志芳專程南下全程參與，足見對這次座談會的重視。黃志芳開場致詞時談到，期待未來貿協能夠針對企業的接班、轉型、創新分成三大主題深論，持續與南部的企業家交流溝通。他認為國際環境變化快，勉勵企業在科技化的浪潮下，更要加緊調整腳步，跟上科技趨勢。 </p>
                                            <p>三三會青年會副執行長、中國信託副總經理于迺文於開場致詞表示，因為看到很多產業的二代準備接班，因此特別成立三三會青年會作為交流平台，協助企業二代或青年企業家站穩腳步，而企業轉型與創新是需要火花，其中一個可能是來自異業結盟，並透過積極與日本、中國交流，為企業啟發一些新的想法。</p>
                                            <p>鄭再興分享談到他創業與跨域成功的經驗，從他在大學時代與同學組織社團，幫人組裝音響與電腦作為第一次創業，畢業後在飛利普擔任了七年的工程師之後，出來創立了雷科，是他第二次創業。接著在12年前就讀中山EMBA，與同學相約再創一個與本業無關的產業，於是以一種不帶壓力的心情創立惟中有限公司代理紅酒，假如銷售出問題也可自行喝掉，後又因緣際會結識藝術家，開始代理藝術品，因此他定義自己白天是雷科的科技人，晚上是惟中的文創人。第四個創業是三年前於中山大學成立西灣天使投資股份有限公司，幫助中山大學教授與學生創業。 </p>
                                            <p>鄭再興為雷科科技創辦人，也曾是高雄上市櫃企業組成的港都會會長，所經營之雷科公司為台灣第一家SMD包裝及測試專業企業，後又再跨足餐飲、藝術、智慧科技、生物科技及智慧家居。鄭再興認為，接班靠著是組織的中堅幹部，未來將由團隊來接班，而他則會作為業師，幫助孩子另外去創業。 </p>
                                            <p>林富男與貴賓分享他身為企業第二代創業成功與失敗的經驗。他在墾丁有間台灣知名的熱門飯店─墾丁天鵝湖湖畔別墅飯店，當時購得土地的過程一波三折，取得之後帶領高雄漢王飯店團隊經過七次考察，決定要開設飯店，並請國外建築師畫好設計圖，過程中一直受到父親反對，因此他帶領父親於“春天吶喊音樂祭”活動期間，實際體驗墾丁的住宿需求，並參考寶來溫泉旅店的模式，終於成功開設墾丁天鵝湖湖畔別墅飯店，十幾年來扣除取得成本，可說賺了180倍，為事業帶起了一波高峰。 </p>
                                            <p>第二波高峰則是高雄漢王洲際飯店經營二級古蹟打狗英國領事館官邸時，成功的打響了其名號，使之成為高雄觀光勝地。而後想要如法砲製，經營高雄孔廟，可惜地理位置偏遠，生意荒涼，成了人生唯一的生敗經驗。因此他勉勵企業二代，創業維艱，守成也不易，在這之間要好好細緻品嘗。</p>
                                            <p>林富男為高雄漢王洲際飯店集團總裁、台灣藝術股份有限公司董事長、台灣藝術研究院院長，也是“行政院顧問”，旗下有13家企業，包括飯店、觀光、藝術、文創、機電、日常用品等等進出口。林富男沒有考慮接班問題，因為所有企業皆有專門的負責人在處理，在自己旗下工作若沒有二十年資歷，是沒有辦法勝任經理，因此他會開很多家公司，讓表現優異的資深幹部去負責管理。 </p>
                                            <p>黃志芳為整場座談會結語，第一，產業形式的變化，全球的物流帶來革命性的發展，貿協與企業都要思考五年、十年後存不存在，如果要存在，現在要作什麼準備；再者，公司要想像是一朵雲，未來要透過這朵雲來運作，否則未來無法競爭。最後，他勉勵企業在海外不要單打獨鬥，產業團結合作才會力量大，讓海外對台灣企業刮目相看。</p>
                                            <p>(全原文轉自中國評論通訊社)</p>

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
                                                        <td>集團合併自結營收 128,948仟元，與去年同期相比減少48,981仟元，減少27.53%，累計本公司2019年01月集團自結合併營收共128,948仟元，較去年同期減少27.53%。</td>
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
                            case 3:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180124_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180126_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180126_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                            case 5:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>


                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_09.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_10.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_11.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_12.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_13.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_14.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_15.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_16.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_17.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_18.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_19.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_20.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_21.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_22.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_23.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_24.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_25.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_26.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_27.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>
                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_28.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180127_29.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <td>集團合併自結營收177,929仟元，與去年同期相比增加11,500仟元，增加6.91%，累計本公司2018年01月集團自結合併營收共177,929仟元，較去年同期增加6.91。</td>
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
                                                <img src="img/news/2018/news_20180221_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <td>集團合併自結營收160,354仟元，與去年同期相比減少61,230仟元，減少27.63%，累計本公司2018年02月集團自結合併營收共338,283仟元，較去年同期減少12.82%。</td>
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
                            case 9:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180325_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180325_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180325_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180325_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180325_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                            case 10:
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
                                                        <td>集團合併自結營收184,170仟元，與去年同期相比減少96,023仟元，減少34.27%，累計本公司2018年03月集團自結合併營收共522,453仟元，較去年同期減少21.81%。</td>
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
                            case 11:
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
                                                        <td>集團合併自結營收117,369仟元，與去年同期相比減少120,683仟元，減少50.70%，累計本公司2018年04月集團自結合併營收共639,822仟元，較去年同期減少29.40%。</td>
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
                            case 12:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180510_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                            case 13:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180602_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <td>集團合併自結營收228,712仟元，與去年同期相比增加72,526仟元，增加46.44%，累計本公司2018年05月集團自結合併營收共868,534仟元，較去年同期減少18.25%。</td>
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180608_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_06.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_07.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20180615_08.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <td>集團合併自結營收282,736仟元，與去年同期相比增加88,641仟元，增加45.67%，累計本公司2018年06月集團自結合併營收共1,151,270仟元，較去年同期減少8.38%。</td>
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
                                                        <td>集團合併自結營收267,652仟元，與去年同期相比增加112,577仟元，增加72.60%，累計本公司2018年07月集團自結合併營收共1,418,922仟元，較去年同期增加0.52%。</td>
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
                                                        <td>集團合併自結營收 266,574仟元，與去年同期相比增加78,650仟元，增加41.85%，累計本公司2018年08月集團自結合併營收共1,685,496仟元，較去年同期增加5.37%。</td>
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
                            case 20:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181004_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181004_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181004_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181004_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181004_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                            case 21:
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
                                                        <td>集團合併自結營收 180,593仟元，與去年同期相比減少29,406仟元，減少14.00%，累計本公司2018年09月集團自結合併營收共 1,866,089仟元，較去年同期增加3.13%。</td>
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
                            case 22:
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
                                                        <td>集團合併自結營收141,732仟元，與去年同期相比減少17,120仟元，減少10.78%，累計本公司2018年10月集團自結合併營收共2,007,822仟元，較去年同期增加2.00%。</td>
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
                                                        <td>集團合併自結營收114,210仟元，與去年同期相比減少34,349仟元，減少23.12%，累計本公司2018年11月集團自結合併營收共2,122,031仟元，較去年同期增加0.24%。</td>
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
                                                <img src="img/news/2018/news_20181006_00.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181006_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181006_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181006_03.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181006_04.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_50 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2018/news_20181006_05.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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