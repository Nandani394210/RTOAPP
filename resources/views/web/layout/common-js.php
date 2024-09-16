<script>
            // $(".nav-link").on("click", a, function(){
            //    $(".nav-link a.active").removeClass("active");
            //    $(this).toggleClass('active');
            // });


            $(".nav-show").on("click", function(){
                $(".collapse.navbar-collapse").toggleClass("show");
                if($('.collapse.navbar-collapse').hasClass( "show" )){
                    $(".collapse.navbar-collapse").animate({
                        right: "0px"
                    });
                }else{
                    $(".collapse.navbar-collapse").animate({
                        right: "-300px"
                    });
                }
            })

            // scroll up ==============

            $(window).scroll(function () {
                a = $(window).scrollTop()

                if(a > 400){
                    $(".scroll-up").css("opacity","1")
                }
                else{
                    $(".scroll-up").css("opacity","0")
                }
            })
            $(".scroll-up").on("click", function() {
                $(window).scrollTop(0)
            })

            //  Select 2
            var $disabledResults = $(".js-example-disabled-results");
            $disabledResults.select2();
    </script>
