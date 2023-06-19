<!DOCTYPE html>
<html>
  	<head>
		<?php include("includes/head.php"); ?>
        <style>
            /*!
 * modified Simple lightbox effect in pure JS
 * @see {@link https://github.com/squeral/lightbox}
 * @see {@link https://github.com/squeral/lightbox/blob/master/lightbox.js}
 * passes jshint
 */

.iframe-lightbox,
.iframe-lightbox .backdrop {
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
}

.iframe-lightbox {
	display: none;
	position: fixed;
	opacity: 0;
	-webkit-transition: opacity 0.2s ease;
	transition: opacity 0.2s ease;
	/*!
	 * @see {@link https://github.com/englishextra/iframe-lightbox/issues/10}
	 * @see {@link https://github.com/englishextra/iframe-lightbox/issues/14}
	 */
	z-index: 999999;
}

.iframe-lightbox .backdrop {
	position: absolute;
	background-color: rgba(0, 0, 0, 0.7);
	cursor: default;
}

.iframe-lightbox .content-holder {
	width: 100%;
	position: absolute;
	top: 50%;
	left: 50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	margin-right: -50%;
    max-width: 640px;
}

.iframe-lightbox .content {
	height: 0;
	position: relative;
	padding-bottom: 100%;
    max-height: 480px;
}

.iframe-lightbox .content>.body {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

/*!
 * another pure css spinner
 * @see {@link https://epic-spinners.epicmax.co/}
 */

.iframe-lightbox .content>.body .half-circle-spinner,
.iframe-lightbox .content>.body .half-circle-spinner * {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.iframe-lightbox .content>.body .half-circle-spinner {
	width: 60px;
	height: 60px;
	border-radius: 100%;
	position: relative;

	margin: 0;
	position: fixed;
	top: 50%;
	left: 50%;
	margin-right: -50%;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
}

.iframe-lightbox .content>.body .half-circle-spinner .circle {
	content: "";
	position: absolute;
	width: 100%;
	height: 100%;
	border-radius: 100%;
	border: calc(60px / 10) solid transparent;
}

.iframe-lightbox .content>.body .half-circle-spinner .circle.circle-1 {
	border-top-color: #FFFFFF;
	-webkit-animation: half-circle-spinner-animation 1s infinite;
	animation: half-circle-spinner-animation 1s infinite;
}

.iframe-lightbox .content>.body .half-circle-spinner .circle.circle-2 {
	border-bottom-color: #FFFFFF;
	-webkit-animation: half-circle-spinner-animation 1s infinite alternate;
	animation: half-circle-spinner-animation 1s infinite alternate;
}

@-webkit-keyframes half-circle-spinner-animation {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

@keyframes half-circle-spinner-animation {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
	}

	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
}

.iframe-lightbox .content>.body.is-loaded .half-circle-spinner {
	display: none;
}

.iframe-lightbox iframe {
	display: block;
	width: 100%;
	height: 100%;
	border: 0;
	box-shadow: 0.267rem 0.267rem 0.267rem 0 rgba(3, 3, 3, 0.3);
	/*!
	 * in js: iframe onload="this.style.opacity=1;" style="opacity:0;border:none;"
	 */
	/* opacity: 0; */
	-webkit-transition: opacity 0.2s ease;
	transition: opacity 0.2s ease;
}

.iframe-lightbox.is-showing {
	display: block;
}

.iframe-lightbox.is-opened {
	opacity: 1;
}

.iframe-lightbox .btn-close {
	position: fixed;
	top: 0.625em;
	right: 0.625em;
	width: 1.500em;
	height: 1.500em;
}

/*!
 * pure css version
 * @see {@link https://codepen.io/brissmyr/pen/egidw}
 */

.iframe-lightbox .btn-close:before,
.iframe-lightbox .btn-close:after {
	content: " ";
	width: 0.125em;
	height: 1.500em;
	position: absolute;
	right: 0.625em;
	background-color: #FFFFFF;
}

.iframe-lightbox .btn-close:before {
	-webkit-transform: rotate(45deg);
	transform: rotate(45deg);
}

.iframe-lightbox .btn-close:after {
	-webkit-transform: rotate(-45deg);
	transform: rotate(-45deg);
}

/*!
 * @see {@link https://github.com/englishextra/iframe-lightbox/issues/12}
 */

body.iframe-lightbox--open {
	overflow: hidden;
}
        </style>
	</head>
 	<body id="luz">
        <?php include("includes/cabecera.php"); ?>
        <main>
            <div class="contenedor texto-imprimible">
                <?php include("includes/disclaimer.php"); ?>
                <hr>
                <div class="sidebar">
                    <div>
             			<h2>Aplicaciones</h2>
                        <p>Varios de estos videojuegos datan de mi época del secundario (2001-2005), los conocí en mis clases de computación y los jugabamos cuando el profesor demoraba en llegar xd. <u>Los videojuegos en plataforma MS-DOS funcionarán a la perfección si los ejecutas en un windows 98</u> pero en sistemas Windows más modernos necesitarás el emulador <a href="#" target="_blank">DOSBOX</a>.</p>
                        <table>
                            <tr>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                                <td>a</td>
                            <tr>
                        </table>
                    </div>
                    <aside>
                        <div id="sidebar">
                            <h4>Necesario para juegos DOS-BOX Descarga:</h4>
                            <center><a href="https://www.dosbox.com/" target="_blank"><img src="img/compilations.jpg" /></a></center>
                            <hr>
                            <center><a class="iframe-lightbox-link" href="game.html" target="_blank"><img src="img/banner_ff.gif" /></a></center>
                        </div>
                    </aside>
                </div>
                <hr >
                <script src="js/fixed-sidebar.js"></script>
     		</div>
            <?php include("includes/warning.php"); ?>
        </main>
        <?php include("includes/footer.php") ?>
	</body>
</html>
<script>
    /*!
 * modified Simple lightbox effect in pure JS
 * @see {@link https://github.com/squeral/lightbox}
 * @see {@link https://github.com/squeral/lightbox/blob/master/lightbox.js}
 * @params {Object} elem Node element
 * @params {Object} [rate] debounce rate, default 500ms
 * new IframeLightbox(elem)
 * passes jshint
 */
(function (root, document) {
	"use strict";
	var docBody = document.body || "";
	
	var appendChild = "appendChild";
	var classList = "classList";
	var createElement = "createElement";
	var dataset = "dataset";
	var getAttribute = "getAttribute";
	var getElementById = "getElementById";
	var getElementsByClassName = "getElementsByClassName";
	var _addEventListener = "addEventListener";
	
	var containerClass = "iframe-lightbox";
	var iframeLightboxOpenClass = "iframe-lightbox--open";
	var iframeLightboxLinkIsBindedClass = "iframe-lightbox-link--is-binded";
	
	var isLoadedClass = "is-loaded";
	var isOpenedClass = "is-opened";
	var isShowingClass = "is-showing";
	
	var IframeLightbox = function (elem, settings) {
		var options = settings || {};
		this.trigger = elem;
		this.el = document[getElementsByClassName](containerClass)[0] || "";
		this.body = this.el ? this.el[getElementsByClassName]("body")[0] : "";
		this.content = this.el ? this.el[getElementsByClassName]("content")[0] : "";
		this.src = elem[dataset].src || "";
		this.href = elem[getAttribute]("href") || "";
		this.dataPaddingBottom = elem[dataset].paddingBottom || "";
		this.dataScrolling = elem[dataset].scrolling || "";
		this.rate = options.rate || 500;
		this.scrolling = options.scrolling;
		/*!
		 * Event handlers
		 */
		this.onOpened = options.onOpened;
		this.onIframeLoaded = options.onIframeLoaded;
		this.onLoaded = options.onLoaded;
		this.onCreated = options.onCreated;
		this.onClosed = options.onClosed;
		this.init();
	};
	IframeLightbox.prototype.init = function () {
		var _this = this;
		if (!this.el) {
			this.create();
		}
		var debounce = function (func, wait) {
			var timeout,
			args,
			context,
			timestamp;
			return function () {
				context = this;
				args = [].slice.call(arguments, 0);
				timestamp = new Date();
				var later = function () {
					var last = (new Date()) - timestamp;
					if (last < wait) {
						timeout = setTimeout(later, wait - last);
					} else {
						timeout = null;
						func.apply(context, args);
					}
				};
				if (!timeout) {
					timeout = setTimeout(later, wait);
				}
			};
		};
		var logic = function () {
			_this.open();
		};
		if (!this.trigger[classList].contains(iframeLightboxLinkIsBindedClass)) {
			this.trigger[classList].add(iframeLightboxLinkIsBindedClass);
			this.trigger[_addEventListener]("click", function (e) {
				e.stopPropagation();
				e.preventDefault();
				debounce(logic, this.rate).call();
			});
		}
	};
	IframeLightbox.prototype.create = function () {
		var _this = this,
		bd = document[createElement]("div");
		this.el = document[createElement]("div");
		this.content = document[createElement]("div");
		this.body = document[createElement]("div");
		this.el[classList].add(containerClass);
		bd[classList].add("backdrop");
		this.content[classList].add("content");
		this.body[classList].add("body");
		this.el[appendChild](bd);
		this.content[appendChild](this.body);
		this.contentHolder = document[createElement]("div");
		this.contentHolder[classList].add("content-holder");
		this.contentHolder[appendChild](this.content);
		this.el[appendChild](this.contentHolder);
		this.btnClose = document[createElement]("a");
		this.btnClose[classList].add("btn-close");
		/* jshint -W107 */
		this.btnClose.setAttribute("href", "javascript:void(0);");
		/* jshint +W107 */
		this.el[appendChild](this.btnClose);
		docBody[appendChild](this.el);
		bd[_addEventListener]("click", function () {
			_this.close();
		});
		this.btnClose[_addEventListener]("click", function () {
			_this.close();
		});
		root[_addEventListener]("keyup", function (ev) {
			if (27 === (ev.which || ev.keyCode)) {
				_this.close();
			}
		});
		var clearBody = function () {
			if (_this.isOpen()) {
				return;
			}
			_this.el[classList].remove(isShowingClass);
			_this.body.innerHTML = "";
		};
		this.el[_addEventListener]("transitionend", clearBody, false);
		this.el[_addEventListener]("webkitTransitionEnd", clearBody, false);
		this.el[_addEventListener]("mozTransitionEnd", clearBody, false);
		this.el[_addEventListener]("msTransitionEnd", clearBody, false);
		this.callCallback(this.onCreated, this);
	};
	IframeLightbox.prototype.loadIframe = function () {
		var _this = this;
		this.iframeId = containerClass + Date.now();
		this.iframeSrc = this.src || this.href || "";
		/*!
		 * @see {@link https://stackoverflow.com/questions/18648203/how-remove-horizontal-scroll-bar-for-iframe-on-google-chrome}
		 */
		var iframeHTML = [];
		iframeHTML.push('<iframe src="' + this.iframeSrc + '" name="' + this.iframeId + '" id="' + this.iframeId + '" onload="this.style.opacity=1;" style="opacity:0;border:none;" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" height="166" frameborder="no"></iframe>');
		/*!
		 * @see {@link https://epic-spinners.epicmax.co/}
		 */
		/*iframeHTML.push('<div class="spring-spinner"><div class="spring-spinner-part top"><div class="spring-spinner-rotator"></div></div><div class="spring-spinner-part bottom"><div class="spring-spinner-rotator"></div></div></div>');*/
		iframeHTML.push('<div class="half-circle-spinner"><div class="circle circle-1"></div><div class="circle circle-2"></div></div>');
		this.body.innerHTML = iframeHTML.join("");
		(function (iframeId, body) {
			var iframe = document[getElementById](iframeId);
			iframe.onload = function () {
				/* console.log("loaded iframe:", this.iframeSrc); */
				this.style.opacity = 1;
				body[classList].add(isLoadedClass);
				if (_this.scrolling || _this.dataScrolling) {
					iframe.removeAttribute("scrolling");
					iframe.style.overflow = "scroll";
				} else {
					iframe.setAttribute("scrolling", "no");
					iframe.style.overflow = "hidden";
				}
				_this.callCallback(_this.onIframeLoaded, _this);
				_this.callCallback(_this.onLoaded, _this);
			};
		})(this.iframeId, this.body);
	};
	IframeLightbox.prototype.open = function () {
		this.loadIframe();
		if (this.dataPaddingBottom) {
			this.content.style.paddingBottom = this.dataPaddingBottom;
		} else {
			this.content.removeAttribute("style");
		}
		this.el[classList].add(isShowingClass);
		this.el[classList].add(isOpenedClass);
		docBody[classList].add(iframeLightboxOpenClass);
		this.callCallback(this.onOpened, this);
	};
	IframeLightbox.prototype.close = function () {
		this.el[classList].remove(isOpenedClass);
		this.body[classList].remove(isLoadedClass);
		docBody[classList].remove(iframeLightboxOpenClass);
		this.callCallback(this.onClosed, this);
	};
	IframeLightbox.prototype.isOpen = function () {
		return this.el[classList].contains(isOpenedClass);
	};
	IframeLightbox.prototype.callCallback = function (func, data) {
		if (typeof func !== "function") {
			return;
		}
		var caller = func.bind(this);
		caller(data);
	};
	root.IframeLightbox = IframeLightbox;
})("undefined" !== typeof window ? window : this, document);


	(function(root, document) {
		"use strict";
		[].forEach.call(document.getElementsByClassName("iframe-lightbox-link"), function(el) {
			el.lightbox = new IframeLightbox(el, {
				onCreated: function() {
					/* show your preloader */
				},
				onLoaded: function() {
					/* hide your preloader */
				},
				onError: function() {
					/* hide your preloader */
				},
				onClosed: function() {
					/* hide your preloader */
				},
				scrolling: false,
				/* default: false */
				rate: 500 /* default: 500 */
			});
		});
	})("undefined" !== typeof window ? window : this, document);

    </script>