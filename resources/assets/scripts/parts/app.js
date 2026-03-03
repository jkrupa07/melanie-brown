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
  function PanelAnimation() {
  gsap.registerPlugin(ScrollTrigger);

  const section = document.querySelector(".two-panel-section");
  if (!section) return;

  const pinWrap = section.querySelector(".two-panel-pin");
  const scrollContent = section.querySelector(".two-panel-card-group");

  ScrollTrigger.matchMedia({

    // 🖥 Desktop
    "(min-width: 992px)": function () {

      function getScrollAmount() {
        return scrollContent.scrollHeight - pinWrap.clientHeight;
      }

      gsap.timeline({
        scrollTrigger: {
          trigger: section,
          start: "top top",
          end: () => "+=" + getScrollAmount(),
          scrub: true,
          pin: pinWrap,
          pinSpacing: true,
          invalidateOnRefresh: true,
          markers: false,
        },
      })
      .to(scrollContent, {
        y: () => -getScrollAmount(),
        ease: "none",
      });
    },

    // 📱 Mobile
    "(max-width: 991px)": function () {

      function getScrollAmount() {
        // Slightly longer scroll so last card fully shows
        return scrollContent.scrollHeight - pinWrap.clientHeight + 200;
      }

      gsap.timeline({
        scrollTrigger: {
          trigger: section,
          start: "top top",
          end: () => "+=" + getScrollAmount(),
          scrub: true,
          pin: pinWrap,
          pinSpacing: true,
          invalidateOnRefresh: true,
          markers: true,
        },
      })
      .to(scrollContent, {
        y: () => -getScrollAmount(),
        ease: "none",
      });
    }

  });
}

window.addEventListener("load", PanelAnimation);

  }

}