<?php
$upPort = 1;
$downPort = 2;
$portStatus = snmpget($switchIP, $communityName, $oidPort);
?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div>Choisis si tu veux activer ou désactiver le port:</div>
            <?php foreach ($status as $key => $value) : ?>
            <div>
                <input type="radio" name="status" id="status_<?php echo $key ?>" value="<?php if ($key == "up") { echo "1"; } else { echo "2"; } ?>" <?php if (str_contains($portStatus, $key)) { echo "checked"; } ?>/>
                <label for="status_<?php echo $key ?>"><?php echo $value ?></label>
            </div>
            <?php endforeach ?>
            <div>
                <small class="error"><?php echo $errors['contact'] ?? '' ?></small>
            </div>
            <div>
                <button type="submit">Executer</button>
            </div>
        </form>
