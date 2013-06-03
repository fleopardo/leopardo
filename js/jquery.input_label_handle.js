(function($) {
	$.fn.inputLabelHandle = function (params) {
		/*
		var params = $.extend({
			param         : 'value',
		}, params);
		*/
		element = new Array();
		label = new Array();
		
		this.each(function(i, item){
			element[i] = $(this);
			label[i] = $('label[for="' + element[i].attr('id') + '"]')
			label[i].hide();
			if (element[i].is('textarea') || element[i].is(':text')) {
				if (element[i].val() == '') {
					element[i].val(label[i].text());
				}
				element[i].focus(function(){
					if (element[i].val() == label[i].text()) {
						element[i].val('');
					}
				}).blur(function(){
					if (element[i].val() == '') {
						element[i].val(label[i].text());
					}
				});
			}
		});
		/*
		this.each(function(i, item){
			$('label[for="' + $(item).attr('id') + '"]').hide();
			if ($(item).val() == '') {
				$(item).val($('label[for="' + $(item).attr('id') + '"]').text());
			}
			$(item).focus(function(){
				if ($(this).val() == $('label[for="' + $(this).attr('id') + '"]').text()) {
					$(this).val('');
				}
			}).blur(function(){
				if ($(this).val() == '') {
					$(this).val($('label[for="' + $(this).attr('id') + '"]').text());
				}
			});
		});
		*/
	};
})(jQuery);