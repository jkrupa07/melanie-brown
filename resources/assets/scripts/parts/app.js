import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export class App {
  init() {
    this.setupScrollAnimation();
    this.stickyContentScroll();
  }

  setupScrollAnimation() {
    // const cards = gsap.utils.toArray(".experience-card");

    // cards.forEach((card, i) => {
    //   ScrollTrigger.create({
    //     trigger: card,
    //     start: "top 150px",        // adjust depending on header height
    //     end: "+=100%",             // each card scrolls one viewport height
    //     pin: true,
    //     pinSpacing: false,
    //     scrub: false,
    //     markers: true
    //   });
    // });
    // gsap.registerPlugin(ScrollTrigger);

    const cards = gsap.utils.toArray(".experience-card");

    cards.forEach((card, index) => {
      gsap.to(card, {
        ease: "none",
        scrollTrigger: {
          trigger: card,
          start: "top 120px",
          end: "bottom 120px",
          scrub: true,
        }
      });
    });
  }
  stickyContentScroll() {

    const sections = document.querySelectorAll(".sticky-content-section");

    sections.forEach((section) => {

      const inner = section.querySelector(".inner-content");
      if (!inner) return;

      const scrollAmount = inner.scrollHeight - section.offsetHeight;

      gsap.to(inner, {
        y: -scrollAmount,
        ease: "none",
        scrollTrigger: {
          trigger: section,
          start: "top +60px",
          end: () => "bottom +60px",
          scrub: true,
          pin: true,
          pinSpacing: true,   
          invalidateOnRefresh: true
        }
      });

    });
  }
}