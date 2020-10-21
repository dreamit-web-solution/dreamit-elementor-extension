<?php




	function modify_falticon($controls_registry){
		
		$new_add = array(
                "flaticon-24-hours"      => "flaticon-24-hours", 
                "flaticon-open-book"      => "flaticon-open-book",
                "flaticon-home"      => "flaticon-home",
                "flaticon-quote"      => "flaticon-quote",
                "flaticon-placeholder"      => "flaticon-placeholder",
                "flaticon-telephone"      => "flaticon-telephone",
                "flaticon-open-book"      => "flaticon-open-book",
                "flaticon-open-book"      => "flaticon-open-book",
                "flaticon-phone-call"      => "flaticon-phone-call",
                "flaticon-comment"      => "flaticon-comment",
                "flaticon-timetable"      => "flaticon-timetable",
                "flaticon-unlink"      => "flaticon-unlink",
                "flaticon-play-arrow"      => "flaticon-play-arrow",
                "flaticon-portfolio"      => "flaticon-portfolio",
                "flaticon-money-bag"      => "flaticon-money-bag",
                "flaticon-portfolio-1"      => "flaticon-portfolio-1",
                "flaticon-award"      => "flaticon-award",
                "flaticon-winner"      => "flaticon-winner",
                "flaticon-trophy"      => "flaticon-trophy",
                "flaticon-magnifying-glass"      => "flaticon-magnifying-glass",
                "flaticon-menu"      => "flaticon-menu",
                "flaticon-shopping-cart-1"      => "flaticon-shopping-cart-1",
                "flaticon-shopping-cart-2"      => "flaticon-shopping-cart-2",
                "flaticon-back"      => "flaticon-back",
                "flaticon-back-arrow"      => "flaticon-back-arrow",
                "flaticon-growth"      => "flaticon-growth",
                "flaticon-target"      => "flaticon-target",
                "flaticon-settings"      => "flaticon-settings",
                "flaticon-avatar"      => "flaticon-avatar",
                "flaticon-share"      => "flaticon-share",
                "flaticon-heart"      => "flaticon-heart",
                "flaticon-like"      => "flaticon-like",
                "flaticon-star"      => "flaticon-star",
                "flaticon-headphones"      => "flaticon-headphones",
                "flaticon-garbage"      => "flaticon-garbage",
                "flaticon-internet"      => "flaticon-internet",
                "flaticon-network"      => "flaticon-network",
                "flaticon-shopping-cart-3"      => "flaticon-shopping-cart-3",
                "flaticon-email"      => "flaticon-email",
                "flaticon-message"      => "flaticon-message",
                "flaticon-full-screen"      => "flaticon-full-screen",
                "flaticon-send"      => "flaticon-send",
                "flaticon-tick-inside-circle"      => "flaticon-tick-inside-circle",
                "flaticon-monitor-1"      => "flaticon-monitor-1",
                "flaticon-lock"      => "flaticon-lock",
                "flaticon-eye"      => "flaticon-eye",
                "flaticon-rocket-ship"      => "flaticon-rocket-ship",
                "flaticon-headphones-1"      => "flaticon-headphones-1",
                "flaticon-pin"      => "flaticon-pin",
                "flaticon-stopwatch"      => "flaticon-stopwatch",
                "flaticon-email-1"      => "flaticon-email-1",
                "flaticon-crown"      => "flaticon-crown",
                "flaticon-multiply"      => "flaticon-multiply",
                "flaticon-media-play-symbol"      => "flaticon-media-play-symbol",
                "flaticon-arrow-pointing-to-right"      => "flaticon-arrow-pointing-to-right",
                "flaticon-back-1"      => "flaticon-back-1",
                "flaticon-award-1"      => "flaticon-award-1",
                "flaticon-pdf"      => "flaticon-pdf",
                "flaticon-loupe"      => "flaticon-loupe",
                "flaticon-link"      => "flaticon-link",
                "flaticon-user"      => "flaticon-user",
                "flaticon-trophy-1"      => "flaticon-trophy-1",
                "flaticon-house"      => "flaticon-house",
                "flaticon-bar-chart"      => "flaticon-bar-chart",
                "flaticon-coin"      => "flaticon-coin",
                "flaticon-line-chart"      => "flaticon-line-chart",
                "flaticon-planet-earth"      => "flaticon-planet-earth",
                "flaticon-pie-chart"      => "flaticon-pie-chart",
                "flaticon-megaphone"      => "flaticon-megaphone",
                "flaticon-quote-1"      => "flaticon-quote-1",
                "flaticon-cloud"      => "flaticon-cloud",
                "flaticon-wheel"      => "flaticon-wheel",
                "flaticon-shopping-bag"      => "flaticon-shopping-bag",
                "flaticon-menu-1"      => "flaticon-menu-1",
                "flaticon-big-anchor"      => "flaticon-big-anchor",
                "flaticon-flash"      => "flaticon-flash",
                "flaticon-add"      => "flaticon-add",
                "flaticon-increase-size-option"      => "flaticon-increase-size-option",
                "flaticon-double-angle-pointing-to-right"      => "flaticon-double-angle-pointing-to-right",
                "flaticon-long-arrow-pointing-to-left"      => "flaticon-long-arrow-pointing-to-left",
                "flaticon-long-arrow-pointing-to-the-right"      => "flaticon-long-arrow-pointing-to-the-right",
                "flaticon-gallery"      => "flaticon-gallery",
                "flaticon-right-arrow"      => "flaticon-right-arrow",
                "flaticon-right-arrow-forward"      => "flaticon-right-arrow-forward",
                "flaticon-success"      => "flaticon-success",
                "flaticon-paper-plane"      => "flaticon-paper-plane",
                "flaticon-high-volume"      => "flaticon-high-volume",
                "flaticon-left-arrow"      => "flaticon-left-arrow",
                "flaticon-go-back-left-arrow"      => "flaticon-go-back-left-arrow",
                "flaticon-file"      => "flaticon-file",
                "flaticon-share-symbol"      => "flaticon-share-symbol",
                "flaticon-favourites-filled-star-symbol"      => "flaticon-favourites-filled-star-symbol",
                "flaticon-star-1"      => "flaticon-star-1",
                "flaticon-gift"      => "flaticon-gift",
                "flaticon-tick"      => "flaticon-tick",
                "flaticon-email-2"      => "flaticon-email-2",
                "flaticon-placeholder-1"      => "flaticon-placeholder-1",
                "flaticon-up-arrow"      => "flaticon-up-arrow",
                "flaticon-angle-arrow-down"      => "flaticon-angle-arrow-down",
                "flaticon-right-arrow-1"      => "flaticon-right-arrow-1",
                "flaticon-placeholder-2"      => "flaticon-placeholder-2",
                "flaticon-24-hours-phone-service"      => "flaticon-24-hours-phone-service",
                "flaticon-home-page"      => "flaticon-home-page",
                "flaticon-safe"      => "flaticon-safe",
                "flaticon-zoom-increasing-symbol"      => "flaticon-zoom-increasing-symbol",
                "flaticon-folder"      => "flaticon-folder",
                "flaticon-comment-1"      => "flaticon-comment-1",
                "flaticon-paper-plane-1"      => "flaticon-paper-plane-1",
                "flaticon-24-hours-1"      => "flaticon-24-hours-1",
                "flaticon-edit"      => "flaticon-edit",
                "flaticon-clock"      => "flaticon-clock",
                "flaticon-hand"      => "flaticon-hand",
                "flaticon-plus-symbol"      => "flaticon-plus-symbol",
                "flaticon-substract"      => "flaticon-substract",
                "flaticon-pdf-file-format-symbol"      => "flaticon-pdf-file-format-symbol",
                "flaticon-edit-1"      => "flaticon-edit-1",
                "flaticon-user-1"      => "flaticon-user-1",
                "flaticon-hand-shake"      => "flaticon-hand-shake",
                "flaticon-startup"      => "flaticon-startup",
                "flaticon-checked"      => "flaticon-checked",
                "flaticon-email-3"      => "flaticon-email-3",
                "flaticon-24-hours-3"      => "flaticon-24-hours-3",
                "flaticon-menu-2"      => "flaticon-menu-2",
                "flaticon-menu-3"      => "flaticon-menu-3",
                "flaticon-search"      => "flaticon-search",
                "flaticon-plus"      => "flaticon-plus",
                "flaticon-maps-and-flags"      => "flaticon-maps-and-flags",
                "flaticon-email-4"      => "flaticon-email-4",
                "flaticon-user-3"      => "flaticon-user-3",
                "flaticon-user-2"      => "flaticon-user-2",
                "flaticon-home-1"      => "flaticon-home-1",
                "flaticon-home-2"      => "flaticon-home-2",
                "flaticon-shopping-cart-4"      => "flaticon-shopping-cart-4",
                "flaticon-bar-chart-1"      => "flaticon-bar-chart-1",
                "flaticon-suitcase"      => "flaticon-suitcase",
                "flaticon-shopping-bag-1"      => "flaticon-shopping-bag-1",
                "flaticon-world"      => "flaticon-world",
                "flaticon-agreement"      => "flaticon-agreement",
                "flaticon-up-arrow-1"      => "flaticon-up-arrow-1",
                "flaticon-right-arrow-2"      => "flaticon-right-arrow-2",
                "flaticon-left-arrow-2"      => "flaticon-left-arrow-2",
                "flaticon-call"      => "flaticon-call",
                "flaticon-envelope"      => "flaticon-envelope",
                "flaticon-diamond"      => "flaticon-diamond",
                "flaticon-heart-1"      => "flaticon-heart-1",
                "flaticon-down-arrow"      => "flaticon-down-arrow",
                "flaticon-support"      => "flaticon-support",
                "flaticon-sketch"      => "flaticon-sketch",
                "flaticon-comment-2"      => "flaticon-comment-2",
                "flaticon-chat"      => "flaticon-chat",
                "flaticon-right-quote-sign"      => "flaticon-right-quote-sign",
                "flaticon-quotation-mark"      => "flaticon-quotation-mark",
                "flaticon-blocks-with-angled-cuts"      => "flaticon-blocks-with-angled-cuts",
                "flaticon-straight-quotes"      => "flaticon-straight-quotes",
                "flaticon-percentage"      => "flaticon-percentage",
                "flaticon-left-arrow-3"      => "flaticon-left-arrow-3",
                "flaticon-right-arrow-3"      => "flaticon-right-arrow-3",
                "flaticon-down-arrow-1"      => "flaticon-down-arrow-1",
                "flaticon-wallet"      => "flaticon-wallet",
                "flaticon-reward"      => "flaticon-reward",
                "flaticon-shopping-cart"      => "flaticon-shopping-cart",
                "flaticon-technical-support"      => "flaticon-technical-support",
                "flaticon-responsive"      => "flaticon-responsive",
                "flaticon-monitor"      => "flaticon-monitor",
                "flaticon-coding"      => "flaticon-coding",
                "flaticon-laptop"      => "flaticon-laptop",
                "flaticon-coding-1"      => "flaticon-coding-1",
                "flaticon-mobile-app"      => "flaticon-mobile-app",
                "flaticon-computer"      => "flaticon-computer",
                "flaticon-web"      => "flaticon-web",
                "flaticon-monitor-2"      => "flaticon-monitor-2",
                "flaticon-human-resources"      => "flaticon-human-resources",
                "flaticon-coding-2"      => "flaticon-coding-2",
                "flaticon-android"      => "flaticon-android",
                "flaticon-apple"      => "flaticon-apple",
                "flaticon-iot"      => "flaticon-iot",
                "flaticon-smartband"      => "flaticon-smartband",
                "flaticon-tv"      => "flaticon-tv",
                "flaticon-html"      => "flaticon-html",
                "flaticon-bootstrap"      => "flaticon-bootstrap",
                "flaticon-css"      => "flaticon-css",
                "flaticon-php"      => "flaticon-php",
                "flaticon-java"      => "flaticon-java",
                "flaticon-dashboard"      => "flaticon-dashboard",
                "flaticon-coding-3"      => "flaticon-coding-3",
                "flaticon-design"      => "flaticon-design",
                "flaticon-web-browser"      => "flaticon-web-browser",
                "flaticon-network-1"      => "flaticon-network-1",
                "flaticon-24-hours-2"      => "flaticon-24-hours-2",
                "flaticon-seo"      => "flaticon-seo",
                "flaticon-web-programming"      => "flaticon-web-programming",
                "flaticon-web-1"      => "flaticon-web-1",
                "flaticon-designer"      => "flaticon-designer",
                "flaticon-designer-1"      => "flaticon-designer-1",
		);

		$icons = $controls_registry->get_control( 'icon' )->get_settings( 'options' );

		$controls_registry->get_control( 'icon' )->set_settings( 'options', array_merge( $icons, $new_add ) );
	}
	add_action( 'elementor/controls/controls_registered', 'modify_falticon' );