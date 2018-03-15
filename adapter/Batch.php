<?php
// 実際は、オートローダーで読み込まれる
require_once ('./Adapter/AdapterInterface.php');
require_once ('./Adapter/DatabaseAdapter.php');
require_once ('./Adapter/FileAdapter.php');
require_once ('./Adapter/CsvAdapter.php');

// TODO 設定ファイルとかの場合
//$adapters = Container('adapter');
//output($adapters);

// 実際に呼ぶ場合
output(new DatabaseAdapter());
output(new CsvAdapter());

function outputs($adapters)
{
    // 設定でやるときにいい感じにする
    foreach ($adapters as $adapter) {
        if (!$adapter instanceof AdapterInterface) {
            throw new Exception('変なのきた');
        }

        $adapter->output();
    }
}

?>


adapters : GroongaAdapter
