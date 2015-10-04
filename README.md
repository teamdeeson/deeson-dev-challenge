# Deeson Developer Challenge

## Intro
This developer challenge will introduce you to Drupal and us to your coding approach and style.
We have put together a base build with a few key Drupal components and strategies that we like
to use. We would like you to download the build, make some changes and find a place to host the
final result.

## Install
Feel free to use your own web stack to develop on, but if you're new to Drupal it might be worth
checking out Acquia Dev Desktop 2 (https://docs.acquia.com/dev-desktop2), which is a xAMP stack
with Drupal's drush tools included.

Once you have a hosting environment set up, check out our code and visit the site in your browser.
You should be greeted by Drupal's install script. Follow this and once you're finished you should
see a basic Drupal instance.

Try and run `drush @local status`. You may need to review the aliases file at
sites/all/drush/sites.aliases.drushrc.php to make this work.

Once you have drush working, run the following commands:

`drush @local en master`
`drush @local master-ensure-modules`
(Choose the local scope)

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
3. What is drush and how will it help you to develop your site?
4. In the ddc_theme module, what is the `ddc_theme_preprocess_node` function doing?

## Challenge


## Extras

## Hosting
