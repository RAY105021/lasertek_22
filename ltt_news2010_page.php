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
                        <li><a href="ltt_news2010.php">最新消息<?php echo $_GET['years']; ?></a> > </li>
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

                                        <div class="ltt_service_content_table_text">
                                            <p>雷科公司 (6207) 去年9月買下台灣日光燈旗下雙冷式省電型冷氣(Double cool)專利，積極拓展空調產業，擁有比主要品牌廠省電、省空間等特點，今年保守估計有5億元營收貢獻。</p>
                                            <p>雷科公司董事長鄭再興表示，已有大陸某大家電集團有意投資約5000萬美元建廠生產銷售Double Cool省電冷氣，以專利做價雷科可擁有30%的技術股，約合新台幣5億元，將可大大提升雷科的每股淨值。</p>
                                            <p>鄭董事長表示，雷科Double cool省電冷氣，經過工研院測試，能源效率比值EER達4.66kcal/hW，超越各品牌大廠；如果全台灣都使用此一系列空調設備，每年平均可省下電 費610億元，相當於一座半以上核四廠的發電量，省電率高達40%到60%。</p>
                                            <p>雷科Double cool冷氣為什麼會如此省電呢？鄭董事長解釋，Double cool冷氣利用水能降溫及帶走熱量的原理，在壓縮機運轉時，除發揮原有氣冷功能外，再利用專利灑水系統噴灑在冷卻鋁鰭片上，使溫度降低，雙重冷卻，達到 節省電能效果。</p>
                                            <p>鄭董事長表示，Double cool冷氣的專利技術，已遍及美國、歐盟、泰國、大陸，利用此一技術製造的冷氣、冷凍冷藏及工業冷卻設備，已超過五分之一，在空中及海上，世界各國交通 運輸的冷氣、冷凍、冷藏及工業冷卻設備，已超過三分之一。</p>
                                            <p>業者指出，台灣已採用Double cool省電冷氣的場所有行政院新聞局、台北市議會、合庫、嘉義長庚技術學院、光華商場、慈濟大林分院…等，泰國7-11也已裝設約300到400台。</p>
                                            <p>鄭董事長透露，最近已接獲印度孟加拉一批50台訂單，預計自2月份開始出貨；捷運局也正在洽談中，同時正與大陸家電大廠洽談合作案，未來不排除透過合夥、授權或專利作價等模式，拓展此一產業。</p>
                                            <p>雷科去年總合併營業額為13.51億元，鄭再興看好空調產品事業部未來發展，預期在品牌行銷順利拓展下，成長爆發力可期。</p>
                                            <p>除了省電省空間、減熱等特點外，Double cool 冷氣還營造了一個更好的健康環境，一般冷氣常使用水塔，以提高空調效率，較易孳生病源，容易罹患退伍軍人症，而Double cool冷氣不使用水塔，不孳生病源，不會有退伍軍人症的問題，也是最健康的冷氣。 </p>
                                            <p>2010/01/19 19:18 中央社 </p>
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
                                                        <td>本公司2010年1月集團合併自結營收168,022仟元，與去年同期相比，增加121,946仟元，增加264.66%。</td>
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
                                                        <td>本本公司原經國稅局核定93年度營利事業所得稅應補稅63,408仟元，經本公司申請復查與訴願後，國稅局重新核定復查決定註銷本公司應補稅金額60,176仟元，因此，本公司僅需補稅3,232仟元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本公司已於96年度先行認列63,408仟元所得稅費用，因此，依據國稅局最後核定結果，本公司需認列60,176仟元所得稅利益。</td>
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
                                                        <th>事實發生日</th>
                                                        <td>99/02/11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司名稱</th>
                                                        <td>雷科股份有限公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th>與公司關係[請輸入本公司或聯屬公司]</th>
                                                        <td>本公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th>相互持股比例</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發生緣由</th>
                                                        <td>本公司1月13日公告取得省電冷氣專利權並非向台灣日光燈（股）購買該項專利權。此外購買之專利是指省電冷氣專利權，並非Double cool專利，Double cool僅是一項商標，並非專利。以上特此澄清。。</td>
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
                                                        <th>主旨</th>
                                                        <td><?php echo $_GET['web']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">內容</th>
                                                        <td>本公司原經國稅局核定93年度營利事業所得稅應補稅63,408仟元，經本公司申請復查與訴願後，國稅局重新核定復查決定註銷本公司應補稅金額60,176仟元，因此，本公司僅需補稅3,232仟元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本公司已於96年度先行認列63,408仟元所得稅費用，因此，依據國稅局最後核定結果，本公司需認列60,176仟元所得稅利益。</td>
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
                                                        <th>董事會決議日期</th>
                                                        <td>99/03/16</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會召開日期</th>
                                                        <td>99/06/04</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會召開地點</th>
                                                        <td>高雄市前鎮區新生路248-45號2樓</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="5">召集事由</th>
                                                        <td>
                                                            報告事項:<br>
                                                            (1)98年度營業報告<br>
                                                            (2)監察人審查98年度決算表冊<br>
                                                            (3)庫藏股買回執行情形報告<br>

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            承認事項:<br>
                                                            (1)承認98年度營業報告書及決算表冊<br>
                                                            (2)承認98年度盈餘分派案<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            討論事項一:<br>
                                                            (1)討論本公司「公司章程」修訂案。<br>
                                                            (2)討論盈餘及員工紅利轉增資發行新股案。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            討論事項二:<br>
                                                            (1)解除董事競業禁止之限制。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            臨時動議:<br>
                                                            <br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>停止過戶起始日期</th>
                                                        <td>99/04/06</td>
                                                    </tr>

                                                    <tr>
                                                        <th>停止過戶截止日期</th>
                                                        <td>99/06/04</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3">其他應敘明事項</th>
                                                        <td>依據公司法第172條之1規定，持有本公司已發行股份百分之一以上股份之股東，得以書面向公司提出股東常會議案與獨立董事候選人提名。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>99年股東常會受理股東提案與獨立董事候選人提名期間為99年3月2日至99年4月1 日。受理提案地點：雷科股份有限公司(地址：高雄市前鎮區新生路248-39號財務處)。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>有關98年度決算表冊及盈餘分派案等相關議案內容，將於股東會前40天召開董事會通過，並另行公告。</td>
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
                                                        <th>人員變動別</th>
                                                        <td>代理發言人</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發生變動日期</th>
                                                        <td>99/03/31</td>
                                                    </tr>
                                                    <tr>
                                                        <th>舊任者姓名、級職及簡歷</th>
                                                        <td>代理發言人 曹詠傑專員</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任者姓名、級職及簡歷</th>
                                                        <td>代理發言人 劉雅文副理</td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動情形</th>
                                                        <td>離職</td>
                                                    </tr>

                                                    <tr>
                                                        <th>異動原因</th>
                                                        <td>原代理發言人離職</td>
                                                    </tr>
                                                    <tr>
                                                        <th>生效日期</th>
                                                        <td>99/04/01</td>
                                                    </tr>

                                                    <tr>
                                                        <th>新任者聯絡電話</th>
                                                        <td>07-8159877</td>
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
                                                        <td>本公司2010年3月集團合併自結營收194,667仟元，與去年同期相比，增加123,987仟元，增加175.42%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年第一季集團自結合併營收共516,907仟元，創本公司歷年來第一季季營收新高。</td>
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
                                                        <th>董事會決議日期</th>
                                                        <td>99/04/23</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會召開日期</th>
                                                        <td>99/06/04</td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會召開地點</th>
                                                        <td>高雄市前鎮區新生路248-45號2樓。</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="6">召集事由</th>
                                                        <td>報告事項<br>
                                                            (1)98年度營業報告。<br>
                                                            (2)監察人審查98年度決算表冊。<br>
                                                            (3)庫藏股買回執行情形報告。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>承認事項<br>
                                                            (1)承認98年度營業報告書及決算表冊。<br>
                                                            (2)承認98年度盈餘分派案。<br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>討論事項一<br>
                                                            (1)討論本公司「公司章程」修訂案。<br>
                                                            (2)討論本公司「資金貸與及背書保證處理程序」修訂案。<br>
                                                            (3)討論本公司赴大陸投資限額案。<br>
                                                            (4)討論盈餘及員工紅利轉增資發行新股案。<br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>選舉事項<br>
                                                            (1)本公司董事、監察人選舉案。<br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>討論事項二<br>
                                                            (1)解除董事競業禁止之限制。<br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>臨時動議<br>
                                                            <br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>停止過戶起始日期</th>
                                                        <td>99/04/06</td>
                                                    </tr>

                                                    <tr>
                                                        <th>停止過戶截止日期</th>
                                                        <td>99/06/04</td>
                                                    </tr>

                                                    <tr>
                                                        <th rowspan="3">其他應敘明事項:</th>
                                                        <td>依據公司法第172條之1規定，持有本公司已發行股份百分之一以上股份之股東，得以書面向公司提出股東常會議案與獨立董事候選人提名。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>99年股東常會受理股東提案與獨立董事候選人提名期間為99年3月2日至99年4月1日。<br>受理提案地點：雷科股份有限公司(地址：高雄市前鎮區新生路248-39號財務處)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>有關98年度決算表冊及盈餘分派案等相關議案內容，將於股東會前40天召開董事會通過，並另行公告。</td>
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
                                                        <th>董事會決議日期</th>
                                                        <td>99/04/23</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">發放股利種類及金額</th>
                                                        <td>股票股利NT$35,795,900元。(每股分派新台幣0.5元)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>現金股利NT$82,330,575元。(每股分派新台幣1.15元)</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="4">異動情形（請輸入「辭職」、「解任」、「任期屆滿」或「新任」）</th>
                                                        <td>擬議配發員工股票紅利計17,989,778元，其發行新股股數以股東會前一日收盤價並考量除權除息之影響為計算基礎計算之，計算不足一股之員工股票紅利則改以現金發放。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>擬議配發董監事酬勞：新台幣4,283,281元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本公司如俟後因買回本公司股份、庫藏股之轉讓、辦理現金增資等，致影響流通在外股份數量，股東配股、配息率因此發生變動者，擬提請股東會授權董事會全權辦理變更相關事宜。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本次股東常會通過後，授權董事會另訂配股及配息基準日。</td>
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
                                                        <th>董事會決議日期</th>
                                                        <td>99/04/23</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">發放股利種類及金額</th>
                                                        <td>股票股利NT$35,795,900元。(每股分派新台幣0.5元)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>現金股利NT$82,330,575元。(每股分派新台幣1.15元)</td>
                                                    </tr>

                                                    <tr>
                                                        <th rowspan="4">其他應敘明事項</th>
                                                        <td>擬議配發員工股票紅利計17,989,778元，其發行新股股數以股東會前一日收盤價並考量除權除息之影響為計算基礎計算之，計算不足一股之員工股票紅利則改以現金發放。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>擬議配發董監事酬勞：新台幣4,283,281元。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本公司如俟後因買回本公司股份、庫藏股之轉讓、辦理現金增資等，致影響流通在外股份數量，股東配股、配息率因此發生變動者，擬提請股東會授權董事會全權辦理變更相關事宜。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>本次股東常會通過後，授權董事會另訂配股及配息基準日。</td>
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
                                                        <th>內容</th>
                                                        <td>累計本公司2010年1-5月集團自結合併營收共942,739仟元，與去年同期相比，增加571,781仟元，增加154.14%。</td>
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
                                                        <td>本公司2010年4月集團合併自結營收205,008仟元，與去年同期相比，增加96,192仟元，增加88.4%，與上月相比增加10,341仟元，增加5.31%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-4月集團自結合併營收共721,915仟元，與去年同期相比，增加443,603仟元，增加159.39%。</td>
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
                                                        <th>公司代號</th>
                                                        <td>6207</td>
                                                    </tr>
                                                    <tr>
                                                        <th>序號</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td>本公司董事會決議發行國內第三次無擔保轉換公司債</td>
                                                    </tr>
                                                    <tr>
                                                        <th>符合條款-第二條第XX款</th>
                                                        <td>11</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td>99/05/12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>董事會決議日期</th>
                                                        <td>99/05/12</td>
                                                    </tr>
                                                    <tr>
                                                        <th>名稱﹝XX公司第X次（有、無）擔保公司債﹞</th>
                                                        <td>雷科股份有限公司國內第三次無擔保轉換公司債</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行總額</th>
                                                        <td>新台幣伍億元整</td>
                                                    </tr>
                                                    <tr>
                                                        <th>每張面額</th>
                                                        <td>新台幣壹拾萬元整</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行價格</th>
                                                        <td>依面額十足發行</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行期間</th>
                                                        <td>五年</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行利率</th>
                                                        <td>票面利率0%</td>
                                                    </tr>
                                                    <tr>
                                                        <th>擔保品之總類、名稱、金額及約定事項</th>
                                                        <td>無</td>
                                                    </tr>
                                                    <tr>
                                                        <th>募得價款之用途及運用計畫</th>
                                                        <td>償還短期借款、營運資金</td>
                                                    </tr>
                                                    <tr>
                                                        <th>承銷方式</th>
                                                        <td>詢價圈購</td>
                                                    </tr>
                                                    <tr>
                                                        <th>公司債受託人</th>
                                                        <td>兆豐國際商業銀行股份有限公司信託部</td>
                                                    </tr>
                                                    <tr>
                                                        <th>承銷或代銷機構</th>
                                                        <td>凱基證券股份有限公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th>發行保證人</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th>代理還本付息機構</th>
                                                        <td>本公司股務代理機構</td>
                                                    </tr>
                                                    <tr>
                                                        <th>簽證機構</th>
                                                        <td>不適用</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="2">能轉換股份者，其轉換辦法</th>
                                                        <td>債券持有人於本轉換公司債發行日後屆滿一個月之次日起，至到期日前十日止，除依法暫停過戶期間及轉換辦法第(二)項規定期間外，得依轉換辦法第十條、第十一條、第十三條規定將本轉換公司債轉換為本公司普通股。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>自本公司無償配股停止過戶日、現金股息停止過戶日或現金增資認股停止過戶日前十五個營業日起，至權利分派基準日止，辦理減資之減資基準日起至減資換發股票開始交易日前一日止，停止轉換。</td>
                                                    </tr>

                                                    <tr>
                                                        <th>賣回條件</th>
                                                        <td>本公司應於本轉換債發行滿二年及滿三年之前三十日，以掛號發給債權人一份「債券持有人賣回權行使通知書」，並函知財團法人中華民國證券櫃檯買賣中心公告本 公司債持有人賣回權之行使，債權人得於公告後三十日內以書面通知本公司股務代理機構（於送達時即生效力，採郵寄者以郵戳為憑）要求本公司以債券面額加計利 息補償金（滿二年及三年之利息補償金分別為債券面額之101.0025%及101.5075%。實質收益率均為0.5%），將其所持有之本轉換債以現金贖 回。</td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3">買回條件</th>
                                                        <td>本轉換債發行期滿一個月翌日起至本轉換債到期日前四十日止，若本公司普通股股收盤價格連續三十個營業日超過當時轉換價格達30%時，本公司得於其後 三十個營業日內，以掛號寄發給債權人一份一個月期滿之「債券收回通知書」（前述期間自本公司發信之日起算，並以該期間屆滿日為債券收回基準日），且函知財 團法人中華民國證券櫃檯買賣中心公告，並於該期間屆滿時，以債券面額贖回本公司。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>本轉換債發行滿一個月翌日起至本轉換債到期日前四十日止，本轉換公司債流通在外餘額低於原發行總額之10%時，本公司得於其後任何時間，以掛號發給 債權人一份三十日期滿之「債券收回通知書」（前述期間自本公司發信之日起算，並以該期間屆滿日為債券收回基準日），且函知台財團法人中華民國證券櫃檯買賣 中心公告並於該期間屆滿時，以債券面額為贖回價格，以現金收回其全部債券。</td>
                                                    </tr>

                                                    <tr>
                                                        <td>若債權人於「債券收回通知書」所載債券收回基準日前，未以書面回覆本公司股務代理機構（於送達時即生效力，採郵寄者以郵戳為憑）者，本公司得按當時 之轉換價格，以通知期間屆滿日為轉換基準日，將其持有之本轉換債轉換為股票。</td>
                                                    </tr>

                                                    <tr>
                                                        <th>附有轉換、交換或認股者，其換股基準日</th>
                                                        <td>每季應向公司公司登記之主管機關申請資本額變更登記至少一次。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>附有轉換、交換或認股者，對股權可能稀釋情形</th>
                                                        <td>轉換價格尚未決定。</td>
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
                                                        <th>序號</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td>公告本公司99年股東常會重要決議事項</td>
                                                    </tr>
                                                    <tr>
                                                        <th>符合條款-第二條第XX款</th>
                                                        <td>第18款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th rowspan="3">重要決議事項</th>
                                                        <td>承認通過事項<br>
                                                            (1).通過承認本公司98年度營業報告書及決算表冊。<br>
                                                            (2).通過承認本公司98年度盈餘分派案:股東紅利共計1.65元。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>討論通過事項<br>
                                                            (1).通過本公司公司章程修訂案。<br>
                                                            (2).通過本公司資金貸與及背書保證處理程序修訂案。<br>
                                                            (3).通過本公司赴大陸投資限額案。<br>
                                                            (4).通過盈餘及員工紅利轉增資發行新股案。
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>普通股股利每仟股無償配發50股，股東紅利新台幣35,795,900元，計發行新股3,579,590股，及員工股票紅利新台幣17,989,770 元，計發行新股488,056股，不足一股之員工紅利26元，以現金發放。</td>
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
                                                        <th>公司代號</th>
                                                        <td>6207</td>
                                                    </tr>
                                                    <tr>
                                                        <th>序號</th>
                                                        <td>2</td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td>公告本公司99年股東常會改選董監事</td>
                                                    </tr>
                                                    <tr>
                                                        <th>符合條款-第二條第XX款</th>
                                                        <td>第6款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會日期</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>舊任者姓名及簡歷</th>
                                                        <td>
                                                            (1).董事:普雷氏投資(股)公司代表人:鄭再興(普雷氏投資股份有限公司董事長)。<br>
                                                            (2).董事:普雷氏投資(股)公司代表人:鄧順治(中山大學管研所)。<br>
                                                            (3).董事:傅新喬(中山大學管研所)。<br>
                                                            (4).董事:順治投資(股)公司代表人:曾逸敦(中山大學機電所教授)。<br>
                                                            (5).董事:順治投資(股)公司代表人:黃萌義(雷科(股)公司副總經理)。<br>
                                                            (6).獨立董事:劉德明(中山大學財務管理學系教授)。<br>
                                                            (7).獨立董事:黃來福(中山開發投資(股)公司董事長)。<br>
                                                            (8).監察人:鄭玉慧(實踐大學會計學系)。<br>
                                                            (9).監察人:陳志祥(中山大學管研所)。<br>
                                                            (10).獨立監察人:徐守德(中山大學財務管理學系主任、教授)。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任者姓名及簡歷:</th>
                                                        <td>
                                                            (1).董事:普雷氏投資(股)公司代表人:鄭再興(普雷氏投資股份有限公司董事長)。<br>
                                                            (2).董事:順治投資(股)公司代表人:莊凱婷。<br>
                                                            (3).董事:傅新喬(中山大學管研所)。<br>
                                                            (4).董事:黃萌義(雷科(股)公司副總經理)。<br>
                                                            (5).董事:吳袖田。<br>
                                                            (6).獨立董事:劉德明(中山大學財務管理學系教授)。<br>
                                                            (7).獨立董事:黃來福(中山開發投資(股)公司董事長)。<br>
                                                            (8).監察人:鄭玉慧(實踐大學會計學系)。<br>
                                                            (9).監察人:陳志祥(中山大學管研所)。<br>
                                                            (10).獨立監察人:徐守德(中山大學財務管理學系主任、教授)。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動情形（請輸入「辭職」、「解任」、「任期屆滿」或「新任」）</th>
                                                        <td>任期屆滿</td>
                                                    </tr>
                                                    <tr>
                                                        <th>異動原因</th>
                                                        <td>任期屆滿，全面改選</td>
                                                    </tr>
                                                    <tr>
                                                        <th>新任董事選任時持股數</th>
                                                        <td>
                                                            (1).董事:普雷氏投資(股)公司:(5,103,541股)。<br>
                                                            (2).董事:順治投資(股)公司:(554,384股)。<br>
                                                            (3).董事:傅新喬(218,768股)。<br>
                                                            (4).董事:黃萌義(301,019股)。<br>
                                                            (5).董事:吳袖田(0股)。<br>
                                                            (6).獨立董事:劉德明(0股)。<br>
                                                            (7).獨立董事:黃來福(23,000股)。<br>
                                                            (8).監察人:鄭玉慧(132,744股)。<br>
                                                            (9).監察人:陳志祥(625,855股)。<br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th>原任期（例xx/xx/xx ~ xx/xx/xx）</th>
                                                        <td>96/06/13~99/06/12</td>
                                                    </tr>

                                                    <tr>
                                                        <th>新任生效日期</th>
                                                        <td>99/06/04</td>
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
                                                        <th>公司代號</th>
                                                        <td>6207</td>
                                                    </tr>
                                                    <tr>
                                                        <th>序號</th>
                                                        <td>1</td>
                                                    </tr>
                                                    <tr>
                                                        <th>主旨</th>
                                                        <td>公告本公司99年股東常會改選董監事</td>
                                                    </tr>
                                                    <tr>
                                                        <th>符合條款-第二條第XX款</th>
                                                        <td>第6款</td>
                                                    </tr>
                                                    <tr>
                                                        <th>事實發生日</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>股東會決議日</th>
                                                        <td><?php echo $_GET['date']; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>許可從事競業行為之董事姓名及職稱</th>
                                                        <td>
                                                            (1).董事:普雷氏投資(股)公司代表人:鄭再興。<br>
                                                            (2).董事:順治投資(股)公司代表人:莊凱婷。<br>
                                                            (3).董事:傅新喬。<br>
                                                            (4).董事:黃萌義。<br>
                                                            (5).董事:吳袖田。<br>
                                                            (6).獨立董事:劉德明。<br>
                                                            (7).獨立董事:黃來福。<br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>許可從事競業行為之項目</th>
                                                        <td>與本公司營業範圍相同或類似之公司</td>
                                                    </tr>
                                                    <tr>
                                                        <th>許可從事競業行為之期間</th>
                                                        <td>任職本公司董事職務期間</td>
                                                    </tr>
                                                    <tr>
                                                        <th>決議情形（請依公司法第209條說明表決結果）</th>
                                                        <td>經99年股東常會主席徵詢全體出席股東無異議照案通過。</td>
                                                    </tr>
                                                    <tr>
                                                        <th>所許可之競業行為如屬大陸地區事業之營業者，董事姓名及職稱（非屬大陸地區事業之
                                                            營業者，以下請輸〝不適用〞）</th>
                                                        <td>
                                                            不適用
                                                        </td>
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
                                                        <td>均為本公司100%轉投資之子公司與孫公司，採權益法認列投資損益。</td>
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
                                                        <td>本公司2010年6月集團合併自結營收245,154仟元，與去年同期相比，增加139,863仟元，增加132.83%，與上月相比增加24,330仟元，增加11.02%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-6月集團自結合併營收共1,187,893仟元，與去年同期相比，增加711,644仟元，增加149.43%。</td>
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
                                                        <td>本公司2010年7月集團合併自結營收252,859仟元，與去年同期相比，增加112,045仟元，增加79.57%，與上月相比增加7,705仟元，增加3.14%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-7月集團自結合併營收共1,440,752仟元，與去年同期相比，增加823,689仟元，增加133.49%。</td>
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
                                                        <td>本公司2010年8月集團合併自結營收271,658仟元，與去年同期相比，增加135,067仟元，增加98.88%，與上月相比增加18,799仟元，增加7.43%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-8月集團自結合併營收共1,712,410仟元，與去年同期相比，增加958,756仟元，增加127.21%。</td>
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
                                                        <td>本公司2010年9月集團合併自結營收234,010仟元，與去年同期相比，增加91,309仟元，增加63.99%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-9月集團自結合併營收共1,946,420仟元，與去年同期相比，增加1,050,065仟元，增加117.15%。</td>
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
                                                        <td>本公司2010年10月集團合併自結營收197,039仟元，與去年同期相比，增加58,736仟元，增加42.47%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-10月集團自結合併營收共2,143,459仟元，與去年同期相比，增加1,034,658仟元，增加107.17%。</td>
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
                                                        <td>本公司2010年11月集團合併自結營收169,940仟元，與去年同期相比，增加22,100仟元，增加14.95%。</td>
                                                    </tr>
                                                    <tr>
                                                        <td>累計本公司2010年1-11月集團自結合併營收共2,313,399仟元，與去年同期相比，增加1,130,901仟元，增加95.64%。</td>
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