# Buto-Plugin-OutputCsv
Output csv string in browser to file.

## Usage

```
wfPlugin::includeonce('output/csv');
$output = new PluginOutputCsv();
$output->output("_csv_string_", "filname.csv");
```

## Why using this?

- Handles encoding the right way.