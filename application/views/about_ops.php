<style>
button {
  background: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}

/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.timeline {
  white-space: nowrap;
  overflow-x: hidden;
  font-family: var(--secondary-font);
  letter-spacing: 0px;
  color: #616368;
}

.timeline ol {
  font-size: 0;
  width: 100vw;
  padding: 250px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 3px;
  background: #fff;
}

.timeline ol li:last-child {
  width: 280px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #0B9421;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 280px;
  padding: 15px;
  font-size: 1rem;
  white-space: normal;
  color: black;
  background: white;
}

.timeline ol li div::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}

.timeline ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: white transparent transparent transparent;
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}

.timeline ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent white;
}

.timeline time {
  display: block;
  font-size: 1.2rem;

  margin-bottom: 8px;
}


/* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline .arrows {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.timeline .arrows .arrow__prev {
  margin-right: 20px;
}

.timeline .disabled {
  opacity: .5;
}

.timeline .arrows img {
  width: 45px;
  height: 45px;
}


/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 599px) {
  .timeline ol,
  .timeline ol li {
    width: auto; 
  }
  
  .timeline ol {
    padding: 0;
    transform: none !important;
  }
  
  .timeline ol li {
    display: block;
    height: auto;
    background: transparent;
  }
  
  .timeline ol li:first-child {
    margin-top: 25px;
  }
  
  .timeline ol li:not(:first-child) {
    margin-left: auto;
  }
  
  .timeline ol li div {
    width: 94%;
    height: auto !important;
    margin: 0 auto 25px;
  }
  
  .timeline ol li div {
    position: static;
  }
  
  .timeline ol li:nth-child(odd) div {
    transform: none;
  }
  
  .timeline ol li:nth-child(odd) div::before,
  .timeline ol li:nth-child(even) div::before {
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: none;
    border-left: 1px solid white;
    height: 25px;
  }
  
  .timeline ol li:last-child,
  .timeline ol li:nth-last-child(2) div::before,
  .timeline ol li:not(:last-child)::after,
  .timeline .arrows {
    display: none;
  }
}
</style>

<!-- breadcrumb-area start -->
    <div class="breadcrumb-area breadcrumb-style-02 main-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner padding-top-150">
                        <h1 class="page-title">About OPS</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>">Home /</a></li>
                            <li><a href="<?php echo base_url(); ?>/index/about_ops/">About</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-icon">
            <i class="flaticon-fireworks"></i>
        </div>
    </div>
    <!-- breadcrumb-area end -->

  

    <!-- politx-content-area start -->
    <div class="politx-content-area padding-top-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">About OPS</p>
                        <h3>Deputy Chief Minister of Tamil Nadu</h3>
                        <p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ 
											$string = htmlspecialchars_decode(stripslashes($rows->personal_life_text_en));
									}
							echo $string;
						} ?>
						</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="image-box-style-05">
                        <img src="<?php echo base_url(); ?>assets/basic/img/ops_home_img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- politx-content-area end -->


	<div class="stories-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stories-thumb mr-4">
                        <img src="<?php echo base_url(); ?>assets/basic/img/political_career.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">Success stories</p>
                        <h3>Political Career</h3>
						<p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ }
										echo htmlspecialchars_decode(stripslashes($rows->political_career_text_en));
						} ?>
						</p>
                    </div>
                </div>
            </div>
        </div>

<section class="timeline">
  <ol>
    <li>
      <div>
        <time>1934</time> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
      </div>
    </li>
    <li>
      <div>
        <time>1937</time> Proin quam velit, efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
      </div>
    </li>
    <li>
      <div>
        <time>1940</time> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
      </div>
    </li>
    <li>
      <div>
        <time>1943</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1946</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1956</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1957</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1967</time> Aenean condimentum odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
      </div>
    </li>
    <li>
      <div>
        <time>1977</time> Vestibulum porttitor lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
      </div>
    </li>
    <li>
      <div>
        <time>1985</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2000</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2005</time> In mattis elit vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li></li>
  </ol>
  
  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
    </button>
  </div>
  
</section>

    </div>
	


<script src="<?php echo base_url(); ?>assets/basic/js/scrool.js"></script>
<script src="<?php echo base_url(); ?>assets/basic/js/hammer.min.js"></script>

<script id="rendered-js" >
(function () {

  // VARIABLES
  const timeline = document.querySelector(".timeline ol"),
  elH = document.querySelectorAll(".timeline li > div"),
  arrows = document.querySelectorAll(".timeline .arrows .arrow"),
  arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
  arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
  firstItem = document.querySelector(".timeline li:first-child"),
  lastItem = document.querySelector(".timeline li:last-child"),
  xScrolling = 280,
  disabledClass = "disabled";

  // START
  window.addEventListener("load", init);

  function init() {
    setEqualHeights(elH);
    animateTl(xScrolling, arrows, timeline);
    setSwipeFn(timeline, arrowPrev, arrowNext);
    setKeyboardFn(arrowPrev, arrowNext);
  }

  // SET EQUAL HEIGHTS
  function setEqualHeights(el) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {if (window.CP.shouldStopExecution(0)) break;
      const singleHeight = el[i].offsetHeight;

      if (counter < singleHeight) {
        counter = singleHeight;
      }
    }window.CP.exitedLoop(0);

    for (let i = 0; i < el.length; i++) {if (window.CP.shouldStopExecution(1)) break;
      el[i].style.height = `${counter}px`;
    }window.CP.exitedLoop(1);
  }

  // CHECK IF AN ELEMENT IS IN VIEWPORT
  
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth));

  }

  // SET STATE OF PREV/NEXT ARROWS
  function setBtnState(el, flag = true) {
    if (flag) {
      el.classList.add(disabledClass);
    } else {
      if (el.classList.contains(disabledClass)) {
        el.classList.remove(disabledClass);
      }
      el.disabled = false;
    }
  }

  // ANIMATE TIMELINE
  function animateTl(scrolling, el, tl) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {if (window.CP.shouldStopExecution(2)) break;
      el[i].addEventListener("click", function () {
        if (!arrowPrev.disabled) {
          arrowPrev.disabled = true;
        }
        if (!arrowNext.disabled) {
          arrowNext.disabled = true;
        }
        const sign = this.classList.contains("arrow__prev") ? "" : "-";
        if (counter === 0) {
          tl.style.transform = `translateX(-${scrolling}px)`;
        } else {
          const tlStyle = getComputedStyle(tl);
          // add more browser prefixes if needed here
          const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
          const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
          tl.style.transform = `translateX(${values}px)`;
        }

        setTimeout(() => {
          isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
          isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
        }, 1100);

        counter++;
      });
    }window.CP.exitedLoop(2);
  }

  // ADD SWIPE SUPPORT FOR TOUCH DEVICES
  function setSwipeFn(tl, prev, next) {
    const hammer = new Hammer(tl);
    hammer.on("swipeleft", () => next.click());
    hammer.on("swiperight", () => prev.click());
  }

  // ADD BASIC KEYBOARD FUNCTIONALITY
  function setKeyboardFn(prev, next) {
    document.addEventListener("keydown", e => {
      if (e.which === 37 || e.which === 39) {
        const timelineOfTop = timeline.offsetTop;
        const y = window.pageYOffset;
        if (timelineOfTop !== y) {
          window.scrollTo(0, timelineOfTop);
        }
        if (e.which === 37) {
          prev.click();
        } else if (e.which === 39) {
          next.click();
        }
      }
    });
  }

})();

</script>
    