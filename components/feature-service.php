<div class="feature-row feature-service-row row">
  <?php foreach ($services as $index => $service): ?>
    <div class="col-md-4 col-sm-6 <?= $index % 2 === 0 ? 'even' : 'odd' ?> <?= $index % 3 === 0 ? 'first' : '' ?>">
      <div class="feature boxed">
        <a href="/dich-vu/<?= $service['slug'] ?>">
          <div class="fbox-photo">
            <img src="<?= $service['image'] ?>" alt="<?= $service['title'] ?>">
          </div>
        </a>
        <div class="fbox-content">
          <h3 class="lead">
            <a href="/dich-vu/<?= $service['slug'] ?>">
              <?= $service['title'] ?>
            </a>
          </h3>
          <p><?= $service['desc'] ?></p>
          <p>
            <a href="/dich-vu/<?= $service['slug'] ?>" class="btn-link link-arrow-sm">
              Xem chi tiết
            </a>
          </p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>