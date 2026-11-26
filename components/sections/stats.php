<?php
/** Stats row (e.g. "100% Pure Milk"). Data: $data['stats'] */
?>
                        <div class="about__stats">
<?php foreach ($data['stats'] as $stat): ?>
                            <div class="stat"><strong><?= e($stat['value']) ?></strong><span><?= e($stat['label']) ?></span></div>
<?php endforeach; ?>
                        </div>
