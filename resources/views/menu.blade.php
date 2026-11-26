@extends('layouts.master')

@section('content')

<style>
    .menu-page {
        background: #f8f5ef;
        min-height: 100vh;
        padding: 65px 0;
    }

    .menu-heading {
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 800;
        letter-spacing: 5px;
        color: #30251f;
        line-height: 1;
    }

    .menu-subtitle {
        color: #8b7565;
        letter-spacing: 3px;
        font-size: 13px;
        font-weight: 600;
    }

    .menu-divider {
        border: 0;
        border-top: 1px solid #d9cec1;
        margin: 30px 0 45px;
    }

    .category-btn {
        border: 1px solid #9b806b;
        color: #71543f;
        background: transparent;
        border-radius: 30px;
        padding: 10px 25px;
        transition: .3s;
        font-weight: 600;
    }

    .category-btn:hover,
    .category-btn.active {
        background: #594333;
        color: #fff;
        border-color: #594333;
    }

    .menu-card {
        background: #fffdf9;
        border: 1px solid #eee5da;
        border-radius: 18px;
        overflow: hidden;
        height: 100%;
        transition: .3s;
    }

    .menu-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 12px 30px rgba(76, 52, 34, .12);
    }

    .menu-visual {
        height: 190px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eee8df;
        position: relative;
    }

    .menu-visual i {
        font-size: 75px;
        color: #8b7059;
    }

    .menu-category {
        font-size: 11px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-weight: 700;
        padding: 7px 13px;
        border-radius: 30px;
        display: inline-block;
    }

    .sweet {
        background: #f5e3d6;
        color: #9a5738;
    }

    .salty {
        background: #e8e5d8;
        color: #596342;
    }

    .menu-name {
        font-size: 18px;
        font-weight: 700;
        color: #3c2d24;
        margin-top: 14px;
    }

    .menu-description {
        color: #938477;
        font-size: 13px;
        min-height: 40px;
    }

    .menu-price {
        font-size: 21px;
        font-weight: 800;
        color: #76543c;
    }

    .menu-search {
        border: 1px solid #e0d5c8;
        border-radius: 30px;
        padding: 13px 22px;
        background: #fffdf9;
    }

    .menu-search:focus {
        border-color: #9b806b;
        box-shadow: 0 0 0 .2rem rgba(155, 128, 107, .15);
    }

    .menu-empty {
        display: none;
        color: #8b7565;
    }

    @media (max-width: 576px) {
        .menu-page {
            padding: 40px 0;
        }

        .menu-heading {
            letter-spacing: 2px;
        }

        .menu-visual {
            height: 160px;
        }
    }
</style>

<section class="menu-page">
    <div class="container">

        <!-- HEADER -->
        <div class="text-center">
            <p class="menu-subtitle mb-3">TOAST.DISTRICT SIGNATURE COLLECTION</p>

            <h1 class="menu-heading">OUR MENU</h1>

            <p class="text-muted mt-3">
                A little toast, a lot of happiness.
            </p>
        </div>

        <hr class="menu-divider">

        <!-- MENU INTRO -->
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h3 class="fw-bold" style="color:#49372b;">
                    Find Your Favorite Toast
                </h3>
                <p class="text-muted mb-0">
                    Pilihan rasa manis dan asin untuk menemani harimu.
                </p>
            </div>

            <div class="col-md-6 mt-3 mt-md-0">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 rounded-start-pill ps-3">
                        <i class="bi bi-search"></i>
                    </span>
                    <input type="text" id="menuSearch"
                        class="form-control menu-search border-start-0"
                        placeholder="Cari menu favoritmu...">
                </div>
            </div>
        </div>

        <!-- CATEGORY FILTER -->
        <div class="d-flex flex-wrap gap-2 mb-5">
            <button class="category-btn active" data-filter="all">
                All Toast
            </button>

            <button class="category-btn" data-filter="manis">
                Sweet Toast
            </button>

            <button class="category-btn" data-filter="asin">
                Salted Toast
            </button>
        </div>

        <!-- SWEET TOAST -->
        <div class="mb-5">
            <div class="d-flex align-items-center gap-3 mb-4">
                <h4 class="fw-bold mb-0" style="letter-spacing:2px;color:#49372b;">
                    SWEET TOAST VARIANT
                </h4>
                <div class="flex-grow-1" style="height:1px;background:#d9cec1;"></div>
            </div>

            <div class="row g-4">

                <!-- Choco Crunchy -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="manis">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-cup-hot"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category sweet">Sweet Toast</span>
                            <h5 class="menu-name">Choco Crunchy Toast</h5>
                            <p class="menu-description">
                                Toast dengan perpaduan cokelat crunchy yang nikmat.
                            </p>
                            <div class="menu-price">Rp10.000</div>
                        </div>
                    </div>
                </div>

                <!-- Tiramisu -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="manis">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-cake2"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category sweet">Sweet Toast</span>
                            <h5 class="menu-name">Tiramisu Toast</h5>
                            <p class="menu-description">
                                Toast dengan topping tiramisu yang lembut dan creamy.
                            </p>
                            <div class="menu-price">Rp10.000</div>
                        </div>
                    </div>
                </div>

                <!-- Green Tea -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="manis">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-leaf"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category sweet">Sweet Toast</span>
                            <h5 class="menu-name">Green Tea Toast</h5>
                            <p class="menu-description">
                                Toast dengan topping green tea bercita rasa khas.
                            </p>
                            <div class="menu-price">Rp10.000</div>
                        </div>
                    </div>
                </div>

                <!-- Crunchy Cheese -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="manis">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-stars"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category sweet">Sweet Toast</span>
                            <h5 class="menu-name">Crunchy Cheese Toast</h5>
                            <p class="menu-description">
                                Toast dengan topping keju yang gurih dan crunchy.
                            </p>
                            <div class="menu-price">Rp12.000</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- SALTED TOAST -->
        <div>
            <div class="d-flex align-items-center gap-3 mb-4">
                <h4 class="fw-bold mb-0" style="letter-spacing:2px;color:#49372b;">
                    SALTED TOAST VARIANT
                </h4>
                <div class="flex-grow-1" style="height:1px;background:#d9cec1;"></div>
            </div>

            <div class="row g-4">

                <!-- Egg Cheese -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="asin">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category salty">Salted Toast</span>
                            <h5 class="menu-name">Egg & Cheese Toast</h5>
                            <p class="menu-description">
                                Kombinasi telur dan keju dalam toast yang lezat.
                            </p>
                            <div class="menu-price">Rp15.000</div>
                        </div>
                    </div>
                </div>

                <!-- Egg Patty -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="asin">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category salty">Salted Toast</span>
                            <h5 class="menu-name">Egg & Patty Toast</h5>
                            <p class="menu-description">
                                Toast dengan kombinasi telur dan patty.
                            </p>
                            <div class="menu-price">Rp18.000</div>
                        </div>
                    </div>
                </div>

                <!-- Smoke Beef -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="asin">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-fire"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category salty">Salted Toast</span>
                            <h5 class="menu-name">Smoke Beef & Cheese Toast</h5>
                            <p class="menu-description">
                                Perpaduan smoke beef dan keju yang menggugah selera.
                            </p>
                            <div class="menu-price">Rp15.000</div>
                        </div>
                    </div>
                </div>

                <!-- Mix Egg Patty Cheese -->
                <div class="col-12 col-sm-6 col-lg-3 menu-item" data-category="asin">
                    <div class="menu-card">
                        <div class="menu-visual">
                            <i class="bi bi-award"></i>
                        </div>
                        <div class="p-3">
                            <span class="menu-category salty">Salted Toast</span>
                            <h5 class="menu-name">Mix Egg Patty & Cheese</h5>
                            <p class="menu-description">
                                Kombinasi telur, patty, dan keju dalam satu toast.
                            </p>
                            <div class="menu-price">Rp22.000</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5 pt-4">
            <p class="menu-subtitle">
                MADE WITH LOVE, SERVED WITH HAPPINESS.
            </p>
            <h5 class="fw-bold" style="color:#49372b;">
                Thank you for choosing Toast.district!
            </h5>
        </div>

        <p id="emptyMessage" class="menu-empty text-center mt-5">
            Menu yang kamu cari belum ditemukan.
        </p>

    </div>
</section>

<script>
    const searchInput = document.getElementById('menuSearch');
    const filterButtons = document.querySelectorAll('.category-btn');
    const menuItems = document.querySelectorAll('.menu-item');
    const emptyMessage = document.getElementById('emptyMessage');

    let activeFilter = 'all';

    function filterMenu() {
        const keyword = searchInput.value.toLowerCase();
        let visibleCount = 0;

        menuItems.forEach(item => {
            const name = item.querySelector('.menu-name').textContent.toLowerCase();
            const category = item.dataset.category;

            const matchesSearch = name.includes(keyword);
            const matchesCategory = activeFilter === 'all' || category === activeFilter;

            if (matchesSearch && matchesCategory) {
                item.style.display = '';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        emptyMessage.style.display = visibleCount === 0 ? 'block' : 'none';
    }

    searchInput.addEventListener('input', filterMenu);

    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            filterButtons.forEach(btn => btn.classList.remove('active'));

            this.classList.add('active');
            activeFilter = this.dataset.filter;

            filterMenu();
        });
    });
</script>

@endsection
