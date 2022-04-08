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
                        <li><a href="ltt_news2021.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 87,587仟元，與去年同期相比增加321仟元，增加0.37%，累計本公司2019年12月集團自結合併營收共1,086,623仟元，較去年同期減少50.82%。</td>
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


                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20210120_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20210120_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">發布單位</th>
                                                        <td width="75%">本公司<a href="service.php">發言人</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 120,429仟元，與去年同期相比增加35,339仟元，增加41.53%累計本公司2021年01月集團自結合併營收共120,429仟元，較去年同期增加41.53%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 90,119仟元，與去年同期相比增加28,519仟元，增加46.30%，累計本公司22021年02月集團自結合併營收共210,548仟元，較去年同期增加43.53%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 135,273仟元，與去年同期相比增加29,391仟元，增加27.76%， 累計本公司2021年03月集團自結合併營收共345,821仟元，較去年同期增加36.92%。</td>
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
                            case 6:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="ltt_service_content_table_text">
                                            <p>為感謝園區廣大從業人員的付出與貢獻，於勞動節前夕由各園區遴選出49名本國籍模範勞工及優良單位等獎項，另為表彰認真盡責的國際移工，經濟部加工出口區管理處自去(109)年首創優秀國際移工選拔，今年共有7名國際移工獲獎。今(28)日於高雄楠梓科技產業園區莊敬堂舉行110年五一勞動節表揚大會，由加工處處長楊伯耕親自頒獎，為當選的模範勞工獻上祝賀。</p>
                                            <p>加工處處長楊伯耕表示，這是科技產業園區更名後首次的模範勞工表揚，但不論時代如何更迭，廣大的勞工朋友們一直是園區產業發展的重要基石，園區現有近8萬名從業人員，56名模範勞工是萬中選出，不分國籍展現盡忠職守、敬業樂群服務精神，深獲事業單位肯定，更感謝所有勞工在疫情挑戰下仍堅守崗位，讓園區營運績效逆勢成長。</p>
                                            <p>此次模範勞工代表中，宏全國際股份有限公司中港分公司的林凰玉女士已在該公司服務近27年，擔任採購一職，秉持對公司最有利原則購入原物料，節省公司成本，並積極控管原物料之入廠，減輕倉庫庫容不足的壓力，辦事績效相當卓著，深獲公司及客戶的肯定，不僅是企業的瑰寶、更是職場的典範。</p>
                                            <p>此外，臺中潭子科技產業園區內光聯科技股份有限公司擔任技術員的帕拉（SON AB SUPARAT）工作表現優異，能確實執行主管交付的任務，並全力配合公司執行工作推展，雖非本國籍人員，但自我進修中文語言專長，擔任主管與泰籍移工間的溝通橋梁，協助產線運作順暢，熱忱積極的正向態度，足為員工楷模，榮獲本(110)年度優秀國際移工。 </p>
                                            <p>本次活動同時頒發台灣雙葉電子股份有限公司等15家勞資關係優良事業單位、萬寶至馬達股份有限公司企業工會等9家優良工會、工聯會副理事長陳金城等11名優秀工會職員、台灣佳能股份有限公司企業工會秘書張淑如等3名優秀工會會務工作人員，及台灣恩智浦半導體股份有限公司等8家（位）熱心公益貢獻獎。</p>
                                            <p>其中榮獲熱心公益貢獻獎的台灣恩智浦半導體股份有限公司，長期認養高雄楠梓科技產業園區靜馨園前緣綠地，設置公園公共設施供員工使用，109年舉辦「NXP Can Help」公益傳愛活動，幫助公益團體安德烈慈善協會、羅山學堂及華山基金會，並與高雄市楠梓特殊學校簽約，評估錄用該校學員，提升該校就業率，熱心公益，不遺餘力，實為園區之表率。</p>
                                            <p>加工處表示，引領臺灣經濟起飛的加工出口區，已正式更名為「科技產業園區」，邁向另一個嶄新的階段，未來將秉持積極任事的服務精神，朝產業科技升級、服務智慧升級、環境優化升級的目標持續邁進，也期望園區內勞資政三方同心協力，攜手再創經濟佳績。</p>
                                            <p>文章轉載自<a href="https://www.epza.gov.tw/info.aspx?pageid=5aa966ecd020763c&cid=9d8125c14ddb51a0" target="_bland">經濟部加工出口區管理部</a></p>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20210428_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                            case 7:
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 124,652仟元，與去年同期相比減少26,940仟元，減少17.77%，累計本公司2021年04月集團自結合併營收共470,473仟元，較去年同期增加16.41%。</td>
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
                            case 8:
                            ?>
                                <div class="layout_style_100 ltt_service_content_table white_bg">
                                    <div class="ltt_box_content_all">
                                        <div class="csr_h3_title_line"><?php echo $_GET['web']; ?></div>
                                        <div class="csr_date"><?php echo $_GET['date']; ?></div>

                                        <div class="ltt_service_content_table_text">
                                            <p>原定6/10(四)110年股東常會，因疫情金管會已要求停止召開，待董事會決議擇期召開。</p>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20210521_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 175,279仟元，與去年同期相比增加69,186仟元，增加65.21%，累計本公司2021年05月集團自結合併營收共645,753仟元，較去年同期增加26.55%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 128,047仟元，與去年同期相比增加28,837仟元，增加29.07%，累計本公司2021年06月集團自結合併營收共773,799仟元，較去年同期增加26.96%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>1.集團合併自結營收 159,984仟元，與去年同期相比增加76,401仟元，增加91.41%， 累計本公司2021年07月集團自結合併營收共993,784仟元，較去年同期增加43.39%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 160,776仟元，與去年同期相比增加65,136仟元，增加68.11%， 累計本公司2021年08月集團自結合併營收共1,094,560仟元，較去年同期增加38.78%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 167,480仟元，與去年同期相比增加55,669仟元，增加49.79%， 累計本公司2021年09月集團自結合併營收共1,262,040仟元，較去年同期增加40.15%。</td>
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 170,064仟元，與去年同期相比增加88,221仟元，增加107.79%，累計本公司2021年10月集團自結合併營收共1,432,104仟元，較去年同期增加45.78%。</td>
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

                                        <div class="ltt_service_content_table_text">
                                            <p>雷科於2021年10月20日進行（Talent Quality-management System，人才發展品質管理系統）評核，在歷經前兩次評選銀牌獎後，本次終獲得TTQS企業機構版金牌獎的最高榮譽。(從官網顯示此次企業機構版金牌得獎率約2.2%) 這個獎項不光是對公司內部辦訓單位的肯定，也是對公司長期對人才培訓的認證；除了感謝內部所有的員工與主管積極投入培訓，也感謝幫助過雷科的每一位外部講師與工作人員。</p>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20211201_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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
                                                        <th>發布主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容說明</th>
                                                        <td>集團合併自結營收 134,379仟元，與去年同期相比增加24,481仟元，增加22.28%，累計本公司2021年11月集團自結合併營收共1,566,483仟元，較去年同期增加43.42%。</td>
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


                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInRight">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20211228_01.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
                                                <!--<div class="tactics_up_span">
                                                    <p>感恩茶會合照</p>
                                                </div>-->
                                            </div>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right wow slideInLeft">
                                            <div class="tactics_down">
                                                <img src="img/news/2021/news_20211228_02.jpg" alt="<?php echo $_GET['web']; ?>" title="<?php echo $_GET['web']; ?>">
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