<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"
    integrity="sha512-v/wOVTkoU7mXEJC3hXnw9AA6v32qzpknvuUF6J2Lbkasxaxn2nYcl+HGB7fr/kChGfCqubVr1n2sq1UFu3Gh1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    gsap.to("#aiCard", {
        opacity: 1,
        scale: 1,
        delay: 0.6,
        duration: 0.8,
        ease: "back.out(1.7)"
    });

    let text = "Fetching customer trend...";
    gsap.to("#typingBox", {
        width: text.length + "ch",
        duration: 1.8,
        delay: 1.2,
        ease: "steps(" + text.length + ")"
    });
</script>
<script>
    const tabLinks = document.querySelectorAll(".tabs a");
    const tabContents = document.querySelectorAll(".tab-content");

    tabLinks.forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();

            // Deactivate all tabs and contents
            tabLinks.forEach(l => l.classList.remove("active"));
            tabContents.forEach(c => c.classList.remove("active"));

            // Activate clicked tab
            link.classList.add("active");
            const target = document.querySelector(link.getAttribute("href"));
            if (target) {
                target.classList.add("active");
            }
        });
    });
</script>

<!-- header -->
   <script>
    document.querySelectorAll('.dropdown').forEach(item => {
      const link = item.querySelector('.nav-link.dropdown-toggle');
      const icon = link.querySelector('.dropdown-icon');

      item.addEventListener('mouseover', () => {
        icon.classList.remove('bi-chevron-bar-down');
        icon.classList.add('bi-chevron-bar-up');
        const menu = item.querySelector('.dropdown-menu');
        if (menu) menu.style.display = 'block';
      });

      item.addEventListener('mouseout', () => {
        icon.classList.remove('bi-chevron-bar-up');
        icon.classList.add('bi-chevron-bar-down');
        const menu = item.querySelector('.dropdown-menu');
        if (menu) menu.style.display = 'none';
      });
    });
  </script>
  <script>
const phrases = [
  "Find what you need...",
  "Look up a name, place, or tag...",
  "Type to discover...",
  "Start your search here...",
  "Explore by keyword...",
  "What are you looking for?",
  "Search the universe...",
  "Dive into the data...",
  "Unearth hidden gems...",
  "Let's find it together..."
];
  const input = document.getElementById("searchInput");
  let phraseIndex = 0;
  let charIndex = 0;
  let typing = true;

  function typePlaceholder() {
    const currentPhrase = phrases[phraseIndex];

    if (typing) {
      input.placeholder = currentPhrase.substring(0, charIndex++);
      if (charIndex > currentPhrase.length) {
        typing = false;
        setTimeout(typePlaceholder, 1500); // Wait before deleting
        return;
      }
    } else {
      input.placeholder = currentPhrase.substring(0, charIndex--);
      if (charIndex < 0) {
        typing = true;
        phraseIndex = (phraseIndex + 1) % phrases.length;
      }
    }

    setTimeout(typePlaceholder, typing ? 100 : 50);
  }

  // Start animation
  typePlaceholder();
</script>

<script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".wave-section", {
        y: 100,
        opacity: 0,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
            trigger: ".wave-section",
            start: "top 60%", // when top of section hits 80% of viewport
            toggleActions: "play none none none"
        }
    });
</script>

<!-- last card animation -->
<script>
    AOS.init({
        duration: 900,
        easing: 'ease-out-cubic',
        once: true,
    });
</script>


<!-- JavaScript to Synchronize Carousel and Quick Tips -->
<script>
    // Select carousel elements
    const carousel = document.querySelector('#carouselExampleIndicators');
    const tip1Title = document.getElementById('tip1-title');
    const tip1Desc = document.getElementById('tip1-desc');
    const tip2Title = document.getElementById('tip2-title');
    const tip2Desc = document.getElementById('tip2-desc');

    // Define content for each slide
    const slideContent = [
        {
            title: "Case Study: Samsung Increases Customer Satisfaction and Streamlines the Resolution Journey with Yext Help Site Search",
            description: "Within just a few months, Samsung experienced a significant lift in NPS and CSAT by launching a Yext-powered Help Site."
        },
        {
            title: "Case Study: Apple Revolutionizes Customer Service Experience with Advanced AI Integration",
            description: "Apple improved its customer service by implementing advanced AI solutions for better customer query management."
        },
        {
            title: "Case Study: Google Boosts Customer Engagement by Optimizing Support Channels",
            description: "Google enhanced its customer engagement and support systems by optimizing existing support channels."
        }
    ];

    // Function to truncate text to the first 10 words and add ellipsis
    function truncateText(elementId, wordLimit) {
        const element = document.getElementById(elementId);
        const words = element.innerText.split(' ');
        if (words.length > wordLimit) {
            element.innerText = words.slice(0, wordLimit).join(' ') + '...';
        }
    }

    // Event listener for carousel change
    carousel.addEventListener('slide.bs.carousel', function (event) {
        const slideIndex = event.to;

        // Update content based on the slide index
        tip1Title.textContent = slideContent[slideIndex].title;
        tip1Desc.textContent = slideContent[slideIndex].description;

        // Optionally, you can update the second tip as well
        if (slideIndex < slideContent.length - 1) {
            tip2Title.textContent = slideContent[slideIndex + 1].title;
            tip2Desc.textContent = slideContent[slideIndex + 1].description;
        } else {
            tip2Title.textContent = slideContent[0].title;
            tip2Desc.textContent = slideContent[0].description;
        }

        // Apply truncation after content update
        truncateText('tip1-title', 10);  // Truncate title for tip 1
        truncateText('tip1-desc', 10);   // Truncate description for tip 1
        truncateText('tip2-title', 10);  // Truncate title for tip 2
        truncateText('tip2-desc', 10);   // Truncate description for tip 2
    });

    // Apply truncation on page load
    window.onload = function() {
        truncateText('tip1-title', 10);  // Truncate title for tip 1
        truncateText('tip1-desc', 10);   // Truncate description for tip 1
        truncateText('tip2-title', 10);  // Truncate title for tip 2
        truncateText('tip2-desc', 10);   // Truncate description for tip 2
    };

    
</script>

