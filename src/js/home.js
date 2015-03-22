var Home = {};

(function(){
	Home.setup = function() {
		// Setting up navigation
		Navline.setup();
		setup_teaser();

		Navline.select(Main.landingView.meta, true);

		_setup_about_tips();
		_setup_showcases_menu();
	};

	// Teaserline
	var _teaserLine = $(".teaserline-home.top"),
		_teaserTag = $(".teaserline-tag-about"),
		_ttHeight = _teaserTag[0].offsetHeight,
		_ttMinY = parseInt(_teaserTag[0].offsetHeight / -2, 10) - 3,
		_ttMaxY = parseInt((_teaserLine[0].offsetHeight - _ttHeight) / 2, 10) - _ttMinY,
		_wasPlaced;

	function setup_teaser() {
		// Initial peeking position
		_teaserTag.translate(0, _ttMinY).find(".teaserline-tag").addClass("attention");

		Main.hook("scroll", function hook_scroll_teaser() {
			if (_wasPlaced) { return; }

			var step = window.scrollY / (Main.viewport.pageScrollHeight - Main.viewport.windowHeight);

			// Marking tag as placed so it won't move anymore
			if (step === 1) {
				_wasPlaced = true;
				setTimeout(function se_teaser_ring() {
					_teaserTag.find(".teaserline-tag").removeClass("attention");
					$(".about-image-ring").addClass("ping");

					_.send_analytics("about", "reveal", "");
				}, 50);
			}

			_teaserTag.translate(0, _ttMaxY * step + _ttMinY);
		});
	}

	// About tips
	function _setup_about_tips() {
		Overlays.hook_tip(".about-job dd.previously", {
			layout: "top",
			layoutSecondary: "right",
			horizontalOffset: -25,
			text: "Acquired by Revizer"
		});
		Overlays.hook_tip(".about-image img", {
			layout: "right",
			text: "(I'm no pilot)"
		});
	}

	function _setup_showcases_menu() {
		$(".strip-menu-button").on("click", function() {
			var menu = document.querySelector(".showcases-menu");

			$([ this, menu ]).toggleClass("active");
		});

		$(".showcases-menu .filter-item").on("click", function() {
			$(".showcases-menu .filter-item.active").removeClass("active");
			$(this).addClass("active");

			Showcases.filter_collection("scope", this.getAttribute("data-value"));
		});
	}
})();