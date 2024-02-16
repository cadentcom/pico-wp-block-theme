# pico-wp-block-theme

The **Pico WP Block Theme** is an open source WordPress block theme optimized for speed, SEO, and accessibility.

## What is a WordPress block theme?

A WordPress block theme is a new type of theme that works with the WordPress Block Editor. It allows users to create and customize their websites using a block-based approach, enabling them to modify not only the content but also the layout and structure of their pages. This differs from traditional themes, which often require coding knowledge to make significant layout changes. Block themes are part of the [WordPress Full Site Editing (FSE) project](https://fullsiteediting.com/) and are designed to provide a more intuitive and flexible way of designing websites. They are built entirely out of blocks, making the entire design of a website modular and customizable.

WordPress [Full Site Editing tools support accessibility](https://webdesign.tutsplus.com/accessibility-and-user-experience-in-wordpress-full-site-editing--cms-108460a), an important goal of the Pico WP Block Thmee

## What are the goals of the Pico WP Block Theme project?

Many WordPress themes are slow, bloated and lack essential accessiblility features. We're going to create a new WordPress theme that demonstrates how quickly a WordPress site can load, while being fully accessible.

To test our theme, we'll use Google Lighthouse. Our goal is to score 100 x 4 for both mobile and desktop.

## The theme should include the following elements

- Logo or branding in the upper left corner
- A hierarchical main menu on the header
- No page builders! Gutenberg blocks only
- Support for a hero image
- Featured images for interior pages (optional)
- A footer with a secondary menu.

## Installation

To install the Pico WP Block theme, you need a working installation of WordPress. Choose one of the following methods, depending on your configuration.

### Clone the Pico theme repository from GitHub

If you can access the command line on your WordPress server, you can clone this repo directly into your ```wp-content/themes``` directory. This means you can automatically pull the latest version of this theme directly from the repo into your WordPress installation using the ```git pull``` command.

- The ```main``` branch includes the official release version of the theme, and is the most thoroughly tested. Use this branch for the most stable version of this theme.
    
- The ```dev``` branch includes the latest "nightly build" of the pico theme. Use this for the latest features and testing -- not recommended for production environments.

Here's are the ```git clone``` command for these branches:

To clone the ```main``` branch, enter this command:

```git clone https://github.com/cadentcom/pico-wp-block-theme.git```

To clone the ```dev``` branch, enter this command, using the ```-b``` argument to select the branch:

```git clone -b dev https://github.com/cadentcom/pico-wp-block-theme.git```

Follow these steps to use this command on your WordPress server:
    
1. Open a terminal or command prompt and log into your WordPress server.

2. Use the ```cd``` command to go to the ```themes``` directory of your WordPress installation, like this: ```cd /path/to/wordpress/wp-content/themes/```

3. To ensure you're in the correct directory, enter ```pwd```

4. Enter the ```git clone``` command you copied above, for either the ```main``` or ```dev``` branch. This will clone all the files in this repo to a new directory inside of the ```themes``` directory.

That's it! You just installed the ```pico``` theme. See the steps below to activate the theme.

To update the theme at any time, follow the steps listed above, but with the following changes:

1. Open a terminal or command prompt and log into your WordPress server.

2. Use the ```cd``` command to go to the ```pico-wp-block-theme``` directory of your WordPress installation, like this: ```cd /path/to/wordpress/wp-content/themes/pico-wp-block-theme```

3. Enter ```git pull```

Now you've got the latest version of ```pico-wp-block-theme``` installed on your WordPress server.

### Download a ZIP file and install in WordPress

If you don't have access to the command line on your WordPress server, or you don't want to mess with ```git``` commands, you can download a **ZIP** of this repo and install it in WordPress like any other theme.

Follow these steps to download a **ZIP** of the entire repo:

1. In this ```pico-wp-block-theme``` repo, click on the **Code** tab.

2. Just below the **Code** tab, use the drop-down menu to select the branch you want (usually ```main``` or ```dev```).

3. To the right of the branch selection menu, click the green **Code** button.

4. On the *Local tab*, click on the **```Download ZIP```** link at the bottom of the popup.

Now that you've downloaded a ZIP file of the Pico theme, you can install it in WordPress:

1. Log into your WordPress dashboard as an Administrator.

2. Select **```Appearance > Themes```** from the left (vertical) menu.

3. Click **Add New Theme**

4. Select the **ZIP** file you just downloaded and click **OK**.


### Activating the Pico theme

After you've installed the pico theme, using either the ```git clone``` method, or installing it as a **ZIP** file, you need to activate it. Follow these steps:
    
1. If you haven't already, log into your WordPress dashboard as an Administrator.

2. Select **```Appearance > Themes```** from the left (vertical) menu.

3. Mouse over the Pico Theme you just installed.

4. Click the **Activate** button.