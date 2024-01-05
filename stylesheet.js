
// ハンバーガーメニュー
$(function() {
    $('#btn07').click(function() {
        $(this).toggleClass('active');
        $('.sp-nav').toggleClass('toggle');
    });

    // フェードイン処理
    $(window).scroll(function () {
        $(".fade").each(function(){
            var winheight = $(window).height();
            var posi = $(this).offset().top;
            var scroll = $(window).scrollTop();
            
            if (scroll + winheight > posi){
                $(this).addClass("fadein");
            } else {
                $(this).removeClass("fadein");
            }
        });
    });
});
