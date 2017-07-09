$('document').ready(function(){

	/*--------------main slider--------------*/
    $('.header_carousel').bxSlider({
	  infiniteLoop: false,
	  auto:true,
	  speed:1500,
	  controls: true,
	  pager: false
	});

    /*-------------------sertificats------------*/
    $('.sertificat_carousel').owlCarousel({
    loop:true,
    margin:0,
    navSpeed: 1000,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})


    /*-----------------------------------animation services-----------------------------------*/
    $('.service_block').hover(function(){
        var $this = $(this),
            list_services = $this.closest('.list_services'),
            service_blocks = list_services.find('.service_block'),
            service_blocks_sibl = $this.siblings('.service_block'),
            sub_products  = $this.find('.sub_products'),
            service_title = $this.find('.title_service'),
            cat_descript_serv_h = $this.find('.cat_descript_serv').outerHeight(),
            service_title_h =  service_title.outerHeight(),
            service_block_h = $this.outerHeight(),
            move_top = service_block_h - service_title_h - cat_descript_serv_h - 14,
            speed = 400;


            console.log(sub_products.length);
           

           if(sub_products.length){
                service_title.stop(false, true).animate({'bottom':move_top+'px'}, speed);
                sub_products.stop(false, true).animate({'top':'0'}, speed); 
           }

    }, function(){
        var $this = $(this),
            list_services = $this.closest('.list_services'),
            service_blocks = list_services.find('.service_block'),
            service_blocks_sibl = $this.siblings('.service_block'),
            sub_products  = $this.find('.sub_products'),
            service_title = $this.find('.title_service'),
            speed = 400;

            console.log(sub_products.length);


           if(sub_products.length){
                service_title.stop(false, true).animate({'bottom':'-3px'}, speed);
                sub_products.stop(false, true).animate({'top':'100%'}, speed);
           }
    });



    /*-----------------------------------------isotope----------------------------------*/
    $('.grid').isotope({
      // options
      itemSelector: '.grid-item',
      masonry: {
          gutter: 10
      }
    });



    /*-----------------------------------line menu----------------------------*/
    $('<div></div>').addClass('move_line').appendTo('.block_menu');


      var move_line = $('.move_line'),
          speed = 400,
          current_item = $('.block_menu > ul > .current-menu-item, .block_menu > ul > .current-post-ancestor, .block_menu > ul > .current-category-ancestor');

      //console.log(current_item);

      if(current_item.size()){
        var cur_width =  current_item.outerWidth(),
             cur_left =   current_item.position().left;

             move_line.css({'width':cur_width}).stop().animate({'left':cur_left+20}, speed);
      }else{
         var current_item = $('.block_menu > ul > li:first');


          var cur_width =  current_item.outerWidth(),
             cur_left =   current_item.position().left;

             move_line.css({'width':cur_width}).stop().animate({'left':cur_left+20}, speed);
      }
         


    $('.block_menu .menu-item').on('mouseover', function(){
         
        var $this = $(this),
            move_el = $('.move_line'),
            width_item = $this.outerWidth(),
            pos_left = $this.position().left,
            margin_left = $this.css('margin-left'),
            speed = 400;

            pos_left = pos_left + parseInt(margin_left);


            move_el.css({'width':width_item}).stop().animate({'left':pos_left}, speed);

     });


    /*---------------------------------resize blocks--------------*/

    function ResizeServices(){
        $('.list_services .service_block').each(function(){
            var $this = $(this),
                item = $this.find('.item_service'),
                item_img = $this.find('img'),
                item_img_h = item_img.height();

                console.log(item_img_h);

                item.css({'height':item_img_h});
        });
    }

    ResizeServices();

    $(window).on('resize', function(){
        ResizeServices();
    });


    /*----------------animation item_project-----------*/
    $('.item_project').hover(function(){
            var $this = $(this),
                hov = $this.find('.hov'),
                title_project = $this.find('.title_project'),
                speed = 400;

                hov.stop(true, false).fadeIn(speed);
                title_project.stop(true, false).animate({'top':'35%'}, speed);
    }, function(){
            var $this = $(this),
                hov = $this.find('.hov'),
                 title_project = $this.find('.title_project'),
                speed = 400;

                hov.stop(true, false).fadeOut(speed);
                title_project.stop(true, false).animate({'top':'-35%'}, speed);
    });




    /*--------------------------magnific popup---------------------*/
      /*///////////////////////////////////////////////////////////////////////////////////////////*/
     $('.consultation_btn').magnificPopup({
        type: 'inline',
        preloader: false,
        

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,
        preloader: false,
        
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });



     /*/////////////////////////mega menu////////////////////////*/

     function sowSub($this){
        var sub_menu = $this.find('.sub_products_menu');

        if(sub_menu.size()){
          sub_menu.stop().animate({'left':'0'});
        }

     }

     function HideSub($this){
        var sub_menu = $this.find('.sub_products_menu');

        if(sub_menu.size()){
          sub_menu.stop().animate({'left':'-110%'});
        }
        
     }

     $('.sub-mega-menu .item_mega').hover(function(){
        var $this = $(this),
            hov = $this.find('.hov_mega'),
            speed = 400;

            hov.stop().fadeOut(speed, sowSub($this));
     }, function(){
        var $this = $(this),
            hov = $this.find('.hov_mega'),
            speed = 400;

            hov.stop().fadeIn(speed, HideSub($this));

     });



     /*-----------------------------------------*/
     $('.sub-mega-menu').appendTo('.block_menu');

     //$('.menu-item-53').appendTo();

     //alert(sub_menu);


     $('.menu-item-53, .sub-mega-menu').hover(function(){
        var menu = $('.sub-mega-menu');
       menu.addClass('showMenu');
     }, function(){
       var menu = $('.sub-mega-menu');
       menu.removeClass('showMenu');
     });

});

