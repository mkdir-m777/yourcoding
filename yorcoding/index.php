<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Noto+Sans+JP:wght@400;700&family=Zen+Old+Mincho&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/sass/style.css">

    <title>ユアコーディング</title>
</head>

<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="header-inner inner">
            <div class="header-left">
                <div class="header-logo-warp">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/Logo.png" alt="ユアコーディング">
                </div>
                <h1 class="header-title">ユアコーディング</h1>
            </div>
            <div class="header-center">
                <ul class="header-menu-box">
                    <li class="header-menu-item">特徴</li>
                    <li class="header-menu-item">価格</li>
                    <li class="header-menu-item">お問い合わせ</li>
                </ul>
            </div>
            <div class="header-right">
                <a class="btn" href="">お問い合わせ
                </a>
                <div id='js-click-ivent' class="hanberger-menu js-click-ivent">
                    <span id="lineZ" class="lineZ"></span>
                    <span id="line1" class="line1"></span>
                    <span id="line2" class="line2"></span>
                    <span id="line3" class="line3"></span>
                </div>
            </div>
            <div id='js-click-ivent' class="hanberger-menu js-click-ivent">
                <span id="lineZ" class="lineZ"></span>
                <span id="line1" class="line1"></span>
                <span id="line2" class="line2"></span>
                <span id="line3" class="line3"></span>
            </div>
        </div>
    </header>

    <main>
        <div class="fv-right-bg"></div>
        <section class="fv inner">
            <div class="fv-left" data-aos="fade-up">
                <h1 class="section-title fv-title">
                    コーディングの手間を<br>
                    最小に、デザインに注力<br>
                    する助けに
                </h1>
                <h2 class="fv-text">
                    ユアコーディングはコーディングに
                    特化したフリーランス
                    デザインに注力されたい方の
                    助けになります
                </h2>
                <div class="fb-btn-wrap">
                    <a class="btn" href="">お問い合わせ
                    </a>
                </div>
            </div>
            <div class="fv-right" data-aos="fade-left">
                <img class="fv-img-1" src="<?php echo get_stylesheet_directory_uri() ?>/img/manager.png" alt="">
            </div>
        </section>

        <section class="service">
            <div class="service-inner inner">
                <h1 class="section-title service-title">
                    ユアコーディング3つの特徴
                </h1>
                <p class="section-title-en">
                    FEATURES
                </p>

                <div class="service-item-box">
                    <h2 class="section-title-h2 service-title-h2">
                        高速コーディング
                    </h2>
                    <ul class="service-flex-box" data-aos="zoom-in">
                        <li class="service-item-left">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/service-item-1.png" alt="サービス提供イメージ">
                        </li>
                        <li class="service-item-right">
                            <h3 class="section-title-h3 service-h3-1">
                                コーディングに特化したフリーランスのため、
                                スピード感を持った開発が可能。
                            </h3>
                            <p class="service-text">
                                開発は常にスピードとの勝負です。<br>
                                ユアコーディングはコーディングに特化しているため、<br>
                                素早く納品することで、クライアントがデザインに注力<br>
                                する助けとなります。
                            </p>
                        </li>
                    </ul>
                </div>

                <div class="service-item-box">
                    <h2 class="section-title-h2 service-title-h2">
                        高品質
                    </h2>
                    <ul class="service-flex-box service-flex-rev" data-aos="zoom-in">
                        <li class="service-item-right">
                            <h3 class="section-title-h3 service-h3-2">
                                正しいマークアップで、
                                内部SEOに強いコーディングを
                                デフォルトで行います。
                            </h3>
                            <p class="service-text service-text-sp-mg">
                                ユアコーディングでは、「予測しやすい」「再利用しやすい」<br>
                                「保守しやすい」「拡張しやすい」と言った設計をもとに<br>
                                きちんとコーディングを行うため、納品後も安心です。
                            </p>
                        </li>
                        <li class="service-item-left">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/service-item-2.png" alt="サービス提供イメージ">
                        </li>
                    </ul>
                </div>

                <div class="service-item-box">
                    <h2 class="section-title-h2 service-h3-3">
                        迅速なレスポンス
                    </h2>
                    <ul class="service-flex-box" data-aos="zoom-in">
                        <li class="service-item-left">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/service-item-3.png" alt="サービス提供イメージ">
                        </li>
                        <li class="service-item-right">
                            <h3 class="section-title-h3 service-title-h3">
                                原則いただいたメッセージは、
                                業務時間内であれば6時間以内に
                                お返しいたします。
                            </h3>
                            <p class="service-text">
                                連絡を返さないフリーランスが多い中、<br>
                                ユアコーディングでは定期的な進捗報告など、<br>
                                社会人としての基本を踏まえて仕事を行なって<br>
                                おります。
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="plice">
            <div class="plice-inner inner" data-aos="flip-left">
                <h1 class="section-title plice-title">
                    価格
                </h1>
                <p class="section-title-en">
                    PRICE
                </p>

                <table class="plice-table">
                    <tr class="plice-row">
                        <td class="left-col">HTMLコーディングトップページ</td>
                        <td class="right-col">30.000円〜</td>
                    </tr>
                    <tr class="plice-row">
                        <td class="left-col">HTMLコーディング下層1ページ</td>
                        <td class="right-col">10.000円〜</td>
                    </tr>
                    <tr class="plice-row">
                        <td class="left-col">HTML+WordPressトップページ</td>
                        <td class="right-col">55.000円〜</td>
                    </tr>
                    <tr class="plice-row">
                        <td class="left-col">HTML+WordPress下層1ページ</td>
                        <td class="right-col">15.000円〜</td>
                    </tr>
                </table>
                <p class="plice-text">＊詳細な価格はページや仕様によって異なります</p>
            </div>
        </section>

        <section class="FAQ">
            <div class="FAQ-inner inner" data-aos="flip-left">
                <h1 class="section-title">
                    よくある質問
                </h1>
                <p class="section-title-en">
                    FAQ
                </p>

                <table class="FAQ-table">
                    <tr class="FAQ-row">
                        <td id="js-Q-col" class="Q-col">デザインから一貫してお願いすることは可能でしょうか</td>
                        <td class="A-col active">ユアコーディングはコーディングに特化したサービスですので、デザインからお受けすることは基本的にありません。
                            ただデザインを行う際は提携しているデザイナーと連携して対応させていただきますので、別途ご連絡ください。</td>
                    </tr>
                    <tr class="FAQ-row">
                        <td id="js-Q-col" class="Q-col">WordPressのカスタマイズをお願いすることも可能でしょうか？</td>
                        <td class="A-col">可能です。ただECサイトなどの場合は構築難易度や工数の関係で綿密にヒアリングさせていただきたく思います。</td>
                    </tr>
                    <tr class="FAQ-row">
                        <td id="js-Q-col" class="Q-col">コーディングのスピード感が知りたい</td>
                        <td class="A-col">HTMLレスポンシブ込み5ページで1週間、10ページで2週間、WordPressサイト5ページで2週間、10ページで3週間が目安に
                            なります。</td>
                    </tr>
                </table>
            </div>
        </section>

        <section class="blog">
            <div class="blog-inner">
                <h1 class="section-title">
                    ブログ
                </h1>
                <p class="section-title-en">
                    BLOG
                </p>
                <article class="blog-post-warp">
                    <ul class="">
                        <a class="" href="" data-aos="fade-down-right">
                            <li class="blog-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog1.png" alt="">
                                <div class="blog-title-warp">
                                    <p>サイトをリニューアルオープンしました。</p>
                                    <time>2020.01.23</time>
                                </div>
                            </li>
                        </a>

                        <a class="" href="" data-aos="fade-down-right">
                            <li class="blog-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog2.png" alt="">
                                <div class="blog-title-warp">
                                    <p>WebサイトでSEO内部施策に適したコー
                                        ディングでどれぐらいサイトが早くなるの
                                        か検証してみました</p>
                                    <time>2020.01.24</time>
                                </div>
                            </li>
                        </a>
                        <a class="" href="" data-aos="fade-down-right">
                            <li class="blog-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/blog3.png" alt="">
                                <div class="blog-title-warp">
                                    <p>ユアコーディングではデザイナーの方を
                                        広く募集しています。</p>
                                    <time>2020.01.25</time>
                                </div>
                            </li>
                        </a>
                    </ul>
                </article>
        </section>

        <section class="work">
            <div class="work-inner">
                <h1 class="section-title">
                    制作実績
                </h1>
                <p class="section-title-en">
                    WORK
                </p>
                <article class="work-post-warp swiper">
                    <ul class="swiper-wrapper">
                        <a class="swiper-slide" href="">
                            <li class="work-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/work1.png" alt="">
                                <div class="work-title-warp">
                                    <p>株式会社サンプル採用サイトのコーディ<br>
                                        ングを行いました！</p>
                                    <p class="work-text">採用技術：jQuery,Bootstrap4<br>
                                        実装期間：2週間<br>
                                        担当コーダー：石井</p>
                                </div>
                            </li>
                        </a>
                        <a class="swiper-slide" href="">
                            <li class="work-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/work2.png" alt="">
                                <div class="work-title-warp">
                                    <p>コーディングカンファレンスのイベント<br>
                                        LPの制作を行いました！</p>
                                    <p class="work-text">採用技術：jQuery,Bootstrap4<br>
                                        実装期間：4週間<br>
                                        担当コーダー：石井</p>
                                </div>
                            </li>
                        </a>
                        <a class="swiper-slide" href="">
                            <li class="work-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/work1.png" alt="">
                                <div class="work-title-warp">
                                    <p>株式会社サンプル採用サイトのコーディ<br>
                                        ングを行い ました！</p>
                                    <p class="work-text">採用技術：jQuery,Bootstrap4<br>
                                        実装期間：2週間<br>
                                        担当コーダー：石井</p>
                                </div>
                            </li>
                        </a>
                        <a class="swiper-slide" href="">
                            <li class="work-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/work3.png" alt="">
                                <div class="work-title-warp">
                                    <p>株式会社サンプル様通販サイトのコーディ<br>
                                        ングを行いました！</p>
                                    <p class="work-text">採用技術：jQuery,Bootstrap4<br>
                                        実装期間：6 週間<br>
                                        担当コーダー：石井</p>
                                </div>
                            </li>
                        </a>
                        <a class="swiper-slide" href="">
                            <li class="work-item-box">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/img/work1.png" alt="">
                                <div class="work-title-warp">
                                    <p>株式会社サンプル採用サイトのコーディ<br>
                                        ングを行いました！</p>
                                    <p class="work-text">採用技術：jQuery,Bootstrap4<br>
                                        実装期間：2週間<br>
                                        担当コーダー：石井</p>
                                </div>
                            </li>
                        </a>

                    </ul>
                </article>
            </div>
        </section>

        <section class="contact">
            <h1 class="section-title contact-title">
                お問い合わせ
            </h1>
            <p class="section-title-en">
                CONTACT
            </p>
            <p class="section-title-ja">
                コーディングの人出が足りないとき、<br>
                あなたの力になります
            </p>

            <?php get_template_part('contactform'); ?>



        </section>
    </main>

    <footer class="footer">
        <p class="footer-title">ユアコーディング</p>
        <div class="footer-txt-flex">
            <p class="footer-left">プライバシーポリシー</p>
            <p class="footer-right">個人商取引法に基づく表記</p>
        </div>
        <small>
            ©ユアコーディング, All Rights Reserved.
        </small>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/script.js"></script>
    <!-- フリガナ自動入力ライブラリここから -->
    <script src="js/jquery.autoKana.js"></script>
    <script>
        (function($) {
            $.fn.autoKana('input[name="name_1"]', 'input[name="read_1"]', {
                katakana: false
            });
            $.fn.autoKana('input[name="name_2"]', 'input[name="read_2"]', {
                katakana: false
            });
        })(jQuery);
    </script>

    <script>
        AOS.init();
    </script>
</body>

</html>