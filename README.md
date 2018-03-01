#  Custom ZURB Foundation theme.

Do you like grid systems? How about rapid prototyping? Do you believe in mobile first? Then this theme is for you! Foundation is made by ZURB. This theme implements the Foundation framework for Drupal 7 & 8!

#  Custom theme settings code.
    
    DrupalMaze_sub/theme-settings.php
    * Functions that build an abstract representation of a HTML form.
    
    DrupalMaze_sub/DrupalMaze_sub.theme
    * Implements template_preprocess_page

    
 #  Use of variable in page.html.twig.
 
    DrupalMaze_sub/templates/page.html.twig
    
    {% include '@DrupalMaze_sub/dm_sub_header/dm_sub_header.html.twig' %}
    Above line of code will include the dm_sub_header.html.twig file in our main page.html.twig
    
 #  Let's set now default option.
 
    DrupalMaze_sub/config/install/dm_sub.settings.yml
    dm_sub_header: 1
    
    
