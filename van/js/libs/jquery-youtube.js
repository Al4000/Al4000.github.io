// Generated by CoffeeScript 1.7.1
if ($(window).innerWidth() < 768){
(function() {
  var __hasProp = {}.hasOwnProperty,
    __slice = [].slice;

  (function(window, $) {
    var jyt;
    jyt = jyt || {};
    jyt.init = function(feature) {
      var ua;
      this.ApiReady = false;
      ua = window.navigator.userAgent.toLowerCase();
      this.platform = {
        isIE8: ua.match(/msie 8/) !== null,
        isIE9: ua.match(/msie 9/) !== null,
        isIE10: ua.match(/msie 10/) !== null
      };
      this.feature = feature || (this.platform.isIE8 || this.platform.isIE9 || this.platform.isIE10 ? 'flash' : 'iframe');
      this[this.feature].init();
      return this.registerPackage();
    };
    jyt.onApiReady = function() {
      var id, value, _ref, _results;
      //console.log(this.feature, 'API ready, initialize Video.');
      this.ApiReady = true;
      _ref = this.YTplayers;
      _results = [];
      for (id in _ref) {
        if (!__hasProp.call(_ref, id)) continue;
        value = _ref[id];
        if (!value.initialized) {
          _results.push(value = this[this.feature].initializeVideo(id, value));
        } else {
          _results.push(void 0);
        }
      }
      return _results;
    };
    jyt.pushToQueue = function(id, options) {
      this.YTplayers[id] = options;
      return this.YTplayers[id].initialized = false;
    };
    jyt.util = {
      objToUrl: function(obj) {
        var i, key, link, string, value;
        i = 0;
        string = "";
        for (key in obj) {
          if (!__hasProp.call(obj, key)) continue;
          value = obj[key];
          link = i === 0 ? "?" : "&";
          string += "" + link + key + "=" + value;
          i++;
        }
        return string;
      }
    };
    jyt.iframe = {
      init: function() {
        var firstScriptTag, tag;
        //console.log('init iframe');
        window.onYouTubeIframeAPIReady = (function(_this) {
          return function() {
            return jyt.onApiReady();
          };
        })(this);
        tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        firstScriptTag = document.getElementsByTagName('script')[0];
        return firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      },
      initializeVideo: function(id, options) {
        var player;
        options.playerVars = options.playerVars || {};
        options.playerVars.wmode = 'opaque';
        options.playerVars.html5 = 1;
        player = new YT.Player(id, {
          wmode: 'opaque',
          width: options.width,
          height: options.height,
          videoId: options.videoId,
          playerVars: options.playerVars,
          events: {
            onReady: options.onReady,
            onStateChange: function(e) {
              if (typeof options.onStateChange === "function") {
                options.onStateChange(e);
              }
              switch (e.data) {
                case 0:
                  return typeof options.onEnd === "function" ? options.onEnd(e) : void 0;
                case 1:
                  return typeof options.onPlay === "function" ? options.onPlay(e) : void 0;
                case 2:
                  return typeof options.onPause === "function" ? options.onPause(e) : void 0;
                case 3:
                  return typeof options.onBuffer === "function" ? options.onBuffer(e) : void 0;
              }
            },
            onPlaybackQualityChange: options.onPlaybackQualityChange,
            onPlaybackRateChange: options.onPlaybackRateChange,
            onApiChange: options.onApiChange,
            onError: options.onError
          }
        });
        //console.log('video initialized');
        return jyt.YTplayers[id] = player;
      }
    };
    jyt.flash = {
      init: function() {
        var firstScriptTag, tag;
        //console.log('init flash');
        tag = document.createElement('script');
        tag.onload = function() {
          //console.log('swfobject script load');
          return jyt.onApiReady();
        };
        tag.src = "http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js";
        firstScriptTag = document.getElementsByTagName('script')[0];
        return firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      },
      initializeVideo: function(id, options) {
        var urlParam;
        //console.log('flash initialiseVideo');
        options.playerVars = options.playerVars || {};
        options.playerVars.wmode = 'opaque';
        options.playerVars.version = 3;
        options.playerVars.enablejsapi = 1;
        options.playerVars.playerapiid = options.videoId;
        urlParam = jyt.util.objToUrl(options.playerVars);
        swfobject.embedSWF("http://www.youtube.com/v/" + options.videoId + urlParam, id, options.width, options.height, "8", null, null, {
          allowScriptAccess: 'always',
          wmode: 'transparent'
        }, {
          id: id
        });
        return window.onYouTubePlayerReady = function(videoId) {
          var player;
          //console.log('flash onYouTubePlayerReady');
          player = document.getElementById(id);
          window["" + id + "OnStateChange"] = function(e) {
            if (typeof options.onStateChange === "function") {
              options.onStateChange(e);
            }
            switch (e) {
              case -1:
                return typeof options.onReady === "function" ? options.onReady(e) : void 0;
              case 0:
                return typeof options.onEnd === "function" ? options.onEnd(e) : void 0;
              case 1:
                return typeof options.onPlay === "function" ? options.onPlay(e) : void 0;
              case 2:
                return typeof options.onPause === "function" ? options.onPause(e) : void 0;
              case 3:
                return typeof options.onBuffer === "function" ? options.onBuffer(e) : void 0;
            }
          };
          window["" + id + "OnError"] = function(e) {
            return typeof options.onError === "function" ? options.onError(e) : void 0;
          };
          window["" + id + "OnApiChange"] = function(e) {
            return typeof options.onApiChange === "function" ? options.onApiChange(e) : void 0;
          };
          window["" + id + "OnPlaybackRateChange"] = function(e) {
            return typeof options.onPlaybackRateChange === "function" ? options.onPlaybackRateChange(e) : void 0;
          };
          window["" + id + "OnPlaybackQualityChange"] = function(e) {
            return typeof options.onPlaybackQualityChange === "function" ? options.onPlaybackQualityChange(e) : void 0;
          };
          player.addEventListener('onError', "" + id + "OnError");
          player.addEventListener('onApiChange', "" + id + "OnApiChange");
          player.addEventListener('onStateChange', "" + id + "OnStateChange");
          player.addEventListener('onPlaybackRateChange', "" + id + "OnPlaybackRateChange");
          player.addEventListener('onPlaybackQualityChange', "" + id + "OnPlaybackQualityChange");
          jyt.YTplayers[id] = player;
        };
      }
    };
    $.prototype.YTplayer = function(options) {
      this.id = $(this).attr('id');
      this.width = options.width || 640;
      this.height = options.height || 480;
      this.videoId = options.videoId || 'fz4MzJTeL0c';
      this.playerVars = options.playerVars;
      this.onReady = options.onReady, this.onStateChange = options.onStateChange, this.onStart = options.onStart, this.onEnd = options.onEnd, this.onPlay = options.onPlay, this.onPause = options.onPause, this.onBuffer = options.onBuffer, this.onPlaybackQualityChange = options.onPlaybackQualityChange, this.onPlaybackRateChange = options.onPlaybackRateChange, this.onError = options.onError, this.onApiChange = options.onApiChange;
      jyt.YTplayers = jyt.YTplayers || {};
      if (jyt.ApiReady) {
        //console.log(jyt.feature, 'API ready, initialize Video.');
        return jyt[jyt.feature].initializeVideo(this.id, this);
      } else {
        //console.log(jyt.feature, 'API not ready, queue Video.');
        return jyt.pushToQueue(this.id, this);
      }
    };
    jyt.registerPackage = function() {
      var enterFullscreen, exitFullscreen, fn, fullScreenEventName, toggleFullscreen, _i, _len, _ref;
      this.registerPackage = function(alias, name) {
        if (name == null) {
          name = alias;
        }
        return $.prototype[alias] = function() {
          var args, id, player, _ref;
          args = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
          id = $(this).attr('id');
          if (jyt.YTplayers[id] === void 0) {
            return;
          }
          player = jyt.YTplayers[id];
          if (player.initialized === false) {
            return;
          }
          return (_ref = player[name]) != null ? _ref.apply(player, args) : void 0;
        };
      };
      this.registerPackage('play', 'playVideo');
      this.registerPackage('pause', 'pauseVideo');
      this.registerPackage('stop', 'stopVideo');
      this.registerPackage('clear', 'clearVideo');
      _ref = ['seekTo', 'setSize', 'mute', 'unMute', 'isMuted', 'setVolume', 'getVolume', 'getVideoLoadedFraction', 'getPlayerState', 'getCurrentTime', 'setPlaybackRate', 'getPlaybackRate', 'getAvailablePlaybackRate', 'getPlaybackQuality', 'setPlaybackQuality', 'getAvailableQualityLevels', 'getDuration', 'getVideoUrl', 'getVideoEmbedCode', 'addEventListener', 'removeEventListener', 'getIframe', 'destroy'];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        fn = _ref[_i];
        this.registerPackage(fn);
      }
      enterFullscreen = function(ele) {
        if (document.documentElement.requestFullscreen) {
          ele.requestFullscreen();
        } else {
          if (typeof ele.msRequestFullscreen === "function") {
            ele.msRequestFullscreen();
          }
          if (typeof ele.mozRequestFullScreen === "function") {
            ele.mozRequestFullScreen();
          }
          if (typeof ele.webkitRequestFullscreen === "function") {
            ele.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
          }
        }
        return $(ele).addClass('ytplayer-fullscreen');
      };
      exitFullscreen = function() {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else {
          if (typeof document.msExitFullscreen === "function") {
            document.msExitFullscreen();
          }
          if (typeof document.mozCancelFullScreen === "function") {
            document.mozCancelFullScreen();
          }
          if (typeof document.webkitExitFullscreen === "function") {
            document.webkitExitFullscreen();
          }
        }
        return $('.ytplayer-fullscreen').removeClass('ytplayer-fullscreen')
          && $('#slide-video2').pause()
          && $('#slide-3d-mobile').css('display', 'none');;
      };
      toggleFullscreen = function(ele) {
        if (!$.fullscreenElement()) {
          return enterFullscreen(ele);
        } else {
          return exitFullscreen();
        }
      };
      fullScreenEventName = function() {
        //console.log('fullScreenEventName evoked');
        if (document.msExitFullscreen != null) {
          return 'MSFullscreenChange';
        }
        if (document.mozCancelFullScreen != null) {
          return 'mozfullscreenchange';
        }
        if (document.webkitExitFullscreen != null) {
          return 'webkitfullscreenchange';
        } else {
          return '';
        }
      };
      document.addEventListener(fullScreenEventName(), function() {
        if (!$.fullscreenElement()) {
          return exitFullscreen();
        }
      });
      $.fullscreenElement = function() {
        var ele;
        return ele = document.fullScreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || document.msFullscreenElement;
      };
      $.prototype.enterFullscreen = function() {
        return enterFullscreen($(this)[0]);
      };
      $.prototype.exitFullscreen = function() {
        return exitFullscreen($(this)[0]);
      };
      return $.prototype.toggleFullscreen = function() {
        return toggleFullscreen($(this)[0]);
      };
    };
    return jyt.init();
  })(window, window.jQuery);

}).call(this);
}