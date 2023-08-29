<?php
class YellowLink {
    const VERSION = "0.2.0";
    public $yellow;         // access to API

    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }

    // Handle page content of shortcut
    public function onParseContentShortcut($page, $name, $text, $type) {
        $cutText = explode(";", $text);
        $cutTextNull = $cutText[1];
        $cutTextNull = trim($cutTextNull);
        $output = null;
        if ($name=="link" && ($type=="inline")) {
            if ($cutTextNull == ""){
                $output = "<a href=\"" . $cutText[0] . "\" target=\"_blank\" rel=\"noopener noreferrer\" >" . $cutText[0] ."</a>";
            } else {
                $output = "<a href=\"" . $cutText[1] . "\" target=\"_blank\" rel=\"noopener noreferrer\" >" . $cutText[0] ."</a>";
            }
        }
        return $output;
    }
}
