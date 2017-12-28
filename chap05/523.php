<?php
$data = ['杉田', '杉山', '杉沼', '長田', '星山'];
mb_convert_variables('EUC-JP', 'SJIS', $data);
print_r($data);
