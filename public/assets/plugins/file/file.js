//Reference: 
//http://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
// Browser supports HTML5 multiple file?

(function ($) {

	var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
		isIE = /msie/i.test(navigator.userAgent);

	$.fn.customFile = function () {
		return this.each(function () {
			var $file = $(this).addClass('customfile'), // the original file input
				$wrap = $('<div class="customfile-wrap">'),
				$input = $('<input type="text" class="customfile-filename" placeholder="&nbsp;"/>'),
				// Button that will be used in non-IE browsers
				$button = $('<button type="button" class="customfile-upload">Last opp bilde</button>'),
				// Hack for IE
				$label = $('<label class="customfile-upload" for="' + $file[0].id + '">&nbsp;</label>');

			// Hide by shifting to the left so we
			// can still trigger events
			$file.css({
				position: 'absolute',
				left: '-9999px'
			});

			$wrap.insertAfter($file).append($file, $input, (isIE ? $label : $button));

			// Prevent focus
			$file.attr('tabIndex', -1);
			$button.attr('tabIndex', -1);

			$button.click(function () {
				$file.focus().click(); // Open dialog
			});

			$file.change(function () {

				var files = [],
					fileArr, filename;

				// If multiple is supported then extract
				// all filenames from the file array
				if (multipleSupport) {
					fileArr = $file[0].files;
					for (var i = 0, len = fileArr.length; i < len; i++) {
						files.push(fileArr[i].name);
					}
					filename = files.join(', ');
					// If not supported then just take the value
					// and remove the path to just show the filename
				} else {
					filename = $file.val().split('\\').pop();
				}

				$input.val(filename) // Set the value
					.attr('title', filename) // Show filename in title tootlip
					.focus() // Regain focus
					.addClass('withFile');
				if ($input.val() == '') {
					$input.removeClass('withFile');
				}
			});

			$input.on({
				blur: function () {
					$file.trigger('blur');
					//$input.removeClass('withFile');
				},
				keydown: function (e) {
					if (e.which === 13) { // Enter
						if (!isIE) {
							$file.trigger('click');
						}
					} else if (e.which === 8 || e.which === 46) { // Backspace & Del
						// On some browsers the value is read-only
						// with this trick we remove the old input and add
						// a clean clone with all the original events attached
						$file.replaceWith($file = $file.clone(true));
						$file.trigger('change');
						$input.val('').removeClass('withFile');
					} else if (e.which === 9) { // TAB
						return;
					} else { // All other keys
						return false;
					}
				}
			});
		});
	};

	// Old browser fallback
	if (!multipleSupport) {
		$(document).on('change', 'input.customfile', function () {
			var $this = $(this),
				// Create a unique ID so we
				// can attach the label to the input
				uniqId = 'customfile_' + (new Date()).getTime(),
				$wrap = $this.parent(),
				// Filter empty input
				$inputs = $wrap.siblings().find('.customfile-filename')
				.filter(function () {
					return !this.value
				}),
				$file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');
			// 1ms timeout so it runs after all other events
			// that modify the value have triggered
			setTimeout(function () {
				// Add a new input
				if ($this.val()) {
					// Check for empty fields to prevent
					// creating new inputs when changing files
					if (!$inputs.length) {
						$wrap.after($file);
						$file.customFile();
					}
					// Remove and reorganize inputs
				} else {
					$inputs.parent().remove();
					// Move the input so it's always last on the list
					$wrap.appendTo($wrap.parent());
					$wrap.find('input').focus();
				}
			}, 1);
		});
	}
})(jQuery);