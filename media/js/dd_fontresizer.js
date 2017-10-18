/**
 * @package    DD_Mod_FontResizer
 *
 * @author     HR IT-Solutions Florian Häusler <info@hr-it-solutions.com>
 * @copyright  Copyright (C) 2017 - 2017 Didldu e.K. | HR IT-Solutions
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

; var DD_FontResizer = (function($, document, undefined) {

    var init = function() {

        // Reset font Size
        $("#resetFont").click(function(){

            var selector = $(this).data("selector");
            var allElems = $(selector);

            for(var counter = 0; counter < allElems.length; counter++)
            {
                $(allElems[counter]).css('font-size', 'initial');
            }

            return false;
        });

        // Increase font Size
        $("#increaseFont").click(function(){

            var selector = $(this).data("selector");
            var allElems = $(selector);

            for(var counter = 0; counter < allElems.length; counter++)
            {

                var currentFontSize = $(allElems[counter]).css('font-size');
                var currentFontSizeNum = parseFloat(currentFontSize, 10);
                var newFontSize = currentFontSizeNum * 1.2;

                $(allElems[counter]).css('font-size', newFontSize + '%');
            }

            return false;
        });

    };

    // more methods

    // init public method
    return {
        init:init
    };

}(jQuery, document, undefined));

(function($) {
    $(function()
    {
        DD_FontResizer.init();
    });
})(jQuery);
