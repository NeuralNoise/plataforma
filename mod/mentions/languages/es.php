<?php

/**
 * Spanish language translation.
 */

$spanish = array(
	'mentions:notification:subject' => '%s mentioned you in %s',
	'mentions:notification:body' => '%s mentioned you in %s.

To see the full post, click on the link below:
%s
',
	'mentions:notification_types:object:blog' => 'a blog post',
	'mentions:notification_types:object:bookmarks' => 'a bookmark',
	'mentions:notification_types:object:groupforumtopic' => 'a group discussion post',
	'mentions:notification_types:annotation:group_topic_post' => 'a group discussion reply',
	'mentions:notification_types:object:thewire' => 'a wire post',
	'mentions:notification_types:annotation:generic_comment' => 'a comment',
	'mentions:settings:send_notification' => 'Recibir notificaciones cuando alguien te @mencione ?',

	// admin
	'mentions:fancy_links' => 'Replce @mentions with a small picture of the user in addition to the user\'s name',

	'mentions:settings:failed' => 'Could not save mentions settings.'
);

add_translation("es", $spanish);