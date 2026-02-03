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

        /* --- Progress Loader --- */
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
                setProgress(100);
                setTimeout(() => {
                    loader.style.transition = 'opacity 300ms ease';
                    loader.style.opacity = '0';
                    setTimeout(() => {
                        loader.style.display = 'none';
                    }, 350);
                }, 100);
            };

            const images = document.querySelectorAll('img:not(.loaderContent img)');
            const totalImages = images.length;
            let loadedCount = 0;

            if (totalImages === 0) {
                hideLoader();
                return;
            }

            let incrementalProgress = 0;
            const maxIncrementalProgress = 90;
            const ANIMATION_SPEED_MS = 56;

            const incrementalInterval = setInterval(() => {
                if (incrementalProgress < maxIncrementalProgress) { setProgress(++incrementalProgress); } else {
                    clearInterval(incrementalInterval);
                }
            }, ANIMATION_SPEED_MS); const updateProgress = () => {
                loadedCount++;
                let realProgress = (loadedCount / totalImages) * 100;
                let finalProgress = Math.max(Math.min(incrementalProgress, maxIncrementalProgress), realProgress);
                setProgress(finalProgress);

                if (loadedCount === totalImages) {
                    clearInterval(incrementalInterval);
                    hideLoader();
                }
            };

            images.forEach(img => {
                if (img.complete) {
                    updateProgress();
                } else {
                    img.addEventListener('load', updateProgress);
                    img.addEventListener('error', updateProgress);
                }
            });

            window.addEventListener('load', () => {
                if (loadedCount < totalImages) { clearInterval(incrementalInterval); hideLoader(); }
            }); setTimeout(() => {
                if (loadedCount < totalImages) { clearInterval(incrementalInterval); hideLoader(); }
            }, 10000);
        })(); /* ---
            Swiper Initializations (with safety checks) --- */ if (document.querySelector(".heroSwiper")) {
            new
                Swiper(".heroSwiper", {
                    autoplay: { delay: 5000 }, loop: true, pagination: { el: ".swiper-pagination" },
                    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
                });
        } const
            thumbsElem = document.querySelector(".thumbs"); if (thumbsElem) {
                const thumbs = new Swiper(".thumbs", {
                    loop:
                        true, spaceBetween: 20, slidesPerView: 2, freeMode: true, watchSlidesProgress: true, breakpoints: {
                            0: {
                                slidesPerView: 2
                            }, 576: { slidesPerView: 3 }, 768: { slidesPerView: 4 }, 992: { slidesPerView: 5 }
                        }
                }); if
                    (document.querySelector(".swiperGallery")) {
                    new Swiper(".swiperGallery", {
                        loop: true, spaceBetween: 20,
                        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" }, thumbs: { swiper: thumbs },
                    });
                }
            } if (document.querySelector(".departmentSwiper")) {
                new Swiper(".departmentSwiper", {
                    loop: true,
                    slidesPerView: 1, spaceBetween: 30, breakpoints: {
                        0: { slidesPerView: 1 }, 576: { slidesPerView: 2 }, 768:
                            { slidesPerView: 3 }, 992: { slidesPerView: 5 }
                    }, navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev"
                    }, pagination: { el: ".swiper-pagination", clickable: true },
                });
            } /* ---
                  /* Popup Gallery (keeps Magnific Popup jQuery plugin usage) */
        (function () {
            if (window.jQuery && $.fn && $.fn.magnificPopup) {
                $(function () {
                    $('.popupGallery').magnificPopup({
                        delegate: 'a',
                        type: 'image',
                        gallery: {
                            enabled: true,
                            navigateByImgClick: true,
                            preload: [0, 1]
                        },
                        keyboard: {
                            enabled: true,
                            left: true,
                            right: true,
                            escKey: true
                        },
                        mainClass: 'mfp-fade',
                        removalDelay: 300
                    });
                });
            }
        })();
        /* --- Grid Gallery Logic --- */
        function resizeGridItem(item) {
            const grid = document.getElementsByClassName("gridGallery")[0];
            if (!grid || !item.querySelector('figure')) return;

            const rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
            const rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
            const rowSpan = Math.ceil((item.querySelector('figure').getBoundingClientRect().height + rowGap) /
                (rowHeight + rowGap));
            item.style.gridRowEnd = "span " + rowSpan;
        }

        function resizeAllGridItems() {
            const allItems = document.getElementsByClassName("item");
            for (let x = 0; x < allItems.length; x++) { resizeGridItem(allItems[x]); }
        } window.addEventListener("load",
            resizeAllGridItems); window.addEventListener("resize", resizeAllGridItems); const
                gridItems = document.getElementsByClassName("item"); if (typeof imagesLoaded !== 'undefined') {
                    for (let
                        x = 0; x < gridItems.length; x++) {
                        imagesLoaded(gridItems[x], (instance) => {
                            resizeGridItem(instance.elements[0]);
                        });
                    }
                }

        /* --- Video Section Follow Mouse --- */
        const videoSection = document.querySelector('.videoSection');
        const playBtn = document.querySelector('.playBtn');
        if (videoSection && playBtn) {
            videoSection.addEventListener('mousemove', function (e) {
                const rect = videoSection.getBoundingClientRect();
                const centerX = rect.left + rect.width / 2;
                const centerY = rect.top + rect.height / 2;
                const xOffset = e.clientX - centerX;
                const yOffset = e.clientY - centerY;
                playBtn.style.transform = `translate(calc(-50% + ${xOffset}px), calc(-50% + ${yOffset}px))`;
            });
            videoSection.addEventListener('mouseleave', () => {
                playBtn.style.transition = 'transform 0.5s cubic-bezier(0.19, 1, 0.22, 1)';
                playBtn.style.transform = 'translate(-50%, -50%)';
            });
            videoSection.addEventListener('mouseenter', () => {
                playBtn.style.transition = 'transform 0.3s cubic-bezier(0.19, 1, 0.22, 1)';
            });
        }

        /* --- Video Modal Stop --- */
        const videoModal = document.getElementById('videoModal');
        const youtubeIframe = document.getElementById('youtube-video');
        if (videoModal && youtubeIframe) {
            const defaultSrc = youtubeIframe.getAttribute('src');
            videoModal.addEventListener('hidden.bs.modal', function () {
                youtubeIframe.setAttribute('src', '');
                youtubeIframe.setAttribute('src', defaultSrc);
            });
        }

        /* --- Sidebar Auto-Scroll --- */
        const sidebarContainer = document.querySelector(".sidebarContent");
        const activeLink = sidebarContainer?.querySelector(".nav-link.active");
        if (sidebarContainer && activeLink) {
            sidebarContainer.scrollTo({
                top: activeLink.offsetTop - sidebarContainer.clientHeight / 2,
                behavior: "instant"
            });
        }

        /* --- Collaboration Swiper --- */
        if (document.querySelector(".collaborationSwiper")) {
            new Swiper(".collaborationSwiper", {
                autoplay: { delay: 3000, disableOnInteraction: false },
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
        }

        /* --- File Drop Zone --- */
        const dropZone = document.getElementById("dropZone");
        const fileInput = document.getElementById("fileInput");
        const fileInfo = document.getElementById("fileInfo");
        if (dropZone && fileInput) {
            const allowedTypes = ["application/pdf", "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
            dropZone.addEventListener("click", () => fileInput.click());
            dropZone.addEventListener("dragover", (e) => { e.preventDefault(); dropZone.classList.add("active"); });
            dropZone.addEventListener("dragleave", () => dropZone.classList.remove("active"));
            dropZone.addEventListener("drop", (e) => {
                e.preventDefault();
                dropZone.classList.remove("active");
                handleFile(e.dataTransfer.files[0]);
            });
            fileInput.addEventListener("change", () => handleFile(fileInput.files[0]));

            function handleFile(file) {
                if (!file) return;
                if (!allowedTypes.includes(file.type)) {
                    fileInfo.textContent = "Only PDF or Word files are allowed";
                    dropZone.classList.add("error");
                    fileInput.value = "";
                    return;
                }
                fileInfo.textContent = `Selected file: ${file.name} (${(file.size / 1024).toFixed(1)} KB)`;
                dropZone.classList.remove("error");
            }
        }

        /* --- Dynamic Year --- */
        const yearElem = document.getElementById("year");
        if (yearElem) yearElem.textContent = new Date().getFullYear();

    });

    /* --- Helper: Table Enhancement --- */
    function enhanceTables(root = document) {
        root.querySelectorAll('table').forEach(table => {
            table.classList.add('table', 'table-striped', 'table-bordered', 'table-hover');
            if (!table.parentElement.classList.contains('table-responsive')) {
                const wrapper = document.createElement('div');
                wrapper.className = 'table-responsive';
                table.parentNode.insertBefore(wrapper, table);
                wrapper.appendChild(table);
            }
        });
    }
    enhanceTables();

    const tableObserver = new MutationObserver(mutations => {
        mutations.forEach(m => {
            m.addedNodes.forEach(node => {
                if (node.nodeType === 1) {
                    if (node.tagName === 'TABLE') enhanceTables(node.parentElement);
                    else if (node.querySelectorAll) enhanceTables(node);
                }
            });
        });
    });
    tableObserver.observe(document.body, { childList: true, subtree: true });
</script>