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
                        <li><a href="ltt_news2011.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
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
                                                        <td>本公司2010年12月集團合併自結營收188,602仟元，與去年同期相比，增加19,146仟元，增加11.30%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-12月集團自結合併營收共2,502,001仟元，與去年同期相比，增加1,150,047仟元，增加85.07 %。</td>
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第31款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/01/25</td>
                                                    </tr>
                                                    <tr>
                                                        <th>傳播媒體名稱</th>
                                                        <td>經濟日報</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導日期</th>
                                                        <td>100/01/25</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導內容</th>
                                                        <td>法人推估，99年全年每股稅後純益將落在4元到4.5元間。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>投資人提供訊息概要</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司對該等報導或提供訊息之說明</th>
                                                        <td>本公司並未公告99年度財務預測，也並未自願公告獲利情形，本公司99年度財務報表已請會計師查核中，查核後經董事會決議通過後會進行公告申報。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <td>本本公司2011年2月集團合併自結營收146,496仟元，與去年同期相比，減少7,722仟元，減少5.01%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2011年1-2月集團自結合併營收共320,464仟元，與去年同期相比，減少1,776仟元，減少0.55%。</td>
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
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第6款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/04/18</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發生變動日期</th>
                                                        <td>100/04/18</td>
                                                    </tr>
                                                    <tr>
                                                        <th>舊任者姓名及簡歷</th>
                                                        <td>吳袖田</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任者姓名及簡歷</th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動情形，請輸入辭職、解任、任期屆滿或新任</th>
                                                        <td>辭職</td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動原因</th>
                                                        <td>因公務繁忙，故辭任</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任董事選任時持股數</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>原任期(例xx/xx/xx ~ xx/xx/xx)</th>
                                                        <td>96/06/13~99/06/12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任生效日期</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>同任期董事變動比率</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第31款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/04/27</td>
                                                    </tr>
                                                    <tr>
                                                        <th>傳播媒體名稱</th>
                                                        <td>蘋果日報</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導日期</th>
                                                        <td>100/04/27</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">報導內容</th>
                                                        <td>法人預估，雷科今年營收年增率將挑戰50%，每股稅後純益上看7元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>法人預估，雷科第一季單季毛利率將超過22%，每股稅後純益則可達1.3元，
                                                            優於去年第4季。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>投資人提供訊息概要</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">公司對該等報導或提供訊息之說明</th>
                                                        <td>本公司並未公告財務預測，有關今年營收與獲利情況，純屬法人預估。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本公司今年第一季財務報表尚未經會計師核閱完成，報導所述，純屬法人預估。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <td>本公司2011年4月集團合併自結營收258,459仟元，與去年同期相比，增加53,451仟元，增加26.07%，與上月相比，增加2,263仟元，增加0.88%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2011年1-4月集團自結合併營收共835,119仟元，與去年同期相比，增加113,204仟元，增加15.68%。</td>
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第31款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/05/13</td>
                                                    </tr>
                                                    <tr>
                                                        <th>傳播媒體名稱</th>
                                                        <td>經濟日報</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導日期</th>
                                                        <td>100/05/13</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導內容</th>
                                                        <td>雷科今年上半年EPS挑戰3元以上，全年EPS上看6元。</td>
                                                    </tr>

                                                    <tr>
                                                        <th>投資人提供訊息概要</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司對該等報導或提供訊息之說明</th>
                                                        <td></td>
                                                    </tr>

                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第18款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/06/08</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會日期</th>
                                                        <td>100/06/09</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">重要決議事項，承認通過事項</th>
                                                        <td>通過承認本公司99年度營業報告書及決算表冊。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>通過承認本公司99年度盈餘分派案:股東紅利共計2元。</td>
                                                    </tr>

                                                    <tr>
                                                        <th rowspan="3">討論通過事項</th>
                                                        <td>通過本公司公司章程修訂案。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>通過資本公積轉增資發行新股案。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>每仟股無償配發100股，資本公積轉增資金額為新台幣75,691,630元，計發行新股7,569,163股，不足一股之畸零股，以現金發放至元為止。</td>
                                                    </tr>

                                                    <tr>
                                                        <th>年度財務報告是否經股東會承認</th>
                                                        <td>是</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="45%">發布單位</th>
                                                        <td width="55%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>符合條款</th>
                                                        <td>第二條第21款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>100/06/09</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會日期</th>
                                                        <td>100/06/09</td>
                                                    </tr>
                                                    <tr>
                                                        <th>許可從事競業行為之董事姓名及職稱</th>
                                                        <td>董事:黃聯豐</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="4">許可從事競業行為之項目</th>
                                                        <td>富迪印刷企業股份有限公司董事長</td>
                                                    </tr>
                                                    <tr>
                                                        <td>富郁紙器企業有限公司負責人</td>
                                                    </tr>
                                                    <tr>
                                                        <td>昆盈企業股份有限公司董事</td>
                                                    </tr>
                                                    <tr>
                                                        <td>前源科技股份有限公司監察人</td>
                                                    </tr>

                                                    <tr>
                                                        <th>許可從事競業行為之期間</th>
                                                        <td>任職本公司董事職務期間</td>
                                                    </tr>
                                                    <tr>
                                                        <th>決議情形(請依公司法第209條說明表決結果)</th>
                                                        <td>經100年股東常會主席徵詢全體出席股東無異議照案通過。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>所許可之競業行為如屬大陸地區事業之營業者，董事姓名及職稱（非屬大陸地區事業之
                                                            營業者，以下請輸〝不適用〞）</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>所擔任該大陸地區事業之公司名稱及職務</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>所擔任該大陸地區事業地址</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>所擔任該大陸地區事業營業項目</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>對本公司財務業務之影響程度</th>
                                                        <td>無影響</td>
                                                    </tr>
                                                    <tr>
                                                        <th>董事如有對該大陸地區事業從事投資者，其投資金額及持股比例</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>本公司2011年5月集團合併自結營收204,181仟元，與去年同期相比，減少 16,643仟元，減少7.54 %。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2011年1-5月集團自結合併營收共1,039,300仟元，與去年同期相比，增加96,561仟元，增加10.24 %。</td>
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
                                                        <th width="35%">發布單位</th>
                                                        <td width="65%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>發生變動日期</th>
                                                        <td>100/07/15</td>
                                                    </tr>
                                                    <tr>
                                                        <th>舊任者姓名及簡歷</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任者姓名及簡歷</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動情形（請輸入「辭職」、「解任」、「任期屆滿」或「新任」）</th>
                                                        <td>解任</td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動原因</th>
                                                        <td>本公司新選任董事黃聯豐先生因於股東會召開前之停止股票過戶期間內，轉讓持股超過二分之一以上，致新任董事一職當選無效。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任董事選任時持股數</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>原任期</th>
                                                        <td>100/06/09~102/06/03</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任生效日期</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>同任期董事變動比率</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <th width="35%">發布單位</th>
                                                        <td width="65%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>傳播媒體名稱</th>
                                                        <td>工商時報</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導日期</th>
                                                        <td>100/07/16</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導內容</th>
                                                        <td>雷科上半年預估每股稅後純益將達2.3至2.5元，預計7月營收將持續刷新紀錄，整個下半年營收將大幅成長50％。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>投資人提供訊息概要</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司對該等報導或提供訊息之說明</th>
                                                        <td>本公司並未公告財務預測，有關今年營收與獲利情況，純屬媒體與法人預估。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <th width="35%">發布單位</th>
                                                        <td width="65%">本公司<a aria-label="詳細資料" data-balloon-pos="up" href="service.php">發言人</a></td>
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
                                                        <th>傳播媒體名稱</th>
                                                        <td>蘋果時報</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導日期</th>
                                                        <td>100/07/18</td>
                                                    </tr>
                                                    <tr>
                                                        <th>報導內容</th>
                                                        <td>法人預估第三季營收季增率將達40%~50%，第四季可望維持第三季水準，下半年營收將較上半年營收成長50%。估第2季每股純益約1.2~1.4元，上半年每股稅後純益2.5元，推估全年每股稅後純益可達5.5元。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>投資人提供訊息概要</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司對該等報導或提供訊息之說明</th>
                                                        <td>本公司並未公告財務預測，有關今年營收與獲利情況，純屬媒體與法人預估。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>無</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>本公司2011年7月集團合併自結營收338,746仟元，與去年同期相比，增加85,887仟元，增加33.97 %，與上月相比，增加13,544仟元，增加4.16 %。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2011年1-7月集團自結合併營收共1,703,248仟元，與去年同期相比，增加262,496仟元，增加18.22%。</td>
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