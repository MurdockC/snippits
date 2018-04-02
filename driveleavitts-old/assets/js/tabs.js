/*
Minitabs plugin
---------------

- Basic HTML structure:
<div class="minitabs">
    <ul class="tabnames">
        <li>Tab</li>
    </ul>
    <div class="tabcontent">Tab content</div>
</div>

- To run it:
$(selector).minitabs();
*/
(function($) {
    $.fn.minitabs = function() {
        return this.each(function() {
            $(this).find(".tabnames li").on('click', $.proxy(function(e){
                $(e.currentTarget).addClass('activetab').siblings().removeClass('activetab');
                $(this).find(".tabcontent").removeClass('activetab').eq($(e.currentTarget).index()).addClass('activetab');
            }, this)).eq(0).trigger('click');
        });
    };
})(jQuery);

/* Run it! */
$(document).ready(function() {
    $(".minitabs, .verticaltabs").minitabs();
});