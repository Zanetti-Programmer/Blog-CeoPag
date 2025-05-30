<main>
        {{ $slot }}
</main>
<style>
    :root {
    --dark-color-h: 334.29;
    --dark-color-s: 32.03%;
    --dark-color-l: 30%;
    --light-color-h: 19.2;
    --light-color-s: 30.86%;
    --light-color-l: 84.12%;
    --dark-color: hsl(var(--dark-color-h), var(--dark-color-s), var(--dark-color-l));
    --dark-color-darker: hsl(var(--dark-color-h), var(--dark-color-s), calc(var(--dark-color-l) - 10%));
    --dark-color-lighter: hsl(var(--dark-color-h), var(--dark-color-s), calc(var(--dark-color-l) + 10%));
    --dark-color-translucent: hsla(var(--dark-color-h), var(--dark-color-s), var(--dark-color-l), 0.75);
    --dark-color-darker-translucent: hsla(var(--dark-color-h), var(--dark-color-s), calc(var(--dark-color-l) - 10%), 0.75);
    --light-color: hsl(var(--light-color-h), var(--light-color-s), var(--light-color-l));
    --light-color-darker: hsl(var(--light-color-h), var(--light-color-s), calc(var(--light-color-l) - 10%));
    --light-color-lighter: hsl(var(--light-color-h), var(--light-color-s), calc(var(--light-color-l) + 10%));
    --light-color-translucent: hsla(var(--light-color-h), var(--light-color-s), var(--light-color-l), 0.75);
    --light-color-darker-translucent: hsla(var(--light-color-h), var(--light-color-s), calc(var(--light-color-l) - 10%), 0.75);
    --bg-color: var(--dark-color);
    --text-color: var(--light-color);
    --resources-bg-color: var(--dark-color-darker-translucent);
    --resources-active-color: color-mix(in srgb, var(--light-color) 75%, transparent);
    --resources-color: var(--text-color);
    --spacing: 1.5rem;
    --md-breakpoint: 51.25rem;
    --button-color: var(--light-color);
    --button-bg-color: var(--dark-color-lighter);
    --button-border-color: var(--dark-color-lighter);
    --button-active-color: var(--dark-color-darker);
    --button-active-bg-color: var(--light-color);
    --button-active-border-color: var(--light-color);
}

*,
::after,
::before {
    border-style: solid;
    border-width: 0;
    box-sizing: border-box;
}

* {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

body {
    color: var(--text-color);
    font-family: Inter, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif;
    line-height: 1.5;
    margin: 0;
    min-height: 100vh;
    padding: 0;
}

#app_blocker,
body {
    background: var(--bg-color);
    width: 100%;
}

#app_blocker {
    display: block;
    inset: 0;
    min-height: 100lvh;
    opacity: 1;
    pointer-events: auto;
    position: fixed;
    transition: opacity .3s ease;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    z-index: 999;
}

#app_blocker.hide {
    opacity: 0;
    pointer-events: none;
}

:is(h1, h2, h3, h4) {
    font-family: Charter, "Bitstream Charter", "Sitka Text", Cambria, serif;
    font-weight: 500;
    letter-spacing: .025em;
    line-height: 1.2;
    margin: 0;
    text-wrap: balance;
    text-wrap: pretty;
}

h2 {
    font-size: 3.1575rem;
}

h2,
h3 {
    color: var(--light-color);
}

h3 {
    font-size: 1.33313rem;
}

p {
    color: var(--light-color-darker-translucent);
    font-size: 1rem;
    letter-spacing: .025em;
}

.viewport-wrapper {
    height: auto;
    overflow: visible;
    position: relative;
}

.content-scroll {
    display: block;
    width: 100%;
}

body:not(.normalize-scroll) .viewport-wrapper {
    bottom: 0;
    height: 100%;
    left: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    width: 100%;
}

body:not(.normalize-scroll) .content-scroll {
    overflow: visible;
}

body:not(.normalize-scroll) .content-scroll :is(.swiper-container, .text-before, .swiper-pagination-wrapper) {
    perspective: 2000px;
}

body:not(.normalize-scroll) .content-scroll .swiper-slide>* {
    outline: thin solid transparent;
    transform-style: preserve-3d;
}

body:not(.normalize-scroll) .content-scroll :is(.text-before > *, .swiper-navigation-wrapper > *, .swiper-pagination-wrapper > *) {
    transform-style: preserve-3d;
}

body:not(.normalize-scroll) .content-scroll :is(.swiper-navigation-wrapper > *, .swiper-pagination-wrapper > *) {
    outline: thin solid transparent;
}

main {
    margin: 0;
}

.wrapper,
main {
    display: block;
    position: relative;
}

.wrapper {
    margin-inline: auto;
    width: 100%;
}

.media-container {
    aspect-ratio: var(--media-aspect-ratio);
    display: grid;
    position: relative;
    width: 100%;
}

.media-container>* {
    aspect-ratio: inherit;
    grid-area: 1/-1;
    position: relative;
}

picture {
    display: block;
    height: 100%;
    position: relative;
}

:is(img, svg) {
    border: 0;
    display: block;
    height: auto;
    max-width: 100%;
    outline: none;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    vertical-align: middle;
}

img {
    color: transparent;
	  background-color:rgb(223,207,159);
    font: 0/0 a;
    margin: 0;
    padding: 0;
    position: relative;
    text-shadow: none;
    height: 100%;
    width: 100%;
}

.fit-cover {
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    width: 100%;
}

.fit-cover.middle-center {
    background-position: 50% 50%;
    -o-object-position: 50% 50%;
    object-position: 50% 50%;
}

.carousel {
    --swiper-column-gap: var(--spacing);
    --swiper-column-gap-md-down: calc(var(--spacing) * 0.5);
    --swiper-slides-perview: 2.25;
    --swiper-slides-perview-md-down: 1.05;
    --swiper-col-width: calc(1 / var(--swiper-slides-perview));
    --swiper-col-width-md-down: calc(1 / var(--swiper-slides-perview-md-down));
    --swiper-navigation-color: var(--light-color-darker);
    --swiper-navigation-bg-color: var(--dark-color-darker-translucent);
    --swiper-pagination-color: var(--dark-color-lighter);
    --swiper-pagination-active-color: var(--light-color-darker);
    --media-aspect-ratio: 8 / 5;
    --media-aspect-ratio-md-down: 4 / 3;
    display: block;
    position: relative;
}

.carousel+.carousel {
    margin-top: calc(var(--spacing) * 2);
}

[data-scrub] {
    --pin-spacer-bg-color: var(--bg-color);
}

[data-scrub] [class*=pin-spacer]:before {
    background: var(--pin-spacer-bg-color, transparent);
    content: "";
    display: block;
    height: 100%;
    left: 0;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 100%;
}

.text-before {
    display: block;
    margin-left: var(--swiper-text-before-margin-left, 0);
    max-width: var(--swiper-text-before-width, 100%);
    padding: 0 var(--spacing) calc(var(--spacing) * 1.5) 0;
    position: relative;
    width: 100%;
}

.swiper-column-gap,
.text-before {
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

.swiper-column-gap {
    border: 0;
    height: .0625rem;
    margin: -.0625rem calc(-1 * var(--swiper-column-gap));
    overflow-x: clip;
    overflow-y: clip;
    padding: 0;
    position: absolute;
    width: var(--swiper-column-gap);
}

.swiper-slide {
    height: none;
    height: auto;
    min-width: 0;
    position: relative;
    width: calc((var(--max-wrapper-size, 100%) - var(--swiper-column-gap) * (var(--swiper-slides-perview) + 1)) * var(--swiper-col-width));
}

.card {
    background: var(--dark-color-darker);
}

.card,
.card-text {
    display: block;
    height: 100%;
    position: relative;
}

.card-text {
    background: inherit;
    padding: var(--spacing);
}

.card-text p {
    -webkit-box-orient: vertical;
    display: -webkit-box;
    -webkit-hyphens: none;
    hyphens: none;
    -webkit-line-clamp: var(--max-lines, 2);
    margin-bottom: 0;
    margin-top: calc(var(--spacing) * .25);
    overflow: hidden;
    overscroll-behavior: none;
    visibility: visible;
    white-space: normal;
    word-wrap: break-word;
}

.cta-button {
    align-items: center;
    background-color: var(--button-bg-color);
    border: thin solid var(--button-border-color);
    color: var(--button-color);
    cursor: pointer;
    font-size: .8125rem;
    font-weight: 500;
    justify-content: center;
    letetr-spacing: .025em;
    margin-top: calc(var(--spacing) * .5);
    min-height: 2rem;
    min-width: 12ch;
    pointer-events: auto;
    position: relative;
    text-decoration: none;
    transition: all .2s ease-in-out;
    width: -moz-max-content;
    width: max-content;
}

.cta-button,
.cta-button .text {
    display: inline-flex;
    font-family: inherit;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

.cta-button .text {
    cursor: inherit;
    font-size: inherit;
    letter-spacing: inherit;
    line-height: inherit;
    padding: .25rem .5rem;
    pointer-events: none;
    text-align: center;
    text-transform: inherit;
    width: auto;
}

.cta-button:visited {
    background-color: var(--button-bg-color);
    border: thin solid var(--button-border-color);
    color: var(--button-color);
}

.cta-button:active,
.cta-button:focus-visible {
    background-color: var(--button-active-bg-color);
    border: thin solid var(--button-active-border-color);
    color: var(--button-active-color);
}

.cta-button:focus-visible {
    outline: none;
}

.no-interaction {
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}

.no-interaction,
.no-interaction .cta-button {
    pointer-events: none;
}

[data-scrub] :is(.swiper-navigation-container, .swiper-pagination-container),
body.is-touch .swiper-navigation-container {
    display: none;
}

.swiper-navigation-container {
    display: block;
    height: var(--swiper-navigation-height, 100%);
    left: 0;
    pointer-events: none;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
}

.swiper-navigation-wrapper {
    display: grid;
    height: 100%;
    pointer-events: none;
    position: relative;
    width: 100%;
}

.swiper-prev {
    margin-right: auto;
}

.swiper-prev.hide {
    transform: translate3d(-100%, 0, 0);
}

.swiper-next {
    margin-left: auto;
}

.swiper-next.hide {
    transform: translate3d(100%, 0, 0);
}

.swiper-next,
.swiper-prev {
    background: var(--swiper-navigation-bg-color);
    color: var(--swiper-navigation-color);
    cursor: pointer;
    display: block;
    grid-area: 1/-1;
    margin-block: auto;
    padding: calc(var(--spacing) * .25);
    pointer-events: auto;
    position: relative;
    transition: transform .3s cubic-bezier(0, 0, 0, 1);
}

.swiper-next svg,
.swiper-prev svg {
    height: 1.5rem;
    margin: auto;
    pointer-events: none;
    position: relative;
    width: 1.5rem;
}

.swiper-pagination-container {
    display: block;
    margin-top: var(--spacing);
    pointer-events: none;
    position: relative;
}

.swiper-pagination-wrapper {
    align-items: center;
    display: flex;
    height: 100%;
    justify-content: center;
    pointer-events: none;
    position: relative;
}

.swiper-pagination {
    pointer-events: auto;
    position: relative;
}

.swiper-pagination .swiper-pagination-bullet {
    background-color: var(--swiper-pagination-color);
    height: .75rem;
    opacity: 1;
    position: relative;
    width: .75rem;
}

.swiper-pagination .swiper-pagination-bullet:after {
    content: "";
    height: 1.375rem;
    left: 50%;
    pointer-events: auto;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 1.375rem;
}

.swiper-pagination .swiper-pagination-bullet+.swiper-pagination-bullet {
    margin-left: 1rem;
}

.swiper-pagination .swiper-pagination-bullet-active {
    background: var(--swiper-pagination-active-color);
    pointer-events: none;
}

:is(#carousel_1, #carousel_2, #carousel_3) {
    --max-wrapper-size: 75rem;
}

#carousel_2 {
    --media-aspect-ratio: 1/1;
    background: var(--dark-color-darker);
    padding-block: calc(var(--spacing) * 1.5);
}

#carousel_2 .card-text {
    background: #000;
}

#carousel_3 {
    --bg-color: var(--dark-color-lighter);
    --media-aspect-ratio: 3/3.25;
    background: var(--dark-color-lighter);
    margin-top: 0;
    padding: calc(var(--spacing) * 1.5) 0 calc(var(--spacing) * 3);
}

.dummy-block {
    display: block;
    position: relative;
    width: 100%;
}

.dummy-block>* {
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-inline: auto;
    padding-block: 3rem;
    pointer-events: none;
    text-align: center;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    width: calc(100% - var(--spacing) * 2);
}

.dummy-block :is(h2, h3) {
    color: var(--light-color);
    font-family: Inter, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif;
    font-size: 1rem;
    margin-bottom: 0;
}

.resources-layer {
    bottom: 0;
    display: block;
    position: fixed;
    right: 0;
    z-index: 1000;
}

.resources {
    background: var(--resources-bg-color);
    display: grid;
    font-family: Inter, Roboto, "Helvetica Neue", "Arial Nova", "Nimbus Sans", Arial, sans-serif;
    font-size: .6875rem;
    font-weight: 300;
    grid-auto-flow: column;
    line-height: 1.3;
    padding: .5rem;
    pointer-events: auto;
}

.resources a {
    align-content: center;
    display: grid;
    justify-content: center;
    padding: 0 .5rem;
    place-content: center;
    transition: color .2s ease-in-out;
}

.resources a,
.resources a:visited {
    color: var(--resources-color);
}

.resources a:active,
.resources a:focus-visible {
    color: var(--resources-active-color);
}

.resources a:focus-visible {
    outline: none;
}

.resources a:not(:first-child) {
    border-inline-start: thin solid currentColor;
}

@media (max-width:51.29875em) {
    h2 {
        font-size: 2.36875rem;
    }

    p {
        font-size: .9375rem;
        line-height: 1.3;
    }

    .media-container {
        aspect-ratio: var(--media-aspect-ratio-md-down);
    }

    .text-before {
        margin-left: 0;
        max-width: 100%;
        padding: 0 calc(var(--spacing) * .5) calc(var(--spacing) * 1.5);
    }

    .swiper-column-gap {
        margin: -.0625rem calc(-1 * var(--swiper-column-gap-md-down));
        width: var(--swiper-column-gap-md-down);
    }

    .swiper-slide {
        width: calc((100% - var(--swiper-column-gap-md-down) * (var(--swiper-slides-perview-md-down) + 1)) * var(--swiper-col-width-md-down));
    }

    .card-text {
        padding: var(--spacing) calc(var(--spacing) * .5);
    }

    .dummy-block>* {
        width: calc(100% - var(--spacing));
    }
}

@media (hover:hover) and (pointer:fine) {

    .cta-button:active:not(:hover),
    .cta-button:hover {
        background-color: var(--button-active-bg-color);
        border: thin solid var(--button-active-border-color);
        color: var(--button-active-color);
    }

    .resources a:active:not(:hover),
    .resources a:hover {
        color: var(--resources-active-color);
    }
}
</style>
<script>
    // Utils https://assets.codepen.io/573855/utils-v3.js

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

ScrollTrigger.config({
    limitCallbacks: true,
    ignoreMobileResize: true,
    autoRefreshEvents: 'DOMContentLoaded,load',
});

const scroller = (() => {
    if (typeof gsap === 'undefined' || typeof ScrollSmoother === 'undefined' || utils.device.isTouch()) {
        document.body.classList.add('normalize-scroll');
        return null;
    }

    return {
        initialize: (contentSelector = '.content-scroll', wrapperSelector = '.viewport-wrapper') =>
            ScrollSmoother.create({
                content: contentSelector,
                wrapper: wrapperSelector,
                smooth: 2,
                effects: false,
                normalizeScroll: true,
                preventDefault: true,
            }),
    };
})();

const createCarousel = () => {
    let DOM = {};
    let swiper = null;
    let swiperInitialized = false;
    let gsapAnimation = null;

    let isScrubActive = false;
    let isSwiperNavigation = false;
    let centeredSlides = true;
    let currentActiveSlideIndex = 0;
    let options = {};
    let slidesInteraction = false;
    let isTouching = false;
    let slideOpacity = true;

    const defaultOptions = {
        selector: null,
        centeredSlides: true,
        slideOpacity: true,
        isScrubActive: false,
        isScrubOnTouchActive: false,
        scrubDir: 1,
    };

    const _initializeSwiper = (selectorEl) => {
        if (!selectorEl) return;

        const swiperOptions = {
            init: false,
            runCallbacksOnInit: true,
            direction: 'horizontal',
            slidesPerView: 'auto',
            centeredSlides,
            centeredSlidesBounds: false,
            slidesOffsetBefore: _getSlidesOffset(),
            slidesOffsetAfter: _getSlidesOffsetAfter(),
            spaceBetween: 0,
            initialSlide: currentActiveSlideIndex,
            loop: false,
            speed: 700,
            roundLengths: false,
            preloadImages: false,
            touchMoveStopPropagation: false,
            threshold: utils.device.isTouch() ? 10 : 6,
            passiveListeners: true,
            preventClicks: true,
            watchSlidesProgress: slideOpacity,
            watchSlidesVisibility: false,
            grabCursor: !utils.device.isTouch(),
            customTransition: true,
            slideToClickedSlide: false,
            virtualTranslate: false,
            watchOverflow: false,
            resistanceRatio: 0.85,
            on: {
                init: _onSwiperInit,
                setTransition: _onSetTransition,
                progress: _onSwiperProgress,
                touchStart: _onTouchStart,
            }
        };

        // Add scrub-specific config
        if (isScrubActive) {
            swiperOptions.updateOnWindowResize = false;
            swiperOptions.grabCursor = false;
            utils.dom.addClass(DOM.swiper, 'swiper-no-swiping');
        } else {
            // Attach pagination only if it exists
            if (DOM.swiperPagination) {
                swiperOptions.pagination = {
                    el: DOM.swiperPagination,
                    type: 'bullets',
                    clickable: true,
                };
            }

            // Setup navigation buttons if available and non touch
            if (!utils.device.isTouch()) _setupNavigation();

            // Attach bounds-checking callbacks
            swiperOptions.on.touchMove = _onTouchMove;
            swiperOptions.on.touchEnd = _onTouchEnd;
            swiperOptions.on.transitionStart = _checkBounds;
            swiperOptions.on.transitionEnd = _checkBounds;
        }

        swiper = new Swiper(selectorEl, swiperOptions);

        utils.system.nextTick(() => {
            swiper.init();
            _updateSwiperStateByProgress(0);
            _update();
        });
    };

    /**
     * Gets the spacing between Swiper slides based on the `.swiper-column-gap` element.
     * @returns {number}
     */

    const _getSlideSpacing = () => {
        return DOM.cachedSlideSpacing ?? 0;
    };

    /**
     * Calculates horizontal offset before the first Swiper slide,
     * based on layout breakpoints and centered slide settings.
     * @returns {number}
     */
    const _getSlidesOffset = () => {
        const spacingOffset = _getSlideSpacing(); // already cached
        const bodyWidth = document.body.clientWidth;
        const maxWrapperSize = _getMaxWrapperSize();
        const adjustedMax = maxWrapperSize + 0.5;
        const viewportWidth = window.innerWidth;

        if (viewportWidth < adjustedMax) {
            return centeredSlides && viewportWidth > DOM.mdBreakpoint ? 0 : spacingOffset;
        }

        if (centeredSlides) return 0;

        //const additionalSpacing = spacingOffset// * 2;
        const wrapperWidth = maxWrapperSize - spacingOffset;
        const padding = (bodyWidth - wrapperWidth) * 0.5;

        return Math.max(padding, spacingOffset);
    };

    /**
     * Calculates horizontal offset after the last Swiper slide.
     * Adjusts for cases where there are too few slides to fill the width.
     * @returns {number}
     */
    const _getSlidesOffsetAfter = () => {
        const beforeOffset = _getSlidesOffset();

        if (centeredSlides || !swiperInitialized || !swiper) {
            return beforeOffset;
        }

        const slides = swiper.slides || [];
        const spacing = _getSlideSpacing();
        const slideCount = slides.length;

        let totalSlideWidth = 0;
        for (let i = 0; i < slideCount; i++) {
            totalSlideWidth += slides[i]?.offsetWidth || 0;
        }

        const containerWidth = swiper.width;
        const remainingSpace = containerWidth - beforeOffset - totalSlideWidth;

        if (remainingSpace > 0) {
            const compensation = Math.round(remainingSpace + spacing * (slideCount - 1)) + 1;
            return -compensation;
        }

        return beforeOffset;
    };

    /**
     * Checks swiper bounds (start/end) and updates navigation arrow visibility.
     */
    const _checkBounds = () => {
        if (!swiper || !swiperInitialized || !isSwiperNavigation) return;

        const isBeginning = swiper.isBeginning;
        const isEnd = swiper.isEnd;

        _updateSwiperNavigation(isBeginning, isEnd);
    };

    /**
     * Configures Swiper pagination if available and scrub mode is off.
     */
    const _setupPagination = () => {
        if (!DOM.swiperPagination) return;

        swiper.params.pagination = {
            el: DOM.swiperPagination,
            type: 'bullets',
            clickable: true
        };
    };

    const _setupNavigation = () => {
        const container = DOM.swiperNavigationContainer;
        if (!container) return;

        DOM.swiperNext = container.querySelector('.swiper-next');
        DOM.swiperPrev = container.querySelector('.swiper-prev');
        isSwiperNavigation = true;

        if (DOM.swiperNext) {
            DOM.swiperNext.addEventListener('click', () => {
                swiper.slideTo(swiper.activeIndex + 1);
            });
        }

        if (DOM.swiperPrev) {
            DOM.swiperPrev.addEventListener('click', () => {
                swiper.slideTo(swiper.activeIndex - 1);
            });
        }
    };

    const _onSwiperInit = () => {
        swiperInitialized = true;
        _toggleSlidesInteraction(true);
    };

    const _toggleSlidesInteraction = (enabled = true) => {
        if (!swiperInitialized || !swiper || slidesInteraction == enabled) return;
        const slides = swiper.slides;
        const len = slides.length;
        let slide;
        for (let i = 0; i < len; i++) {
            slide = slides[i];
            if (!slide) continue;
            (!enabled) ? utils.dom.addClass(slide, 'no-interaction'): utils.dom.removeClass(slide, 'no-interaction');
        }

        slidesInteraction = enabled;
    }

    /**
     * Callback to apply transition duration to all slides manually.
     * @param {number} speed - Transition duration in milliseconds.
     */

    const _onSetTransition = (speed) => {
        if (!swiperInitialized || !swiper) return;

        const slides = swiper.slides;
        const len = slides.length;
        let slide;

        for (let i = 0; i < len; i++) {
            slide = slides[i];
            if (slide && slide.style) {
                slide.style.transition = `${speed}ms`;
            }
        }
    };

    /**
     * Callback to apply visual effects based on Swiper progress.
     * Primarily controls per-slide opacity
     * @param {number} progress - Overall progress of Swiper (0–1).
     */
    // Constants for Swiper slide opacity effect
    const OPACITY_THRESHOLD = 0.6; // Threshold below which we disable interaction
    const OPACITY_DIFF_THRESHOLD = 0.01; // Skip if opacity hasn't changed significantly
    const OPACITY_MIN_PROGRESS = 0.25; // Minimum slide progress to begin fading
    const OPACITY_MAX_PROGRESS = 0.85; //1; // Max slide progress
    const OPACITY_MIN_VALUE = 0.25; // Faded-out opacity
    const OPACITY_MAX_VALUE = 1; // Fully visible opacity

    const _onSwiperProgressNotInUse = (progress) => {
        if (!swiperInitialized || !swiper || !slideOpacity) return;

        const slides = swiper.slides;
        const len = slides.length;

        let i = 0,
            slide, slideProgress, absProgress, opacity, currentOpacity, hasClass;

        while (i < len) {
            slide = slides[i++];
            if (!slide) continue;

            slideProgress = utils.math.clamp(slide.progress ?? -1, -1, 1);
            absProgress = utils.math.clamp(Math.abs(slideProgress), OPACITY_MIN_PROGRESS, OPACITY_MAX_PROGRESS);
            opacity = utils.math.interpolateRange(absProgress, OPACITY_MIN_PROGRESS, OPACITY_MAX_PROGRESS, OPACITY_MAX_VALUE, OPACITY_MIN_VALUE);
            opacity = (opacity * 1000 | 0) / 1000; // Fast toFixed(3)

            //Use custom property instead of style.opacity
            slide.style.setProperty('--swiper-slide-opacity', (1 - opacity).toFixed(3));

            if (!isTouching) {
                hasClass = slide.classList.contains('no-interaction');
                (opacity < OPACITY_THRESHOLD) ?
                (!hasClass && utils.dom.addClass(slide, 'no-interaction')) :
                (hasClass && utils.dom.removeClass(slide, 'no-interaction'));
            }
        }
    };

    const _onSwiperProgress = (progress) => {
        if (!swiperInitialized || !swiper || !slideOpacity) return;

        const slides = swiper.slides;
        const len = slides.length;

        let i = 0,
            slide, slideProgress, absProgress, opacity, currentOpacity, hasClass;

        while (i < len) {
            slide = slides[i++];
            if (!slide) continue;

            slideProgress = utils.math.clamp(slide.progress ?? -1, -1, 1);
            absProgress = utils.math.clamp(Math.abs(slideProgress), OPACITY_MIN_PROGRESS, OPACITY_MAX_PROGRESS);
            opacity = utils.math.interpolateRange(absProgress, OPACITY_MIN_PROGRESS, OPACITY_MAX_PROGRESS, OPACITY_MAX_VALUE, OPACITY_MIN_VALUE);
            //  opacity = Math.pow(opacity, 1.1);
            opacity = (opacity * 1000 | 0) / 1000; // Fast toFixed(3)

            currentOpacity = parseFloat(slide.style.opacity || 1);
            if (Math.abs(currentOpacity - opacity) > OPACITY_DIFF_THRESHOLD) {
                slide.style.opacity = opacity;
            }

            if (!isTouching) {
                hasClass = slide.classList.contains('no-interaction');
                (opacity < OPACITY_THRESHOLD) ? (!hasClass && utils.dom.addClass(slide, 'no-interaction')) : (hasClass && utils.dom.removeClass(slide, 'no-interaction'));
            }
        }
    };

    /**
     * Callback triggered when user starts interacting with Swiper (touch/drag).
     * Clears all transition styles to allow natural dragging.
     */
    const _onTouchStart = () => {
        if (!swiperInitialized || !swiper || isScrubActive) return;

        const slides = swiper.slides;
        const len = slides.length;
        let slide;

        for (let i = 0; i < len; i++) {
            slide = slides[i];
            if (slide && slide.style) {
                slide.style.transition = '';
            }
        }
    };

    const _onTouchMove = () => {
        if (!swiperInitialized || !swiper || isScrubActive) return;
        isTouching = true;
        if (!utils.device.isTouch()) {
            _toggleSlidesInteraction(false);
        }

    };

    const _onTouchEnd = () => {
        if (!swiperInitialized || !swiper || isScrubActive) return;
        isTouching = false;
        _checkBounds();
        if (!utils.device.isTouch()) {
            _toggleSlidesInteraction(true);
        }
    };

    /**
     * Recalculates Swiper layout, navigation, and associated content positioning.
     */
    const _update = () => {
        _updateSwiper();
        _updateTextBeforeWrapper();
        _updateSwiperNavigationContainer();
    };

    const _getSlideSpacingFromDOM = () => {
        const spacingEl = DOM.swiperSpacing;
        return spacingEl ? Math.ceil(spacingEl.offsetWidth) : 0;
    };

    /**
     * Updates Swiper layout dynamically: offsets, spacing, centering.
     * Also updates pagination and visual effects.
     */
    const _updateSwiper = () => {
        if (!swiperInitialized || !swiper) return;

        // Call to ensure transition is fully cleared before layout updates
        swiper.transitionEnd?.();

        // Re-evaluate `centeredSlides` based on screen size
        const isSmallScreen = window.innerWidth < DOM.mdBreakpoint;
        centeredSlides = isSmallScreen ? false : options.centeredSlides;

        DOM.cachedSlideSpacing = _getSlideSpacingFromDOM();

        swiper.params.slidesOffsetBefore = _getSlidesOffset();
        swiper.params.slidesOffsetAfter = _getSlidesOffsetAfter();
        swiper.params.spaceBetween = _getSlideSpacing();
        swiper.params.centeredSlides = centeredSlides;

        swiper.update();
        swiper.pagination?.update?.();

        _onSwiperProgress(swiper.progress);
    };

    /**
     * Toggles visibility of Swiper navigation buttons based on scroll bounds.
     * @param {boolean} isBeginning - True if at the first slide.
     * @param {boolean} isEnd - True if at the last slide.
     */

    const _updateSwiperNavigation = (isBeginning, isEnd) => {
        if (!isSwiperNavigation) return;

        if (DOM.swiperNext) {
            const nextClassList = DOM.swiperNext.classList;
            const shouldBeHidden = isEnd;
            if (nextClassList.contains('hide') !== shouldBeHidden) {
                nextClassList.toggle('hide', shouldBeHidden);
            }
        }

        if (DOM.swiperPrev) {
            const prevClassList = DOM.swiperPrev.classList;
            const shouldBeHidden = isBeginning;
            if (prevClassList.contains('hide') !== shouldBeHidden) {
                prevClassList.toggle('hide', shouldBeHidden);
            }
        }
    };

    /**
     * Updates custom CSS vars for aligning text before the Swiper.
     * Based on current wrapper width, offset, and slide layout.
     */

    const _updateTextBeforeWrapper = () => {
        const { textBefore, mediaContainerRef } = DOM;
        if (!swiper || !textBefore || !mediaContainerRef) return;

        const bodyWidth = document.body.clientWidth;
        const slideWidth = mediaContainerRef.offsetWidth;
        const wDiff = Math.max(0, (bodyWidth - _getMaxWrapperSize()) * 0.5);

        const slideOffset = centeredSlides ? (bodyWidth - slideWidth) * 0.5 + _getSlidesOffset() : _getSlidesOffset();

        const beforeWidth = bodyWidth - slideOffset - wDiff;
        const marginLeft = slideOffset;

        textBefore.style.cssText = `--swiper-text-before-width: ${beforeWidth}px; --swiper-text-before-margin-left: ${marginLeft}px;`;
    };

    /**
     * Updates CSS variable for Swiper navigation container height
     * to match the current media (slide) container height.
     */

    let lastNavigationHeight = -1;

    const _updateSwiperNavigationContainer = () => {
        const { swiperNavigationContainer, mediaContainerRef } = DOM;
        if (!swiper || !swiperNavigationContainer || !mediaContainerRef) return;

        const height = mediaContainerRef.offsetHeight;
        if (height === lastNavigationHeight) return; // Skip if no change

        swiperNavigationContainer.style.setProperty('--swiper-navigation-height', `${height}px`);
        lastNavigationHeight = height;
    };

    /**
     * Sets up a GSAP ScrollTrigger that scrubs Swiper based on scroll progress.
     */

    const _proxy = {
        set _updateSwiperStateByProgress(value) {
            _updateSwiperStateByProgress(value);
        }
    };

    const _initializeGsapAnimation = () => {
        if (!isScrubActive || gsapAnimation) return;

        const slowDownFactor = 0.5;
        const getLVH = utils.css.getLVH;

        let cachedWrapperWidth = DOM.swiperWrapper?.offsetWidth || 0;
        let cachedSlideHeight = (swiper?.slides.length || 0) * getLVH() * slowDownFactor;

        gsapAnimation = gsap.to(_proxy, {
            _updateSwiperStateByProgress: 1,
            duration: 1,
            ease: 'none',
            scrollTrigger: {
                id: `pin-${options.selector?.replace('#', '')}`,
                trigger: DOM.trigger,
                pin: DOM.pin,
                pinSpacing: true,
                scrub: true,
                invalidateOnRefresh: true,

                start: () => `${DOM.trigger.offsetHeight * 0.5}px ${getLVH() * 0.5}px`,

                end: () => `+=${Math.max(cachedWrapperWidth, cachedSlideHeight)}px`,

                //onUpdate: (self) => _updateSwiperStateByProgress(self.progress),

                onRefreshInit: () => {
                    if (swiper && swiperInitialized) {
                        swiper.updateSize();
                        _update();
                    }

                    cachedWrapperWidth = DOM.swiperWrapper?.offsetWidth || 0;
                    cachedSlideHeight = (swiper?.slides.length || 0) * getLVH() * slowDownFactor;
                },

                onRefresh: () => {
                    if (swiper && swiperInitialized) {
                        _update();
                    }
                }
            }
        });
    };

    /**
     * Applies scroll progress (0–1) to Swiper's internal translate state.
     * Used for ScrollTrigger-based scrubbing.
     * @param {number} progress - Normalized scroll progress (0 to 1)
     */

    //let lastScrubProgress = -1;

    const _updateSwiperStateByProgress = (progress) => {
        if (!swiper || !swiperInitialized) return;

        const clamped = utils.math.clamp(isNaN(progress) ? 0 : progress, 0, 1);

        // Avoid unnecessary state updates for small changes
        //if ((clamped * 1000 | 0) === (lastScrubProgress * 1000 | 0)) return;
        //lastScrubProgress = clamped;

        const directionAdjusted = options.scrubDir === -1 ? 1 - clamped : clamped;

        const min = swiper.minTranslate();
        const max = swiper.maxTranslate();
        const translate = (max - min) * directionAdjusted + min;

        swiper.translateTo(translate, 0); // 0 = no duration
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
    };

    const _getMaxWrapperSize = () => {
        const val = DOM.maxWrapperSize;
        return Number.isFinite(val) && val > 0 ? val : document.body.clientWidth;
    };

    /**
     * Resets internal state and cached references
     */

    const _reset = () => {
        DOM = Object.create(null); // avoids prototype inheritance issues
        swiper = null;
        swiperInitialized = false;
        gsapAnimation = null;

        isScrubActive = false;
        isSwiperNavigation = false;
        centeredSlides = true;
        slideOpacity = true;
        currentActiveSlideIndex = 0;

        options = { ...defaultOptions };
    };

    /**
     * Applies `loading="lazy"` and `decoding="async"` to images
     * if Swiper is outside the initial viewport.
     */
    const _maybeLazyLoadImages = () => {
        const swiperEl = DOM.swiper;
        if (!swiperEl) return;

        const { top, bottom } = swiperEl.getBoundingClientRect();
        const viewportHeight = window.innerHeight;

        if (top < viewportHeight && bottom > 0) return; // Swiper is in view

        const images = swiperEl.querySelectorAll('img');
        let img;
        for (let i = 0; i < images.length; i++) {
            img = images[i];
            if (!img.hasAttribute('loading')) img.setAttribute('loading', 'lazy');
            if (!img.hasAttribute('decoding')) img.setAttribute('decoding', 'async');
        }
    };

    /**
     * Main initializer: sets up swiper instance and (optionally) ScrollTrigger.
     * @param {Object} opts
     */
    const initialize = (opts = {}) => {
        _reset();
        options = { ...defaultOptions, ...opts };

        const el = utils.dom.resolveElement(options.selector);
        if (!el) {
            console.warn('[gsapSwiper] Invalid or missing selector.');
            return;
        }

        const swiperEl = el.querySelector('.swiper-container');
        const wrapperEl = swiperEl?.querySelector('.swiper-wrapper') || null;
        const spacingEl = swiperEl?.querySelector('.swiper-column-gap') || null;

        DOM.el = el;
        DOM.mediaContainerRef = el.querySelector('.media-container');
        DOM.textBefore = el.querySelector('.text-before');
        DOM.swiper = swiperEl;
        DOM.swiperSpacing = spacingEl;
        DOM.swiperWrapper = wrapperEl;

        DOM.cachedSlideSpacing = null;

        centeredSlides = options.centeredSlides;
        slideOpacity = options.slideOpacity;

        DOM.maxWrapperSize = utils.css.getCssVarValue(el, '--max-wrapper-size', true);
        DOM.mdBreakpoint = utils.css.getCssVarValue(el, '--md-breakpoint', true) + 0.5;

        isScrubActive = !utils.device.isTouch() && options.isScrubActive;
        if (utils.device.isTouch() && options.isScrubOnTouchActive) {
            isScrubActive = true;
        }

        if (!DOM.swiper) {
            console.warn(`[gsapSwiper] Could not find .swiper-container in ${options.selector}`);
            return;
        }

        if (isScrubActive) {
            el.dataset.scrub = 'true';
            DOM.pin = swiperEl;
            DOM.trigger = wrapperEl;
            _initializeGsapAnimation();
        } else {
            DOM.swiperPagination = el.querySelector('.swiper-pagination');
            DOM.swiperNavigationContainer = el.querySelector('.swiper-navigation-container');
        }

        //_maybeLazyLoadImages();
        _initializeSwiper(swiperEl);
    };

    return {
        initialize,
        update: () => {
            if (swiperInitialized && swiper) _update();
        },
        isScrubbing: () => isScrubActive
    };

};

document.addEventListener('DOMContentLoaded', () => {
    if (scroller) scroller.initialize();

    const carousels = [];

    const carousel1 = createCarousel();
    carousel1.initialize({ selector: '#carousel_1', isScrubActive: true, isScrubOnTouchActive: true });
    carousels.push(carousel1);

    const carousel2 = createCarousel();
    carousel2.initialize({ selector: '#carousel_2', isScrubActive: false, slideOpacity: false });
    carousels.push(carousel2);

    const carousel3 = createCarousel();
    carousel3.initialize({ selector: '#carousel_3', isScrubActive: true, isScrubOnTouchActive: true,slideOpacity: false, scrubDir: -1 });
    carousels.push(carousel3);

    const globalRefresh = () => {
        carousels.forEach(instance => {
            if (!instance.isScrubbing()) {
                instance.update();
            }
        });

        ScrollTrigger.refresh();
    };

    const hideBlocker = () => {
        const blocker = document.getElementById('app_blocker');
        if (!blocker) return;

        blocker.classList.add('hide');

        // Remove after transition ends (or fallback timeout)
        const cleanup = () => {
            blocker.removeEventListener('transitionend', cleanup);
            blocker.remove();
        };

        blocker.addEventListener('transitionend', cleanup);
        setTimeout(() => {
            if (document.body.contains(blocker)) blocker.remove();
        }, 350);
    };

    if (utils.device.isTouch()) {
        window.addEventListener('orientationchange', () => {
            utils.system.nextTick(globalRefresh, null, 500);
        });
    } else {
        window.addEventListener('resize', () => {
            utils.system.nextTick(globalRefresh);
        });
    }

    const isCodePen = document.referrer.includes("codepen.io");
    const hostDomains = isCodePen ? ["codepen.io"] : [];
    hostDomains.push(window.location.hostname);

    const links = document.getElementsByTagName("a");
    utils.url.validateLinks(links, hostDomains);

    utils.system.nextTick(() => {
        globalRefresh();
        hideBlocker();
    }, null, 300);

});
</script>
<script src='https://assets.codepen.io/573855/utils-v3.min.js?v=3'></script>
<script src='https://unpkg.co/gsap@3/dist/gsap.min.js'></script>
<script src='https://assets.codepen.io/16327/ScrollTrigger.min.js?v=3.12'></script>
<script src='https://assets.codepen.io/16327/ScrollSmoother.min.js?v=3.12'></script>
<script src='https://assets.codepen.io/573855/swiper.min.js'></script><script  src="./script.js"></script>