
;(function($) {
	
	paginate = function(event)
	{
		var url        = $(event.target).attr('href');
		var $container = event.data.container;
		
		$container.load(url, function() { $container.pagination(); });
		return false;
	};
	
	$.fn.pagination = function()
	{
		return this.each(function() {
			$(this).find('.pagination li[class!="disabled"] a')
			       .click({"container": $(this)}, paginate);
		});
	};
	
	$(function() {
		$(".pagination-container").pagination();
	});
	
})(jQuery);