# yellow-link
Extension for use external links with Datenstrom Yellow

## How to add an external Link

Use the shortcut `link`. Insert text and URL separated by a semicolon. 
If text and URL are the same, then the URL followed by a simicolon is sufficient.

## Examples

If you use:

    [link TEXT;URL]
    [link OSM;https://www.openstreetmap.org/]
    [link https://www.openstreetmap.org/;https://www.openstreetmap.org/] or shorter [link https://www.openstreetmap.org/;]
    
This will be the result:
    
    <a href="URL" target="_blank" rel="noopener noreferrer">TEXT</a>
    <a href="https://www.openstreetmap.org/" target="_blank" rel="noopener noreferrer">OSM</a>
    <a href="https://www.openstreetmap.org/" target="_blank" rel="noopener noreferrer">https://www.openstreetmap.org/</a>
  

## Installation

[Download extension](https://github.com/PetersOtto/yellow-link/archive/refs/heads/main.zip) and copy zip file into your `system/extensions` folder. Right click if you use Safari.

## Developer

PetersOtto. [Get help](https://datenstrom.se/yellow/help/)
