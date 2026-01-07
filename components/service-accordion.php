<?php if (!empty($currentService['accordion'])): ?>
  <div class="panel-group accordion" id="general" role="tablist" aria-multiselectable="true">

    <?php foreach ($currentService['accordion'] as $index => $item):
      $headingId = 'ques-i' . ($index + 1);
      $collapseId = 'ques-ans-i' . ($index + 1);
      ?>
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="<?= $headingId ?>">
          <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#general" href="#<?= $collapseId ?>"
              aria-expanded="false">
              <?= $item['title'] ?>
              <span class="plus-minus"><span></span></span>
            </a>
          </h4>
        </div>

        <div id="<?= $collapseId ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?= $headingId ?>">
          <div class="panel-body">
            <p>
              <?= $item['content'] ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
<?php endif; ?>