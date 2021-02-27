/* Add your custom JavaScript code */


/** ---------------------------------
    スクロールに合わせて透過
---------------------------------- **/


jQuery(window).scroll(function(){
    jQuery(".main-logo").css("opacity", 1 - jQuery(window).scrollTop() / 350);

});


/** ---------------------------------
    トップに戻る
---------------------------------- **/


jQuery(function() {
    var topBtn = jQuery('#page-top');
    topBtn.hide();
    //スクロールが1200に達したらボタン表示
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 1200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

/** ---------------------------------
    スクロール時にクラスを追加
---------------------------------- **/

jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() > 40) {
        jQuery('header').addClass('scroll-on');
    } else {
        jQuery('header').removeClass('scroll-on');
    }
});



/** ---------------------------------
    高さを揃える
---------------------------------- **/

jQuery(function() {
    jQuery('.matchHeight').matchHeight();
});

jQuery(function() {
    jQuery('.matchHeight-title').matchHeight();
});


jQuery(function() {
    jQuery('.matchHeight-txt').matchHeight();
});


jQuery(function() {
    jQuery('.matchHeight-interview').matchHeight();
});


/** ---------------------------------
    wow.js
---------------------------------- **/

new WOW().init();



/** ---------------------------------
   　マウスオーバーでテキスト変更
---------------------------------- **/


// jQuery(function(){
//     jQuery('.luxbar-column').hover(function(){
//         jQuery(this).text('研究報告');
//     },function(){
//         jQuery(this).text('REPORT');
//     });
//     jQuery('.luxbar-topics').hover(function(){
//         jQuery(this).text('話題のニュース');
//     },function(){
//         jQuery(this).text('HOT TOPIC');
//     });
//     jQuery('.luxbar-interview').hover(function(){
//         jQuery(this).text('取材／対談');
//     },function(){
//         jQuery(this).text('INTERVIEW');
//     });
//     jQuery('.luxbar-event').hover(function(){
//         jQuery(this).text('イベント');
//     },function(){
//         jQuery(this).text('EVENT');
//     });
//     jQuery('.luxbar-about').hover(function(){
//         jQuery(this).text('ラボについて');
//     },function(){
//         jQuery(this).text('ABOUT');
//     });
// });
