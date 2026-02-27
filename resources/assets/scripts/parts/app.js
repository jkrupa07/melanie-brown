import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

export class App {
  init() {
    this.setupScrollAnimation();
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
    gsap.registerPlugin(ScrollTrigger);

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
}