jQuery(document).ready(function($) {
    function getTopDistance() {
        let topDistance =$('#header').offset().top;
        if (topDistance > 100) {
            if($('#header .active').length>0) return;
            $('#header').addClass('active');
        } else {
            $('#header').removeClass('active');
        }
    }
    $(window).scroll(getTopDistance);
    getTopDistance();
    $('.btn-sidebar').click(()=>{
        if($('.btn-sidebar.active').length>0){
            $('.btn-sidebar .text').text('Show filter');
            $('.btn-sidebar').removeClass('active');
            $('#sidebar').hide();
            $('#main-content').addClass('col-md-12');
        }else{
            $('.btn-sidebar .text').text('Hide filter');
            $('.btn-sidebar').addClass('active');
            $('#sidebar').show();
            if(window.innerWidth>991){
                $('#main-content').removeClass('col-md-12');
            }
        }
    });
    $('.menu-icon').click(()=>{
        if($('.overlay.active').length>0){
            $('.overlay').removeClass('active');
            $('.left-header').removeClass('active');
            $('.menu-icon').removeClass('active');
            $("html").removeClass('hidden');

        }else{
            $('.overlay').addClass('active');
            $('.left-header').addClass('active');
            $('.menu-icon').addClass('active');
            $("html").addClass('hidden');
        }
    });
});