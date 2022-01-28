<?php
class PluginOutputCsv{
  public function output($csv, $filename = 'plugin_output_csv.csv'){
    header("Content-type: text/csv");
    header("Content-Disposition: attachment; filename=".$filename);
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Content-Transfer-Encoding: binary");
    echo "\xEF\xBB\xBF"; // UTF-8 BOM
    echo $csv;
    exit;
  }
}