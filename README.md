# Deeson Developer Challenge

## Intro
This developer challenge will introduce you to Drupal and us to your coding approach and style.
We have put together a base build with a few key Drupal components and strategies that we like
to use. We would like you to download the build, make some changes and find a place to host the
final result.

**Please don't fork the repository. Best bet is to download the zip and push to your own.**

## Install
Feel free to use your own web stack to develop on, but if you're new to Drupal it might be worth
checking out Acquia Dev Desktop 2 (https://docs.acquia.com/dev-desktop2), which is a xAMP stack
with Drupal's Drush tools included.

Once you have a hosting environment set up, check out our code and visit the site in your browser.
You should be greeted by Drupal's install script. Follow this and once you're finished you should
see a basic Drupal instance in the browser and the set up process would have created you a settings.php
file. You'll need to add the following to your settings.php:

`require_once 'sites/all/conf/master.settings.inc';`

Try and run `drush @local status`. You may need to review the aliases file at
sites/all/drush/sites.aliases.drushrc.php to make this work.

Once you have drush working, run the following commands:

`drush @local en master`

`drush @local master-ensure-modules`
(Choose the local scope)

Finally, go to /admin/appearance and select the Deeson Dev Challenge Sub-theme to be enabled and your default theme.
You can disable Bartik too while you're there.

You should now have our base install configured! To check, and to give you some test content to
work with, go to admin/config/development/generate/content and generate 50 articles.

**If you have any issues getting set up, email stevec@deeson.co.uk with a link to your repository
details of how far you were able to get. There is every chance there is a problem with our build
or instructions, so don't hesitate**

## Questions
Before getting started, consider the following questions. They are likely to come up in interview,
but they should also help you to understand the build and develop it further.

1. What is master and what did it do when you ran master-ensure-modules?
2. What are features and how did they help configure your local build?
3. What is Drush and how will it help you to develop your site?
4. In the ddc_theme module, what is the `ddc_theme_preprocess_node` function doing?
5. What is the purpose of the Gruntfile.js file in the ddc_theme and how do you use it?
6. What is the coder module and why is what it's doing important?

## Challenge
Your client has asked you to make some improvements to the site. Here are their requests:

1. Can you please add a subtitle, author (with image and description), and publication date to the
article content type and display.
2. We have some special articles and we want to be able to highlight this on the site so they stand
out to our users.
3. We want to make it so that these articles are available to registered users only until a certain date, when they
then become available to everyone.
4. We'd like only articles that are promoted to the front page to show there.
5. We would like a new article listing on a separate page, showing all articles, which can be filtered by article
tags.

## Hosting
We would like you to host a version of your site for us to review please. You may want to use the free Acquia Dev Cloud.
We will post instructions for this on here shortly.

## Delivery
Please send us two emails for your submission, both to stevec@deeson.co.uk.

1. An email to us with a link to your code repository and hosted instance, with any notes you may wish to include to us
regarding your submission.
2. An email to "the client", outlining the features they requested and what they need to do to review them.

## Extras
If you're up for some extra challenges, why not try the following:

- Add more style to our design! It needs it.
- Add a load more button (rather than paging) to the listings.
- Add a site search mechanism (perhaps using solr).
- Add another content type to the site.
