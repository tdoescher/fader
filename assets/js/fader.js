/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2014 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Torben Döscher
 * @author     Torben Döscher <mail@tdoescher.de>
 * @package    Fader
 * @license    LGPL
 * @filesource
 */

(function($) {
	$.fn.fader = function(options) {
		options = options || {};
		var wrapper = $(this);
		var auto = options.auto || 5000;
		var speed = options.speed || 1000;
		var startFade = parseInt(options.startFade, 10) || 0;
		var continuous = options.continuous;
		var count = $('.fader-wrapper', wrapper).children().length - 1;
		var play = 1;
		
		function fade(to) {
			$('.fade[data-index].active', wrapper).animate({opacity: 0}, speed).removeClass('active');
			$('.fade[data-index="' + to + '"]', wrapper).animate({opacity: 1}, speed).addClass('active');
			
			if(typeof options.menu == 'object') {
				$('.fader-menu b[data-index].active', options.menu).removeClass('active');
				$('.fader-menu b[data-index="' + to + '"]', options.menu).addClass('active');
			}
		}
		
		function fadeNext() {
			var next = parseInt($('.fade[data-index].active', wrapper).attr('data-index')) + 1;
			if(next > count) {
				next = 0;
			}
			fade(next);
		}
		
		function fadePrev() {
			var id = $('.fade[data-index].active', wrapper).attr('data-index');
			if(id == 0) {
				var prev = count;
			} else {
				var prev = parseInt(id) - 1;
			}
			fade(prev);
		}
		
		$('.fader-wrapper > div', wrapper).each(function(id) {
			if(count < startFade) startFade = 0;
			if(id == startFade) {
				$(this).attr('data-index', id).addClass('fade start active');
				$('.fader-menu').append('<b data-index="' + id + '" class="active">•</b>');
			} else {
				$(this).attr('data-index', id).addClass('fade');
				$('.fader-menu').append('<b data-index="' + id + '">•</b>');
			}
		});
		
		if(typeof options.menu == 'object') {
			$('.fader-prev', options.menu).bind('click', function() {
				fadePrev();
				return false;
			});
			
			$('.fader-next', options.menu).bind('click', function() {
				fadeNext();
				return false;
			});
			
			$('.fader-menu b', options.menu).bind('click', function() {
				fade($(this).attr('data-index'));
			});
		}
				
		if(continuous == 1) {
			wrapper.bind('mouseenter mouseleave', function() { play = !play; });
			
			var autoFade = setInterval(function() {
				if(play) {
					fadeNext();
				}
			}, auto);
		}
	}
}(jQuery));