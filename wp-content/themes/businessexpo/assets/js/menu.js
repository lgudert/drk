(function() {
	// Check if target matches to an element.
	function businessexpoTargetMatches(selector) {
		return event.target.matches ? event.target.matches(selector) : event.target.msMatchesSelector(selector);
	}

	// Get next sibling.
	function businessexpoNextSibling(element) {
		do {
			element = element.nextSibling;
		} while (element && element.nodeType !== 1);
		return element;
	}

	// Handle sub-menu arrow clicks.
	function businessexpoSubMenuArrowClick(subMenuArrow, subMenuArrows, subMenus) {
		var businessexpoSubMenu = businessexpoNextSibling(subMenuArrow);
		if(businessexpoSubMenu) {
			// Accessibility support for dropdown menu.
			var businessexpoSubMenuLink = subMenuArrow.previousSibling;

			businessexpoSetTabIndex(subMenus, -1);

			if(businessexpoSubMenu.classList.contains('sub-menu--open')) {
				subMenuArrow.classList.remove('sub-menu-show');
				businessexpoSubMenu.classList.remove('sub-menu--open');
				businessexpoSubMenuLink.setAttribute('aria-expanded', 'false');
				subMenuArrow.getElementsByClassName('menu-arrow-button-hide')[0].setAttribute('aria-hidden', 'true');
				subMenuArrow.getElementsByClassName('menu-arrow-button-show')[0].setAttribute('aria-hidden', 'false');
			} else {
				if(subMenus.length) {
					[].forEach.call(subMenus, function(el) {
						el.classList.remove('sub-menu--open');
					});
				}
				if(subMenuArrows.length) {
					for(var i = 0; i < subMenuArrows.length; i++) {
						subMenuArrows[i].classList.remove('sub-menu-show');
						subMenuArrows[i].previousSibling.setAttribute('aria-expanded', 'false');
						subMenuArrows[i].getElementsByClassName('menu-arrow-button-hide')[0].setAttribute('aria-hidden', 'true');
						subMenuArrows[i].getElementsByClassName('menu-arrow-button-show')[0].setAttribute('aria-hidden', 'false');
					}
				}

				subMenuArrow.classList.add('sub-menu-show');
				businessexpoSubMenu.classList.add('sub-menu--open');
				businessexpoSubMenuLink.setAttribute('aria-expanded', 'true');
				subMenuArrow.getElementsByClassName('menu-arrow-button-hide')[0].setAttribute('aria-hidden', 'false');
				subMenuArrow.getElementsByClassName('menu-arrow-button-show')[0].setAttribute('aria-hidden', 'true');
				businessexpoSetTabIndex(businessexpoSubMenu, 0);
				businessexpoSetTabIndex(businessexpoSubMenu.querySelectorAll('.sub-menu'), -1);
			}
		}
	}

	// Setup mobile menu.
	function businessexpoMobileMenu() {
		document.addEventListener('click', function(event) {
			if(businessexpoTargetMatches('.menu-toggle')) {
				event.preventDefault();
				var businessexpoNavIcon = event.target || event.srcElement;
				var businessexpoMainNav = document.querySelector('.main-navigation > .primary-menu-container');

				// Slide mobile menu.
				businessexpoNavIcon.classList.toggle('menu-toggle--open');
				businessexpoMainNav.classList.toggle('primary-menu-container--open');

				if(businessexpoNavIcon.classList.contains('menu-toggle--open')) {
					businessexpoNavIcon.setAttribute('aria-expanded', 'true');
					businessexpoSetTabIndex(document.querySelector('.main-navigation .menu'), 0);
					businessexpoSetTabIndex(document.querySelectorAll('.main-navigation .sub-menu'), -1);
				} else {
					businessexpoNavIcon.setAttribute('aria-expanded', 'false');
				}

			} else if(businessexpoTargetMatches('.main-navigation .menu .sub-menu li.menu-item-has-children > .menu-arrow-button')) {
				event.preventDefault();
				var businessexpoSubMenuArrow1 = event.target || event.srcElement;

				var businessexpoSubMenuArrows1 = document.querySelectorAll('.main-navigation .menu .sub-menu > li.menu-item-has-children > .menu-arrow-button');
				var businessexpoSubMenus1 = document.querySelectorAll('.main-navigation .menu .sub-menu > li.menu-item-has-children > .sub-menu');

				businessexpoSubMenuArrowClick(businessexpoSubMenuArrow1, businessexpoSubMenuArrows1, businessexpoSubMenus1);

			} else if(businessexpoTargetMatches('.main-navigation .menu li.menu-item-has-children > .menu-arrow-button')) {
				event.preventDefault();
				var businessexpoSubMenuArrow2 = event.target || event.srcElement;

				var businessexpoSubMenuArrows2 = document.querySelectorAll('.main-navigation .menu > li.menu-item-has-children > .menu-arrow-button');
				var businessexpoSubMenus2 = document.querySelectorAll('.main-navigation .menu > li.menu-item-has-children > .sub-menu');

				businessexpoSubMenuArrowClick(businessexpoSubMenuArrow2, businessexpoSubMenuArrows2, businessexpoSubMenus2);

			} else {
				var businessexpoSubMenuArrows3 = document.querySelectorAll('.main-navigation .menu > li.menu-item-has-children > .menu-arrow-button');
				var businessexpoSubMenus3 = document.querySelectorAll('.main-navigation .menu > li.menu-item-has-children > .sub-menu');
				if(businessexpoSubMenus3.length) {
					[].forEach.call(businessexpoSubMenus3, function(el) {
						el.classList.remove('sub-menu--open');
					});
				}
				if(businessexpoSubMenuArrows3.length) {
					for(var i = 0; i < businessexpoSubMenuArrows3.length; i++) {
						businessexpoSubMenuArrows3[i].classList.remove('sub-menu-show');
						businessexpoSubMenuArrows3[i].previousSibling.setAttribute('aria-expanded', 'false');
						businessexpoSubMenuArrows3[i].getElementsByClassName('menu-arrow-button-hide')[0].setAttribute('aria-hidden', 'true');
						businessexpoSubMenuArrows3[i].getElementsByClassName('menu-arrow-button-show')[0].setAttribute('aria-hidden', 'false');
					}
				}
				businessexpoSetTabIndex(document.querySelectorAll('.main-navigation .sub-menu'), -1);
			}
		});
	}

	// Mobile menu.
	businessexpoMobileMenu();

	var businessexpoFocusableElements = 'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])';

	// Set tabindex of focusable elements.
	function businessexpoSetTabIndex(element, value) {
		if(NodeList.prototype.isPrototypeOf(element)) {
			[].forEach.call(element, function(el) {
				[].forEach.call(el.querySelectorAll(businessexpoFocusableElements), function(el) {
					el.setAttribute('tabindex', value);
				});
			});

		} else {
			[].forEach.call(element.querySelectorAll(businessexpoFocusableElements), function(el) {
				el.setAttribute('tabindex', value);
			});
		}
	}

	businessexpoSetTabIndex(document.querySelectorAll('.main-navigation .sub-menu'), -1);

	document.addEventListener('keydown', function(event) {
		var businessexpoIsTabPressed = ('Tab' === event.key || 9 === event.keyCode);
		if(!businessexpoIsTabPressed) {
			return;
		}

		var businessexpoNavIcon = document.querySelector('.menu-toggle');
		if(businessexpoNavIcon && ('none' !== getComputedStyle(businessexpoNavIcon, null).display)) {
			if(!businessexpoNavIcon.classList.contains('menu-toggle--open')) {
				businessexpoSetTabIndex(document.querySelector('.main-navigation .menu'), -1);
			}

			if(!event.shiftKey) {
				if(!document.activeElement.classList || !document.activeElement.classList.contains('sub-menu-show')) {
					var businessexpoActiveElementArrow = businessexpoNextSibling(document.activeElement);
					if(!businessexpoActiveElementArrow || (businessexpoActiveElementArrow.classList && !businessexpoActiveElementArrow.classList.contains('menu-arrow-button'))) {
						var businessexpoActiveElementSibling = businessexpoNextSibling(document.activeElement.parentNode);
						if(!businessexpoActiveElementSibling && document.activeElement.parentNode.parentNode.id && 'primary-menu' === document.activeElement.parentNode.parentNode.id) {
							var businessexpoMenuFocusableElements = document.activeElement.parentNode.parentNode.querySelectorAll(businessexpoFocusableElements);
							if(businessexpoMenuFocusableElements.length > 0) {
								event.preventDefault();
								businessexpoNavIcon.focus();
							}
						}
					}
				}
			} else {
				if(document.activeElement.classList && document.activeElement.classList.contains('menu-toggle--open')) {
					var businessexpoLastMenuItemArrowButton = document.querySelector('.main-navigation .menu > li:last-child > .menu-arrow-button');
					if(businessexpoLastMenuItemArrowButton) {
						businessexpoLastMenuItemArrowButton.focus();
						event.preventDefault();
					} else {
						var businessexpoLastMenuItemAnchor = document.querySelector('.main-navigation .menu > li:last-child > a');
						if(businessexpoLastMenuItemAnchor) {
							businessexpoLastMenuItemAnchor.focus();
							event.preventDefault();
						}
					}
				}
			}
		}

		if(!event.shiftKey) {
			if(!document.activeElement.classList || !document.activeElement.classList.contains('sub-menu-show')) {
				var businessexpoActiveElementArrow = businessexpoNextSibling(document.activeElement);
				if(!businessexpoActiveElementArrow || (businessexpoActiveElementArrow.classList && !businessexpoActiveElementArrow.classList.contains('menu-arrow-button'))) {
					var businessexpoActiveElementSibling = businessexpoNextSibling(document.activeElement.parentNode);
					if(!businessexpoActiveElementSibling && document.activeElement.parentNode.parentNode.classList && document.activeElement.parentNode.parentNode.classList.contains('sub-menu--open')) {
						var subMenuFocusableElements = document.activeElement.parentNode.parentNode.querySelectorAll(businessexpoFocusableElements);
						if(subMenuFocusableElements.length > 0) {
							event.preventDefault();
							subMenuFocusableElements[0].focus();
						}
					}
				}
			}
		}
	});

	// Sticky menu.
	var businessexpoMainMenuSticky = document.querySelector('.site-menu-content--sticky');
	if(businessexpoMainMenuSticky) {
		var businessexpoAfterMainMenu = businessexpoNextSibling(businessexpoMainMenuSticky);
		if(businessexpoAfterMainMenu) {
			var businessexpoSiteContent = businessexpoAfterMainMenu;
		} else {
			var businessexpoSiteContent = document.getElementById('site-content');
		}

		var businessexpoSiteContentMarginTop = window.getComputedStyle(businessexpoSiteContent, null).marginTop;

		var businessexpoStickyMenuHeight = businessexpoMainMenuSticky.offsetHeight;
		var businessexpoStickyMenuClass = 'sticky-menu';
		var businessexpoStickyMenuInViewClass = 'sticky-menu-in-view';
		var businessexpoHeaderHeight = document.querySelector('.site-menu-content').offsetHeight;
		window.addEventListener('scroll', function() {
			if(window.pageYOffset > businessexpoHeaderHeight) {
				businessexpoMainMenuSticky.classList.add(businessexpoStickyMenuClass);
				businessexpoSiteContent.style.marginTop = businessexpoStickyMenuHeight + 'px';
			} else {
				businessexpoMainMenuSticky.classList.remove(businessexpoStickyMenuClass);
				businessexpoSiteContent.style.marginTop = businessexpoSiteContentMarginTop;
			}
			if(window.pageYOffset > (businessexpoHeaderHeight * 1)) {
				businessexpoMainMenuSticky.classList.add(businessexpoStickyMenuInViewClass);
			} else {
				businessexpoMainMenuSticky.classList.remove(businessexpoStickyMenuInViewClass);
			}
		});
	}

	// Utility function.
	function businessexpoUtil() {}

	// Smooth scroll.
	businessexpoUtil.scrollTo = function(final, duration, cb) {
		var businessexpoStart = window.scrollY || document.documentElement.scrollTop,
			businessexpoCurrentTime = null;

		var businessexpoAnimateScroll = function(timestamp) {
			if(!businessexpoCurrentTime) {
				businessexpoCurrentTime = timestamp;
			}

			var businessexpoProgress = timestamp - businessexpoCurrentTime;

			if(businessexpoProgress > duration) {
				businessexpoProgress = duration;
			}

			var businessexpoVal = Math.easeInOutQuad(businessexpoProgress, businessexpoStart, final - businessexpoStart, duration);

			window.scrollTo(0, businessexpoVal);
			if(businessexpoProgress < duration) {
				window.requestAnimationFrame(businessexpoAnimateScroll);
			} else {
				cb && cb();
			}
		};

		window.requestAnimationFrame(businessexpoAnimateScroll);
	};

	// Animation curves.
	Math.easeInOutQuad = function (t, b, c, d) {
		t /= d/2;
		if(t < 1) return c/2*t*t + b;
		t--;
		return -c/2 * (t*(t-2) - 1) + b;
	};

	// Back to top.
	var businessexpoBackTop = document.querySelector('.back-to-top');
	if(businessexpoBackTop) {
		var businessexpoOffset = 300;
		var businessexpoOffsetOpacity = 1200;
		var businessexpoScrollDuration = 700;
		var businessexpoScrolling = false;
		window.addEventListener('scroll', function() {
			if(!businessexpoScrolling) {
				businessexpoScrolling = true;
				(!window.requestAnimationFrame) ? setTimeout(businessexpoCheckBackToTop, 250) : window.requestAnimationFrame(businessexpoCheckBackToTop);
			}
		});

		document.addEventListener('click', function(event) {
			if(businessexpoTargetMatches('.back-to-top')) {
				event.preventDefault();
				(!window.requestAnimationFrame) ? window.scrollTo(0, 0) : businessexpoUtil.scrollTo(0, businessexpoScrollDuration);
			}
		});
	}

	function businessexpoCheckBackToTop() {
		var businessexpoWindowTop = window.scrollY || document.documentElement.scrollTop;
		( businessexpoWindowTop > businessexpoOffset ) ? businessexpoBackTop.classList.add('back-to-top--show') : businessexpoBackTop.classList.remove('back-to-top--show', 'back-to-top--fade-out');
		( businessexpoWindowTop > businessexpoOffsetOpacity ) && businessexpoBackTop.classList.add('back-to-top--fade-out');
		businessexpoScrolling = false;
	}

})();
