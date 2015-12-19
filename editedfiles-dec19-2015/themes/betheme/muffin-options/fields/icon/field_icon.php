<?php
class MFN_Options_icon extends MFN_Options{	
	
	private $icons = array(
		'icon-acrobat',
		'icon-address',
		'icon-adjust',
		'icon-aim',
		'icon-air',
		'icon-alert',
		'icon-amazon',
		'icon-android',
		'icon-angellist',
		'icon-appnet',
		'icon-appstore',
		'icon-archive',
		'icon-arrow-combo',
		'icon-arrows-ccw',
		'icon-attach',
		'icon-attach-line',
		'icon-attention',
		'icon-back',
		'icon-back-in-time',
		'icon-bag',
		'icon-basket',
		'icon-battery',
		'icon-beaker-line',
		'icon-behance',
		'icon-bell',
		'icon-bitbucket',
		'icon-bitcoin',
		'icon-block',
		'icon-blogger',
		'icon-book',
		'icon-book-open',
		'icon-bookmark',
		'icon-bookmarks',
		'icon-box',
		'icon-briefcase',
		'icon-brush',
		'icon-bucket',
		'icon-buffer',
		'icon-calendar',
		'icon-calendar-line',
		'icon-call',
		'icon-camera',
		'icon-camera-line',
		'icon-cancel',
		'icon-cancel-circled',
		'icon-cancel-squared',
		'icon-cart',
		'icon-cc',
		'icon-cc-by',
		'icon-cc-nc',
		'icon-cc-nc-eu',
		'icon-cc-nc-jp',
		'icon-cc-nd',
		'icon-cc-pd',
		'icon-cc-remix',
		'icon-cc-sa',
		'icon-cc-share',
		'icon-cc-zero',
		'icon-ccw',
		'icon-cd',
		'icon-cd-line',
		'icon-chart-area',
		'icon-chart-bar',
		'icon-chart-line',
		'icon-chart-pie',
		'icon-chat',
		'icon-check',
		'icon-chrome',
		'icon-clipboard',
		'icon-clock',
		'icon-clock-line',
		'icon-cloud',
		'icon-cloud-line',
		'icon-cloud-thunder',
		'icon-cloudapp',
		'icon-code',
		'icon-cog',
		'icon-cog-line',
		'icon-comment-empty-fa',
		'icon-comment-fa',
		'icon-comment-line',
		'icon-compass',
		'icon-credit-card',
		'icon-cup',
		'icon-cup-line',
		'icon-cw',
		'icon-database',
		'icon-database-line',
		'icon-db-shape',
		'icon-delicious',
		'icon-desktop-line',
		'icon-diamond-line',
		'icon-digg',
		'icon-direction',
		'icon-disqus',
		'icon-doc',
		'icon-doc-landscape',
		'icon-doc-line',
		'icon-doc-text',
		'icon-doc-text-inv',
		'icon-docs',
		'icon-dot',
		'icon-dot-2',
		'icon-dot-3',
		'icon-down',
		'icon-down-bold',
		'icon-down-circled',
		'icon-down-dir',
		'icon-down-open',
		'icon-down-open-big',
		'icon-down-open-mini',
		'icon-down-thin',
		'icon-download',
		'icon-dribbble',
		'icon-dribbble-circled',
		'icon-drive',
		'icon-dropbox',
		'icon-droplet',
		'icon-drupal',
		'icon-duckduckgo',
		'icon-dwolla',
		'icon-ebay',
		'icon-email',
		'icon-erase',
		'icon-eventasaurus',
		'icon-eventbrite',
		'icon-eventful',
		'icon-evernote',
		'icon-export',
		'icon-eye',
		'icon-eye-line',
		'icon-facebook',
		'icon-facebook-circled',
		'icon-facebook-squared',
		'icon-fast-backward',
		'icon-fast-forward',
		'icon-feather',
		'icon-fire-line',
		'icon-fivehundredpx',
		'icon-flag',
		'icon-flash',
		'icon-flashlight',
		'icon-flattr',
		'icon-flickr',
		'icon-flickr-circled',
		'icon-flight',
		'icon-floppy',
		'icon-flow-branch',
		'icon-flow-cascade',
		'icon-flow-line',
		'icon-flow-parallel',
		'icon-flow-tree',
		'icon-folder',
		'icon-food-line',
		'icon-forrst',
		'icon-forward',
		'icon-foursquare',
		'icon-gauge',
		'icon-github',
		'icon-github-circled',
		'icon-globe',
		'icon-globe-line',
		'icon-gmail',
		'icon-google',
		'icon-google-circles',
		'icon-googleplay',
		'icon-gowalla',
		'icon-gplus',
		'icon-gplus-circled',
		'icon-graduation-cap',
		'icon-graduation-cap-line',
		'icon-grooveshark',
		'icon-guest',
		'icon-hackernews',
		'icon-heart-empty-fa',
		'icon-heart-fa',
		'icon-heart-line',
		'icon-help',
		'icon-help-circled',
		'icon-home',
		'icon-hourglass',
		'icon-html5',
		'icon-ie',
		'icon-inbox',
		'icon-inbox-line',
		'icon-infinity',
		'icon-info',
		'icon-info-circled',
		'icon-instagram',
		'icon-install',
		'icon-instapaper',
		'icon-intensedebate',
		'icon-itunes',
		'icon-key',
		'icon-key-line',
		'icon-keyboard',
		'icon-klout',
		'icon-lamp',
		'icon-language',
		'icon-lanyrd',
		'icon-lastfm',
		'icon-lastfm-circled',
		'icon-layout',
		'icon-leaf',
		'icon-left',
		'icon-left-bold',
		'icon-left-circled',
		'icon-left-dir',
		'icon-left-open',
		'icon-left-open-big',
		'icon-left-open-mini',
		'icon-left-thin',
		'icon-lego',
		'icon-level-down',
		'icon-level-up',
		'icon-lifebuoy',
		'icon-light-down',
		'icon-light-up',
		'icon-lightbulb-line',
		'icon-link',
		'icon-linkedin',
		'icon-linkedin-circled',
		'icon-list',
		'icon-list-add',
		'icon-lkdto',
		'icon-location',
		'icon-location-line',
		'icon-lock',
		'icon-lock-line',
		'icon-lock-open',
		'icon-login',
		'icon-logo-db',
		'icon-logout',
		'icon-loop',
		'icon-macstore',
		'icon-magnet',
		'icon-mail',
		'icon-mail-line',
		'icon-map',
		'icon-meetup',
		'icon-megaphone',
		'icon-megaphone-line',
		'icon-menu',
		'icon-mic',
		'icon-minus',
		'icon-minus-circled',
		'icon-minus-squared',
		'icon-mixi',
		'icon-mobile',
		'icon-mobile-line',
		'icon-money-line',
		'icon-monitor',
		'icon-moon',
		'icon-mouse',
		'icon-music',
		'icon-music-line',
		'icon-mute',
		'icon-myspace',
		'icon-network',
		'icon-newspaper',
		'icon-ninetyninedesigns',
		'icon-note',
		'icon-note-beamed',
		'icon-note-line',
		'icon-openid',
		'icon-opentable',
		'icon-palette',
		'icon-paper-plane',
		'icon-paper-plane-line',
		'icon-params-line',
		'icon-pause',
		'icon-paypal',
		'icon-pencil',
		'icon-pencil-line',
		'icon-phone',
		'icon-photo-line',
		'icon-picasa',
		'icon-picture',
		'icon-pinboard',
		'icon-pinterest',
		'icon-pinterest-circled',
		'icon-plancast',
		'icon-play',
		'icon-plurk',
		'icon-plus',
		'icon-plus-circled',
		'icon-plus-squared',
		'icon-pocket',
		'icon-podcast',
		'icon-popup',
		'icon-posterous',
		'icon-print',
		'icon-progress-0',
		'icon-progress-1',
		'icon-progress-2',
		'icon-progress-3',
		'icon-publish',
		'icon-qq',
		'icon-quora',
		'icon-quote',
		'icon-rdio',
		'icon-rdio-circled',
		'icon-record',
		'icon-reddit',
		'icon-renren',
		'icon-reply',
		'icon-reply-all',
		'icon-resize-full',
		'icon-resize-small',
		'icon-retweet',
		'icon-right',
		'icon-right-bold',
		'icon-right-circled',
		'icon-right-dir',
		'icon-right-open',
		'icon-right-open-big',
		'icon-right-open-mini',
		'icon-right-thin',
		'icon-rocket',
		'icon-rss',
		'icon-scribd',
		'icon-search',
		'icon-search-line',
		'icon-share',
		'icon-shareable',
		'icon-shop-line',
		'icon-shuffle',
		'icon-signal',
		'icon-sina-weibo',
		'icon-skype',
		'icon-skype-circled',
		'icon-smashing',
		'icon-smashmag',
		'icon-songkick',
		'icon-sound',
		'icon-sound-line',
		'icon-soundcloud',
		'icon-spotify',
		'icon-spotify-circled',
		'icon-stackoverflow',
		'icon-star',
		'icon-star-empty',
		'icon-star-line',
		'icon-statusnet',
		'icon-steam',
		'icon-stop',
		'icon-stripe',
		'icon-stumbleupon',
		'icon-stumbleupon-circled',
		'icon-suitcase',
		'icon-sweden',
		'icon-switch',
		'icon-t-shirt-line',
		'icon-tag',
		'icon-tag-line',
		'icon-tape',
		'icon-target',
		'icon-thermometer',
		'icon-thumbs-down',
		'icon-thumbs-up',
		'icon-thumbs-up-line',
		'icon-ticket',
		'icon-to-end',
		'icon-to-start',
		'icon-tools',
		'icon-traffic-cone',
		'icon-trash',
		'icon-trash-line',
		'icon-trophy',
		'icon-truck-line',
		'icon-tumblr',
		'icon-tumblr-circled',
		'icon-tv-line',
		'icon-twitter',
		'icon-twitter-circled',
		'icon-up',
		'icon-up-bold',
		'icon-up-circled',
		'icon-up-dir',
		'icon-up-open',
		'icon-up-open-big',
		'icon-up-open-mini',
		'icon-up-thin',
		'icon-upload',
		'icon-upload-cloud',
		'icon-user',
		'icon-user-add',
		'icon-user-line',
		'icon-users',
		'icon-vcard',
		'icon-viadeo',
		'icon-video',
		'icon-videocam-line',
		'icon-vimeo',
		'icon-vimeo-circled',
		'icon-vk',
		'icon-vkontakte',
		'icon-volume',
		'icon-w3c',
		'icon-wallet-line',
		'icon-water',
		'icon-weibo',
		'icon-wikipedia',
		'icon-window',
		'icon-windows',
		'icon-wordpress',
		'icon-xing',
		'icon-yahoo',
		'icon-yelp',
		'icon-youtube',
	);
	
	/**
	 * Constructor
	 */
	function __construct( $field = array(), $value ='', $parent = NULL ){
		
		if( is_object($parent) ){
			parent::__construct($parent->sections, $parent->args, $parent->extra_tabs);
		}
		
		$this->field = $field;
		$this->value = $value;
				
	}
	
	/**
	 * Render
	 */
	function render( $meta = false ){
		
		$value = esc_attr( $this->value );
		
		// class ----------------------------------------------------	
		if( isset( $this->field['class']) ){
			$class = $this->field['class'];
		} else {
			$class = 'regular-text';
		}
		
		// name -----------------------------------------------------	
		if( $meta == 'new' ){
			
			// builder new
			$name = 'data-name="'. $this->field['id'] .'"';
			
		} elseif( $meta ){
			
			// page mata & builder existing items
			$name = 'name="'. $this->field['id'] .'"';
			
		} else {	
			
			// theme options
			$name = 'name="'. $this->args['opt_name'] .'['. $this->field['id'] .']"';
	
		}

		// echo -----------------------------------------------------
		echo '<div class="mfn-icon-field">';
		
			echo '<div class="mfn-icon-header">';
			
				echo '<input type="text" '. $name .' value="'. $value .'" class="mfn-icon-input '.$class.'"/>';
				
				if( isset($this->field['desc']) && !empty($this->field['desc']) ){
					echo ' <span class="description '.$class.'">'.$this->field['desc'].'</span>';
				}
				
			echo '</div>';
			
			echo '<div class="mfn-icon-select">';
			
				foreach( $this->icons as $icon ){
					$iclass = ( $value == $icon ) ? ' active' : '';
					echo '<span class="mfn-icon'. $iclass .'" data-rel="'. $icon .'"><i class="'. $icon .'"></i></span>';
				}
				
			echo '</div>';
			
		echo '</div>';
	}
	
	/**
	 * Enqueue Function.
	*/
	function enqueue(){	
		wp_enqueue_script( 'mfn-opts-field-icos-js', MFN_OPTIONS_URI.'fields/icon/field_icon.js', array('jquery'), time(), true );	
	}
	
}
?>