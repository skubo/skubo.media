# skubo.media
Website for http://skubo.media

## What is this
This is the entire content of the website mentioned above. It's not just a static webpage, but intended to be a slimmed down mini CMS to be able to dynamically add and remove content in a very simple form as an "endless full width page" like everybody else is doing nowadays. 

## Why is this
I had that idea for that new website and needed to decide, what kind of platform I will be building it on. I dislike Wordpress. And Joomla. So I decided to create my own just for that one website. And decided to open source this, so you can do whatever you like with it. 

## Requirements
As my website is hosted by a provider with only PHP installed, this requires PHP. Pages and resources are stored JSON and file based, so no need for a database.

## Features
* Producing page layout out of a JSON structure
* a page is one full size browser window, scroll down to next page
* two types of page layout: centered and columns
* columns are responsively designed with compatible CSS only, no Javascript (yay!)
* column content can be of different types (text, image, iframe), which will then solely displayed in that one column
* images can be assigned links, which then will open that URL in new broswer window
* Responsive font sizes (yay!)
* no external frameworks whatsover (double yay!)

## Limitations
* many
* currently the site's JSON needs to be uploaded to the server by same means like all the other files, so no REST-like interface so far (see future enhancements)
* totally undocumented
* no page stops, free scrolling

## Planned enhancements
* page scrolling stops
* CSS scrolling animations
* Touch device scrolling enhancements
* JSON-Interface for reading/writing site content

## Possible future enhancements
* editor for site content (not sure)

## License
* License for Software is: MIT License (MIT), see LICENSE.md
* For assets like images which are not trademarks by other companies, these are not creative commons, but beer-license. If you make use of them, please let me know and send me a beer.
* The font used is YanoneKaffeesatz, which is created by <a href="http://yanone.de">Yanone</a> under creative commons license. Thank you very much!
