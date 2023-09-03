document.addEventListener('DOMContentLoaded', function () {
	let getCoords = (elem) => {
		let box = elem.getBoundingClientRect();
		return {
			top: box.top + window.scrollY,
			right: box.right + window.scrollX,
			bottom: box.bottom + window.scrollY,
			left: box.left + window.scrollX,
			height: box.height,
		};
	},
	isOnScreen = (elem) => {
		let coefficient;
		window.innerWidth <= 768 ? coefficient = .75 : coefficient = .9;
		return window.scrollY > (getCoords(elem).top - window.innerHeight / coefficient);
	},
	isMobile = () => {
		return window.outerWidth <= 767;
	},
	isExist = (selector) => {
		return document.querySelector(selector);
	}

	if (window.outerWidth <= 1140) { //ХЭДЕР НА ЭКРАНАХ МЕНЬШЕ 1140px
		let mainHeader = document.querySelector('.main-header'),
			openBurger = document.querySelector('.mobile .container__menu'),
			openMenu = document.querySelector('.main-menu'),
			openBackground = document.querySelector('.main-background'),
			menuItem = document.querySelectorAll('.menu__item');

		//ОТКРЫТИЕ БУРГЕР-МЕНЮ
		openBurger.onclick = function (e) {
			e.preventDefault();
			openBurger.classList.toggle('active');
			openMenu.classList.toggle('active');
			openBackground.classList.toggle('active');
			if (window.outerWidth <= 767) {
				document.documentElement.classList.toggle('no-scroll');
			}
			if (openMenu.classList.contains('active')) {
				openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
			} else {
				openMenu.style.top = -1000 + "px";
			}
		};

		//НАЖАТИЕ НА БЭКГРАУНД
		openBackground.onclick = function (e) {
			e.preventDefault();
			openBurger.classList.remove('active');
			openMenu.classList.remove('active');
			openBackground.classList.remove('active');
			if (window.outerWidth <= 767) {
				document.documentElement.classList.remove('no-scroll');
			}
			if (openMenu.classList.contains('active')) {
				openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
			} else {
				openMenu.style.top = -1000 + "px";
			}
		};

		//ПОВЕДЕНИЕ ПРИ НАЖАТИИ НА ПУНКТ МЕНЮ
		menuItem.forEach(function (element) {
			element.onclick = function () {
				openBurger.classList.remove('active');
				openMenu.classList.remove('active');
				openBackground.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (openMenu.classList.contains('active')) {
					openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
				} else {
					openMenu.style.top = -1000 + "px";
				}
			};
		});

		//ПОВЕДЕНИЕ ХЭДЕРА И МЕНЮ ПРИ СКРОЛЛЕ
		let prevScrollpos = window.scrollY;

		window.addEventListener('scroll', function () {
			let currentScrollPos = window.scrollY;

			if (window.scrollY <= 2) {
				mainHeader.classList.remove('hide');
				mainHeader.classList.remove('no-hide');
				openBurger.classList.remove('active');
				openMenu.classList.remove('active');
				openBackground.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (openMenu.classList.contains('active')) {
					openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
				} else {
					openMenu.style.top = -1000 + "px";
				}
			} else if (prevScrollpos > currentScrollPos) {
				mainHeader.classList.add('no-hide');
				mainHeader.classList.remove('hide');
				openBurger.classList.remove('active');
				openMenu.classList.remove('active');
				openBackground.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (openMenu.classList.contains('active')) {
					openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
				} else {
					openMenu.style.top = -1000 + "px";
				}
			} else {
				mainHeader.classList.add('hide');
				mainHeader.classList.remove('no-hide');
				openBurger.classList.remove('active');
				openMenu.classList.remove('active');
				openBackground.classList.remove('active');
				if (window.outerWidth <= 767) {
					document.documentElement.classList.remove('no-scroll');
				}
				if (openMenu.classList.contains('active')) {
					openMenu.style.top = window.scrollY + mainHeader.clientHeight + "px";
				} else {
					openMenu.style.top = -1000 + "px";
				}
			}
			prevScrollpos = currentScrollPos;
		});
	} if (isExist('.home-page')) { //ГЛАВНАЯ СТРАНИЦА
		//СЛАЙДЕР ПАРТНЕРОВ
		var swiperPartners = new Swiper(".swiper-partners", {
			slidesPerView: 2,
			allowTouchMove: 'false',
			breakpoints: {
				767: {
					slidesPerView: 4,
				},
				1024: {
					slidesPerView: 5,
				},
			},
			navigation: {
				nextEl: ".swiper-next",
				prevEl: ".swiper-prev",
			},
		});

		if (window.outerWidth > 767) {
			const cardBlocks = document.querySelectorAll(".paralaxCard");

			cardBlocks.forEach((cardBlock) => {
				cardBlock.style.paddingBottom = `${Math.max(cardBlock.children.length, 28)}em`;

				Array.from(cardBlock.children).forEach(
					(card, i) => {
						card.style.marginBottom = `-120px`;
						card.style.transform = `translateY(${i * 7}em)`;
					}
				);
			});
		}

		window.addEventListener('load', function () {

			//ЗАПРЕТ НА СИМВОЛЫ В ФОРМЕ ОБРАТНОЙ СВЯЗИ
			document.querySelectorAll( 'input[name=your-name]' ).forEach( function ( input ) {
				input.addEventListener( 'input', function () {
					this.value = this.value.replace( /[^a-zA-Zа-яА-Я\s]/g, '' );
				} );
			} );

			document.querySelectorAll( 'input[name=your-phone]' ).forEach( function ( input ) {
				input.addEventListener( 'input', function () {
					this.value = this.value.replace( /[^\d()+-]/g, '' );
				} );
			} );

			//ВЫВОД ПОПАПА УСПЕШНОЙ ОТПРАВКИ ИЛИ ОШИБКИ
			let wpcf7 = document.querySelectorAll( '.wpcf7' );
			for ( let form of wpcf7 ) {
				form.addEventListener( 'wpcf7mailsent', function () {
					$.magnificPopup.close();
					$.magnificPopup.open( {
						type:'inline',
						items:{
							src:'.popup__sent',
						},
						fixedContentPos:true,
						overflow:'auto',
						callbacks:{
							open: function () {
								if (window.matchMedia('(min-width: 767px)').matches) {
									document.querySelector( 'html' ).style.overflow = 'auto';
									document.querySelector( 'html' ).style.marginRight = 'unset';
								}
							},
							close: function () {
								document.querySelector( 'html' ).style.overflow = 'auto';
							},
						},
					} );
				} );
				form.addEventListener( 'wpcf7mailfailed', function () {
					$.magnificPopup.close();
					$.magnificPopup.open( {
						type:'inline',
						items:{
							src:'.popup__failed',
						},
						fixedContentPos:true,
						overflow:'auto',
						callbacks:{
							open: function () {
								if (window.matchMedia('(min-width: 767px)').matches) {
									document.querySelector( 'html' ).style.overflow = 'auto';
									document.querySelector( 'html' ).style.marginRight = 'unset';
								}
							},
							close: function () {
								document.querySelector( 'html' ).style.overflow = 'auto';
							},
						},
					} );
				} );
			}
		});
	} if (isExist('.news-page')) {
		// ПОКАЗАТЬ ЕЩЕ НОВОСТИ
		jQuery( '#more-news' ).on( "click", function ( e ) {
			e.preventDefault();
			let loadMore = jQuery( this ),
				currentPage = loadMore.attr( 'data-current-page' );
			loadMore.text( 'Загрузка...' );

			const data = {
				"action":"load_more-news",
				"query":JSON.stringify( loadMore.data( "query" ) ),
				"page":currentPage,
			}

			jQuery.ajax( {
				url:"/wp-admin/admin-ajax.php",
				data:data,
				type:"POST",
				success:
					function ( data ) {
						if ( data ) {
							loadMore.html( "Загрузить ещё" );
							loadMore.prev().append( data );

							currentPage++;
							loadMore.attr( 'data-current-page', currentPage.toString() );

							if ( currentPage === parseInt( loadMore.attr( "data-max-pages" ) ) ) {
								loadMore.remove();
							}
						} else {
							loadMore.remove();
						}
					},
				error:function ( jqXHR, status, error ) {
					console.log( jqXHR + '; ' + status + '; ' + error );
				}
			} );
		} );
	} if (isExist('.default-page')) {
		console.log('123')
		let galItem = document.querySelectorAll( '.wp-block-gallery.columns-2 .wp-block-image' );
		galItem.forEach( e => {
			src = e.querySelector( 'img' ).getAttribute( 'data-src-webp' );
			org_html = e.innerHTML;
			new_html = "<a href='" + src + "'>" + org_html + "</a>";
			e.innerHTML = new_html;
		} );

		// ДЕЛАЕМ ПОПАП ГАЛЛЕРЕИ-2
		$( '.wp-block-gallery.columns-2' ).each( function () {
			$( this ).magnificPopup( {
				delegate:'a',
				type:'image',
				gallery:{
					enabled:true
				},
				fixedContentPos:true,
				overflowY:'auto',
				callbacks:{
					open:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
						document.querySelector( 'html' ).style.marginRight = 'unset';
					},
					close:function () {
						document.querySelector( 'html' ).style.overflow = 'auto';
					},
				},
			} );
		} );

		//ОБОРАЧИВАЕМ БЛОК ГАЛЛЕРЕИ-1 В СВАЙПЕР
		let galleryElements = document.querySelectorAll( '.wp-block-gallery.columns-1' );
		galleryElements.forEach( function ( element ) {
			element.classList.add( 'swiper', 'swiper-default' );
		} );

		let imageElements = document.querySelectorAll( '.wp-block-gallery.columns-1 .wp-block-image' );
		imageElements.forEach( function ( element ) {
			element.classList.add( 'swiper-slide' );
		} );

		let wrapperElement = document.createElement( 'div' );
		wrapperElement.classList.add( 'swiper-wrapper' );

		let slideElements = document.querySelectorAll( '.swiper-slide' );
		slideElements.forEach( function ( element ) {
			wrapperElement.appendChild( element );
		} );

		let firstGalleryElement = document.querySelector( '.wp-block-gallery.columns-1' );
		firstGalleryElement.appendChild( wrapperElement );

		let navBtnElement = document.createElement( 'div' );
		navBtnElement.classList.add( 'swiper-nav' );

		let prevBtnElement = document.createElement( 'div' );
		prevBtnElement.classList.add( 'nav-prev' );
		prevBtnElement.innerHTML = '<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
			'<circle cx="25" cy="25" r="25" fill="#279DD9"/>\n' +
			'<path d="M28 31L22 25L28 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
			'</svg>\n';

		let nextBtnElement = document.createElement( 'div' );
		nextBtnElement.classList.add( 'nav-next' );
		nextBtnElement.innerHTML = '<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">\n' +
			'<circle cx="25" cy="25" r="25" transform="rotate(-180 25 25)" fill="#279DD9"/>\n' +
			'<path d="M22 19L28 25L22 31" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>\n' +
			'</svg>\n';

		navBtnElement.appendChild( prevBtnElement );
		navBtnElement.appendChild( nextBtnElement );

		firstGalleryElement.insertBefore( navBtnElement, wrapperElement.nextSibling );

		let swiper = new Swiper( ".swiper-default", {
			navigation:{
				nextEl:".nav-next",
				prevEl:".nav-prev",
			},
		} );
	}
});