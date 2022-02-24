$(function(){
    $(window).scroll(function(){
        var scrollTopnum = $(window).scrollTop();
        var targetScroll = $(window).height();
        // console.log(scrollTopnum);
    
        if(scrollTopnum > targetScroll){
            $('#tab').addClass('changefix')
        }
        else{
            $('#tab').removeClass('changefix')
        }
    });
})

$('.couponbtn').click(function(){
    alert("로그인 후 이용 가능합니다.")
})

