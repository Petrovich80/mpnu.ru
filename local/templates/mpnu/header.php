<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    die();
}
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
use Bitrix\Main\Page\Asset;
$rsInst = Asset::getInstance();
$bIsMainPage = $APPLICATION->GetCurPage(false) == SITE_DIR;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<?php $APPLICATION->ShowHead(); ?>
		<title><?php $APPLICATION->ShowTitle(); ?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?php
            $rsInst->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
        ?>
	</head>
	<body>
		<div id="panel">
			<?php $APPLICATION->ShowPanel();?>
		</div>

    <header class="header">
        <div class="container"> <a class="header__logo" href="/">
                <!-- Generator: Adobe Illustrator 24.1.2, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 125 76" style="enable-background:new 0 0 125 76;" xml:space="preserve">
<style type="text/css">
.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#B70000;}
.st1{fill:#B70000;}
.st2{fill:#B70000;stroke:#E52628;stroke-width:0.178;stroke-linecap:square;stroke-miterlimit:10;}
</style>
                    <g>
                        <g>
                            <path class="st0" d="M41.3,17.6h38.6v1.3c-5.7,2.9-9.7,7.2-12,13.9c-0.7,1.9-1,4-1,6v17.9l-14.4,0.2V39.8c0-10.5-4.3-17-11-20.9
        L41.3,17.6z"/>
                        </g>
                        <g>
                            <path class="st0" d="M69,56.5l14.6,0.3V42.5c0-0.6,0.5-1,1-1l0,0c0.6,0,1,0.5,1,1v14.3h14.8V42.4c0-0.5,0.4-0.9,0.9-0.9l0,0
        c0.5,0,0.9,0.4,0.9,0.9v14.4H117V18.1l-3.1,0.2c-7.7,0.6-16.3,4.9-20.8,11.1l0,0V17.6h-1.9c-0.3,0-0.6,0-0.8,0
        C80.2,18.5,71,26,69.1,36.1C69,36.7,69,37.3,69,37.9V56.5"/>
                        </g>
                        <g>
                            <path class="st0" d="M28.5,17.6c-9.8,0-17.9,5.9-20.5,14l0.2-0.1c5.4-3.4,12.9-3.9,19-1.7l1.8,0.8c0,0,0.5,0.3,0.7,0.4
        c0.1,0.1,0.1,0.2,0.2,0.3c0,0.1,0,0.2,0,0.3c0,0.1-0.2,0.1-0.2,0.1c-0.1,0-0.3,0-0.4,0c-0.2,0-0.8-0.2-0.8-0.2
        c-6.2-1.8-14.6-0.3-19.9,2.8L7.3,35c-0.1,0.7-0.1,1.5-0.1,2.2c0,2.4,0.5,4.8,1.4,6.9c6.2-4,14.6-4.1,21.5-1.4c0,0,1,0.4,0.8,1.1
        c-0.1,0.3-1.4-0.1-1.4-0.1c-6.5-2.1-13.8-0.5-19.7,2.7c3.6,6.1,10.7,10.3,18.9,10.3c11.9,0,21.4-8.7,21.4-19.5
        C49.9,26.3,40.4,17.6,28.5,17.6z"/>
                        </g>
                        <g>
                            <path class="st1" d="M124.9,63.7H0v-53h124.9V63.7z M1.8,61.9h121.3V12.5H1.8V61.9z"/>
                        </g>
                        <g>
                            <path class="st2" d="M2,64.1"/>
                        </g>
                        <g>
                            <path class="st1" d="M121.5,60.6H3.3V13.9h118.2V60.6z M5.1,58.8h114.6V15.7H5.1V58.8z"/>
                        </g>
                        <g>
                            <path class="st2" d="M2.8,63.4"/>
                        </g>
                        <g>
                            <path class="st1" d="M2.3,0l1,5.4l1-5.4h2.2v8.4H5.1V0.8l0,0L3.7,8.4h-1L1.4,0.8l0,0v7.6H0.1V0H2.3z"/>
                            <path class="st1" d="M45.8,0v8.4h-1.4V1.3h-1.8v7.1h-1.4V0H45.8z"/>
                            <path class="st1" d="M81.9,3.2h1.8V0h1.4v8.4h-1.4V4.5h-1.8v3.9h-1.4V0h1.4V3.2z"/>
                            <path class="st1" d="M121,0l1.1,4.4l1.1-4.4h1.5l-2,6.8c-0.4,1.3-0.8,1.8-1.5,1.8c-0.3,0-0.6-0.1-0.8-0.2V7.2
        c0.1,0,0.2,0.1,0.4,0.1c0.3,0,0.5-0.2,0.6-0.7l-2-6.6H121z"/>
                        </g>
                        <g>
                            <path class="st1" d="M5.8,70.8c-0.2-2-1.1-3-2.4-3c-0.8,0-1.9,0.3-2.3,1.9h-1c0.3-1.5,1.3-2.9,3.3-2.9c2.2,0,3.5,1.9,3.5,4.6
        c0,3.4-1.7,4.7-3.5,4.7c-0.6,0-2.9-0.3-3.4-3.1h1c0.3,1.6,1.7,2,2.3,2c1.7,0,2.3-1.4,2.4-3.2H2.3v-1H5.8z"/>
                            <path class="st1" d="M10,70.6h4v-3.7h1v8.9h-1v-4.2h-4v4.2H9v-8.9h1V70.6z"/>
                            <path class="st1" d="M23.1,75.8h-5.7v-8.9H23V68h-4.6v2.6h4.2v1.1h-4.2v3.1h4.7C23.1,74.8,23.1,75.8,23.1,75.8z"/>
                            <path class="st1" d="M26.3,75.8h-1v-8.9h3.5c1.4,0,2.3,1.1,2.3,2.5c0,1.2-0.6,2.6-2.3,2.6h-2.4v3.8H26.3z M26.3,71h2.1
        c0.9,0,1.6-0.4,1.6-1.6c0-1.1-0.7-1.5-1.5-1.5h-2.1V71H26.3z"/>
                            <path class="st1" d="M38.2,66.9V68h-4v7.8h-1v-8.9H38.2z"/>
                            <path class="st1" d="M43.3,76c-2.9,0-3.8-2.8-3.8-4.7s0.9-4.7,3.8-4.7c2.9,0,3.8,2.8,3.8,4.7S46.2,76,43.3,76z M43.3,67.7
        c-1.7,0-2.7,1.5-2.7,3.6s1,3.6,2.7,3.6s2.7-1.5,2.7-3.6C46,69.3,45,67.7,43.3,67.7z"/>
                            <path class="st1" d="M52.2,75.8h-1V68h-2.6v-1.1h6.3V68h-2.6v7.8H52.2z"/>
                            <path class="st1" d="M62.2,75.8h-5.7v-8.9h5.6V68h-4.6v2.6h4.2v1.1h-4.2v3.1h4.7V75.8z"/>
                            <path class="st1" d="M70.5,75.8h-1.3l-2.1-3.7L65,75.8h-1.3l2.8-4.6l-2.6-4.3h1.3l2,3.4l2-3.4h1.2l-2.6,4.3L70.5,75.8z"/>
                            <path class="st1" d="M73.8,66.9l2.2,7.5l0,0l2.2-7.5h1.5v8.9h-1v-5.3c0-0.3,0-1.4,0-2.2l0,0l-2.2,7.5h-1l-2.2-7.5l0,0
        c0,0.8,0,2,0,2.2v5.3h-1v-8.9H73.8z"/>
                            <path class="st1" d="M85.5,76c-2.9,0-3.8-2.8-3.8-4.7s0.9-4.7,3.8-4.7s3.8,2.8,3.8,4.7S88.4,76,85.5,76z M85.5,67.7
        c-1.7,0-2.7,1.5-2.7,3.6s1,3.6,2.7,3.6s2.7-1.5,2.7-3.6C88.2,69.3,87.2,67.7,85.5,67.7z"/>
                            <path class="st1" d="M92.4,70.6h4v-3.7h1v8.9h-1v-4.2h-4v4.2h-1v-8.9h1V70.6z"/>
                            <path class="st1" d="M102.9,75.8h-1V68h-2.6v-1.1h6.3V68H103v7.8H102.9z"/>
                            <path class="st1" d="M108.5,73.2l-0.8,2.6h-1.1l2.9-8.9h1.2l2.8,8.9h-1.1l-0.8-2.6H108.5z M111.2,72.2l-1.1-3.9l0,0l-1.2,3.9
        H111.2z"/>
                            <path class="st1" d="M120.3,66.9v4.3l3.2-4.3h1.3l-2.7,3.6l2.9,5.3h-1.3l-2.4-4.4l-1,1.3v3.2h-1v-3.2l-1-1.3l-2.4,4.4h-1.3
        l2.9-5.3l-2.7-3.6h1.3l3.2,4.3v-4.3H120.3z"/>
                        </g>
                    </g>
</svg>
            </a>

            <?php /* main menu */ ?>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main_top", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "3",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>
            <?php /* end of main menu */ ?>

            <a class="header__search" href=""><img src="<?=SITE_TEMPLATE_PATH?>/assets/search.svg" alt=""></a><a class="header__email" href="mailto:mpnu@mpnu.ru">mpnu@mpnu.ru </a>
            <ul class="header__contacts">
                <li> <a href="tel:+7 (495) 959 27 38">+7 (495) 959 27 38</a></li>
                <li> <a href="tel:+7 (495) 959 26 57">+7 (495) 959 26 57</a></li>
            </ul>
            <button class="header__callback btn" type="button" scrollto="#callback">Оставить заявку</button>
            <div class="header__mobile">
                <div class="mobile">
                    <button class="mobile__search-trigger" type="button"><svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.02736 15.3905C9.80234 15.3901 11.5262 14.8186 12.9244 13.7668L17.3204 17.9953L18.7344 16.6352L14.3384 12.4066C15.4324 11.0616 16.0269 9.40304 16.0274 7.69524C16.0274 3.45228 12.4384 0 8.02736 0C3.61635 0 0.0273438 3.45228 0.0273438 7.69524C0.0273438 11.9382 3.61635 15.3905 8.02736 15.3905ZM8.02736 1.92381C11.3364 1.92381 14.0274 4.5123 14.0274 7.69524C14.0274 10.8782 11.3364 13.4667 8.02736 13.4667C4.71835 13.4667 2.02735 10.8782 2.02735 7.69524C2.02735 4.5123 4.71835 1.92381 8.02736 1.92381Z" fill="#B70000"/>
                        </svg>

                    </button>
                    <button class="mobile__mail" type="button"><svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 0.197998H3C2.20435 0.197998 1.44129 0.514069 0.87868 1.07668C0.316071 1.63929 0 2.40235 0 3.198V13.198C0 13.9936 0.316071 14.7567 0.87868 15.3193C1.44129 15.8819 2.20435 16.198 3 16.198H17C17.7956 16.198 18.5587 15.8819 19.1213 15.3193C19.6839 14.7567 20 13.9936 20 13.198V3.198C20 2.40235 19.6839 1.63929 19.1213 1.07668C18.5587 0.514069 17.7956 0.197998 17 0.197998ZM3 2.198H17C17.2652 2.198 17.5196 2.30335 17.7071 2.49089C17.8946 2.67843 18 2.93278 18 3.198L10 8.078L2 3.198C2 2.93278 2.10536 2.67843 2.29289 2.49089C2.48043 2.30335 2.73478 2.198 3 2.198ZM18 13.198C18 13.4632 17.8946 13.7176 17.7071 13.9051C17.5196 14.0926 17.2652 14.198 17 14.198H3C2.73478 14.198 2.48043 14.0926 2.29289 13.9051C2.10536 13.7176 2 13.4632 2 13.198V5.478L9.48 10.048C9.63202 10.1358 9.80446 10.182 9.98 10.182C10.1555 10.182 10.328 10.1358 10.48 10.048L18 5.478V13.198Z" fill="#B70000"/>
                        </svg>

                    </button>
                    <button class="mobile__phone" type="button"><svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.16508 14.29L8.01508 14.17C7.95933 14.1322 7.8988 14.1019 7.83508 14.08L7.65508 14C7.4929 13.9661 7.32484 13.973 7.166 14.0201C7.00716 14.0673 6.86252 14.1531 6.74508 14.27C6.65675 14.3672 6.58572 14.4788 6.53508 14.6C6.4594 14.7822 6.43931 14.9827 6.47733 15.1763C6.51536 15.3699 6.6098 15.5479 6.74877 15.688C6.88775 15.828 7.06504 15.9238 7.25834 15.9633C7.45164 16.0028 7.6523 15.9843 7.83508 15.91C7.95457 15.852 8.0656 15.778 8.16508 15.69C8.30384 15.5494 8.39783 15.3708 8.43521 15.1768C8.47258 14.9828 8.45166 14.7821 8.37508 14.6C8.32522 14.4844 8.25397 14.3792 8.16508 14.29ZM11.4551 0H3.45508C2.65943 0 1.89637 0.316071 1.33376 0.87868C0.771149 1.44129 0.455078 2.20435 0.455078 3V17C0.455078 17.7956 0.771149 18.5587 1.33376 19.1213C1.89637 19.6839 2.65943 20 3.45508 20H11.4551C12.2507 20 13.0138 19.6839 13.5764 19.1213C14.139 18.5587 14.4551 17.7956 14.4551 17V3C14.4551 2.20435 14.139 1.44129 13.5764 0.87868C13.0138 0.316071 12.2507 0 11.4551 0ZM12.4551 17C12.4551 17.2652 12.3497 17.5196 12.1622 17.7071C11.9746 17.8946 11.7203 18 11.4551 18H3.45508C3.18986 18 2.93551 17.8946 2.74797 17.7071C2.56044 17.5196 2.45508 17.2652 2.45508 17V3C2.45508 2.73478 2.56044 2.48043 2.74797 2.29289C2.93551 2.10536 3.18986 2 3.45508 2H11.4551C11.7203 2 11.9746 2.10536 12.1622 2.29289C12.3497 2.48043 12.4551 2.73478 12.4551 3V17Z" fill="#B70000"/>
                        </svg>

                    </button>
                    <button class="mobile__burger" type="button"><span class="normal"><svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M3 2H17C17.2652 2 17.5196 1.89464 17.7071 1.70711C17.8946 1.51957 18 1.26522 18 1C18 0.734784 17.8946 0.48043 17.7071 0.292893C17.5196 0.105357 17.2652 0 17 0H3C2.73478 0 2.48043 0.105357 2.29289 0.292893C2.10536 0.48043 2 0.734784 2 1C2 1.26522 2.10536 1.51957 2.29289 1.70711C2.48043 1.89464 2.73478 2 3 2ZM19 5H1C0.734784 5 0.48043 5.10536 0.292893 5.29289C0.105357 5.48043 0 5.73478 0 6C0 6.26522 0.105357 6.51957 0.292893 6.70711C0.48043 6.89464 0.734784 7 1 7H19C19.2652 7 19.5196 6.89464 19.7071 6.70711C19.8946 6.51957 20 6.26522 20 6C20 5.73478 19.8946 5.48043 19.7071 5.29289C19.5196 5.10536 19.2652 5 19 5ZM17 10H3C2.73478 10 2.48043 10.1054 2.29289 10.2929C2.10536 10.4804 2 10.7348 2 11C2 11.2652 2.10536 11.5196 2.29289 11.7071C2.48043 11.8946 2.73478 12 3 12H17C17.2652 12 17.5196 11.8946 17.7071 11.7071C17.8946 11.5196 18 11.2652 18 11C18 10.7348 17.8946 10.4804 17.7071 10.2929C17.5196 10.1054 17.2652 10 17 10Z" fill="white"/>
</svg>
</span><span class="close"><svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M16.9703 15.5563L12.7277 11.3137L16.9703 7.07104C17.1579 6.8835 17.2632 6.62915 17.2632 6.36393C17.2632 6.09871 17.1579 5.84436 16.9703 5.65682C16.7828 5.46929 16.5284 5.36393 16.2632 5.36393C15.998 5.36393 15.7437 5.46929 15.5561 5.65682L11.3135 9.89947L7.07084 5.65682C6.8833 5.46929 6.62895 5.36393 6.36373 5.36393C6.09851 5.36393 5.84416 5.46929 5.65662 5.65682C5.46909 5.84436 5.36373 6.09871 5.36373 6.36393C5.36373 6.62915 5.46909 6.8835 5.65662 7.07104L9.89926 11.3137L5.65662 15.5563C5.46909 15.7439 5.36373 15.9982 5.36373 16.2634C5.36373 16.5286 5.46909 16.783 5.65662 16.9705C5.84416 17.1581 6.09851 17.2634 6.36373 17.2634C6.62894 17.2634 6.8833 17.1581 7.07084 16.9705L11.3135 12.7279L15.5561 16.9705C15.7437 17.1581 15.998 17.2634 16.2632 17.2634C16.5284 17.2634 16.7828 17.1581 16.9703 16.9705C17.1579 16.783 17.2632 16.5286 17.2632 16.2634C17.2632 15.9982 17.1579 15.7439 16.9703 15.5563Z" fill="white"/>
</svg>
</span></button>
                    <div class="mobile__search">
                        <input type="search" placeholder="Поиск...">
                        <button type="button"><img src="<?=SITE_TEMPLATE_PATH?>/assets/close-search.svg" alt=""></button>
                    </div>
                </div>
                <div class="actions">
                    <ul class="list phones">
                        <li><img src="<?=SITE_TEMPLATE_PATH?>/assets/action-phone.svg" alt=""><a href="tel:+7 (495) 959 27 38"><span>Вызов</span><span>+7 (495) 959 27 38</span></a></li>
                        <li><img src="<?=SITE_TEMPLATE_PATH?>/assets/action-phone.svg" alt=""><a href="tel:+7 (495) 959 26 57"><span>Вызов</span><span>+7 (495) 959 26 57</span></a></li>
                        <li>
                            <button type="button">Отменить</button>
                        </li>
                    </ul>
                    <ul class="list mails">
                        <li><img src="<?=SITE_TEMPLATE_PATH?>/assets/action-mail.svg" alt=""><a href="mailto:mpnu@mpnu.ru"><span>Написать</span><span>mpnu@mpnu.ru</span></a></li>
                        <li>
                            <button type="button">Отменить</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-menu">
        <ul class="mobile-menu__menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "main_top_mobile", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "3",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
                    0 => "",
                ),
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
                false
            );?>
        <button class="btn" type="button" scrollto="#callback">Оставить заявку</button>
    </div>

<?php if ($bIsMainPage): ?>

    <section class="start">
        <div class="container">
            <div class="start__back" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/start-back.jpg')"></div>
            <div class="row">
                <div class="col-xl-5 offset-xl-1">
                    <h1 class="text h1 white">Проектирование,<br>поставка, строительство<br>промышленных<br>котельных и Мини-ТЭЦ</h1>
                    <div class="numbers">
                        <div class="numbers__item">
                            <p class="text h1">1957</p>
                            <p class="text h4 white">год <br>основания </p>
                        </div>
                        <div class="numbers__item">
                            <p class="text h1">250</p>
                            <p class="text h4 white">сотрудников </p>
                        </div>
                        <div class="numbers__item">
                            <p class="text h1">7000+</p>
                            <p class="text h4 white">ГОТОВЫХ проектов</p>
                        </div>
                        <div class="numbers__item">
                            <p class="text h1">2</p>
                            <p class="text h4 white">награды</p>
                        </div>
                        <div class="numbers__item">
                            <p class="text h1">244</p>
                            <p class="text h4 white">МВТ ВЫВЕДЕНО <br>МОЩНОСТЕЙ </p>
                        </div>
                        <div class="numbers__item">
                            <p class="text h1">20+</p>
                            <p class="text h4 white">ВИДОВ <br>ОБОРУДОВАНИЯ</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 start__slider">
                    <?$APPLICATION->IncludeComponent("bitrix:news.line", "main_slider", Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                        "CACHE_TIME" => "300",	// Время кеширования (сек.)
                        "CACHE_TYPE" => "A",	// Тип кеширования
                        "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
                        "FIELD_CODE" => array(	// Поля
                            0 => "NAME",
                            1 => "DETAIL_PICTURE",
                            2 => "PROPERTY_LINK",
                        ),
                        "IBLOCKS" => array(	// Код информационного блока
                            0 => "1",
                        ),
                        "IBLOCK_TYPE" => "content",	// Тип информационного блока
                        "NEWS_COUNT" => "10",	// Количество новостей на странице
                        "SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
                        "SORT_BY2" => "ACTIVE_FROM",	// Поле для второй сортировки новостей
                        "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
                        "SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
                    ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <div class="blocks">
                <div class="blocks__item blocks__empty blocks__empty_white"></div>
                <div class="blocks__item blocks__menu">
                    <div class="menu">
                        <div class="menu__header">
                            <p class="text h2 white">Весь <br>цикл <br>услуг
                                <button> <img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-1.svg" alt=""></button>
                            </p>
                        </div>
                        <ul>
                            <li> <a href="#slide-1">Энергоаудит</a></li>
                            <li> <a href="#slide-2">Проектирование</a></li>
                            <li> <a href="#slide-3">производство</a></li>
                            <li> <a href="#slide-4">доставка</a></li>
                            <li> <a href="#slide-5">монтаж</a></li>
                            <li> <a href="#slide-6">наладка</a></li>
                            <li> <a href="#slide-7">Сервисное обслуживание</a></li>
                        </ul>
                    </div>
                </div>
                <div class="blocks__item blocks__slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="slide-1" data-dataslide="{&quot;service-photo-1&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-1.jpg&quot;,&quot;service-photo-2&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-2.jpg&quot;,&quot;service-photo-3&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-3.jpg&quot;,&quot;service-photo-4&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-4.jpg&quot;,&quot;service-photo-5&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-5.jpg&quot;,&quot;service-1&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;Мини-ТЭЦ&quot;},&quot;service-2&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;котельных&quot;},&quot;service-3&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;БМК&quot;},&quot;service-4&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-2.svg&quot;,&quot;text&quot;:&quot;Техническо-&lt;br&gt;экономическое&lt;br&gt;обоснование&quot;},&quot;service-5&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-3.svg&quot;,&quot;text&quot;:&quot;Реконструкция&lt;br&gt;котельных&quot;}}">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-2" data-dataslide="{&quot;service-photo-1&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-1.jpg&quot;,&quot;service-photo-2&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-2.jpg&quot;,&quot;service-photo-3&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-3.jpg&quot;,&quot;service-photo-4&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-4.jpg&quot;,&quot;service-photo-5&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-image-5.jpg&quot;,&quot;service-1&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;Мини-ТЭЦ 1&quot;},&quot;service-2&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;котельных 1&quot;},&quot;service-3&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg&quot;,&quot;text&quot;:&quot;Проектирование&lt;br&gt;БМК 1&quot;},&quot;service-4&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-2.svg&quot;,&quot;text&quot;:&quot;Техническо-&lt;br&gt;экономическое&lt;br&gt;обоснование 1&quot;},&quot;service-5&quot;:{&quot;icon&quot;:&quot;<?=SITE_TEMPLATE_PATH?>/assets/service-icon-3.svg&quot;,&quot;text&quot;:&quot;Реконструкция&lt;br&gt;котельных 1&quot;}}">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-3">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-4">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-5">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-6">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-7">
                                <div class="slide">
                                    <p class="text h3">Проектирование</p>
                                    <p class="text body1">Наша компания предлагает проектирование котельных в Москве и в других регионах России.<br>Разрабатываем все разделы рабочего проекта, от подготовки Технического задания на проектирование, до согласования рабочей документации и прохождения экспертизы согласно Постановлению Правительства РФ от 16.02.2008 №87.</p><a class="link slide__more" href="">Узнать больше<img src="<?=SITE_TEMPLATE_PATH?>/assets/arrow-2.svg" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="navigation">
                            <div class="swiper-pagination"></div>
                            <div class="navigation__btns">
                                <div class="swiper-button-prev"><img src="<?=SITE_TEMPLATE_PATH?>/assets/services-slider-arrow.svg" alt=""></div>
                                <div class="swiper-button-next"><img src="<?=SITE_TEMPLATE_PATH?>/assets/services-slider-arrow.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blocks__item blocks__photo" id="service-photo-1" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/service-image-1.jpg')"></div>
                <div class="blocks__item blocks__service blocks__service_rrt" id="service-1"><img src="<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg" alt="">
                    <p>Проектирование<br>Мини-ТЭЦ </p>
                </div>
                <div class="blocks__item blocks__empty"></div>
                <div class="blocks__item blocks__empty blocks__empty_grey"></div>
                <div class="blocks__item blocks__service" id="service-2"><img src="<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg" alt="">
                    <p>Проектирование<br>котельных </p>
                </div>
                <div class="blocks__item blocks__photo" id="service-photo-2" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/service-image-2.jpg')"></div>
                <div class="blocks__item blocks__service blocks__service_rrt" id="service-3"><img src="<?=SITE_TEMPLATE_PATH?>/assets/service-icon-1.svg" alt="">
                    <p>Проектирование<br>БМК  </p>
                </div>
                <div class="blocks__item blocks__empty blocks__empty_blue blocks__service_rlb"></div>
                <div class="blocks__item blocks__photo blocks__photo_big" id="service-photo-3" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/service-image-3.jpg')"></div>
                <div class="blocks__item blocks__photo" id="service-photo-4" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/service-image-4.jpg')"></div>
                <div class="blocks__item blocks__service" id="service-4"><img src="<?=SITE_TEMPLATE_PATH?>/assets/service-icon-2.svg" alt="">
                    <p>Техническо-<br>экономическое<br>обоснование</p>
                </div>
                <div class="blocks__item blocks__photo" id="service-photo-5" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/service-image-5.jpg')"></div>
                <div class="blocks__item blocks__service blocks__service_rrb" id="service-5"><img src="<?=SITE_TEMPLATE_PATH?>/assets/service-icon-3.svg" alt="">
                    <p>Реконструкция<br>котельных</p>
                </div>
                <div class="blocks__item blocks__empty"></div>
            </div>
        </div>
    </section>

<?php endif; ?>