@extends('layouts.index2')

@section('content')

<style>
  /* ================= GALLERY ================= */
  .gallery-section {
    padding: 70px 0;
    background: linear-gradient(135deg, #f6f8fc, #e9eef5);
  }

  .gallery-title {
    text-align: center;
    margin-bottom: 50px;
  }

  .gallery-title h2 {
    font-size: 38px;
    font-weight: 700;
    color: #222;
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    gap: 28px;
  }

  .gallery-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    cursor: pointer;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    transition: transform .35s ease, box-shadow .35s ease;
  }

  .gallery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
  }

  .gallery-card img {
    width: 100%;
    height: 230px;
    object-fit: cover;
  }

  /* Lazy loading fade */
  .lazy-img {
    opacity: 0;
    transition: opacity .6s ease;
  }

  .lazy-img.loaded {
    opacity: 1;
  }

  .gallery-content {
    padding: 18px;
  }

  .gallery-content h4 {
    font-size: 18px;
    margin-bottom: 6px;
    color: #111;
  }

  .gallery-content p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
  }

  /* ================= MODAL ================= */
  .gallery-modal {
    position: fixed;
    inset: 0;
    background: rgba(0, 0, 0, 0.85);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .gallery-modal.active {
    display: flex;
  }

  .modal-box {
    background: #fff;
    width: 92%;
    max-width: 900px;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    animation: zoomIn .35s ease;
  }

  @keyframes zoomIn {
    from {
      transform: scale(.85);
      opacity: 0;
    }

    to {
      transform: scale(1);
      opacity: 1;
    }
  }

  .modal-box img {
    width: 100%;
    max-height: 450px;
    object-fit: cover;
  }

  .modal-body {
    padding: 26px;
  }

  .modal-body h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }

  .modal-body p {
    color: #555;
    line-height: 1.7;
  }

  /* Close */
  .modal-close {
    position: absolute;
    top: 16px;
    right: 22px;
    font-size: 32px;
    color: #fff;
    cursor: pointer;
  }

  /* Navigation arrows */
  .modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 42px;
    color: #fff;
    cursor: pointer;
    padding: 10px;
    user-select: none;
  }

  .modal-nav.left {
    left: 20px;
  }

  .modal-nav.right {
    right: 20px;
  }

  @media(max-width:768px) {
    .modal-nav {
      display: none;
    }
  }

  /* ================= PAGINATION ================= */
  .pagination-wrapper {
    margin-top: 60px;
    display: flex;
    justify-content: center;
  }

  .pagination {
    display: flex;
    gap: 8px;
    list-style: none;
  }

  .pagination li a,
  .pagination li span {
    padding: 10px 16px;
    border-radius: 10px;
    background: #fff;
    color: #333;
    font-weight: 500;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    transition: .3s;
    text-decoration: none;
  }

  .pagination li a:hover {
    background: #111;
    color: #fff;
  }

  .pagination li.active span {
    background: #111;
    color: #fff;
  }
</style>

<section class="gallery-section">
  <div class="container">
    <div class="gallery-title">
      <h2>Our Gallery</h2>
    </div>

    <div class="gallery-grid">
      @forelse($galleries as $item)
      <div class="gallery-card"
        data-image="{{ $item->image}}"
        data-title="{{ $item->text1 }}"
        data-description=" ">

        <img
          src="{{ $item->image }}"
          alt="{{ $item->title }}"
          loading="lazy"
          class="lazy-img">

        <div class="gallery-content">
          <h4>{{ $item->text1 }}</h4>
        
        </div>
      </div>
      @empty
      <p style="grid-column:1/-1;text-align:center;color:#777;">
        No gallery items available
      </p>
      @endforelse
    </div>

    <!-- PAGINATION -->
    <div class="pagination-wrapper">
      {{ $galleries->links() }}
    </div>
  </div>
</section>

<!-- MODAL -->
<div class="gallery-modal" id="galleryModal">
  <span class="modal-close" onclick="closeGallery()">&times;</span>

  <div class="modal-nav left" onclick="prevImage()">&#10094;</div>
  <div class="modal-nav right" onclick="nextImage()">&#10095;</div>

  <div class="modal-box">
    <img id="modalImage">
    <div class="modal-body">
      <h3 id="modalTitle"></h3>
      <p id="modalDescription"></p>
    </div>
  </div>
</div>

<script>
  /* Lazy loading fade */
  document.querySelectorAll('.lazy-img').forEach(img => {
    img.addEventListener('load', () => img.classList.add('loaded'));
  });

  /* Gallery logic */
  let items = [];
  let index = 0;
  let startX = 0;
  let startY = 0;

  document.querySelectorAll('.gallery-card').forEach((card, i) => {
    items.push({
      image: card.dataset.image,
      title: card.dataset.title,
      description: card.dataset.description
    });

    card.addEventListener('click', () => {
      index = i;
      openGallery();
    });
  });

  function openGallery() {
    let item = items[index];
    document.getElementById('modalImage').src = item.image;
    document.getElementById('modalTitle').innerText = item.title;
    document.getElementById('modalDescription').innerText = item.description;
    document.getElementById('galleryModal').classList.add('active');
  }

  function closeGallery() {
    document.getElementById('galleryModal').classList.remove('active');
  }

  function nextImage() {
    index = (index + 1) % items.length;
    openGallery();
  }

  function prevImage() {
    index = (index - 1 + items.length) % items.length;
    openGallery();
  }

  /* Touch gestures */
  const modal = document.getElementById('galleryModal');

  modal.addEventListener('touchstart', e => {
    startX = e.touches[0].clientX;
    startY = e.touches[0].clientY;
  });

  modal.addEventListener('touchend', e => {
    let endX = e.changedTouches[0].clientX;
    let endY = e.changedTouches[0].clientY;

    let diffX = endX - startX;
    let diffY = endY - startY;

    if (Math.abs(diffX) > Math.abs(diffY)) {
      if (diffX > 50) prevImage();
      if (diffX < -50) nextImage();
    } else {
      if (diffY > 80) closeGallery();
    }
  });
</script>

@endsection