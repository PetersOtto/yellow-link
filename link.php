<?php
class YellowLink {
    const VERSION = "0.1.2";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $cutText = explode(";", $text);
        $output = null;
        if ($name=="link" && ($type=="inline")) {
            $output = "<a href=\"" . $cutText[1] . "\" target=\"_blank\" rel=\"noopener noreferrer\" >" . $cutText[0] ."</a>";
        }
        return $output;
    }
}