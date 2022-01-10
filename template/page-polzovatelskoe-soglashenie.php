<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package citymobile
 */
add_filter('wpseo_metadesc', function($metadesc){
    $number = get_field('contact_number','option','option');
    $city_decr = $GLOBALS['nameForSeo'] . ' и области';
        $metadesc = "Пользовательское соглашение Grand-citymobile";
    return $metadesc;
}, 10, 1);
get_header();
?>
<main id="primary" class="site-main">
                            <section class="content__  white-back" style="opacity: 1;">
                    <style>
 p{
font-size: 20px;
}
@media(max-width:768px){
p{font-size:24px}
}
</style>
<p>Политика конфиденциальности<br>
<br>
1. Предоставляя свои персональные данные при отправке формы на сайте в информационной сети интернет расположенном по адресу https://grand-citymobil.ru/ (далее – сайт), Пользователь даёт ООО «Гранд» (далее – Оператор) своё согласие на обработку и использование своих персональных данных согласно ФЗ № 152-ФЗ «О персональных данных» от 27.07.2006 г. различными способами в целях, указанных в настоящих Правилах.</p>
<p>2. Под персональными данными понимается любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных) и которая может быть использована для идентификации определенного лица либо связи с ним.</p>
<p>3. Персональные данные Пользователей хранятся исключительно на электронных носителях и обрабатываются с использованием автоматизированных систем</p>
<p>4. Оператор использует персональные данные Пользователя в целях:<br>
– получения Пользователем запрашиваемой информации об услугах Оператора;<br>
– получения Пользователем персонализированной рекламы;<br>
– для выполнения своих обязательств перед Пользователем.</p>
<p>5. Оператор обязуется не разглашать полученную от Пользователя информацию. При этом не считается нарушением обязательств разглашение информации в случае, когда обязанность такого раскрытия установлена требованиями действующего законодательства РФ.</p>
<p>6. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом, в том числе в информационных системах персональных данных с использованием средств автоматизации или без использования таких средств</p>
<p>7. Оператор осуществляет блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.</p>
<p>8. Персональные данные пользователя уничтожаются при:</p>
<p>– удалении Оператором информации, размещаемой Пользователем, а также персональной страницы Пользователя в случаях, установленных договором купли продажи (оферта);<br>
– при отзыве субъектом персональных данных согласия на обработку персональных данных.</p>
</section>
</main>
<?php
get_footer();