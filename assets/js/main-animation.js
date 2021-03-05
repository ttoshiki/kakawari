'use strict';

const animation1 = gsap.timeline({ defaults: { duration: 0.6 }})
  .to(".home__mv.-first", { delay: 5, opacity: 0 })
  .to(".home__mv.-third", { delay: 6, opacity: 1 })
  .to(".home__mv.-third", { delay: 5.2, opacity: 0 })
  .to(".home__mv.-first", { opacity: 1 })

const animation2 = gsap.timeline({ defaults: { duration: 0.6 }})
  .to(".home__mv.-second", { delay: 5.6, opacity: 1 })
  .to(".home__mv.-second", { delay: 5, opacity: 0 })

  animation1.repeat(-1)
  animation2.repeat(-1).repeatDelay(6.8)