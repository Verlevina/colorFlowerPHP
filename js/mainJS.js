
    ////выдвижной nav//////
var navHidden=document.getElementsByClassName('navHidden')[0];
    navHidden.addEventListener("click",function () {
           document.getElementsByClassName('tabs_block')[0].classList.toggle('visible');

        }
    );
    //карусель



    $(function() {

        $(".owl-carousel").owlCarousel({
            items:5,
            loop:true,
            margin:10,
            autoplay:true,
            mouseDrag:false,

        });

    });


