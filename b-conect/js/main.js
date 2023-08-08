"use strict";


$(function () {
    /*---------- ハンバーガーメニュー ----------*/
    const hamburger = $(".js_hamburger");
    const navigation = $(".js_navigation");
  
    hamburger.on("click", function () {
      $(this).toggleClass("is_active");
      navigation.toggleClass("is_active");
      $(".js_body").toggleClass("is_active");
    });
  })

  const mySwiper = new Swiper('.swiper', {
    loop: true,  // 無限ループさせる
    speed: 1000,
    effect:'fade',
    autoplay: { // 自動再生させる
      delay: 3000, // 次のスライドに切り替わるまでの時間（ミリ秒）
      disableOnInteraction: false, // ユーザーが操作しても自動再生を止めない
      waitForTransition: false, // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）
    },
  })





$(function(){
  // #で始まるアンカーをクリックした場合に処理
  $('.s_03 a[href^="#"]').click(function(){
    // 移動先を50px下にずらす
    var adjust = 50;
    // スクロールの速度
    var speed = 400; // ミリ秒
    // アンカーの値取得
    var href= $(this).attr("href");
    // 移動先を取得
    var target = $(href == "#" || href == "" ? 'html' : href);
    // 移動先を調整
    var position = target.offset().top + adjust;
    // スムーススクロール
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});


// gsap



gsap
  .from(".js_copy", {
		// 0.6秒かけて
    duration: 1.5,
		// 透明度0の状態
    autoAlpha: 0,
		// x軸方向に-100pxの位置
    y: 100,

  });


  gsap
  .timeline()
  .from(".js_ttl", {
		// 0.6秒かけて
    duration: 0.6,
		// 透明度0の状態
    autoAlpha: 0,
		// x軸方向に-100pxの位置
    y: 100,
  })
  .from(".js_sub-ttl", {
    duration: 0.6,
    autoAlpha: 0,
    y: 100,
  });

  gsap
  .from(".js_mission",{
    duration:0.6,
    autoAlpha:0,
    y:100,

    stagger: {
    from: "start", //左側から
    amount: 1 // 0.8秒おきに
  }

});

// gsap.from(".js_mission", {
//   duration: 0.6,
//   autoAlpha: 0,
//   y: 100,
//   stagger: {
//     from: "start",
//     amount: 1
//   },
//   scrollTrigger: {
//     trigger: ".js_mission", // トリガーとなる要素
//     start: "top 80%", // トリガーが画面の80%に達したらアニメーションを開始
//     end: "bottom 80%", // トリガーが画面の80%を離れたらアニメーションを終了
//     scrub: true, // スクロールに応じてアニメーションを変化させる（オプション）
//     markers: true, // デバッグ用にトリガーを可視化（オプション）
//   },
// });


  


//  gsap
//   .timeline()
//   gsap.from('.js_ttl', {
//     autoAlpha: 0,
//     duration: 1.5,
//     y: 200,
//     stagger: {
//       scrollTrigger: {
//         trigger: '.js_trggir',
//         start: 'top center',
//         end: "top bottom",
//         markers: true
//         duration: 1
//       }
//   }
//   });




//scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up,.scroll_left');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 50;
      var delay = 0.6; // 各要素の表示時間差を調整するための遅延（秒）

      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on');
      }
      setTimeout(function (elm) {
        elm.classList.add('on');
      }, i * delay * 1000, scrollAnimationElm[i]);
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);
});


$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.scroll_up_02');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      var delay = 1.5; // 各要素の表示時間差を調整するための遅延（秒）

      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('on_02');
      }
      setTimeout(function (elm) {
        elm.classList.add('on_02');
      }, i * delay * 1000, scrollAnimationElm[i]);
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);

  // エラーメッセージ位置変更
$(document).on('wpcf7invalid', function() { // ①
  $.ajax().always(function () { // ②
    $('.wpcf7-form-control-wrap').each(function (index, el) { // ③
      if ($(el).find('.wpcf7-not-valid-tip').length) { // ④
        $(el).find('.wpcf7-not-valid-tip').insertBefore($(el)) // ⑤
      }
    });
  });
});
});




