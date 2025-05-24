# Terminal Theme

A minimal and responsive blog theme for the [Automad](https://automad.org) CMS based on the beautiful [Terminal CSS](https://terminalcss.xyz) framework, including a [light](#light-scheme) and a [dark](#dark-scheme) color scheme. Check out the demo page and all available templates [here](https://terminal.dev.automad.org).

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-dark-1.webp)

## Configuration

There are multiple variables to configure this theme. Find below a list of the most important options to control the look and feel of your blog.

### Add Pages to Navbar and Footer

You can use the `Show In Navbar` and `Show In Footer` switches within a page's _Data and Settings_ section to add a page to the navbar or footer menu. Note that you can still hide a page from the blog and sidebar by switching on the `Hide Page from Navigation` toggle at the same time.

### Preview Cards for Facebook or Twitter

This theme supports open graph preview cards to be displayed when sharing a page on Twitter or Facebook out of the box. To show a selected image along with your post when sharing it, you just have to assing the image URL to the `Og Image` field in the page data section. You can also set an image glabally for all posts by defining the same field in the _Global Data and Files_ section.

### Google Analytics and Other Custom Header or Footer Items

Sometimes it is required to add custom Javascript or CSS to one or more pages. This could be for example the case if you would want to add a Google Analytics tracking snippet to your site. Therefore this theme provides two variables for that purpose. The `Items Header` variable lets you add all kind of header items right before the closing `</head>` tag. To add any HTML or JS right before the closing `</body>` tag you can use the `Items Footer` variable.

### Activating the Dark Color Scheme

By default the [light](#light-scheme) color scheme is used by this theme. You can use the `Dark Mode` switch to activate the [dark](#dark-scheme) color scheme for a single page (Page Data) or globally (Shared Data) instead.

### Hide Search or Filters

By default the blog templates show a search bar as well as a list of tags to filter the blog posts. The `Hide Filters` and `Hide Search` switches can be used to hide those elements from a blog page.

### Filter Blog Pages by Template

To provide more control over the selection of pages that are getting displayd in your blog, you can define a regex pattern in the `Template Filter` field of the blog page to filter pages by its template name. For example by setting that field to `post`, the blog page will only show pages that are using a template with a name including the word "post".

### Tag Target URL

Every post can have one or more tags. Clicking such a tag will open the main blog page filtered by the clicked tag. By default that main blog page will be the parent page of the post. You can define the `Url Tag Link Target` variable to use a different URL as target instead.

## Color Schemes

This theme includes two different color schemes.

### Light Scheme

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-mobile-light.webp)
![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-light-1.webp)
![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-light-2.webp)

### Dark Scheme

![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-mobile-dark.webp)
![](https://raw.githubusercontent.com/marcantondahmen/media-files/master/themes/terminal/terminal-dark-2.webp)
