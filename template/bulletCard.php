<main>
  <div class="cards-bullet">
    <h3 class="title-cards">
      <?= $SS198["nameBullet"];  ?>
      <?= $SS198["caliber"]; ?>
      <?= $SS198["kg"]; ?>
    </h3>
    <hr>
    <img src="<?= $SS198["ammoImg"]; ?>" alt="<?= $SS198["nameBullet"]; ?>" >
    <hr>
    <div class="details">
      <h5 class="detail-title-1">Basic info</h5>
      <p class="detail-1">Penetration Level: <i class="detail-1-result"><?= $SS198["nvPen"]; ?></i></p> 
      <p class="detail-2">Penetration: <i class="detail-1-result"><?= $SS198["pen"]; ?></i></p>
      <p class="detail-1"> Base Damage: <i class="detail-1-result"><?= $SS198["baseDmg"]; ?></i></p> 
      <p class="detail-2"> Armor Damage: <i class="detail-1-result"><?= $SS198["armorDmg"]; ?></i></p>
      <hr>
      <h5 class="detail-title-1">Ammunition Characteristics</h5>
      <p class="detail-1">Bullet Velocity: <i class="detail-1-result" ><?= $SS198["velBullet"]; ?> m/s</i></p> 
      <p class="detail-2">Precision: <i class="detail-1-result"><?= $SS198["precision"]; ?></i></p>
      <p class="detail-1">Vertical Recoil: <i class="detail-2-result"><?= $SS198["vRecoil"]; ?></i></p> 
      <p class="detail-2">Horizontal Recoil: <i class="detail-2-result"><?= $SS198["hRecoil"]; ?></i></p>
    </div>
  </div>
</main>
