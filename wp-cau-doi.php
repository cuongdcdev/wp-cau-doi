<?php
/**
 * Plugin Name: Hoành Phi Câu Đối Chúc Tết
 * Description: Treo Hoành Phi Câu Đối cho trang web của bạn: Năm Mới Hạnh Phúc Bình An Đến - Ngày Xuân Vinh Hoa Phú Quý Về
 * Author: hobasoft.com
 */
defined('ABSPATH') or die('Lêu lêu :v');
add_action('wp_footer' , function(){
	?>
    <script>//<![CDATA[
        (function($){
            if( $(window).width() > 1024  ){
                document.write('<div class="tet-2019"><img class="left-2019" id="left-2020" src="https://i.imgur.com/fnXcGPz.png"/><img class="right-2019" id="right-2020" src="https://i.imgur.com/tC9ZLFt.png"/></div><style>#left-2020{width: 130px;left:0;z-index:9999;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}#right-2020{width: 130px;right:0;z-index:9999;position:fixed;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}.left-2019{top:0px}.right-2019{top:0px}.text-2019-l{top:50px}.text-2019-r{top:50px}@media screen and (max-width:1024px){.tet-2019{display:none}}</style>');
                var lastScroll = 0;
                jQuery(document).ready(function($) {
                    $(window).scroll(function() {
                        var scroll = $(window).scrollTop();
                        if (scroll > lastScroll) {
                            $('#right-2020').removeClass('left-2019').addClass('text-2019-l')
                            $('#left-2020').removeClass('right-2019').addClass('text-2019-r')
                        } else if (scroll < lastScroll) {
                            $('#right-2020').addClass('left-2019').removeClass('text-2019-l')
                            $('#left-2020').addClass('right-2019').removeClass('text-2019-r')
                        }
                        lastScroll = scroll;
                    })
                })
            }//lg screen

        })(jQuery);
        //]]></script>
	<?php
});