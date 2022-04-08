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
                        <li><a href="ltt_news2013.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
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
                                                        <td>本公司2012年12月集團合併自結營收151,821仟元，與去年同期相比減少8,640仟元，減少5.38%，與上月相比，增加5,426仟元，增加3.71%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2012年1-12月集團自結合併營收共2,190,111仟元，與去年同期相比，減少276,821仟元，減少11.22%。</td>
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

                                        <div class="ltt_service_content_table_text">
                                            <p>(6207)<a href="https://www.moneydj.com/KMDJ/wiki/wikiViewer.aspx?keyid=cd1b3ddb-a8f6-46f0-bc68-2ee49fbfcda7" target="_blank">雷科</a> - 本公司1月自結合併集團 <a href="https://www.moneydj.com/KMDJ/wiki/wikiViewer.aspx?keyid=fb06fdf2-196e-402c-be7b-e04242a70bdc" target="_blank">營收</a> 1.66億元 </p>
                                        </div>

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th width="25%">事實發生日</th>
                                                        <td width="75%"><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司名稱</th>
                                                        <td>雷科股份有限公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th>與公司關係<br>[請輸入本公司或聯屬公司]</th>
                                                        <td>本公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th><a href="https://www.moneydj.com/KMDJ/wiki/WikiViewer.aspx?Title=%u76F8%u4E92" target="_blank">相互</a>持股比例</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發生緣由</th>
                                                        <td>使資訊更公開，按月公佈本公司合併營收(已扣除內部交易)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>因應措施</th>
                                                        <td>本公司2013年1月集團合併自結營收166,087仟元，與去年同期相比增加44,969仟元，增加37.13%，與上月相比，增加14,266仟元，增加9.4 %。</td>
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

                                        <div class="ltt_service_content_table_text">
                                            <p>自結2月合併<a href="https://www.moneydj.com/KMDJ/wiki/WikiSubjectList.aspx?op=3&b=%u71df%u6536" target="_blank">營收</a>達 1.63億元，幾乎與上月的1.66億元持平，月減率僅1.5%，較去年同期還逆勢成長5.89%，雷科表示，今年農曆年假長達9天，被動元件客戶的需求也因此大減，但由於今年公司的設備訂單暢旺，彌補了包材的減幅。</p>
                                            <p>致2月營收表現逆勢；而展望3月，由於公司目前的設備訂單出貨仍佳，因此單月營收展望更佳。</p>
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
                                                        <td>集團合併自結營收158,660仟元，與去年同期相比減少41,236仟元，減少20.63%，累計本公司2013年1-3月集團自結合併營收共488,313仟元。</td>
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
                                                    <th colspan="2">公告本公司董事會決議盈餘轉增資發行新股</th>

                                                    <tr>
                                                        <th width="35%">董事會決議日期</th>
                                                        <td width="65%">102/05/03</td>
                                                    </tr>
                                                    <tr>
                                                        <th>增資資金來源</th>
                                                        <td>101年之可分配盈餘。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行股數(如屬盈餘轉增資，則不含配發給員工部份)</th>
                                                        <td>2,444,831股。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>每股面額</th>
                                                        <td>新台幣10元。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行總金額</th>
                                                        <td>新台幣24,448,310元。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行價格</th>
                                                        <td>不適用。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>員工認購股數或配發金額</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公開銷售股數</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>原股東認購或無償配發比例(請註明暫定每仟股認購或配發股數)</th>
                                                        <td>原股東每仟股無償配發30股。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>畸零股及逾期未認購股份之處理方式</th>
                                                        <td>配發不足一股之畸零股,依公司法第二四○條規定按面額折發現金至元為止，所餘股份授權董事長洽特定人按面額承購。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>本次發行新股之權利義務</th>
                                                        <td>與舊股權利義務相同。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>本次增資資金用途</th>
                                                        <td>充實營運資金。</td>
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
                                                        <td>集團合併自結營收177,147仟元，與去年同期相比減少24,935仟元，減少12.34%，累計本公司2013年1-4月集團自結合併營收共665,460仟元。</td>
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
                                                        <td>集團合併自結營收182,399仟元，與去年同期相比減少12,497仟元，減少6.41%，累計本公司2013年1-5月集團自結合併營收共847,859仟元。</td>
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
                                                        <td>集團合併自結營收148,232仟元，與去年同期相比減少62,900仟元，減少29.79%，累計本公司2013年1-6月集團自結合併營收共996,091仟元。</td>
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

                                        <div class="layout_box_product_100 ltt_box_product_right company_table_left wow slideInLeft">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th colspan="2">公告本公司董事會決議配股配息基準日</th>
                                                    </tr>
                                                    <tr>
                                                        <th width="35%">董事會、股東會決議或公司決定日期</th>
                                                        <td width="65%">102/07/17</td>
                                                    </tr>
                                                    <tr>
                                                        <th>除權、息類別（請填入「除權」、「除息」或「除權息」）</th>
                                                        <td>除權息</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3">發放股利種類及金額</th>
                                                        <td>普通股現金股利NT$28,523,032元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>股票股利NT$24,448,310元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本案嗣後因買回本公司股份、庫藏股轉讓、可轉換公司債轉換等，致影響本公司流通在外股份總數時，依本案決議之普通股擬分配盈餘總額，按配息與配股基準日本公司實際流通在外股份之數量，調整股東配息比率及配股比率。</td>
                                                    </tr>

                                                    <tr>
                                                        <th>除權(息)交易日</th>
                                                        <td>102/08/13</td>
                                                    </tr>
                                                    <tr>
                                                        <th>最後過戶日</th>
                                                        <td>102/08/14</td>
                                                    </tr>
                                                    <tr>
                                                        <th>停止過戶起始日期</th>
                                                        <td>102/08/15</td>
                                                    </tr>
                                                    <tr>
                                                        <th>停止過戶截止日期</th>
                                                        <td>102/08/19</td>
                                                    </tr>
                                                    <tr>
                                                        <th>除權(息)基準日</th>
                                                        <td>102/08/19</td>
                                                    </tr>
                                                    <tr>
                                                        <th>其他應敘明事項</th>
                                                        <td>另依本公司發行之國內第三次及第四次無擔保轉換公司債發行及轉換辦法條規定，自102年7月25日至102年8月19日止，轉換公司債停止轉換。</td>
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
                                                        <td>集團合併自結營收180,033仟元，與去年同期相比減少90,430仟元，減少33.44%，累計本公司2013年1-7月集團自結合併營收共1,176,123仟元。</td>
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
                                                        <td>集團合併自結營收196,699仟元，與去年同期相比減少20,038仟元，減少9.25%，累計本公司2013年1-8月集團自結合併營收共1,372,822仟元。</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收157,719仟元，與去年同期相比減少2,668仟元，減少1.66%，累計本公司2013年1-9月集團自結合併營收共1,530,541仟元。</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>集團合併自結營收119,472仟元，與去年同期相比減少41,252仟元，減少25.67%，累計本公司2013年1-10月集團自結合併營收共1,650,013仟元。</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>本公司董事會決議辦理庫藏股股票註銷及減資，此次減資金額為新台幣15,670,000元，預計消除股份共1,567,000股，減資比率為1.83%，預計減資後實收資本額為新台幣839,392,070元，本次減資基準日訂定為102年12月15日。</td>
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
                                                        <th rowspan="5">內容</th>
                                                        <td>依據本公司發行及轉換辦法第19條規定，本轉換公司債發行滿一個月後翌日（民國100年6月26日）至發行期間屆滿前四十日（民國105年4月15日）止，本轉換公司債流通在外餘額低於原發行總額之10%時，本公司得於其後任何時間，以掛號寄發一份一個月期滿之「債券收回通知書」(前述期間自本公司發信之日起算，並以該期間屆滿日為債券收回基準日，且前述期間不得為前述第九條之轉換期間)予
                                                            債券持有人(以「債券收回通知書」寄發日前第五個營業日債券人名冊所載者為準，對於其後因買賣或其他原因始取得本轉換公司債之債券持有人，則以公告方式為之)，贖回價格訂為本債券面額，以現金收回其全部債券，並函請櫃檯買賣中心公告。本公司執行收回請求，應於債券收回基準日後五個營業日內以現金贖回本轉換債。
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>債券收回期間：自民國102年11月30日至102年12月29日止。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>債券收回基準日：民國102年12月29日。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>終止上櫃買賣日: 民國102年12月30日。</td>
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
                                                        <th rowspan="5">內容</th>
                                                        <td>依據本公司發行及轉換辦法第19條規定，本轉換公司債發行
                                                            滿一個月後翌日（民國99年8月9日）至發行期間屆滿前四十日（民國104年5月28日）
                                                            止，本轉換公司債流通在外餘額低於原發行總額之10%時，本公司得於其後任何時間，
                                                            以掛號寄發一份一個月期滿之「債券收回通知書」(前述期間自本公司發信之日起算，
                                                            並以該期間屆滿日為債券收回基準日，且前述期間不得為前述第九條之轉換期間)
                                                            予債券持有人(以「債券收回通知書」寄發日前第五個營業日債券人名冊所載者為準，
                                                            對於其後因買賣或其他原因始取得本轉換公司債之債券持有人，則以公告方式為之)，
                                                            贖回價格訂為本債券面額，以現金收回其全部債券，並函請櫃檯買賣中心公告。
                                                            本公司執行收回請求，應於債券收回基準日後五個營業日內以現金贖回本轉換債。
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>債券收回期間：自民國102年11月30日至102年12月29日止。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>債券收回基準日：民國102年12月29日。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>終止上櫃買賣日: 民國102年12月30日。</td>
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
                                                        <td>集團合併自結營收120,142仟元，與去年同期相比減少26,254仟元，減少17.93%，累計本公司2013年1-11月集團自結合併營收共1,770,155仟元。</td>
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