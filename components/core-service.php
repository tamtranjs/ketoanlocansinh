<div class="feature-row feature-service-row feature-s3 hover-fill row">
  <?php foreach (array_slice($services, 0, 4) as $index => $service): ?>
    <div class="col-md-3 col-sm-6 col-xs-6 <?= $index % 2 === 0 ? 'even' : 'odd' ?>">
      <!-- featured box -->
      <a href="/dich-vu/<?= $service['slug'] ?>">
        <div class="feature boxed <?= $index % 2 === 0 ? 'bg-primary' : 'bg-primary-alt' ?>">
          <div class="fbox-content">
            <div class="icon-box size-lg"><em class="fa <?= $service['icon'] ?>"></em></div>
            <h3><?= $service['title'] ?></h3>
            <p><?= $service['desc'] ?></p>
          </div>
        </div>
      </a>
      <!-- #end -->
    </div>
  <?php endforeach; ?>
</div>