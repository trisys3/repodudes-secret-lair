(function($){Drupal.contextualLinks=Drupal.contextualLinks||{};Drupal.behaviors.contextualLinks={attach:function(context){$("div.contextual-links-wrapper",context).once("contextual-links",function(){var $wrapper=$(this);var $region=$wrapper.closest(".contextual-links-region");var $links=$wrapper.find("ul.contextual-links");var $trigger=$('<a class="contextual-links-trigger" href="#" />').text(Drupal.t("Configure")).click(function(){$links.stop(true,true).slideToggle(100);$wrapper.toggleClass("contextual-links-active");return false});$trigger.add($links).hover(function(){$region.addClass("contextual-links-region-active")},function(){$region.removeClass("contextual-links-region-active")});$region.bind("mouseleave click",Drupal.contextualLinks.mouseleave);$region.hover(function(){$trigger.addClass("contextual-links-trigger-active")},function(){$trigger.removeClass("contextual-links-trigger-active")});$wrapper.prepend($trigger)})}};Drupal.contextualLinks.mouseleave=function(){$(this).find(".contextual-links-active").removeClass("contextual-links-active").find("ul.contextual-links").hide()}})(jQuery);

