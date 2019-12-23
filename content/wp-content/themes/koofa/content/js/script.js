
function DgxDonateSubscribeFormEvents()
{
	$('#dgx-donate-designated').click(function() {
		DgxDonateUpdateDesignatedDiv();
	});

	$('#dgx-donate-tribute').click(function() {
		DgxDonateUpdateTributeDiv();
	});

	$( '#dgx-donate-employer' ).click( function() {
		DgxDonateUpdateEmployerDiv();
	} );
}

function DgxDonateUpdateDesignatedDiv()
{
	if ( $('#dgx-donate-designated:checked').length > 0 )
	{
       	$(".dgx-donate-form-designated-box").show('fast');
   	}
   	else
   	{
       	$(".dgx-donate-form-designated-box").hide('fast');
   	}
}

function DgxDonateUpdateTributeDiv()
{
	if ( $('#dgx-donate-tribute:checked').length > 0 )
	{
       	$(".dgx-donate-form-tribute-box").show('fast');
   	}
   	else
   	{
       	$(".dgx-donate-form-tribute-box").hide('fast');
   	}
}

function DgxDonateUpdateEmployerDiv() {
	if ( $( '#dgx-donate-employer:checked' ).length > 0 ) {
		$( ".dgx-donate-form-employer-box" ).show( 'fast' );
	} else {
		$( ".dgx-donate-form-employer-box" ).hide( 'fast' );
	}
}

function DgxDonateAddOnClickOther()
{
	$('#dgx-donate-other-input').focus(function() {
		$('input[id=dgx-donate-other-radio]').attr('checked', 'checked');
	});
}

$(document).ready(function() {

	// Hook up listener for checkboxes on expanders
	DgxDonateSubscribeFormEvents();

	// Make sure form divs like tribute box match their checkbox state
	DgxDonateUpdateDesignatedDiv();
	DgxDonateUpdateTributeDiv();
	DgxDonateUpdateEmployerDiv();
	// Hook up special handling for the OTHER donation amount box
	DgxDonateAddOnClickOther();

    $('#hp-upcoming-event').parallax("50%", 0.1);
    $('#hp-us-capitol').parallax("50%", 0.1);
    var heightHeader = $('#masthead').height();
    heightHeader2 = "-" + (heightHeader + 100);
    heightHeader3 = "-" + (heightHeader + 350);
    var screenRes = $(window).width();
    var not_safari = true;
    if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
        not_safari = false;
    }
    if (screenRes > 991 && not_safari && $('body').hasClass('showStickyNavigation')) {
        var waypoint = new Waypoint({
            element: document.getElementById('masthead'),
            handler: function (direction) {
                $('#site-branding').toggleClass('make-it-sticky');
            },
            offset: heightHeader2
        });
        var waypoint = new Waypoint({
            element: document.getElementById('masthead'),
            handler: function (direction) {
                $('#site-branding').toggleClass('put-it-on-screen');
            },
            offset: heightHeader3
        })
    }
    wow = new WOW({
            boxClass: 'tbWow',
            animateClass: 'animated',
            offset: 0,
            mobile: false
        });
    wow.init();

    $('.tb-posts-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 600,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});

