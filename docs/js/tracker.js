jQuery(function($) {
    // Debug flag
    var debugMode = false;

    // Default time delay before checking location
    var callBackTime = 0;

    // # px before tracking a reader
    var readerLocation = 0;

    // Set some flags for tracking & execution
    var timer = 0;
    var scroller = false;

    var endContent1 = false;
    var endContent2 = false;
    var endContent3 = false;
    var endContent4 = false;

    var didComplete = false;

    // Set some time variables to calculate reading time
    var startTime = new Date();
    var beginning = startTime.getTime();
    var totalTime = 0;

    // Track the aticle load
    if (!debugMode) {
        _gaq.push(['_trackEvent', 'Reading', 'ArticleLoaded', '', , true]);
    }



    function offsetPosition(element) {
        if(typeof element !=="undefined") {
            var offsetTop = 0;
            do {
                offsetTop  += element.offsetTop;
            } while (element = element.offsetParent);
            return offsetTop;
        }
    }


    // Check the location and track user
    function trackLocation() {
        bottom = window.innerHeight + $(window).scrollTop();
        height = $(document).height();

        // If user starts to scroll send an event
        if (bottom > readerLocation && !scroller) {
            currentTime = new Date();
            scrollStart = currentTime.getTime();
            timeToScroll = Math.round((scrollStart - beginning) / 1000);
            if (!debugMode) {
                _gaq.push(['_trackEvent', 'Reading', 'StartReading', '', timeToScroll]);
            } else {
                //alert('started reading ' + timeToScroll);
            }
            scroller = true;
        }



        // начало проверки прочтения контента

        if (bottom >= offsetPosition(document.getElementById('firstContent')) + $('#firstContent').innerHeight() && !endContent1) {
            currentTime = new Date();
            contentScrollEnd = currentTime.getTime();
            timeToContentEnd = Math.round((contentScrollEnd - scrollStart) / 1000);
            if (!debugMode) {
                _gaq.push(['_trackEvent', 'Reading', 'ContentBottom1', '', timeToContentEnd]);
            } 
            endContent1 = true;
        }


        if (bottom >= offsetPosition(document.getElementById('secondContent')) + $('#secondContent').innerHeight() && !endContent2) {
            currentTime = new Date();
            contentScrollEnd = currentTime.getTime();
            timeToContentEnd = Math.round((contentScrollEnd - scrollStart) / 1000);
            if (!debugMode) {
                _gaq.push(['_trackEvent', 'Reading', 'ContentBottom2', '', timeToContentEnd]);
            } 
            endContent2 = true;
        }


        if (bottom >= offsetPosition(document.getElementById('thirdContent')) + $('#thirdContent').innerHeight() && !endContent3) {
            currentTime = new Date();
            contentScrollEnd = currentTime.getTime();
            timeToContentEnd = Math.round((contentScrollEnd - scrollStart) / 1000);
            if (!debugMode) {
                _gaq.push(['_trackEvent', 'Reading', 'ContentBottom3', '', timeToContentEnd]);
            } 
            endContent3 = true;
        }

        if (bottom >= offsetPosition(document.getElementById('fourthContent')) + $('#fourthContent').innerHeight() && !endContent4) {
            currentTime = new Date();
            contentScrollEnd = currentTime.getTime();
            timeToContentEnd = Math.round((contentScrollEnd - scrollStart) / 1000);
            if (!debugMode) {
                _gaq.push(['_trackEvent', 'Reading', 'ContentBottom4', '', timeToContentEnd]);
            }
            endContent4 = true;
        }


        // конец проверки прочтения контента



        // If user has hit the bottom of page send an event
        if (bottom >= height && !didComplete) {
            currentTime = new Date();
            end = currentTime.getTime();
            totalTime = Math.round((end - scrollStart) / 1000);
            if (!debugMode) {
                if (totalTime < 240) {
                    _gaq.push(['_setCustomVar', 5, 'ReaderType', 'Scanner', 2]);
                } else {
                    _gaq.push(['_setCustomVar', 5, 'ReaderType', 'Reader', 2]);
                }
                _gaq.push(['_trackEvent', 'Reading', 'PageBottom', '', totalTime]);
            } else {
                //alert('bottom of page '+totalTime);
            }
            didComplete = true;
        }
    }

    // Track the scrolling and track location
    $(window).scroll(function() {
        if (timer) {
            clearTimeout(timer);
        }

        // Use a buffer so we don't call trackLocation too often.
        timer = setTimeout(trackLocation, callBackTime);
    });
});
