<!-- <h4>This is the footer</h4> -->

<script>
document.addEventListener("DOMContentLoaded", () => {
  const navItems = document.querySelectorAll(".nav li a");
  const sections = document.querySelectorAll("section");

  // Smooth scrolling function
  function smoothScroll(target, duration) {
    const targetElement = document.querySelector(target);
    const targetPosition = targetElement.offsetTop;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    let startTime = null;

    function animation(currentTime) {
      if (startTime === null) startTime = currentTime;
      const timeElapsed = currentTime - startTime;
      const run = ease(timeElapsed, startPosition, distance, duration);
      window.scrollTo(0, run);
      if (timeElapsed < duration) requestAnimationFrame(animation);
    }

    // Easing function
    function ease(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t + b;
      t--;
      return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
  }

  // Event listener for smooth scrolling on navigation click
  navItems.forEach((item) => {
    item.addEventListener("click", (e) => {
      e.preventDefault();
      const targetSection = item.getAttribute("href");
      smoothScroll(targetSection, 400); // Adjust the duration as needed

      // Activate the clicked navigation item
      navItems.forEach((navItem) => {
        navItem.classList.remove("active");
      });
      item.classList.add("active");

      // Store the active section in sessionStorage
      sessionStorage.setItem("activeSection", targetSection);
    });
  });

  // Automatically activate navigation item based on scroll position
  window.addEventListener("scroll", () => {
    const scrollPosition = window.pageYOffset;

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;

      if (scrollPosition >= sectionTop - sectionHeight / 3) {
        const sectionId = section.getAttribute("id");
        const correspondingNavItem = document.querySelector(
          `.nav li a[href="#${sectionId}"]`
        );

        // Activate the corresponding navigation item
        navItems.forEach((navItem) => {
          navItem.classList.remove("active");
        });
        correspondingNavItem.classList.add("active");

        // Store the active section in sessionStorage
        sessionStorage.setItem("activeSection", `#${sectionId}`);
      }
    });
  });

  // Check sessionStorage for an active section on page load
  const activeSection = sessionStorage.getItem("activeSection");
  if (activeSection) {
    const correspondingNavItem = document.querySelector(
      `.nav li a[href="${activeSection}"]`
    );

    // Scroll to the active section
    smoothScroll(activeSection, 400); // Adjust the duration as needed

    // Activate the corresponding navigation item
    navItems.forEach((navItem) => {
      navItem.classList.remove("active");
    });
    correspondingNavItem.classList.add("active");
  }
});


</script>
<?php wp_footer(); ?>
</body>
</html>