// IIFE to ensure safe use of $
var ttscript = jQuery.noConflict(); 
(function( ttscript ) {

  // Create plugin
  ttscript.fn.tooltips = function(el) {

    var ttscripttooltip,
      ttscriptbody = ttscript('body'),
      ttscriptel;

    // Ensure chaining works
    return this.each(function(i, el) {
    
      ttscriptel = ttscript(el).attr("data-tooltip", i);

      // Make DIV and append to page 
      var ttscripttooltip = ttscript('<div class="tooltip" data-tooltip="' + i + '">' + ttscriptel.attr('title') + '<div class="arrow"></div></div>').appendTo("body");

      // Position right away, so first appearance is smooth
      var linkPosition = ttscriptel.position();

      ttscripttooltip.css({
        top: linkPosition.top - ttscripttooltip.outerHeight() - 13,
        left: linkPosition.left - (ttscripttooltip.width()/2)
      });

      ttscriptel
      // Get rid of yellow box popup
      .removeAttr("title")

      // Mouseenter
      .hover(function() {

        ttscriptel = ttscript(this);

        ttscripttooltip = ttscript('div[data-tooltip=' + ttscriptel.data('tooltip') + ']');

        // Reposition tooltip, in case of page movement e.g. screen resize                        
        var linkPosition = ttscriptel.position();

        ttscripttooltip.css({
          top: linkPosition.top - ttscripttooltip.outerHeight() - 13,
          left: linkPosition.left - (ttscripttooltip.width()/2)
        });

        // Adding class handles animation through CSS
        ttscripttooltip.addClass("active");

        // Mouseleave
      }, function() {

        ttscriptel = ttscript(this);

        // Temporary class for same-direction fadeout
        ttscripttooltip = ttscript('div[data-tooltip=' + ttscriptel.data('tooltip') + ']').addClass("out");

        // Remove all classes
        setTimeout(function() {
          ttscripttooltip.removeClass("active").removeClass("out");
          }, 300);

        });

      });

    }

})(jQuery);
