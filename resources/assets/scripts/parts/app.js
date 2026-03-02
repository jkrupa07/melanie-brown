import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

export class App {
  init() {
    this.setupScrollAnimation();
    this.stickyContentScroll();
  }

  setupScrollAnimation() {

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

      if (scrollAmount <= 0) return;

      const isMobile = window.innerWidth < 992;

      gsap.to(inner, {
        y: -scrollAmount,
        ease: "none",
        scrollTrigger: {
          trigger: section,
          start: "top +60px",
          end: isMobile
            ? `+=${scrollAmount}`   // 🔥 mobile uses real scroll distance
            : "bottom +60px",       // 🔥 desktop stays EXACT same
          scrub: true,
          pin: true,
          pinSpacing: true,
          markers: false,
          invalidateOnRefresh: true
        }
      });

    });

  }
}