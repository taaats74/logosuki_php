"use strict"

{
  // モーダル
  // const worksBtn = document.querySelectorAll('.works-wrapper .works');
  // const closeBtn = document.querySelectorAll('.modal .close-btn');
  // const body = document.querySelector('body');

  // console.log(worksBtn);
  // console.log(closeBtn);
  // console.log(body);

  // worksBtn.forEach(work => {
  //   work.addEventListener('click', function() {
  //     const modalId = this.getAttribute('data-modal');
  //     document.getElementById(modalId).classList.add('show');
  //     body.classList.add('modal-open');
  //   });
  // });

  // closeBtn.forEach(close => {
  //   close.addEventListener('click', function() {
  //     this.closest('.modal').classList.remove('show');
  //     body.classList.remove('modal-open');
  //   });
  // });

  // window.addEventListener('click', function(event) {
  //   document.querySelectorAll('.modal').forEach(modal => {
  //       if (event.target == modal) {
  //         modal.classList.remove('show');
  //         body.classList.remove('modal-open');
  //       }
  //   });
  // });
}

{
  const targetElement = document.querySelectorAll('.animation-target');

  console.log(targetElement);

  window.addEventListener('scroll', () => {
    for (let i = 0; i < targetElement.length; i++){
      const getElementDistance = targetElement[i].getBoundingClientRect().top + targetElement[i].clientHeight * .5;
      console.log(getElementDistance);
      if (window.innerHeight > getElementDistance) {
        targetElement[i].classList.add('show');
      }
    }
  });
}

{
  const spMenuIcon = document.querySelector(".menu-icon");
  const spMenu = document.querySelector(".sp-menu");
  const spMenuLists = document.querySelectorAll(".sp-menu ul li a");

  spMenuIcon.addEventListener("click", () => {
    spMenuIcon.classList.toggle("active");
    spMenu.classList.toggle("active");
  });

  spMenuLists.forEach((list) => {
    list.addEventListener("click", () => {
      console.log(list);
      spMenu.classList.toggle("active");
      spMenuIcon.classList.toggle("active");
    });
  });
}

{
  // ヘッダーとフッターのスムーススクロール
  $(function () {
    let pcMenu = $('header a');
  pcMenu.click(function(){
    let speed = 700;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top - 70;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    });
  });

  $(function () {
    let pcMenuFooter = $('footer a');
  pcMenuFooter.click(function(){
    let speed = 700;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top - 70;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    });
  });

  $(function () {
    let spMenu = $('.sp-menu a');
  spMenu.click(function(){
    let speed = 700;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top - 70;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    });
  });

  $(function () {
    let btnLink = $('.btn a');
  btnLink.click(function(){
    let speed = 700;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top - 70;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
    });
  });
}
