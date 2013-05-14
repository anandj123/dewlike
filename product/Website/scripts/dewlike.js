$(document).ready(function () {
	$('#slideshow-div').rsfSlideshow({
    	controls: {
       		playPause: {auto: false},    //    auto-generate a play/pause control
        	previousSlide: {auto: true},    //    auto-generate a "previous slide" control
        	nextSlide: {auto: true},    //    auto-generate a "next slide" control
        	index: {auto: true}    //    auto-generate a numbered index control
    	}
	});
});

