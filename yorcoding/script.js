// アコーディオンUI

const parentMenu = document.querySelectorAll("#js-Q-col");
for(let i = 0; i < parentMenu.length; i++){
    parentMenu[i].addEventListener("click",function(){
        this.nextElementSibling.classList.toggle("active"); 
    })
}


// swiper
const swiper = new Swiper(".swiper", {
  loop: true, // ループ
  speed: 1500, // 少しゆっくり(デフォルトは300)
  slidesPerView: 1.5, // 一度に表示する枚数
  spaceBetween: 56, // スライド間の距離
  centeredSlides: true, // アクティブなスライドを中央にする
  autoplay: {
    // 自動再生
    delay: 1000, // 1秒後に次のスライド
    disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
  },
  // ページネーション
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  // 前後の矢印
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },



  breakpoints: {
    // スライドの表示枚数：500px以上の場合
    900: {
      slidesPerView: 3.5,
    }
  }
});