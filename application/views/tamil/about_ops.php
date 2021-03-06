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
  padding: 150px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 3px;
  background: #b2b1b1;
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
  background: #f6f6f6;
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
  border-color: #f6f6f6 transparent transparent transparent;
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
  width: 55px;
  height: 55px;
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
                        <h1 class="page-title-ta">ஓ.பி.எஸ் பற்றி</h1>
                        <ul class="page-list">
                            <li><a href="<?php echo base_url(); ?>tamil/">முகப்பு /</a></li>
                            <li><a href="<?php echo base_url(); ?>tamil/about_ops/">About</a></li>
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
    <div class="politx-content-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">ஓ.பி.எஸ் பற்றி</p>
                        <h3 class="ta_title">தமிழக துணை முதல்வர்</h3>
                        <p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ 
											$string = htmlspecialchars_decode(stripslashes($rows->personal_life_text_ta));
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


	<div class="stories-area" style="padding-bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="stories-thumb mr-4">
                        <img src="<?php echo base_url(); ?>assets/basic/img/political_career.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-01">
                        <p class="section-subtitle">வெற்றிக் கதைகள்</p>
                        <h3 class="ta_title">அரசியல் வாழ்க்கை</h3>
						<p class="description">
						<?php 
							if (count($personal)>0){ 
									foreach($personal as $rows){ }
										echo htmlspecialchars_decode(stripslashes($rows->political_career_text_ta));
						} ?>
						</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="stories-area padding-bottom-100" style="padding-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-8 align-self-center">
                    <div class="content-box-style-06">
                        
                        <div class="row">

                           <div class="col-md-3">
                                <ul class="nav nav-tabs">
                                    <li><a class="active" data-toggle="tab" href="#home">2010 - 2020</a></li>
                                    <li><a data-toggle="tab" href="#menu1">2000 - 2010</a></li>
                                    <li><a data-toggle="tab" href="#menu2">1990 - 2000</a></li>
									<li><a data-toggle="tab" href="#menu3">1980 - 1990</a></li>
									<li><a data-toggle="tab" href="#menu4">1973</a></li>
                                </ul>
                            </div>
                           <div class="col-md-9">
                                <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
									<table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<td>2017 – தமிழ்நாடு துணை முதலமைச்சர் </td>
											</tr>
											<tr>
												<td>2017 – கழக ஒருங்கிணைப்பாளர் </td>
											</tr>
											<tr>
												<td>2016 - மூன்றாவது முறை தமிழ்நாடு முதலமைச்சர்</td>
											</tr>
											<tr>
												<td>2016 – நான்காவது முறை சட்டமன்ற உறுப்பினர் (போடிநாயக்கனூர் தொகுதி)</td>
											</tr>
											<tr>
												<td>2014 -இரண்டாவது முறை தமிழ்நாடு முதலமைச்சர் </td>
											</tr>
											<tr>
												<td>2011 – அவை முன்னவர் </td>
											</tr>
											<tr>
												<td>2011 – மூன்றாவது முறை சட்டமன்ற உறுப்பினர் (போடிநாயக்கனூர் தொகுதி)</td>
											</tr>
										</table>
                                    </div>
									<div id="menu1" class="tab-pane fade in">
                                      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<td>2007 – கழக பொருளாளர் </td>
											</tr>
											<tr>
												<td>2006 – 2011 – சட்டமன்ற எதிர்க்கட்சித் துணைத்தலைவர்</td>
											</tr>
											<tr>
												<td>2006 – இரண்டாவது முறை சட்டமன்ற உறுப்பினர் (பெரியகுளம் தொகுதி)</td>
											</tr>
											<tr>
												<td>2001 – முதல் முறை தமிழ்நாடு முதலமைச்சர்</td>
											</tr>
											<tr>
												<td>2001 – முதல் முறை சட்டமன்ற உறுப்பினர் (பெரியகுளம் தொகுதி)</td>
											</tr>
										</table>
                                    </div>
									<div id="menu2" class="tab-pane fade in">
                                      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<td>2000 – தேனி மாவட்ட கழக செயலாளர்</td>
											</tr>
											<tr>
												<td>1998 - பெரியகுளம் நகர கழக செயலாளராக இரண்டாவது முறை தேர்வு</td>
											</tr>
											<tr>
												<td>1997 - தேனி மாவட்ட எம்.ஜி.ஆர் இளைஞரணி செயலாளர் </td>
											</tr>
											<tr>
												<td>1996 - பெரியகுளம் நகர மன்றத் தலைவர்</td>
											</tr>
											<tr>
												<td>1993 – பெரியகுளம் நகர கழக செயலாளர் </td>
											</tr>
										</table>
                                    </div>
									<div id="menu3" class="tab-pane fade in">
                                      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											<tr>
												<td>1984 – பெரியகுளம் நகர எம்.ஜி.ஆர் இளைஞரணி துணை செயலாளர் </td>
											</tr>
											<tr>
												<td>1984 – பெரியகுளம் நகர 18 வது வார்டு கழக செயலாளர் </td>
											</tr>
											<tr>
												<td>1980 – பெரியகுளம் நகர 18 வது வார்டு கழக மேலமைப்பு பிரதிநிதி </td>
											</tr>
										</table>
                                    </div>
									<div id="menu4" class="tab-pane fade in">
                                      <table width="100%" border="0" cellspacing="2" cellpadding="2" class="party-table">
											
											<tr>
												<td>1973 - அஇஅதிமுக உறுப்பினர்</td>
											</tr>
										</table>
                                    </div>
                                </div>
                            </div>
					</div>
				</div>
				</div>			
		</div>
	</div>
	</div>
<!--	
<div class="politx-content-area padding-top-50">
	<section class="timeline">
	  <ol>
		<li>
		  <div>
			<time>2017 </time> கழக ஒருங்கிணைப்பாளர் தமிழ்நாடு துணை முதலமைச்சர் – இதுவரை
		  </div>
		</li>
		<li>
		  <div>
			<time>2016 </time> மூன்றாவது முறை தமிழ்நாடு முதலமைச்சர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2016 </time> போடிநாயக்கனூர் சட்டமன்ற உறுப்பினராக நான்காவது முறை தேர்வு 
		  </div>
		</li>
		<li>
		  <div>
			<time>2014 </time> இரண்டாவது முறை தமிழ்நாடு முதலமைச்சர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2011 </time> அவை முன்னவர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2011 </time> போடிநாயக்கனூர் தொகுதி சட்டமன்ற உறுப்பினராக மூன்றாவது முறை தேர்வு 
		  </div>
		</li>
		<li>
		  <div>
			<time>2007 </time> கழக பொருளாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2006 - 2011 </time> சட்டமன்ற எதிர்க்கட்சித் துணைத்தலைவர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2006 </time> பெரியகுளம் சட்டமன்ற உறுப்பினர் இரண்டாவது முறை தேர்வு 
		  </div>
		</li>
		<li>
		  <div>
			<time>2004 </time> கழக தேர்தல் பிரிவு செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2001 </time> முதல்முறை தமிழ்நாடு முதலமைச்சர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>2001 </time> முதல்முறை பெரியகுளம் தொகுதி சட்டமன்ற உறுப்பினர்
		  </div>
		</li>
		<li>
		  <div>
			<time>2000 </time> தேனி மாவட்ட கழக செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1998 </time> பெரியகுளம் நகர கழக செயலாளராக இரண்டாவது முறை தேர்வு 
		  </div>
		</li>
		<li>
		  <div>
			<time>1997 </time> தேனி மாவட்ட எம்.ஜி.ஆர் இளைஞரணி செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1996 </time> பெரியகுளம் நகர் மன்றத் தலைவர்
		  </div>
		</li>
		<li>
		  <div>
			<time>1993 </time> பெரியகுளம் நகர கழக செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1991 </time> பெரியகுளம் நகர கூட்டுறவு வங்கி இயக்குனர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1989 </time> பெரியகுளம் நகர கழக இணை செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1984 </time> பெரியகுளம் நகர எம்.ஜி.ஆர் இளைஞரணி துணை செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1984 </time> பெரியகுளம் நகர 18 வது வார்டு கழக செயலாளர் 
		  </div>
		</li>
		<li>
		  <div>
			<time>1980 </time> பெரியகுளம் நகர 18 வது வார்டு கழக மேலமைப்பு பிரதிநிதி 
		  </div>
		</li>
		<li>
		  <div>
			<time>1977 </time> அஇஅதிமுக உறுப்பினர்
		  </div>
		</li>
		<li>
		  <div>
			<time>1969 </time> அரசியல் வாழ்க்கை ஆரம்பம்
		  </div>
		</li>
		<li></li>
	  </ol>
	  
	  <div class="arrows">
		<button class="arrow arrow__prev disabled" disabled>
		  <img src="<?php echo base_url(); ?>assets/basic/img/left_arrow.png" alt="prev timeline arrow">
		</button>
		<button class="arrow arrow__next">
		  <img src="<?php echo base_url(); ?>assets/basic/img/right_arrow.png" alt="Next timeline arrow">
		</button>
	  </div>

	</section>
</div>
-->
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
    