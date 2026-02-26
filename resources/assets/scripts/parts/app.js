import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

export class App {
  init() {
    this.setupScrollAnimation();
  }

  setupScrollAnimation() {
    const cards = document.querySelectorAll(".experience-card");

    cards.forEach((card, i) => {
      ScrollTrigger.create({
        trigger: card,
        start: "top 200px",           // when the top of the card hits 32px from top
        end: () => `+=${card.offsetHeight + 50}`, // duration of pin scroll
        pin: true,                   // pin the card
        pinSpacing: false,           // removes extra space
        id: `card-${i + 1}`,
        markers: false               // set true for debugging
      });
    });
  }
}