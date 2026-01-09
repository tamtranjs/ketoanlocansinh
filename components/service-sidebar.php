<div class="wgs-box wgs-menus">
  <div class="wgs-content">
    <ul class="list list-grouped">
      <li class="list-heading">
        <span>Giải pháp & Dịch vụ</span>
        <ul>
          <?php foreach ($services as $service): ?>
            <li class="<?= ($currentService ?? '') === $service['slug'] ? 'active' : '' ?>">
              <a href="<?= $service['slug'] ?>">
                <?= $service['title'] ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </li>
    </ul>
  </div>
</div>