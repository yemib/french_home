<style>
    .latest-news-section {
        padding: 60px 0;
        background: #f5f7fb;
    }

    .section-title h2 {
        font-size: 32px;
        font-weight: 700;
        margin-bottom: 40px;
    }

    .news-card {
        background: #fff;
        border-radius: 14px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    .news-image {
        height: 200px;
        background-size: cover;
        background-position: center;
        display: block;
    }

    .news-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .news-title {
        font-size: 17px;
        line-height: 1.4;
        margin-bottom: 12px;
        flex: 1;
    }

    .news-title a {
        color: #222;
        text-decoration: none;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .news-footer {
        margin-top: auto;
    }

    .read-more-btn-news {
        padding: 10px 22px;
        border-radius: 25px;
        background: #007bff;
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .more-news-btn {
        text-align: center;
        margin-top: 40px;
    }

    .btn-more-news {
        padding: 14px 36px;
        border-radius: 30px;
        background: linear-gradient(135deg, #007bff, #00c6ff);
        color: #fff;
        font-weight: 600;
        text-decoration: none;
    }

    /* Spacing between slides */
    .swiper-slide {
        padding: 15px;
        height: 10cm;
    }



    /* Hide arrows on small screens */
    @media (max-width: 768px) {

        .swiper-button-next,
        .swiper-button-prev {
            display: none;
        }
    }

    /* ================= BEAUTIFUL SWIPER ARROWS ================= */
    .latest-news-swiper .swiper-button-next,
    .latest-news-swiper .swiper-button-prev {
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: linear-gradient(135deg, #007bff, #00c6ff);
        box-shadow: 0 12px 25px rgba(0, 123, 255, 0.35);
        transition: all 0.3s ease;
    }

    /* Remove default arrow styles */
    .latest-news-swiper .swiper-button-next::after,
    .latest-news-swiper .swiper-button-prev::after {
        font-size: 18px;
        font-weight: bold;
        color: #fff;
    }

    /* Positioning */
    .latest-news-swiper .swiper-button-next {
        right: -25px;
    }

    .latest-news-swiper .swiper-button-prev {
        left: -25px;
    }

    /* Hover effect */
    .latest-news-swiper .swiper-button-next:hover,
    .latest-news-swiper .swiper-button-prev:hover {
        transform: scale(1.08);
        box-shadow: 0 18px 35px rgba(0, 123, 255, 0.5);
    }

    /* Disabled state */
    .latest-news-swiper .swiper-button-disabled {
        opacity: 0.4;
        cursor: not-allowed;
    }
</style>

<div class="latest-news-section">
    <div class="container" >

        <div class="section-title text-center">
            <h2>Latest News</h2>
        </div>

        <div class="swiper latest-news-swiper"  >
            <div class="swiper-wrapper">

                <?php foreach ($service as $item) { ?>
                    <div class="swiper-slide">

                        <div class="news-card">

                            <a href="/newsletter/{{ $item->id }}/news"
                                class="news-image"
                                style="background-image:url('{{ $item->image }}')"></a>

                            <div class="news-content">
                                <span class="news-date">
                                    <i class="fa fa-clock-o"></i> {{ $item->created_at }}
                                </span>

                                <h3 class="news-title">
                                    <a href="/newsletter/{{ $item->id }}/news">
                                        {{ $item->title }}
                                    </a>
                                </h3>

                                <div class="news-footer">
                                    <a href="/newsletter/{{ $item->id }}/news" class="read-more-btn-news">
                                        Read More
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                <?php } ?>

            </div>

            <!-- Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

        <div class="more-news-btn">
            <a href="/event" class="btn-more-news">Click For More News</a>
        </div>

    </div>
</div>


<script>
    new Swiper('.latest-news-swiper', {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3 // ✅ EXACTLY 3 ON DESKTOP
            }
        }
    });
</script>