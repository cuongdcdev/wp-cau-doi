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
                document.write('<div class="tet-2019"><img class="left-2019" id="left-2020" src="https://lh3.googleusercontent.com/Ibj5BNBObx5ybwx50GaNNCdZpTQKZZI0mPUJUCikSTbLLkSc0wfCOY33uMbRvu03XnrGNYlgE6UoPkc0G0Lh94HLxrdwRaGrRjWdzeH1J4jjd0sW1-C1BuM13oyVjW_39jw3fo4D9dR1ibslBAELf8c8jLx2oNwMkPPaicrF55UDJgG0PMAw3rgr-os0RfnpVkYUwVYr3i-dN2ECyWNjQfFCIUxr0jjzuoWjDp4D9rwdo1CKKw-Uon7jREfSeL1BqRvGi6WKPowAFEp9s8Ma7m1ll1uGhecrrwCNp5MW4gk_pW_Bf_y7mdg3T6HgmGU1qhpekihMXHycwcICFQ36bpLJEnoVSxmckxQ7iqRK_RTSfVp3bYMwOMEYbFPRQrZ0PIbmMNOWAfku3Qqe_5xNA6w8Wkl_kMD7Vh9cjEEAmOnjqobv2reqvahm96MVe-gr7-eYrS_lY3xuAZiz95bVv0GZqColcYD2bq4v9XJhPPs6oGIZMSbn4G2UQgS76nPPs6BmwwOYJH1mKeMYCXNbHc42evNcWCfuQNpsdz8vK6M_xQjN8XRHA667Lb3Zt-2xV9fzkzde9QYH1c7w5RT-YvMbBVflT50jw57en8Zo6E--7UfiQiQ-FOmJEqmco9dDJ-N9i8XrSVAxijaRWYx4EENIwtpAmQ9EsnBBvnIDH4mlp1NaSGtRkN_SF1AKyyguVoFC68bo-sKGoF4ndQ=w160-h522-no"/><img class="right-2019" id="right-2020" src="https://lh3.googleusercontent.com/7nuTHFtesKwLbeUY6z4iJOdTj89rK_cjBAL8C2QJvCErnjI8NCmag-BVQ5PUU3vKWPCLKAuImJDAZNLLIUjAdUXi6p5m5NUfn8G6lmKSpxW0PaVoSQUUM60GXIBqRF4v9biYzas3DWNvNFavtt4rurVaQi9ZSV7nUf5zIWiVvogFs-K3xUf67pry--kaHQSYZY-YlC7p_Jp6s8dZHJ18wt0FMkYUarf7ZtHM8_XRpYW7CXMg-SZ3ay6RGD_uvxOExSdu9GW0DqD2KTnMDcS1BpXSs6jE2tUqIOsADQdRqg-Nmcvj8crYfbZD4kUc4cOrg45TwBPcGJlng0mpJenPjZ5IAu-nVDxBC56MBPjpXG88rc9wM67F-8SCepTntTlaBULrqFHseksOz45FYqm5Z758AkYNUWeSGPgjkTlif0ZQIs9hFPGDGBOrrUyFGaGinytKQwheWzl1rjllvrSVI9PNrVPc257c-Oj2lGZQk4B9L96PgpIbD-FJonhhRNPEfMr3QsOp9O-2CpHjPSspKj1j0YDuz3HcybgJiuzyxS1Nsjc8tVvoYSdd0GHglAv8IJxOrZ38UGGhkKFo2htRKGlyHTnd6-LJ_K9VCCEQVY477Yb2thsblaK8OMEsErchl7kDKA7I5buWsPj18kEw1shk=w160-h522-no"/></div><style>#left-2020{width: 130px;left:0;z-index:68;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}#right-2020{width: 130px;right:0;z-index:68;position:fixed;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}.left-2019{top:0px}.right-2019{top:0px}.text-2019-l{top:50px}.text-2019-r{top:50px}@media screen and (max-width:1024px){.tet-2019{display:none}}</style>');
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