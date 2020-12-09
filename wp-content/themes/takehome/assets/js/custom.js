


jQuery(document).ready(function() {   
    
      jQuery(".main-small-navigation").append('<div class="close-button" ><span class="icon icon-cancel-circle"></span>Cerrar</div>') 


      jQuery(function($){
         $( '.open-button' ).click(function(){
         $('.main-small-navigation').show(1000);
         })
      })

      jQuery(function($){
         $( '.close-button' ).click(function(){
         $('.main-small-navigation').hide(1000);
         })
      })

      


});





jQuery(document).ready(function(n) {
    window.scrollAnimate = function(n, t) {
        var o = window.scrollY,
            e = n - o,
            i = 0,
            a = function() {
                i += 20;
                var n = Math.easeInOutQuad(i, o, e, t);
                window.scrollTo(0, n), i < t && setTimeout(a, 20)
            };
        a()
    }, Math.easeInOutQuad = function(n, t, o, e) {
        return (n /= e / 2) < 1 ? o / 2 * n * n + t : (n--, -o / 2 * (n * (n - 2) - 1) + t)
    }, n(".go-up[role='button']").click(function() {
        navigator && navigator.userAgent && navigator.userAgent.match && navigator.userAgent.match(/iPad|iPhone|iPod|Android|Windows Phone|AppleWebKit/i) ? window.scrollAnimate(0, 1e3) : n("html, body").animate({
            scrollTop: 0
        }, 1e3)
    }), n('.subsections-scroll a[href^="#"]').click(function(t) {
        var o = parseInt(n(n.attr(this, "href")).offset().top);
        navigator && navigator.userAgent && navigator.userAgent.match && navigator.userAgent.match(/iPad|iPhone|iPod|Android|Windows Phone|AppleWebKit/i) && (t.preventDefault(), window.scrollAnimate(o, 1e3))
    })
});

