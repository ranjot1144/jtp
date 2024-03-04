jQuery(document).ready(function ($) {
	jQuery(".navmenu").on('click', 'li', function () {
		jQuery(this).addClass("active").siblings().removeClass("active");

		$navbar_content = $(this).attr('data-myAttri');
		if ($navbar_content == 'tab-1') {
			$('#prod-section-nav #tab-1-active').show();
			$('#tab-2-active').hide();
			$('#tab-3-active').hide();
		} else if ($navbar_content == 'tab-2') {
			$('#prod-section-nav #tab-1-active').hide();
			$('#tab-2-active').show();
			$('#tab-3-active').hide();
		} else if ($navbar_content == 'tab-3') {
			$('#prod-section-nav #tab-1-active').hide();
			$('#tab-2-active').hide();
			$('#tab-3-active').show();
		}
	});


	$('tr.parent')
		.css("cursor", "pointer")
		.attr("title", "Click to expand/collapse")
		.click(function () {
			$(this).siblings('.child-' + this.id).toggle();
			$(this).find('span').text(function (_, value) {
				return value == '+' ? '-' : '+'
			});
		});
	//$('tr[@class^=child-]').hide().children('td');

});


jQuery(function ($) {
	$('.content_description').each(function () {
		var show_char = 350;
		var ellipses = "... ";
		var content = $(this).html();


		if (content.trim().length > show_char) {
			var a = content.trim().substr(3, show_char); // use 3 to avoid <p>
			var b = content.trim().substr(show_char - content.trim().length + 3);  // replace the last </p>

			var html = a + "<span class='truncated'>" + ellipses + "</span><span class='truncated' style='display:none'>" + b + "</span><a class='read-more' href='#' style='color:#F47922;'>Read more</a>";
			// wrap the a into `<p></p>` then append the read more to it
			//$(this).html('<p>' + html + '</p>');
			$(this).html(html);
		}
	});

	$(".read-more").click(function (e) {
		e.preventDefault();
		$(this).text((i, v) => v == "Read more" ? " Read Less" : "Read more"); //change here..
		$(this).closest(".content_description").find(".truncated").toggle();
	});



	/* For images */
	const loadmore = document.querySelector('.load-more');
	let currentItems = 12;
	var numLists = $('.ranges_prod').length;

	if (numLists > 12) {
		$('.showing-result').text("Showing " + currentItems + " of " + numLists + " products");

		loadmore.addEventListener('click', (e) => {
			const elementList = [...document.querySelectorAll('.image-list div.ranges_prod')];
			e.target.classList.add('show-loader');

			for (let i = currentItems; i < currentItems + 12; i++) {
				setTimeout(function () {
					e.target.classList.remove('show-loader');
					if (elementList[i]) {
						elementList[i].style.display = 'block';
					}
				}, 3000)
			}

			currentItems += 12;

			$('.showing-result').text("Showing " + currentItems + " of " + numLists + " products");

			if (currentItems >= elementList.length) {
				$('.showing-result').text("Showing " + numLists + " of " + numLists + " products");
				event.target.classList.add('loaded');
			}
		});
	}



	// var acc = document.getElementsByClassName("accordion-header");
	// var panel = document.getElementsByClassName('accordion-collapse collapse');

	// for (var i = 0; i < acc.length; i++) {
	// 	acc[i].onclick = function () {
	// 		var setClasses = !this.classList.contains('active');
	// 		setClass(acc, 'active', 'remove');
	// 		setClass(panel, 'show', 'remove');

	// 		if (setClasses) {
	// 			this.classList.toggle("active");
	// 			this.nextElementSibling.classList.toggle("show");
	// 		}
	// 	}
	// }

	// function setClass(els, className, fnName) {
	// 	for (var i = 0; i < els.length; i++) {
	// 		els[i].classList[fnName](className);
	// 	}
	// }

	var acc = document.getElementsByClassName("accordion-header");
	var panel = document.getElementsByClassName('accordion-collapse collapse');

	function setClass(els, className, fnName) {
		for (var i = 0; i < els.length; i++) {
			els[i].classList[fnName](className);
		}
	}
	$('.accordion-header').click(function () {
		var setClasses = !this.classList.contains('active');
		setClass($('.accordion-header'), 'active', 'remove');
		setClass($('.accordion-collapse'), 'show', 'remove');

		if (setClasses) {
			this.classList.toggle("active");
			this.nextElementSibling.classList.toggle("show");
		}

		// target the current element (this) for smooth scrolling
		// $('html, body').animate({
		// 	scrollTop: $(this).offset().top
		// }, 1000);
	});


	// $('.accordion-header').click(function () {
	// 	$(".accordion-collaps.collapse").removeClass('show');
	// 	var content_id = $(this).children().attr('data-bs-target');
	// 	$(content_id).toggleClass('show');


	// });


	$('.card').click(function () {
		/*let index = $(this).attr('index');
		let currCard = $('.card').eq(index)
		let currBody = $(`.card:eq(${index}) .card-body`)

		if (currBody.css('display') == 'block') {
			currBody.slideDown()
		} else {
			$('.card-body').slideUp()
			currBody.slideDown()
		}*/

		/* If wants to open all the Tabs */
		/*if (currBody.hasClass('active')) {
			currBody.slideUp()
		} else {
			currBody.slideDown()
		}
		currBody.toggleClass('active')*/
	});

	$('#search').on('keyup', function () {
		var query = $(this).val();
		$.ajax({
			url: "input_search",
			type: "GET",
			data: { "search": query },
			success: function (data) {
				$('#search_list').html(data);
			}
		})
	});

	$('.toggle_tr').click(function () {
		$(this).find('span').toggleClass('up down');

		$("#extraction_table > tbody > tr").each(function () {
			$(this).next('tr').find('td').toggleClass('padding-10');
		});

	});



	$(window).scroll(function () {
		if ($(this).scrollTop() >= $('.service-logo').offset().top) {
			$('.service-logo').addClass('bg-scroll');
		} else {
			$('.service-logo').removeClass('bg-scroll');
		}
	});

});

