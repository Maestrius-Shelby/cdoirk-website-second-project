var MapApp = ( function() {

    var panels = $('.panel');
    var animationComplete = true;
    var panels2 = $('.panel2');
    var animationComplete2 = true;

    

    // mobile menu toggle
    function mobileMenuToggle(){
        $('.main-nav').toggleClass('is-open');
        $('.hamburger').toggleClass('is-open');
        return false;
    }
    //remove panel classes on mouseout
    function hideDiv(){
        $('#panels').removeClass('hover');
        $('#panels2').removeClass('hover');
        $(this).removeClass('expand');
        $(this).prev().removeClass('shrink-right');
        $(this).next().removeClass('shrink-left');
    }
    //add panel classes on mousein
    function revealDiv(){
        $('#panels').addClass('hover');
        $('#panels2').addClass('hover');
        $(this).addClass('expand');
        $(this).prev().addClass('shrink-right');
        $(this).next().addClass('shrink-left');
    }
    //change body background depending on article
    function changeBgColor(panelColor){
        var color = panelColor;
        switch(color) {
            case "brown":
                $('body').css('background-color', '#7d4627')
                break;
            case "red":
                $('body').css('background-color', '#b56969')
                break;
            case "blue":
                $('body').css('background-color', '#a8b6bf')
                break;
            case "green":
                $('body').css('background-color', '#c9d8c5')
                break;
            case "yellow":
                $('body').css('background-color', '#edd9c0')
                break;
            default:
                $('body').css('background-color', '#2c2c2c')
        }
        
    }
    //part of reveal article, waits for transitionend before applying classes
     function switchAnimation(element, className, hidden){
         var articleContainer = $('.container-announcements');
         var secondElement = $('section.announcements');
         articleContainer.on("transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd", function() {
            articleContainer.off( "transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd" );
            console.log('done');
            animationComplete=true;
        });
        secondElement.on("transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd", function() {
            hidden.addClass('hidden');
            secondElement.off( "transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd" );
        });
        element.on("transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd", function() {
                secondElement.addClass(className);
                articleContainer.addClass('fade-in-up');
                element.off( "transitionend MSTransitionEnd webkitTransitionEnd oTransitionEnd" );
            });
     }









     
    function headerToggle(){
        var element = $(this);
        var href = this.href.split('/').pop();
        var headers = $('.header-page');
        var body = $('body');
        var pageToggles = $('.page-toggle');
        element.hasClass('selected') && body.hasClass('showheader') ? body.removeClass('showheader') : body.addClass('showheader');
        pageToggles.removeClass('selected');
        headers.removeClass('show');
        element.addClass('selected');
        $('#'+href+'').addClass('show');
    }

     function init() {
        // Application init code

        //panel hover
        panels.on('mouseenter', revealDiv);
        panels.on('mouseleave', hideDiv);
        panels2.on('mouseenter', revealDiv);
        panels2.on('mouseleave', hideDiv);
        //panel & article click
        $('.panel').on('click', revealArticle);
        $('.toggle-article').on('click', hideArticle); 
        $('.panel').on('click', revealArticle2);
        $('.toggle-article').on('click', hideArticle2); 
        //main menu togge
        $('.page-toggle').on('click', headerToggle);
    }
    
    return {
        init : init
    };
    })();
    
    MapApp.init(); // Run application

