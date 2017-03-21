/**
 * http://kopatheme.com
 * Copyright (c) 2016 Kopatheme
 *
 * Licensed under the GPL license:
 *  http://www.gnu.org/licenses/gpl.html
  **/

/**
 *  1.  half circle
    2.  chart circle
    3.  counter
    4.  fillter price
    5.  slider pro
    6.  alert
    7.  dialog caaress
    8.  supperfish menu
    9.  tooltip
    10. boostrap fixed
    11. masonry
    12. masonry filter
    13. load more
    14. fitvid video
    15. owl crousel
    16. acordion
    17. li header
    18. match height
    19. filter first letter
    20. map
    21. Slide Area (menu click,menu responsive)
    22. booking ultra js custom

 *-----------------------------------------------------------------
 **/
"use strict";
var owl_01,owl_02;
var sync1 = jQuery(".sync1");
var sync2 = jQuery(".sync2");
var sync12 = jQuery('.mdc-slider-owl-2 .sync12');
var sync22 = jQuery('.mdc-slider-owl-2 .sync22');
var loadmore_link_1 = "";
var loadmore_link_2 = "";
var loadmore_link_3 = "";
var loadmore_link_4 = ""

jQuery(document).ready(function() {
    jQuery.when(
        jQuery('body').imagesLoaded(function(){
            //slider pro
            if(jQuery('.mdc-widget-slider-01').length){
                jQuery('.slider-pro-1').sliderPro({
                    width: 1366,
                    height: 515,
                    forceSize: 'fullWidth',
                    arrows: true,
                    buttons: false,
                    waitForLayers: false,
                    autoplay: false,
                    fadeOutPreviousSlide: false,
                    fadeArrows:false,
                    autoScaleLayers: true,
                    slideDistance: 0,
                    autoplayDelay: 4000,
                    init: function(){
                       jQuery(".mdc-widget-slider-01 .loading-slider").hide();    
                       jQuery(".mdc-widget-slider-01 .slider-pro").show();   
                    }
                });
            }
            if(jQuery('.mdc-widget-slider-02').length){
                jQuery('.slider-pro-2').sliderPro({
                    width: 1366,
                    height: 515,
                    forceSize: 'fullWidth',
                    arrows: true,
                    buttons: false,
                    waitForLayers: true,
                    autoplay: false,
                    fadeArrows:false,
                    fadeOutPreviousSlide: true,
                    autoScaleLayers: true,
                    slideDistance: 0,
                    autoplayDelay: 4000,
                    init: function(){
                       jQuery(".mdc-widget-slider-02 .loading-slider").hide();    
                       jQuery(".mdc-widget-slider-02 .slider-pro").show(); 
                    }
                });
            }
            if(jQuery('.mdc-widget-slider-03').length){
                jQuery('.slider-pro-3').sliderPro({
                    width: 1366,
                    height: 515,
                    forceSize: 'fullWidth',
                    arrows: true,
                    buttons: false,
                    waitForLayers: false,
                    autoplay: false,
                    fadeOutPreviousSlide: true,
                    fadeArrows:false,
                    autoScaleLayers: true,
                    slideDistance: 0,
                    autoplayDelay: 4000,
                    init: function(){
                       jQuery(".mdc-widget-slider-03 .loading-slider").hide();    
                       jQuery(".mdc-widget-slider-03 .slider-pro").show(); 
                    }
                });
            }
        })
    ).done(function(){
        jQuery('body').addClass('loaded');
    });
    //booking ultra
    if(jQuery('.hasDatepicker').length){
        jQuery('.hasDatepicker').on('click',function(){
            jQuery('#ui-datepicker-div').toggle();
        });
    }
    //half circle
    if(jQuery('.mdc-list-chart-half').length){
        
        var bar = new ProgressBar.SemiCircle('.mdc-list-chart-half', {
          strokeWidth: 3,
          easing: 'easeInOut',
          duration: 1400,
          color: '#1277a1',
          trailColor: '#d6d9dc',
          trailWidth: 3,
          svgStyle: null
        });

        bar.animate(0.5);  // Number from 0.0 to 1.0

        var bar1 = new ProgressBar.SemiCircle('.mdc-list-chart-half-1', {
          strokeWidth: 3,
          easing: 'easeInOut',
          duration: 1400,
          color: '#1277a1',
          trailColor: '#d6d9dc',
          trailWidth: 3,
          svgStyle: null
        });

        bar1.animate(0.87);  // Number from 0.0 to 1.0
    }
    //chart circle
    if(jQuery('.mdc-list-chart').length){
        jQuery('.mdc-list-chart .chart-circle').each(function() {
            var color = jQuery(this).data('color'),
                width = jQuery(this).data('width'),
                size  = jQuery(this).data('size'),
                time  = jQuery(this).data('time');
            var element = document.querySelector('.mdc-list-chart .chart-circle >span');     
            jQuery(this).easyPieChart({
                barColor: color,
                trackColor: '#d6d9dc',
                scaleColor: '#fff',
                lineWidth: width,
                size: size,
                animate: time,
                lineCap: 'square',
            });
        });
    }
    //counter
    if(jQuery('.mdc_counter_number').length){
        jQuery('.mdc_counter_number').countTo({
            speed: 3000
        });
    }
    //fillter price
    if(jQuery('.price_slider_wrapper').length){
        jQuery('.price_slider').slider({
              range: true,
              values: [ 17, 67 ],
              slide: function( event, ui ) {
                $( ".price_label" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
              }
            });
            $( ".price_label" ).val( "$" + $( ".price_slider" ).slider( "values", 0 ) +
              " - $" + $( ".price_slider" ).slider( "values", 1 ) );
    }
    //alert
    if(jQuery('.alert').length){
        jQuery('.mdc-close').on('click',function(){
            jQuery(this).closest('.alert').css('display','none');
        });
    }
    if(jQuery('.alert-clear').length){
        jQuery('.close-alert-clear').on('click',function(){
            jQuery(this).closest('.alert-clear').css('display','none');
        });
    }
    //dialog caaress
    if(jQuery('#mdc-opener').length){
        jQuery( "#mdc-dialog" ).dialog({
          autoOpen: false,
          show: {
            duration: 100
          },
          hide: {
            duration: 100
          },
          closeText: "hide",
          maxHeight: 470,
          width: 765,
        });
        jQuery( "#mdc-opener" ).on('click',function() {
          jQuery( "#mdc-dialog" ).dialog( "open" );
          jQuery('.body-overlay').addClass('active');
        });
        jQuery('.ui-icon').on('click',function(){
            jQuery('.body-overlay').removeClass('active');
            jQuery("#mdc-dialog").dialog("close");
        });
        jQuery('.body-overlay').on('click',function(){
            jQuery('.body-overlay').removeClass('active');
            jQuery("#mdc-dialog").dialog("close");
        });
    }
    //supperfish menu
    jQuery('.mdc-main-menu >ul').superfish({
        popUpSelector: 'ul,.sf-mega',
        delay:       400,
        animation:   {opacity:'show',height:'show'},
        animationOut:   {opacity:'hide',height:'hide'},
        speed:       'normal',
        cssArrows:  false,
    });
    //tooltip
    jQuery('[data-toggle="tooltip"]').tooltip();
    //boostrap fixed
    $('ul.nav.nav-tabs').on('click.bs.dropdown', function(e){
        jQuery('.dropdown').removeClass('.active.open');

        var $a  = $(e.target), is_a = $a.is('.is_a');
        if($a.hasClass('dropdown-toggle')){   
            $('ul.dropdown-menu', this).toggle(!is_a);
            $a.toggleClass('is_a', !is_a);
        }
    });
    //light box
    if(jQuery('#lightbox').length){
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true,
          'disableScrolling':false,
          'alwaysShowNavOnTouchDevices':true,
        });
    }
    //masonry
    if(jQuery('.mdc-widget-blog-grid').length){
        jQuery('.mdc-widget-blog-grid').imagesLoaded( function() {
            var masonry = jQuery('.mdc-widget-blog-grid .widget-content ul').masonry({        
                itemSelector: 'li',
                columnWidth: 1,
            });
        });
    }
    if(jQuery('.mdc-widget-event').length){
        jQuery('.mdc-widget-event').imagesLoaded( function() {
            var masonry = jQuery('.mdc-widget-event .widget-content .mdc-masonry-grid').masonry({        
                itemSelector: 'div[class^=col]',
                columnWidth: 1,
            });
        });
    }
    //masonry filter
    if(jQuery('.mdc-widget-ms-popup-image').length){
        var container_01 = jQuery('.mdc-widget-ms-popup-image .widget-content >ul');
        var masonryOptions = {
            columnWidth: 1,
            itemSelector : '.mdc-item',
        };
        container_01.imagesLoaded(function(){
            var m_grid = container_01.masonry( masonryOptions);
            var m_filters_01 = jQuery('.mdc-widget-ms-popup-image .filters-options li');
            m_filters_01.on('click',function(event){
                event.preventDefault();
                m_filters_01.removeClass('active');
                jQuery(this).addClass('active');
                var m_filter_val = jQuery(this).data('val');
                container_01.find('.mdc-item').each(function(){                 
                    var m_item_val = jQuery(this).data('val').toString().split(',');                    
                    var a = m_item_val.indexOf(m_filter_val.toString()) > -1;
                    if (m_filter_val == "*") {
                        jQuery(this).removeClass('hide');
                        jQuery(this).addClass('show');
                    } else {
                        if ( a == true) {
                            jQuery(this).removeClass('hide');
                            jQuery(this).addClass('show');  
                        } else {
                            jQuery(this).removeClass('show');
                            jQuery(this).addClass('hide');
                        }
                    }                               
                });

                container_01.masonry('layout');
            });
        });
    }
    if(jQuery('.mdc-widget-popup-portfolio').length){
        var container_01 = jQuery('.mdc-widget-popup-portfolio .widget-content >ul');
        var masonryOptions = {
            columnWidth: 1,
            itemSelector : '.mdc-item',
        };
        container_01.imagesLoaded(function(){
            var m_grid = container_01.masonry( masonryOptions);
            var m_filters_01 = jQuery('.mdc-widget-popup-portfolio .filters-options li');
            m_filters_01.on('click',function(event){
                event.preventDefault();
                m_filters_01.removeClass('active');
                jQuery(this).addClass('active');
                var m_filter_val = jQuery(this).data('val');
                container_01.find('.mdc-item').each(function(){                 
                    var m_item_val = jQuery(this).data('val').toString().split(',');                    
                    var a = m_item_val.indexOf(m_filter_val.toString()) > -1;
                    if (m_filter_val == "*") {
                        jQuery(this).removeClass('hide');
                        jQuery(this).addClass('show');
                    } else {
                        if ( a == true) {
                            jQuery(this).removeClass('hide');
                            jQuery(this).addClass('show');  
                        } else {
                            jQuery(this).removeClass('show');
                            jQuery(this).addClass('hide');
                        }
                    }                               
                });

                container_01.masonry('layout');
            });
        });
    }
    //load more
    jQuery('.mdc-widget-blog-grid .mdc-loadmore.style-01').on('click',function(){
        var button = jQuery(this);
        jQuery.ajax({
            beforeSend: function(jqXHR) {},
            async: true,
            cache: true, 
            type: "get",
            dataType : 'html',
            url:loadmore_link_1,
            success:function(data, textStatus, jqXHR){
                console.log(data);
                jQuery(data).imagesLoaded(function() {
                    var position_insert_data =  button.closest('.mdc-widget-blog-grid').find('.mdc-masonry-grid');
                    var items = jQuery(data).find('li[class^=col]');
                    if(items.length){
                        jQuery.each(items, function(items, index){
                            jQuery(position_insert_data).append(jQuery(this)).masonry( 'appended', jQuery(this));
                        });
                    } 
                });
            },
            data: {
            },
        });
    });
    jQuery('.mdc-widget-event .mdc-loadmore.style-01').on('click',function(){
        var button = jQuery(this);
        jQuery.ajax({
            url:loadmore_link_2,
            beforeSend: function( xhr ) {
            },
        })
        .done(function( data ) {
            console.log(data);
            jQuery(data).imagesLoaded(function() {
                var position_insert_data =  button.closest('.mdc-widget-event').find('.mdc-masonry-grid');
                var items = jQuery(data).find('div[class^=col]');
                if(items.length){
                    jQuery.each(items, function(items, index){
                        jQuery(position_insert_data).append(jQuery(this)).masonry( 'appended', jQuery(this));
                    });
                } 
            });
        });
    });
    jQuery('.mdc-widget-ms-popup-image .mdc-loadmore').on('click',function(){
        var button = jQuery(this);
        jQuery.ajax({
            url:loadmore_link_3,
            beforeSend: function( xhr ) {
            },
        })
        .done(function( data ) {
            console.log(data);
            jQuery(data).imagesLoaded(function() {
                var position_insert_data =  button.closest('.mdc-widget-ms-popup-image').find('.mdc-masonry-grid');
                var items = jQuery(data).find('li.mdc-item');
                if(items.length){
                    jQuery.each(items, function(items, index){
                        jQuery(position_insert_data).append(jQuery(this)).masonry( 'appended', jQuery(this));
                    });
                } 
            });
        });
    });
    jQuery('.mdc-widget-popup-portfolio .mdc-loadmore').on('click',function(){
        var button = jQuery(this);
        jQuery.ajax({
            url:loadmore_link_4,
            beforeSend: function( xhr ) {
            },
        })
        .done(function( data ) {
            console.log(data);
            jQuery(data).imagesLoaded(function() {
                var position_insert_data =  button.closest('.mdc-widget-popup-portfolio').find('.mdc-masonry-grid');
                var items = jQuery(data).find('li.mdc-item');
                if(items.length){
                    jQuery.each(items, function(items, index){
                        jQuery(position_insert_data).append(jQuery(this)).masonry( 'appended', jQuery(this));
                    });
                } 
            });
        });
    });
    //fitvid video
    if(jQuery('.mdc-video-fitvids').length){
        jQuery('.mdc-video-fitvids').fitVids();
    }
    // owl crousel
    if(jQuery('.mdc-widget-new-home-01').length){
        owl_01 = jQuery('.mdc-widget-new-home-01 .widget-content .owl-carousel');
        var speed = jQuery(owl_01).attr('data-speed');
        var auto = jQuery(owl_01).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_01.owlCarousel({
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [767, 1],
            itemsMobile: [639, 1],
            navigation: false,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
        var prev_controll = jQuery('.mdc-widget-new-home-01').find('.prev');
        var next_controll = jQuery('.mdc-widget-new-home-01').find('.next');
        prev_controll.on('click',function() {
            owl_01.trigger('owl.prev');
        });
        next_controll.on('click',function() {
            owl_01.trigger('owl.prev');
        });
    }
    if(jQuery('.mdc-widget-owl-home-2').length){
        owl_02 = jQuery('.mdc-widget-owl-home-2 .widget-content .owl-carousel');
        var speed = jQuery(owl_02).attr('data-speed');
        var auto = jQuery(owl_02).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_02.owlCarousel({
            items: 1,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [767, 1],
            itemsMobile: [639, 1],
            navigation: false,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
        var prev_controll = jQuery('.mdc-widget-owl-home-2').find('.prev');
        var next_controll = jQuery('.mdc-widget-owl-home-2').find('.next');
        prev_controll.on('click',function() {
            owl_02.trigger('owl.prev');
        });
        next_controll.on('click',function() {
            owl_02.trigger('owl.prev');
        });
    }
    if(jQuery('.mdc-widget-owl-sync-home1').length){
        var speed = jQuery(sync1).attr('data-speed');
        var auto = jQuery(sync1).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        sync1.owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigationText: false,
            pagination: false,
            navigation: true,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
            autoPlay: auto,
            slideSpeed: speed,
        });

        sync2.owlCarousel({
            items: 5,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [767, 2],
            itemsMobile: [639, 1],
            navigation: false,
            stopOnHover: true,
            pagination: false,
            navigationText: false,
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = jQuery(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
    }
    if(jQuery('.mdc-slider-owl-1').length){
        var speed = jQuery(sync1).attr('data-speed');
        var auto = jQuery(sync1).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        sync1.owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigationText: false,
            pagination: false,
            navigation: true,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
            autoPlay: auto,
            slideSpeed: speed,
        });

        sync2.owlCarousel({
            items: 5,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [767, 3],
            itemsMobile: [639, 2],
            navigation: false,
            stopOnHover: true,
            pagination: false,
            navigationText: false,
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        
        sync2.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = jQuery(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
    }
    if(jQuery('.mdc-slider-owl-2').length){
        var speed = jQuery(sync12).attr('data-speed');
        var auto = jQuery(sync12).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        sync12.owlCarousel({
            singleItem: true,
            stopOnHover: true,
            navigationText: false,
            pagination: false,
            navigation: true,
            afterAction: syncPosition1,
            responsiveRefreshRate: 200,
            autoPlay: auto,
            slideSpeed: speed,
        });
        sync22.owlCarousel({
            items: 8,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            itemsTablet: [767, 3],
            itemsMobile: [639, 3],
            navigation: false,
            stopOnHover: true,
            pagination: false,
            navigationText: false,
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        
        sync22.on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = jQuery(this).data("owlItem");
            sync12.trigger("owl.goTo", number);
        });
    }
    if(jQuery('.mdc-thumb-owl').length){
        var owl_03 = jQuery('.mdc-thumb-owl .owl-carousel');
        var speed = jQuery(owl_03).attr('data-speed');
        var auto = jQuery(owl_03).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_03.owlCarousel({
            singleItem:true,
            navigation: true,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
    }
    if(jQuery('.mdc-slider-owl-3 .mdc-thumb-owl').length){
        var owl_03 = jQuery('.mdc-thumb-owl .owl-carousel');
        var speed = jQuery(owl_03).attr('data-speed');
        var auto = jQuery(owl_03).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_03.owlCarousel({
            singleItem:true,
            navigation: true,
            pagination: true,
            autoPlay: auto,
            slideSpeed: speed,
        });
    }
    if(jQuery('.mdc-widget-department-listpost').length){
        var owl_04 = jQuery('.mdc-widget-department-listpost .owl-carousel');
        var speed = jQuery(owl_04).attr('data-speed');
        var auto = jQuery(owl_04).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_04.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [639, 1],
            navigation: false,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
        var prev_controll = jQuery('.mdc-widget-department-listpost').find('.prev');
        var next_controll = jQuery('.mdc-widget-department-listpost').find('.next');
        prev_controll.on('click',function() {
            owl_04.trigger('owl.prev');
        });
        next_controll.on('click',function() {
            owl_04.trigger('owl.prev');
        });
    }
    if(jQuery('.mdc-widget-single-portfolio-list-post').length){
        var owl_05 = jQuery('.mdc-widget-single-portfolio-list-post .owl-carousel');
        var speed = jQuery(owl_05).attr('data-speed');
        var auto = jQuery(owl_05).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_05.owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [767, 2],
            itemsMobile: [639, 1],
            navigation: false,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
        var prev_controll = jQuery('.mdc-widget-single-portfolio-list-post').find('.prev');
        var next_controll = jQuery('.mdc-widget-single-portfolio-list-post').find('.next');
        prev_controll.on('click',function() {
            owl_05.trigger('owl.prev');
        });
        next_controll.on('click',function() {
            owl_05.trigger('owl.prev');
        });
    }
    if(jQuery('.mdc-widget-testimonial-home3').length){
        var owl_06 = jQuery('.mdc-widget-testimonial-home3 .owl-carousel');
        var speed = jQuery(owl_06).attr('data-speed');
        var auto = jQuery(owl_06).attr('data-auto');
        if(auto == "false"){
            auto = false;
        }else{
            auto = true;
        }
        owl_06.owlCarousel({
            singleItem:true,
            navigation: false,
            pagination: false,
            autoPlay: auto,
            slideSpeed: speed,
        });
        var prev_controll = jQuery('.mdc-widget-testimonial-home3').find('.prev');
        var next_controll = jQuery('.mdc-widget-testimonial-home3').find('.next');
        prev_controll.on('click',function() {
            owl_06.trigger('owl.prev');
        });
        next_controll.on('click',function() {
            owl_06.trigger('owl.prev');
        });
    }
    //acordion
    if(jQuery('.panel-group').length){
        var panel_titles = jQuery('.panel-group .panel-title a');
        panel_titles.addClass("collapsed");
        jQuery('.panel-heading.active').find(panel_titles).removeClass("collapsed");
        panel_titles.on('click',function(){
            jQuery(this).closest('.panel-group').find('.panel-heading').removeClass('active');
            var pn_heading = jQuery(this).parents('.panel-heading');
            if (jQuery(this).hasClass('collapsed')) {
                pn_heading.addClass('active');
            } else {
                pn_heading.removeClass('active');
            }
        });
    }
    //li header
    if(jQuery('.mdc-header.mdc-style-02').length){
        jQuery('.mdc-header.mdc-style-02 .header-bottom .mdc-main-menu >ul >li').each(function(index){
            jQuery(this).addClass("color"+index);
        });
    }
    //match height
    if(jQuery('.mh-populor').length){
        jQuery('.mh-populor').children().matchHeight();
    }
    //filter first letter
    if(jQuery('.mdc-fillter-first-letter').length){
        var filter_content = jQuery('.mdc-fillter-first-letter li.active').text();
        jQuery('.mdc-fillter-first-letter li').on('click',function(){
            jQuery(".mdc-fillter-first-letter li").removeClass('active');
            jQuery(this).addClass('active');
            var filter_content = jQuery(this).text();
            jQuery('#accordion-1 .panel-default').removeClass('show');
            jQuery('#accordion-1 .panel-default').addClass('hide');
            var i = 0;
            if(filter_content != null){
                jQuery('#accordion-1 .tab-title').each(function(index){
                    var content_tab_title = jQuery(this).text();
                    var content_tab_title_lowercase = content_tab_title.toLowerCase();
                    console.log(filter_content);
                    if(filter_content == content_tab_title_lowercase[0]){
                        console.log("true");
                        var filter_show_hide = jQuery(this).closest('.panel-default');
                        filter_show_hide.addClass('show');
                        i = i + 1;
                        if(i==1){
                            var active_firt_ac = jQuery(this).closest('.panel-heading');
                            active_firt_ac.addClass('active');
                            var active_firt_ac_near = active_firt_ac.next('.panel-collapse');
                            active_firt_ac_near.addClass('in');
                        }
                    }else{
                        var filter_show_hide = jQuery(this).closest('.panel-default');
                        filter_show_hide.addClass('hide');
                    }
                });
            }
        });  
    }
    //map
    if (jQuery('.kopa-map').length > 0) {

        var id_map = jQuery('.kopa-map').attr('id');
        var lat = parseFloat(jQuery('.kopa-map').attr('data-latitude'));
        var lng = parseFloat(jQuery('.kopa-map').attr('data-longitude'));
        var place = jQuery('.kopa-map').attr('data-place');
        var map = new GMaps({
            el: '#'+id_map,
            lat: lat,
            lng: lng,
            zoomControl : true,
            zoomControlOpt: {
              style : 'SMALL',
              position: 'TOP_LEFT'
            },
            panControl : false,
            streetViewControl : false,
            mapTypeControl: false,
            overviewMapControl: false,
            scrollwheel: false,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        });
        map.addMarker({
            lat: lat,
            lng: lng,
            title: place
        });

    }
    /*_____________ Slide Area _____________*/  

    //scroll-bar
    var h_window = jQuery(window).height();
    if(jQuery('.slide-area').length) {
        jQuery('.slide-area').find('.slide-container').height(h_window).mCustomScrollbar();
    }
    
    var hb_menu = jQuery('.humburger-menu'),
        hb_area = jQuery('.slide-area'),
        hb_overlay = jQuery('.body-overlay'),
        hb_main_ct = jQuery('.main-container'),
        hb_close = hb_area.find('.close-btn');

    if(hb_menu.length) {
        hb_menu.on('click',function(event) {
            event.preventDefault();
            hb_area.toggleClass('active');
            hb_overlay.toggleClass('active');
            hb_main_ct.toggleClass('scale-down');
        });
    }
    hb_close.on('click',function(event) {
        event.preventDefault();
        hb_area.removeClass('active');
        hb_overlay.removeClass('active');
        hb_main_ct.removeClass('scale-down');
    });
    hb_overlay.on('click',function(event) {
        hb_close.click();
    });
    // Slide Menu
    
    if(jQuery('.slide-menu').length) {
        jQuery('.slide-menu').navgoco({
            accordion: true
        });
    }
    //Mobile Menu
    if(jQuery('.mobile-menu').length) {
        jQuery('.mobile-menu').navgoco({
            accordion: true
        });
    }
    jQuery('.caret').removeClass('caret');
    //search menu
    jQuery('.mdc-form-search i').on('click',function(){
        jQuery('.mdc-wrap-search-form').css('display','block');
        jQuery('.mdc-wrap-search-form form').animate({top: '250px'});
    });
    jQuery('.mdc-form-search span').on('click',function(){
        jQuery('.mdc-wrap-search-form').css('display','block');
        jQuery('.mdc-wrap-search-form form').animate({top: '250px'});
    });
    jQuery('.mdc-form-search-res i').on('click',function(){
        jQuery('.mdc-wrap-search-form').css('display','block');
        jQuery('.mdc-wrap-search-form form').animate({top: '150px'});
    });
    jQuery('.mdc-wrap-search-form i').on('click',function(){
        jQuery('.mdc-wrap-search-form').css('display','none');
        jQuery('.mdc-wrap-search-form form').animate({top: '80px'});
    });
    
});

window.onload = function(){
    if(jQuery('.mdc-fillter-first-letter').length){
        var filter_content = jQuery('.mdc-fillter-first-letter li.active').text();
        console.log(filter_content);
        jQuery('#accordion-1 .tab-title').each(function(index){
            var content_tab_title = jQuery(this).text();
            var content_tab_title_lowercase = content_tab_title.toLowerCase();
            console.log(filter_content);
            if(filter_content == content_tab_title_lowercase[0]){
                console.log("true");
                var filter_show_hide = jQuery(this).closest('.panel-default');
                filter_show_hide.addClass('show');
            }else{
                var filter_show_hide = jQuery(this).closest('.panel-default');
                filter_show_hide.addClass('hide');
            }
        });
    }
}
function syncPosition(el) {
    var current = this.currentItem;
    sync2.find(".owl-item").removeClass("synced").eq(current).addClass("synced");
    if (sync2.data("owlCarousel") !== undefined) {
        center(current);
    }
}
function center(number) {
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for (var i in sync2visible) {
        if (num === sync2visible[i]) {
            var found = true;
        }
    }

    if (found === false) {
        if (num > sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", num - sync2visible.length + 2)
        } else {
            if (num - 1 === -1) {
                num = 0;
            }
            sync2.trigger("owl.goTo", num);
        }
    } else if (num === sync2visible[sync2visible.length - 1]) {
        sync2.trigger("owl.goTo", sync2visible[1])
    } else if (num === sync2visible[0]) {
        sync2.trigger("owl.goTo", num - 1)
    }

}
function syncPosition1(el) {
    var current = this.currentItem;
    sync22.find(".owl-item").removeClass("synced").eq(current).addClass("synced");
    if (sync22.data("owlCarousel") !== undefined) {
        center1(current);
    }
}
function center1(number) {
    var sync2visible = sync22.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for (var i in sync2visible) {
        if (num === sync2visible[i]) {
            var found = true;
        }
    }

    if (found === false) {
        if (num > sync2visible[sync2visible.length - 1]) {
            sync22.trigger("owl.goTo", num - sync2visible.length + 2)
        } else {
            if (num - 1 === -1) {
                num = 0;
            }
            sync22.trigger("owl.goTo", num);
        }
    } else if (num === sync2visible[sync2visible.length - 1]) {
        sync22.trigger("owl.goTo", sync2visible[1])
    } else if (num === sync2visible[0]) {
        sync22.trigger("owl.goTo", num - 1)
    }

}
// function splashRotator(){
//     var cur = $('#jSplash').children('.selected');
//     var next = $(cur).next();
    
//     if($(next).length != 0) {
//         $(next).addClass('selected');
//     } else {
//         $('#jSplash').children('section:first-child').addClass('selected');
//         next = $('#jSplash').children('section:first-child');
//     }
        
//     $(cur).removeClass('selected').fadeOut(800, function() {
//         $(next).fadeIn(800);
//     });
// }