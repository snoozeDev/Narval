/* jQuery tubular plugin
|* by Sean McCambridge
|* http://www.seanmccambridge.com/tubular
|* version: 1.0
|* updated: October 1, 2012
|* since 2010
|* licensed under the MIT License
|* Enjoy.
|*
|* Thanks,
|* Sean */

;(function ($, window) {

    // test for feature support and return if failure
    var helper= ".main";
    // defaults
    var defaults = {
        ratio: 4/3, // usually either 4/3 or 16/9 -- tweak as needed
        videoId: 'ZCAnLxRvNNc', // toy robot in space is a good default, no?
        mute: true,
        repeat: true,
        width: $(helper).width(),
        wrapperZIndex: 10,
        playButtonClass: 'tubular-play',
        pauseButtonClass: 'tubular-pause',
        muteButtonClass: 'tubular-mute',
        volumeUpClass: 'tubular-volume-up',
        volumeDownClass: 'tubular-volume-down',
        increaseVolumeBy: 10,
        start: 0
    };

    // methods

    var tubular = function(node, options) { // should be called on the wrapper div
        var options = $.extend({}, defaults, options),
            $body = $('body') // cache body node
            $node = $(node); // cache wrapper node

        // build container
        var tubularContainer = '<div id="tubular-container" style="overflow: hidden; position: fixed; z-index: 1; width: 100%; height: 100%; opacity: 0;"><div id="tubular-player" style="position: absolute"></div></div><div id="tubular-shield" style="width: 100%; height: 100%; z-index: 2; position: absolute; left: 0; top: 0;"></div>';

        // set up css prereq's, inject tubular container and set up wrapper defaults
        $('html,body').css({'width': '100%', 'height': '100%'});
        $body.prepend(tubularContainer);
        $node.css({position: 'relative', 'z-index': options.wrapperZIndex});

        // set up iframe player, use global scope so YT api can talk
        window.player;
        window.onYouTubeIframeAPIReady = function() {
            player = new YT.Player('tubular-player', {
                width: options.width,
                height: Math.ceil(options.width / options.ratio),
                videoId: options.videoId,
                iv_load_policy: 3,
                playerVars: {
                    controls: 0,
                    showinfo: 0,
                    modestbranding: 1,
                    wmode: 'transparent'
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });
        }

        window.onPlayerReady = function(e) {
            resize();
            if (options.mute) e.target.mute();
            e.target.seekTo(options.start);
            e.target.playVideo();
        }

        window.onPlayerStateChange = function(state) {
            if (state.data === 0 && options.repeat) { // video ended and repeat option is set true
                player.seekTo(options.start); // restart
            }

            if(state.data !== 1){
                // Video not playing, hide it temporarily
                $('#tubular-container').css('opacity', '0');
            }else{
                $('#tubular-container').css('opacity', '1');
            }
        }

        // resize handler updates width, height and offset of player after resize/init
        var resize = function() {
            var width = $(window).width(),
                pWidth, // player width, to be defined
                height = $(window).height(),
                pHeight, // player height, tbd
                $tubularPlayer = $('#tubular-player');

            // when screen aspect ratio differs from video, video must center and underlay one dimension

            if (width / options.ratio < height) { // if new video height < window height (gap underneath)
                pWidth = Math.ceil(height * options.ratio); // get new player width
                $tubularPlayer.width(pWidth).height(height).css({left: (width - pWidth) / 2, top: 0}); // player width is greater, offset left; reset top
            } else { // new video width < window width (gap to right)
                pHeight = Math.ceil(width / options.ratio); // get new player height
                $tubularPlayer.width(width).height(pHeight).css({left: 0, top: (height - pHeight) / 2}); // player height is greater, offset top; reset left
            }

        }

        // events
        $(window).on('resize.tubular', function() {
            resize();
        })


    }

    // load yt iframe js api

    var tag = document.createElement('script');
    tag.src = "//www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // create plugin

    $.fn.tubular = function (options) {
        return this.each(function () {
            if (!$.data(this, 'tubular_instantiated')) { // let's only run one
                $.data(this, 'tubular_instantiated',
                tubular(this, options));
            }
        });
    }

})(jQuery, window);
