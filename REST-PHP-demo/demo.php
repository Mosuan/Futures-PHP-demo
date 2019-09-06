<?php
function aesEncrypt($stringToEncrypt) {
        $encryptKey  = env('AES_COMMON_KEY', '');
        $sql = "SELECT TO_BASE64(AES_ENCRYPT('{$stringToEncrypt}', '{$encryptKey}'))";
        $res = Yii::$app->db->createCommand($sql)->queryColumn();
        return $res[0];
    }

// scanner test

?>
