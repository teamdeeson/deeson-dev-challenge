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

**If you have any issues getting set up, email johne@deeson.co.uk with a link to your repository
details of how far you were able to get. Don't hesitate to get in touch if you have any questions
or would like any clarifications.**

## Questions
Before getting started, consider the following questions. They are likely to come up in interview,
but they should also help you to understand the build and develop it further.

1. What is master and what did it do when you ran master-ensure-modules?
2. What are features and how did they help configure your local build?
3. What is Drush and how will it help you to develop your site?
4. In the ddc_theme theme, what is the `ddc_theme_preprocess_node` function doing?
5. What is the purpose of the Gruntfile.js file in the ddc_theme and how do you use it?
6. What is the coder module and why is what it's doing important?

## Challenge
Your client has asked you to make some improvements to the site. Here are their requests:

1. Can you please add a subtitle, author (with image and description), and publication date to the
article content type and display. Keep in mind that authors will be associated with multiple articles and may or may not be Drupal users. 

2. We'd like only articles that are promoted to the front page to show there.

3. We would like a new article listing on a separate page, showing all articles, which can be filtered by article
tags.

4. We have some special articles and we want to be able to highlight this on the site so they stand
out to our users. Please consider how to make it easy for content editors to select and deselect special articles and see all articles maeked as special in a single place. In terms of theming simply make sure that a special article stands out to anonymous users (a tag or color associated with the article). 

5. We want to make it so that some articles can be selected to be made available only to registered users until a certain date and time, when they then become available to everyone. These articles should be completely invisible to anonymous users (i.e. no teasers in views and a 403 if someone attempts to visit the node page).

6. Read this blog post - https://www.deeson.co.uk/labs/extending-entitydrupalwrapper -  about extending EntityMetadataWrapper with the xautoload module. Determine how to use this techinque to improve the implementation of requirement 5 above.
  
## Hosting
We would like you to host a version of your site for us to review please.

Acquia offer the ability to create a free Drupal 7 hosting instance.

1. If you have not got an Acquia account then sign up for one at https://insight.acquia.com
2. Login and click ‘Add site’
3. Select a new free site
4. Give it a name ending in deeson, e.g. fredbloggsdeeson
5. Set the distribution to Drupal 7
6. Choose the European Union as the cloud instance location
7. Tick the box and click add, provisioning takes a few minutes
8. Click through the Drupal installation process, choosing the minimal profile
9. Once the provisioning process has finished, go back to https://insight.acquia.com, click on ‘Sites’ in the nav and click the Cloud button next to the site you just created.

This is a raw Drupal site with its own codebase inside its own git repository. We leave it as an exercise
for you to now integrate your work on your local computer with the remote repository.

## Delivery
Please send us two emails for your submission, both to johne@deeson.co.uk.

1. An email to us with a link to your code repository and hosted instance, with any notes you may wish to include to us
regarding your submission.
2. An email to "the client", outlining the features they requested and what they need to do to review them.

## Extras
If you're up for some extra challenges, why not try the following:

- Add more style to our design! It needs it. If you have indicated that design is your thing then this is your chance to shine.
- Add a load more button (rather than paging) to the listings.
- Add a site search mechanism (perhaps using solr).
- Add another content type to the site.
- Setup the git repository for the [GitFlow style](https://www.deeson.co.uk/labs/using-git-flow-drupal-project) and have the Acquia dev environment track the develop branch.

