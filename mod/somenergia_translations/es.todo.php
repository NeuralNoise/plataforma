<?php
return array(
'item:object:tidypics_batch' => 'Photo uploads',
'tidypics:settings:restrict_tagging' => 'If tagging is enabled, allow tagging only to owner of a photo (and admins)',
'tidypics:settings:slideshow' => 'Enable slideshow',
'tidypics:settings:site_menu_link' => 'Site menu entry forwards to',
'tidypics:settings:site_menu_photos' => 'All photos page',
'tidypics:settings:site_menu_albums' => 'All photo albums page',
'tidypics:settings:max_uploads' => 'Maximum number of images allowed to be uploaded in one batch:',
'tidypics:settings:max_uploads_explanation' => '(Be careful with increasing the number! First, when using the basic uploader you will get a separate input field for each image up to the maximum number on the input form. Secondly, you might need to increase the values of post_max_size and other php variables accordingly for the processing of a large number of images in one batch to work. And lastly, depending on what option you have selected for creation of river entries on image uploads you might get a high number of separate river entries for each uploaded image or a single entry with all the thumbnails of the images uploaded in the batch)',
'tidypics:settings:thumbnail_optimization' => 'Optimization of thumbnail filesize',
'tidypics:settings:optimization:none' => 'None',
'tidypics:settings:optimization:simple' => 'Simple',
'tidypics:settings:optimization:complex' => 'Complex',
'tidypics:settings:thumbnail_optimization_explanation' => '(Currently only used with \'ImageMagick executable\' as image library. Please test before using on a production server! \'None\' uses the same parameters as previous versions of Tidypics for creating the thumbnails, \'Simple\' uses some additional parameters to reduce filesize and \'Complex\' uses even more extensive methods. The filesize optimization parameters hopefully decrease the thumbnails filesizes but might also come with a slight reduction of image quality. The \'Complex\' optimization parameters will also result in some increased server load necessary for creating the thumbnails. The exact outcome - filesize reduction and image quality - depend on the uploaded images and therefore the results may differ. So, please evaluate the different options before deciding on what to use on your production site)',
'tidypics:settings:imagesize_width' => 'Width: ',
'tidypics:settings:imagesize_height' => 'Height: ',
'tidypics:settings:imagesize_square' => 'Square-cut',
'tidypics:settings:imagesize_defaultsize_tiny' => '(Default: 60x60px, square-cut)',
'tidypics:settings:imagesize_defaultsize_small' => '(Default: 153x153px, square-cut)',
'tidypics:settings:imagesize_defaultsize_large' => '(Default: 600x600px, not square-cut)',
'tidypics:settings:sizes:instructs' => 'You may need to change the CSS if you change the default sizes. The sizes set here will also be used if you re-create image thumbnails.',
'tidypics:settings:client_resizing' => 'Image size/resolution reduction on client-side before upload (EXPERIMENTAL!)',
'tidypics:settings:client_resizing_help' => '(Works only with HTML5 uploader; IT MIGHT FAIL FOR LARGE IMAGE FILES - limit depends on device limitations on client-side; works only for JPG/JPEG/PNG image files; image quality after reduction might not be good!)',
'tidypics:settings:resizing_max' => 'Maximum image resolution allowed',
'tidypics:settings:resizing_max_help' => '(Only images with a larger resolution are reduced in size before upload; smaller images are not modified on client-side; the reduction process takes the larger side of the image and decrease it to fit the specified dimensions and adjust the other side proportionally; Be careful with setting too large limits as the image reduction - and therefore the upload - might fail then)',
'tidypics:settings:remove_exif' => 'Remove exif data from image files before upload (EXPERIMENTAL)',
'tidypics:settings:remove_exif_help' => '(Works only with HTML5 uploader AND with the client-side image reduction option enabled; works only for JPG/JPEG image files; image orientation is corrected on client-side before removal of exif data, if necessary; IT MIGHT FAIL FOR LARGE IMAGE FILES - limit depends on device limitations on client-side)',
'tidypics:settings:resize_thumbnails_title' => 'Re-creation of all thumbnails',
'tidypics:settings:resize_thumbnails_instructions' => 'The thumbnails for all currently available photos are re-created using the currently defined thumbnail sizes (see "Settings" tab). WARNING: depending on the number of photos on your site this may take a VERY LONG TIME! <b>Please make a backup of the site\'s database and data directory in any case before starting!</b>',
'tidypics:settings:resize_thumbnails_count' => 'The thumbnails of %s photos in total will get re-created.',
'tidypics:settings:resize_thumbnails_start' => 'Start re-creation of all thumbnails',
'tidypics:resize_thumbnails:success_processed' => 'Number of successfully processed photos: ',
'tidypics:resize_thumbnails:error_invalid_image_info' => 'Number of processed photos with invalid image data: ',
'tidypics:resize_thumbnails:error_recreate_failed' => 'Number of processed photos where re-creation of thumbnails failed: ',
'tidypics:resize_thumbnails:finished' => 'The re-recreation of thumbnails of all %s photos has been finished successfully.',
'tidypics:resize_thumbnails:finished_with_errors' => 'The re-recreation of thumbnails has been finished. There were some errors though: %s photos with invalid data (no re-creation of thumbnails done here) and on %s photos occured an error during creation of thumbnails.',
'tidypics:thumbnail_tool_blurb' => 'This page allows you to create thumbnails for photos when the thumbnail creation failed during upload. You may experience problems with thumbnail creation if your image library is not configured properly or if there is not enough memory for the GD library to load and resize a photo. If your users have experienced problems with thumbnail creation and you have corrected your configuration, you can try to redo the thumbnails. Find the unique identifier of the photo (the so called GUID which is the number near the end of the url when viewing a photo) and enter it below. In addition to thumbnail creation it\'s also checked if the photo GUID is included in the album\'s image order list and in case it isn\'t the photo is added as new first entry in the list.',
'tidypics:album_select:no_results' => 'Sorry, but there are no albums that you can upload photos to and you have no permission to create a new album.',
'tidypics:utilities:broken_images' => 'Find Broken Images',
'tidypics:utilities:broken_images:blurb' => 'This tool finds and allows you to delete image entries that do not have associated image files in the data directory. If you have many images, this will take a long time.

Warning: If your images are not showing up after an update of Elgg, migration of the site to another server, making changes in the site settings or the data path, running this tool will likely delete ALL images from the database. If in doubt, visit the Elgg community site for troubleshooting tips.

In ANY case, before using this tool make a backup of your database and data directory!',
'tidypics:utilities:broken_images:found_images' => 'Broken images found: %s',
'tidypics:utilities:broken_images:delete' => 'Delete all broken images.',
'tidypics:utilities:broken_images:deleted_images' => 'Broken images removed: %s',
'admin:groups:auto_join' => 'Auto join',
'group_tools:settings:simple_create_form' => 'Simple group create form',
'group_tools:settings:simple_create_form:help' => 'Enabling this will change the way how the \'New Group\' form is displayed',
'group_tools:settings:allow_hidden_groups:help' => 'Who can create hidden groups. This setting will overrule the groups plugin setting.',
'group_tools:settings:content:title' => 'Group content settings',
'group_tools:settings:stale_timeout' => 'Groups become stale if no content is created within a number of days',
'group_tools:settings:stale_timeout:help' => 'If no new content is created in a group within the given number of days, the group is shown as stale. The group owner will receive a notification on the day the group becomes stale. A group owner/admin can tell the group is still relevant. 0 or empty to not enable this feature.',
'group_tools:admin:auto_join:default' => 'Auto join',
'group_tools:admin:auto_join:default:description' => 'New users will automaticly join the following groups.',
'group_tools:admin:auto_join:default:none' => 'No auto join groups configured yet.',
'group_tools:form:admin:auto_join:group' => 'Add a group to the auto join groups',
'group_tools:form:admin:auto_join:group:help' => 'Search for a group by name and select it from the list.',
'group_tools:form:admin:auto_join:additional:group' => 'Select the group(s) to join',
'group_tools:form:admin:auto_join:additional:group:help' => 'Search for a group by name and select it from the list.',
'group_tools:admin:auto_join:additional' => 'Additional auto join groups',
'group_tools:admin:auto_join:additional:description' => 'Here you can configure additional groups a user should join, based on properties of the user.',
'group_tools:admin:auto_join:additional:none' => 'No additional groups configured yet',
'group_tools:admin:auto_join:exclusive' => 'Exclusive auto join groups',
'group_tools:admin:auto_join:exclusive:description' => 'Here you can configure exclusive groups a user should join, based on properties of the user. If a match is found for a user they will NOT be added to any of the groups defined above.',
'group_tools:admin:auto_join:exclusive:none' => 'No exclusive groups configured yet',
'group_tools:form:admin:auto_join:additional:pattern' => 'User property matching',
'group_tools:form:admin:auto_join:additional:pattern:add' => 'Add property',
'group_tools:form:admin:auto_join:additional:pattern:help' => 'Users will be matched on all configured properties. To remove a property leave the value empty.',
'group_tools:auto_join:pattern:operand:equals' => 'Equals',
'group_tools:auto_join:pattern:operand:not_equals' => 'Not equals',
'group_tools:auto_join:pattern:operand:contains' => 'Contains',
'group_tools:auto_join:pattern:operand:not_contains' => 'Doesn\'t contain',
'group_tools:auto_join:pattern:operand:pregmatch' => 'Preg match',
'group_tools:auto_join:pattern:value:placeholder' => 'Enter a matching value',
'group_tools:action:admin:auto_join:additional:error:pregmatch' => 'The provided preg match pattern was invalid',
'group_tools:edit:access_simplified:open' => 'Open Group',
'group_tools:edit:access_simplified:open:description' => '<ul><li>Any user may join</li><li>Content can be shared with anyone</li></ul>',
'group_tools:edit:access_simplified:closed' => 'Closed Group',
'group_tools:edit:access_simplified:closed:description' => '<ul><li>Membership needs to be approved</li><li>Content can only be shared with group members</li></ul>',
'group_tools:stale_info:description' => 'This group has been inactive for a while. The content may no longer be relevant.',
'group_tools:stale_info:link' => 'This group is still relevant',
'group_tools:csv_exporter:stale_info:is_stale' => 'Stale group',
'group_tools:csv_exporter:stale_info:timestamp' => 'Stale timestamp',
'group_tools:csv_exporter:stale_info:timestamp:readable' => 'Stale timestamp (readable)',
'groups_tools:state_info:notification:subject' => 'Your group \'%s\' has been inactive for a while',
'groups_tools:state_info:notification:summary' => 'Your group \'%s\' has been inactive for a while',
'groups_tools:state_info:notification:message' => 'Hi %s,

Your group \'%s\' has been inactive for a while.

Please check on the group here:
%s',
'phpmailer:override' => 'Override default Elgg mail handler',
'phpmailer:smtp' => 'Use SMTP',
'phpmailer:host' => 'SMTP Host',
'phpmailer:smtp_auth' => 'Use SMTP Authorization',
'phpmailer:username' => 'Username',
'phpmailer:password' => 'Password',
'phpmailer:nonstd_mta' => 'Using Nonstandard MTA (end of line = n)',
'phpmailer:ssl' => 'Use SSL Authorization',
'phpmailer:port' => 'Port Number',
);