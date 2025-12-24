<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
    integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js"></script>
<script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>

<script>
    'use strict';

    document.addEventListener('DOMContentLoaded', function () {

        /* Progress loader using native image loading events */
        (function () {
            const progressBar = document.querySelector('.progress-bar');
            const loader = document.querySelector('.progressLoader');

            if (!progressBar || !loader) return;

            const setProgress = (p) => {
                const pct = Math.min(100, Math.max(0, Math.round(p)));
                progressBar.style.width = pct + '%';
                if (progressBar.parentElement) {
                    progressBar.parentElement.setAttribute('aria-valuenow', pct);
                }
            };

            const hideLoader = () => {
                // Ensure progress is 100% before hiding
                setProgress(100);

                // Use a short delay before fading out
                setTimeout(() => {
                    loader.style.transition = 'opacity 300ms ease';
                    loader.style.opacity = '0';
                    setTimeout(() => {
                        loader.style.display = 'none';
                    }, 350);
                }, 100);
            };

            // --- Image Loading Logic ---

            // Get all images (excluding the logo in .loaderContent, which loads fast)
            const images = document.querySelectorAll('img:not(.loaderContent img)');
            const totalImages = images.length;
            let loadedCount = 0;

            // If there are no images to track, hide the loader immediately
            if (totalImages === 0) {
                return hideLoader();
            }

            // Simple incremental progress while waiting for images
            let incrementalProgress = 0;
            const maxIncrementalProgress = 90; // Stop incremental at 90%

            // **ADJUSTED SPEED HERE:** 56ms ensures the 0-90% animation takes a minimum of 5 seconds (90 steps * 56ms = 5040ms)
            const ANIMATION_SPEED_MS = 56;

            const incrementalInterval = setInterval(() => {
                if (incrementalProgress < maxIncrementalProgress) {
                    setProgress(++incrementalProgress);
                } else {
                    clearInterval(incrementalInterval);
                }
            }, ANIMATION_SPEED_MS);

            const updateProgress = () => {
                loadedCount++;

                // Calculate real progress based on loaded images
                let realProgress = (loadedCount / totalImages) * 100;

                // Use the greater of incrementalProgress (up to 90) or realProgress
                let finalProgress = Math.max(Math.min(incrementalProgress, maxIncrementalProgress), realProgress);

                setProgress(finalProgress);

                if (loadedCount === totalImages) {
                    clearInterval(incrementalInterval);
                    hideLoader();
                }
            };

            // Attach load and error listeners to each image
            images.forEach(img => {
                // Check if the image is already complete (from cache)
                if (img.complete) {
                    updateProgress();
                    return;
                }

                // Add listeners for images not yet loaded
                img.addEventListener('load', updateProgress);
                img.addEventListener('error', updateProgress); // Treat error as loaded to prevent hang
            });

            // Fallback Timeout: If images fail to trigger events, ensure the loader eventually hides.
            window.addEventListener('load', () => {
                // If all images haven't loaded after the full page load event, hide the loader
                if (loadedCount < totalImages) {
                    clearInterval(incrementalInterval);
                    hideLoader();
                }
            });

            const maxLoadTime = 10000; // 10 seconds timeout is still a good failsafe
            setTimeout(() => {
                if (loadedCount < totalImages) {
                    console.warn('Loader timeout reached. Forcing loader hide.');
                    clearInterval(incrementalInterval);
                    hideLoader();
                }
            }, maxLoadTime);


        })();

    });

    var swiper = new Swiper(".heroSwiper", {
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // === Thumbs Gallery ===
    const thumbs = new Swiper(".thumbs", {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 2,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            0: { slidesPerView: 2 },
            576: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            992: { slidesPerView: 5 }
        }
    });
    // Swiper Gallery
    new Swiper(".swiperGallery", {
        loop: true,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        thumbs: { swiper: thumbs },
    });
    // Swiper Gallery
    var swiper = new Swiper(".departmentSwiper", {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        breakpoints: {
            0: { slidesPerView: 1 },
            576: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            992: { slidesPerView: 5 }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    var a = 0;
    $(window).scroll(function () {
        var oTop = $('.counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counterValue').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
            });
            a = 1;
        }
    });

    document.addEventListener('DOMContentLoaded', function () {
        var offcanvasEl = document.getElementById('desktopMenu');
        if (!offcanvasEl) return;
        offcanvasEl.addEventListener('show.bs.offcanvas', function () {
            document.body.classList.add('overflow-hidden');
            console.log('Offcanvas shown'); // debugging
        });
        offcanvasEl.addEventListener('hidden.bs.offcanvas', function () {
            document.body.classList.remove('overflow-hidden');
            console.log('Offcanvas hidden'); // debugging
        });
    });

    $(document).ready(function () {
        $('.popupGallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Preload 1 image before and after the current one
            },
            keyboard: {
                enabled: true,
                left: true,
                right: true,
                escKey: true,
                up: false,
                down: false
            },
            navigation: {
                arrowEl: true
            },
            mainClass: 'mfp-fade', // Add a smooth fade transition between slides
            removalDelay: 300, // Delay removal to allow the fade-out effect
        });
    });

    function resizeGridItem(item) {
        grid = document.getElementsByClassName("gridGallery")[0];
        rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
        rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
        rowSpan = Math.ceil((item.querySelector('figure').getBoundingClientRect().height + rowGap) / (rowHeight +
            rowGap));
        item.style.gridRowEnd = "span " + rowSpan;
    }

    function resizeAllGridItems() {
        allItems = document.getElementsByClassName("item");
        for (x = 0; x < allItems.length; x++) {
            resizeGridItem(allItems[x]);
        }
    }

    function resizeInstance(instance) {
        item = instance.elements[0];
        resizeGridItem(item);
    }

    window.onload = resizeAllGridItems();
    window.addEventListener("resize", resizeAllGridItems);

    allItems = document.getElementsByClassName("item");
    for (x = 0; x < allItems.length; x++) {
        imagesLoaded(allItems[x], resizeInstance);
    }

    (function () {
        var elements = document.querySelectorAll('img[data-src]');
        var index = 0;
        var lazyLoad = function () {
            if (index >= elements.length) return;
            var item = elements[index];
            if ((this.scrollY + this.innerHeight) > item.offsetTop) {
                var src = item.getAttribute("data-src");
                item.src = src;
                item.addEventListener('load', function () {
                    item.removeAttribute('data-src');
                });
                index++;
                lazyLoad();
            }
        };
        var init = function () {
            window.addEventListener('scroll', lazyLoad);
            lazyLoad();
        };
        return init();
    })();

    document.addEventListener("DOMContentLoaded", () => {
        const allCards = document.querySelectorAll(".avatarCard");
        let highlighted = false;

        const observer = new IntersectionObserver((entries) => {
            const visibleCards = [];

            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    visibleCards.push(entry.target);
                }
            });

            if (!highlighted && visibleCards.length > 0) {
                highlighted = true;
                highlightVisibleCardsOnly(visibleCards);
            }
        }, {
            threshold: 0.4 // card must be 40% visible
        });

        allCards.forEach(card => observer.observe(card));
    });


    function highlightVisibleCardsOnly(cards) {
        let index = 0;

        function next() {
            if (index >= cards.length) return;

            const card = cards[index];

            card.classList.add("highlight");

            setTimeout(() => {
                card.classList.remove("highlight");
                index++;
                next();
            }, 3000); // ⬅ 3 seconds highlight duration
        }

        next();
    }


    document.addEventListener('DOMContentLoaded', function () {
        const videoSection = document.querySelector('.videoSection');
        const playBtn = document.querySelector('.playBtn');

        videoSection.addEventListener('mousemove', function (e) {
            const rect = videoSection.getBoundingClientRect();

            // 1. Find the center point of the video section (in screen coordinates)
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;

            // 2. Calculate the cursor's offset from the center point
            // This gives us the precise amount we need to translate the already-centered button.
            const xOffset = e.clientX - centerX;
            const yOffset = e.clientY - centerY;

            // 3. Apply the offset using 'calc' to combine the initial -50% centering shift with the new pixel offset.
            playBtn.style.transform = `translate(calc(-50% + ${xOffset}px), calc(-50% + ${yOffset}px))`;
        });

        // Reset position when mouse leaves section
        videoSection.addEventListener('mouseleave', function () {
            // Slower transition for a graceful return
            playBtn.style.transition = 'transform 0.5s cubic-bezier(0.19, 1, 0.22, 1)';

            // Return to the initial centered state
            playBtn.style.transform = 'translate(-50%, -50%)';
        });

        // On mouseenter, reset the faster transition for tracking
        videoSection.addEventListener('mouseenter', function () {
            // Switch back to the faster tracking transition defined in CSS
            playBtn.style.transition = 'transform 0.3s cubic-bezier(0.19, 1, 0.22, 1)';
        });
    });

    document.addEventListener("DOMContentLoaded", function () {

        const videoModal = document.getElementById('videoModal');
        const youtubeIframe = document.getElementById('youtube-video');

        // Store original video URL
        const defaultSrc = youtubeIframe.getAttribute('src');

        // When modal closes → stop video
        videoModal.addEventListener('hidden.bs.modal', function () {
            youtubeIframe.setAttribute('src', '');      // stop the video immediately
            youtubeIframe.setAttribute('src', defaultSrc); // reload for next open
        });

    });

    function enhanceTables(root = document) {
        root.querySelectorAll('table').forEach(table => {

            // Add table classes if not already present
            table.classList.add('table', 'table-striped', 'table-bordered', 'table-hover');

            // If already wrapped, skip
            if (table.parentElement.classList.contains('table-responsive')) return;

            // Wrap inside .table-responsive
            const wrapper = document.createElement('div');
            wrapper.className = 'table-responsive';

            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        });
    }

    // Run once for existing tables
    enhanceTables();

    // Observe ANY DOM changes anywhere in the page
    const observer = new MutationObserver(mutations => {
        mutations.forEach(m => {
            m.addedNodes.forEach(node => {

                if (node.nodeType !== 1) return; // Only elements

                // If the added node IS a table
                if (node.tagName === 'TABLE') {
                    enhanceTables(node.parentElement);
                }

                // If the added node CONTAINS tables inside
                if (node.querySelectorAll) {
                    enhanceTables(node);
                }
            });
        });
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });


    document.addEventListener("DOMContentLoaded", function () {
        const container = document.querySelector(".sidebarContent");
        const activeLink = container?.querySelector(".nav-link.active");

        if (container && activeLink) {
            // Scroll so active link is centered in the view
            const offsetTop = activeLink.offsetTop;
            const containerHeight = container.clientHeight;

            container.scrollTo({
                top: offsetTop - containerHeight / 2,
                behavior: "instant" // or "smooth"
            });
        }
    });



    document.addEventListener('DOMContentLoaded', function () {
        // Check if Intersection Observer is supported
        if ('IntersectionObserver' in window) {
            const images = document.querySelectorAll('img[data-src]');

            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.removeAttribute('data-src');
                        observer.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        } else {
            // Fallback for older browsers
            const images = document.querySelectorAll('img[data-src]');
            images.forEach(img => {
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
            });
        }
    });

    var swiper = new Swiper(".collaborationSwiper", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        loop: true,
        slidesPerView: 4,
        spaceBetween: 10,
        breakpoints: {
            0: { slidesPerView: 2 },
            576: { slidesPerView: 2 },
            768: { slidesPerView: 3 },
            992: { slidesPerView: 4 }
        }
    });

    const dropZone = document.getElementById("dropZone");
    const fileInput = document.getElementById("fileInput");
    const fileInfo = document.getElementById("fileInfo");

    const allowedTypes = [
        "application/pdf",
        "application/msword",
        "application/vnd.openxmlformats-officedocument.wordprocessingml.document"
    ];

    dropZone.addEventListener("click", () => fileInput.click());

    dropZone.addEventListener("dragover", (event) => {
        event.preventDefault();
        dropZone.classList.add("active");
    });

    dropZone.addEventListener("dragleave", () => {
        dropZone.classList.remove("active");
    });

    dropZone.addEventListener("drop", (event) => {
        event.preventDefault();
        dropZone.classList.remove("active");
        handleFile(event.dataTransfer.files[0]);
    });

    fileInput.addEventListener("change", () => {
        handleFile(fileInput.files[0]);
    });

    function handleFile(file) {
        if (!file) return;

        if (!allowedTypes.includes(file.type)) {
            showError("Only PDF or Word files are allowed");
            return;
        }

        fileInfo.textContent = `Selected file: ${file.name} (${(file.size / 1024).toFixed(1)} KB)`;
        dropZone.classList.remove("error");
    }

    function showError(message) {
        fileInfo.textContent = message;
        dropZone.classList.add("error");
        fileInput.value = "";
    }


    var currentYear = new Date().getFullYear();
    document.getElementById("year").textContent = currentYear;
</script>