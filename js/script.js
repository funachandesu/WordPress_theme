jQuery(function () {
  var h = jQuery(window).height(); //ブラウザウィンドウの高さを取得
  jQuery("#main-contents").css("display", "none"); //初期状態ではメインコンテンツを非表示
  jQuery("#loader-bg ,#loader")
    .height(h)
    .css("display", "block"); //ウィンドウの高さに合わせでローディング画面を表示
});
jQuery(window).load(function () {
  jQuery("#loader-bg")
    .delay(1500)
    .fadeOut(800); //jQuery('#loader-bg').fadeOut(800);でも可
  jQuery("#loader")
    .delay(1200)
    .fadeOut(300); //jQuery('#loader').fadeOut(300);でも可
  jQuery("#main-contents").css("display", "block"); // ページ読み込みが終わったらメインコンテンツを表示する
});