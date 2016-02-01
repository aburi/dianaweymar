## Templates

Normally, we wouldn't want to mirror our styles with the content, but given this client will
be adding content and changing classes on certain pages, we need a way to maintain the layout of specific pages.

```
templates/
├── .scss-lint.yml  # common style rules for group projcts.
├── base/           # base styles
├── components/     # component modules
├── ie.scss         #
├── layout/         # layout modules
├── main.scss       # our main import file for compilation.
├── templates/      #
├── themes/         #
└── utilities/      # common utilities and variables.
```

### Main Colours

$brand1: #2C9AB7
$brand2: #FB9F3C
