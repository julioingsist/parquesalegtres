=== My Calendar ===
Contributors: joedolson
Donate link: http://www.joedolson.com/donate.php
Tags: calendar, dates, times, events, scheduling, event manager, event calendar
Requires at least: 3.3.0
Tested up to: 3.7.0
License: GPLv2 or later
Stable tag: 2.2.12

Accessible WordPress event calendar plugin. Show events from multiple calendars on pages, in posts, or in widgets.

== Description ==

My Calendar provides event management with richly customizable ways to display events. The plug-in can support individual event calendars within WordPress Multisite, multiple calendars displayed by categories, locations or author, or simple lists of upcoming events. 

Easy to use for anybody, My Calendar provides enormous potential for developers needing a custom calendar interface.

* 	[Buy the User's Guide](http://www.joedolson.com/articles/my-calendar/users-guide/) for extensive help with set up and use.
*   [Buy My Calendar: Submissions](https://www.joedolson.com/articles/my-calendar/submissions/), the PRO extension for front-end event submissions

= Basic Features: =

*	Standard calendar grid or list views of events
* 	Show events in monthly, weekly, or daily view.
* 	Mini-calendar view for compact displays (as widget or as shortcode)
*	Widget to show today's events
*	Widget to show upcoming or past events 
* 	Widget to search events
*	Custom templates for event output
*	Limit by category/categories
* 	Limit by location
* 	Limit by author
*	Disable default CSS and default JavaScript or display only on specific Pages/Posts
*	Editable CSS styles and JavaScript behaviors
*	Schedule a wide variety of recurring events.
*	Individual occurrences of recurring events can be edited individually
* 	Access to most aspects of My Calendar can be restricted by role. (Adding events, editing events, editing styles, changing settings, etc.)
* 	Choose which of the following fields you want to enter and display for each event:
	* title, 
	* description, 
	* event image,
	* alternate description, 
	* event host,
	* event category, 
	* URL, 
	* registration status (open, closed or irrelevant), 
	* event location
* 	Email notification to administrator when events are scheduled or reserved
* 	Post to Twitter when events are created. (with [WP to Twitter](http://wordpress.org/extend/plugins/wp-to-twitter/))
*	Location Manager for frequently used venues
*   Fetch events from a remote MySQL database. (Sharing events in a network of sites.)
*   Import from [Kieran O'Shea's Calendar plugin](http://wordpress.org/extend/plugins/calendar/)
* 	Integrated Help page to guide in use of shortcodes and template tags
*   New: [Developer Documentation](http://www.joedolson.com/articles/doc-category/my-calendar-3/)

= Translations =

Available languages (in order of completeness):
French, Japanese, Dutch, German, Galician, Spanish, Italian, Danish, Czech, Hindi, Turkish, Finnish, Slovenian, Polish, Portuguese, Russian, Swedish, Romanian, Basque, Persian

Visit the [My Calendar translations site](http://translate.joedolson.com/projects/my-calendar) to check the progress of a translation.

Translating my plug-ins is always appreciated. Visit <a href="http://translate.joedolson.com">my translations site</a> to start getting your language into shape!

<a href="http://www.joedolson.com/articles/translator-credits/">Translator Credits</a>

== Installation ==

1. Upload the `/my-calendar/` directory into your WordPress plugins directory.

2. Activate the plugin on your WordPress plugins page 

3. Configure My Calendar using the following pages in the admin panel:

   My Calendar -> Add/Edit Events
   My Calendar -> Manage Categories
   My Calendar -> Manage Locations
   My Calendar -> Settings   
   My Calendar -> Style Editor
   My Calendar -> Behavior Editor
   My Calendar -> Template Editor
   
4. Edit or create a page on your blog which includes the shortcode [my_calendar] and visit
   the page you have edited or created. You should see your calendar. Visit My Calendar -> Help for assistance
   with shortcode options or widget configuration.

== Changelog ==

= 2.2.13 =

* Bug fix: Threw error if network-activated (wp_is_mobile() not defined yet)
* Bug fix: Calendar URI could be saved as integer instead of as URL.
* Bug fix: hide screen options that current user can't use.
* Improved localization of Calendrical jQuery plug-in.
* Feature: my_calendar_upcoming and my_calendar_today shortcodes now support filtering by host.
* New filter: mc_send_notification -- passes event and user data to determine whether a new event email notification should be sent. Return true|false.

= 2.2.12 =

* Bug fix: jquery.calendrical time rendering.

= 2.2.11 = 

* Required deleted file.

= 2.2.10 =

* Bug fix: date comparison in grouped event date output.
* Bug fix: editing a single occurrence of an event when location fields not displayed could result in duplicating the event.
* Bug fix: Duplicated <a> on event title in events manager.
* Bug fix: Generated WP to Twitter empty sentence error.
* Bug fix: Grouped events within a single day in upcoming events list.
* Bug fix: Run My Calendar upgrade stylesheet archiving only when My Calendar is updated.
* Bug fix: 
* Changed: replaced mc_is_mobile() functionality with native wp_is_mobile(). Filterable for My Calendar using 'mc_is_mobile' filter.
* Changed: properly registered and enqueue most front-end styles.
* Changed: Removed classes 'prevMonth' and 'nextMonth' from navigation.
* Misc. minor style changes to front and back end UI.
* Added: special value for 'author' and 'host' attributes of 'current' to only show events created by the logged-in user. Filter via 'mc_display_author' and 'mc_display_host'
* Added: date and time to title field for My Calendar RSS feed.
* Preparation: permission filtering for submissions and registrations add-ons.
* Updated: German & Slovenian Translations.

= 2.2.9 =

* Bug fix: Reversed argument in $details filter, breaking custom template editor.

= 2.2.8 =

* Bug fix: Fix in mini calendar scripting with AJAX.
* Bug fix: Strict error in My Calendar Search widget.
* Bug fix: My Calendar screen options disabled other screen options.
* Updated: Slovenian
* Documentation error: cat_id, not category_id
* Added support for <a href="http://wordpress.org/plugins/botsmasher/">BotSmasher</a> as a spam filter for events.
* Removed location region from Google Maps string (Google Maps choked on that data.)
* Removed EasyDrag jQuery plug-in due to compatibility issues.
* Eliminated 4 filters: mc_event_content_{$type}; replaced with single filter mc_event_content with $type parameter.
* Added support for WP 3.6 shortcode attribute filters.
* Added more filters & actions. Lots and lots of filters. Actions. Yeah.
* Maybe I'm the only one excited about the last thing.

= 2.2.7 =

* Bug fix: map links could render links with no data. 

= 2.2.6 =

* Bug fix: Link to single day events from mini calendar broken.
* Bug fix: Return to calendar link from print view
* Bug fix: some map links missing 'external' class.
* Updated: couple missing i18n strings
* Bug fix: widget title link could not be saved.
* Bug fix: Changing the event time on individual occurrences of a recurring event showed wrong time in upcoming events list.
* Bug fix: rewrite of AJAX scripting to clear bugs.
* Bug fix: Event authors with "add" capability could not edit their own events or copy events from the admin.
* Bug fix: Time frame toggles triggered beginning of month instead of current week/day if no params set.
* Deprecated upgrade paths from versions prior to 1.5.0.
* Eliminated single-day timeline URL settings field (no longer required.)
* Added filter mc_modify_day_uri to allow above target URL to be customized.
* Removed caching option; caching accessible only via filtering.
* Updated: French, Italian, French, Slovenian
* Added: Galician

= 2.2.5 =

* Bug fix: better bug fix in 2.2.3 event duplication bug. 
* Updated: Japanese translation.

= 2.2.4 =

* Bug fix: event duplication bug in 2.2.3

= 2.2.3 =

* Bug fix: duplicate attribute 'rel' in prev/next nav.
* Bug fix: category color associations on event titles when no color assigned. 
* Bug fix: print view would not always display all categories if no limits set. 
* Bug fix: Group editor lost multi-day settings.
* Improvement: throw a warning on events set up with problem settings, e.g. recurring events where the next occurrence begins before the current event has ended.
* Added template tag: {map_url} for Google Map URL. 
* New filters: filters for calendar year/month/day (to change the default start date for the calendar.)
* Language updates: Japanese, Italian, Dutch, Romanian, and Slovenian 

= 2.2.2 =

* Bug fix to importer from Calendar
* Another fix to link_map (this time, in the standard calendar view.)
* Bug fix: location preset being assigned didn't allow changes to location details when editing events.

= 2.2.1 =

* Bug fix: Pull multi-day events in upcoming events list that happen today, but started on a previous day when past events set to 0.
* Bug fix: broken {link_map} template tag.
* Update to Italian translation.

= 2.2.0 =

* New feature: event search (widget).
* New feature: with <a href="http://wordpress.org/extend/plugins/wp-to-twitter">WP to Twitter</a> installed, auto post events to Twitter when published or approved.
* New feature: toggle timeframe between month/week/day view
* New setting: ensure best possible color contrast between background color and title link.
* Split manage events page and add event page into two separate interfaces. 
* Removed non-sortable fields from display for manage events interface. 
* Moved setting for number of events on manage events page to screen options.
* New screen option: on event manager screen, users can turn off areas of the event manager they don't use.
* New template tag: {image_url}, to pull an event's associated image without HTML
* New template tag: {linking}, event URL with fallback to details link
* New template tags: {gravatar} and {host_gravatar} to show author/host gravatar images.
* New filter: mc_event_mail_to.
* New filter: mc_past_search_results.
* New filter: mc_future_search_results.
* New filter: mc_search_template
* Added support for variable increments (e.g., every 3 weeks, every 4 months, etc.)
* Added template tag support to notification email subject line
* Added option to send HTML notification emails
* Added option to set sending address for notification emails
* Added template tag to add event to Google Calendar
* Added 'check all' option to event manager.
* Accessibility Improvement: added aria-live attributes.
* New shortcode attributes: 'above' and 'below'. (Control order and display of elements above/below calendar.)
* Deprecated shortcode attributes: showkey, shownav, toggle, showjump. Will be removed in My Calendar 2.3.0.
* Updated shortcode generator to use new attributes. Also added support for author and host attributes.
* Miscellaneous tweaks to all My Calendar themes.
* jQuery improvements. (jQuery version 1.7 minimum requirement.)
* Bug fix: multi-day events incorrectly displayed in Upcoming Events by dates view
* Bug fix: Open events to details page briefly rendered empty details pop-up (requires script update)
* Bug fix: <title> element filter didn't strip all HTML tags. 
* Bug fix: hcal end time
* Bug fix: upcoming events miscounted number of events with overlapping multiday single events.
* Bug fix: today's events are now counted towards total events in upcoming events list
* Bug fix: retention of location data when location fields disabled in manager
* Bug fix: documentation correction for remote DB
* Bug fix: caching issue when filtering by location
* Language updates: German, Spanish, French, Japanese, Dutch, Polish, Italian, Slovenian
* Deprecated support for WordPress versions up to 3.3.0 due to jQuery version change.

= 2.1.5 =

* Bug fix: upcoming events timestamps were converted to UTC.

= 2.1.4 =

* Bug fix: weekly view when crossing years jumped to next year
* Bug fix: Upcoming events sorting fix
* Bug fix: Upcoming events count fix
* Bug fix: print stylesheet directory fix.

= 2.1.3 =

* Bug fix: My Calendar stripped title elements from singular posts unless an SEO plug-in was installed. 

= 2.1.2 =

* Bug fix: Miscounted number of events in upcoming events view when events were multiple days.
* Bug fix: My Calendar URL guessing now only selects from published Pages/posts
* Tweak: Minor change to HTML output in print view
* Added: Option to display current month or current year using Upcoming Events widget.
* Added: Filter to display a custom <title> on single event details pages with settings field to configure that title. (Improves SEO)
* Language updates: Italian, Russian, Basque

= 2.1.1 =

* Bug fix: users without 'Approve Event' ability submitted unapproved events even when event approval was disabled.

= 2.1.0 =

* Miscellaneous filepath fixes for custom icons
* Fixed filepath issue for custom content directory in loading calendar generator
* Added templating options to RSS feed event format
* Added two new template tags: description_stripped and shortdesc_stripped; returns the description fields with HTML removed.
* Re-organized settings to provide better grouping.
* Removed jumpbox default setting; jumpbox now only configurable via shortcode.
* Bug fix: titles missing in list view when open to details link enabled.
* Bug fix: Multi-day events listed only once in upcoming events lists.
* Minor stylesheet tweaks.

= 2.0.12 =

* I horribly screwed up the Upcoming Events widget in 2.0.11. Please accept my apologies.

= 2.0.11 =

* Fixed Broken custom stylesheets editing/selection.
* Added Custom links for widget title links
* Fixed issue with event links expiring immediately
* Fixed issue with holiday collisions restricted in Upcoming Events/events only when holiday category is displayed.
* Added full year output option for iCal downloads.
* Added setting for calendar heading month formatting.
* Updated language files: Japanese, Italian, German, Turkish

= 2.0.10 =

* Updated Japanese, Turkish, and Italian translations
* Bug fix: Upcoming Events list could not be limited to a single author.
* Bug fix: Un-approved events were being displayed in some public contexts.
* Bug fix: Problem with RSS feed template elements not rendering in some cases.
* Bug fix: Upcoming Events removed events inappropriately in certain situations when 'skip on holidays' was checked
* Bug fix: Updated method for getting current plugin URL.
* Deprecated support for WordPress versions before 3.0.6.

= 2.0.9 =

* Bug fix: Email notification on event addition to admin did not receive event data.
* Bug fix: Accidentally eliminated weekend class. Now it's back!
* Bug fix: Events crossing multiple dates need per-date unique IDs
* Code change: Some code simplification for current URL and plugin URL references.
* Updated languages: Portuguese, Dutch, Italian

= 2.0.8 =

* Re-written (simplified) holiday exclusion mechanism.
* Performance improvements to templating and event processing.
* Bug fix: Import from Kieran's "Calendar" plug-in was broken.
* Bug fix: 'nextmonth' class was attached to events in weekly view; not appropriate to view.
* Bug fix: Deleting single instance deleted entire event series.
* Added option: number of events per page in admin events list

= 2.0.7 =

* Bug fix: Show list view on mobile devices option did not work.
* Bug fix: No longer forcing links on titles in list or mini view.
* Bug fix: All-day events came up with random end times.
* Change: All-day checkbox added.
* Change: All-day events automatically forced to hide end times.
* Change: removed X-WR-CALNAME field from iCal output for improved compatibility
* Updates: Partial updates to Spanish, Italian, and Dutch translations.

= 2.0.6 =

* Bug fix: Mini calendar links pointed to current display month regardless of current display date.
* Bug fix: if day parameter was set, the main calendar views showed events for month starting from that date.
* Bug fix: if day view was targeted from mini calendar with default cid parameter set, would not react 
* Bug fix: Calendar could not show events which had start and end dates which spanned the displayed period but were not included in the displayed period.
* Moved screenshots into assets folder in version repository.
* Translation source updated at http://translate.joedolson.com/ - now the translations need refreshing!

= 2.0.5 =

* Bug fix: Date links were eliminated in mini calendar if option to link to day-view was enabled.
* Bug fix: Today's events drew events based on UTC instead of current timezone.

= 2.0.4 =

* Bug fix: template variable misassigned in the Today's Events shortcode.
* Change: Added option to output iCal either in UTC or with times as entered. (Previously only UTC)

= 2.0.3 =

* Bug fix: Upcoming events widget did not support the "show_today's events" option correctly.
* Bug fix: Was not possible to set 12:00 am as the end time for an event.
* Bug fix: prevented blank title in main calendar due to faulty template.

= 2.0.2 =

* Bug fix: My Calendar did not enqueue jQuery
* Bug fix: Grid view did not display last day of month if first day of week and last day of month were both Sunday

= 2.0.1 =

* Bug fix: Error in default settings for event titles.
* Bug fix: Single Event iCal export broken
* Bug fix: Today's Events shortcode broken if author not specified
* Change: Deleting or updating categories now refreshes the cache.

= 2.0.0 =

* Completely re-written database model for events.
* Added: pagination on event manager list of events.
* Added: Restrict groups manager lists to currently grouped/ungrouped lists of events.
* Added links to other event instances visible when editing events with multiple instances.
* Added default category selection.
* Added feature: limit calendar views by event author.
* Added feature: filter event manager view by location, author, or category.
* Added feature: mark categories as private, to only show those events to logged-in users.
* Added templating to locations list so user can produce list of any set of location data.
* Added option in event manager to copy location data into Locations table
* Added [my_calendar_event] shortcode to fetch information for a single event.
* Added template tag {timerange} to display start-end times.
* Change: all events now have an end time. Option to hide end times to maintain current display. 
* Bug fix: iCal had missing newline; events now return labeled UTC time
* Bug fix: RSS does better job of clearing non-XML special characters.
* Bug fix: If preset location was selected, no other edits to locations could be done. 
* Bug fix: when copying an event, the new event was grouped in the same group as the source event. 
* Bug fix: if stylesheet was disabled, stylesheet was erased on next save of style settings.
* Bug fix to category limiting which matched category names like 'baseball' to show 'all' categories.

= 1.11.3 =

* Fatal error in PHP 5.4+ https://bugs.php.net/bug.php?id=54657
* Bug fix: {date} and {time} template tags not rendered in details link when run in a template.
* Bug fix: upgrade database button placement off-screen 
* Bug fix: layout on stylesheet editor caused usability problems
* Bug fix: added line break in iCal output.
* Change: added alt attribute to category icons in appropriate contexts.
* [My Calendar 2.0 beta](http://downloads.wordpress.org/plugin/my-calendar.2.0.0.zip) added to subversion repository. Here there be bugs. 

= 1.11.2 =

* Bug fix: Called wp_editor on versions below 3.3
* Bug fix: assorted PHP notices cleaned up.

= 1.11.1 =

* HTML validation issue fixed in calendar output.
* Added option to hide display of external event links in calendar output. 
* Bug fix: Mini calendar should not toggle from mini view when main view switched.
* Bug fix: Week time frame of list view did not return the 'no events' message.
* Feature: No events message can be customized by using an enclosing shortcode: [my_calendar]No events this week![/my_calendar]

= 1.11.0 =

* Added option to use {date} in Today's Events widget title.
* Events with the same time are now sub-sorted by title in Upcoming Events lists.
* Template tag {endtime} returns empty string if same as start time
* Standard event output returns empty string for event end time if same as start time.
* Can only check 'multi-day event' option if event has multiple occurrences.
* Categories in editor now sortable by either ID or category name.
* Categories in input now sorted by category name.
* Updated mobile detection class.
* Major revision to permissions handling to use custom capabilities
* Redesign of settings pages.
* Can target tablet devices with CSS by adding a stylesheet called mc-tablet.css to your theme directory.
* Can target other mobile devices with CSS by adding a stylesheet called mc-mobile.css to your theme directory.
* Template tags now support before and after attributes: {tag before=&quot;&lt;p&gt;&quot; after=&quot;&lt;/p&gt;&quot;}
* Added option to retrieve events, categories, and locations from a remote database. (e.g., to share calendar information between 3 related sites.)
* Eliminated details arrow; forcing anchor element on clickable title. 
* Added 'id' attribute to My Calendar shortcode, to customize unique ID for calendar and avoid non-compliant duplication of IDs
* Added 'template' attribute to My Calendar shortcode, so specific calendars can use their own individual custom templates. Templates should be text files (.txt) placed in your theme directory.
* Reduced specificity in stylesheets by eliminating ID-based references.
* Fixed bug with day/date consistency in 5-day grid calendars.
* Added day class to date boxes without dates.
* Jumpbox is now switchable from the shortcode.
* Fixed google maps link to use the correct directions targeting method
* Various changes for WP 3.4 compatibility.
* Updated Danish Translation
* Updated Czech Translation 
* Added Hindi Translation

= 1.10.12 =

* Bug fix: List format showed all dates, regardless of whether there were events for that date.
* Bug fix: List format showed incorrect classes.
* Bug fix: Pipe separator for categories not supported with caching.
* ARRRRGGGGHHHH!!! I'm sure you're as frustrated about all these little releases as I am. But who wants to sit on known bugs?

= 1.10.11 =

* Bug fix: Variable not checked for type threw usort warning.
* Bug fix: Details links rendered incorrect page if linked from a single post location with permalinks not enabled.
* Bug fix: Fixed bug where calendar returned no information if cache reached max size.
* Settings change: Caching is now defaulted to off.

= 1.10.10 =

* Bug fix: Upcoming events list did not respect category limits.
* Validation error/bug fix: Date for ID for first of month was incorrect.
* Validation error: unencoded ampersand in iCal link if permalinks disabled.

= 1.10.9 =

* Added option to clear cache from settings.
* Bug fix: Error in caching where cache returned false for multi-category limited calendars.
* Bug fix: Error in caching where cache returned false for category limited calendars using category name as delimiter. Thanks to [Antti Palosaari](crope@iki.fi) for reporting this bug and for testing fixes.
* Bug fix: Error notices if user is deleted who is assigned as host of some events. Thanks to Florian Edelmann for reporting this bug and contributing solution.
* Bug fix: Upcoming events in dates mode returned null for cached dates.

= 1.10.8 =

* Bug fix: upcoming events list breaks if 'This is a multi-day event' is checked for an event with only a single occurrence. 
* Bug fix: Upcoming events caching did not cache correct data.
* Modification: eliminated some extraneous database calls
* Modified: clarifying text edits
* Added: category classes on calendar date cells

= 1.10.7 =

* Made 'to' value in Google Maps links a translatable value.
* Feature change: iCal download now respects currently selected month. 
* Added a phone number field to the Location manager
* Added a setting to display only the core site's calendar on child sites in multisite mode.
* Added a setting for the link target for mini calendar dates
* Re-wrote labels for URL link target settings fields.
* Bug fix: Location selector did not respect currently selected categories.
* Bug fix: "Add another occurrence" option available in Edit mode, but not functional. Removed option.
* Bug fix: Limiting by categories didn't trim whitespace from category names.
* Bug fix: Fixed RSS/ICS/Print permalinks if PATHINFO permalinks are enabled.
* Improved cache handling. Cache limit relative to amount of memory available to PHP. Cache stores information more efficiently.
* Revised RSS/iCal handling to avoid .htaccess problems.

= 1.10.6 =

* Revised template tags so the description tags are run through wpautop(), and added _raw versions which are not.
* Fixed a bug in URL generation so that URLs with ports are correctly constructed.
* Fixed a bug iin Print output which did not allow restriction to multiple categories
* Added option to use {date} in previous/next navigation links to indicate what date set is being navigated to.

= 1.10.5 =

* I made a truly bone-headed error in the last update, and I'm not even going to say what. If you didn't notice it, lucky for you! 

= 1.10.4 =

* In my rush to fix the security issue, I broke an aspect of the event navigation. Apologies for this! Now fixed.

= 1.10.3 =

* Incorrectly called wp_kses(). Apologies for the frequent updates!

= 1.10.2 =

* Critical security update. Please upgrade promptly. Big thank you to Dean Batha for the bug report.

= 1.10.1 = 

* Bug fix: undeclared array in widget manager
* Renamed overly-generic constant.

= 1.10.0 =

* New feature: option to link dates in mini calendar to separate daily view instead of pop-up.
* New feature: no longer necessary to manually edit behaviors in order to open main calendar event titles to separate page.
* New feature: Ability to define grouped events as a single multi-day event and remove duplicates from events lists (upcoming events and today's events widgets)
* New feature: group-association classes assigned to multi-day events in grid display.
* New template tags: {daterange} and {multidate} for displaying a beginning and ending date range for a single event and for displaying each date in a multi-day event, respectively.
* Week-view calendar caption now editable.
* Added printable version.
* Submit buttons in forms are now duplicated at top and bottom of long editing sections, to improve usability.
* Minor style change to group editor to avoid group list colliding with editor textarea.
* Removed angle brackets from Previous/Next events links.
* Added custom action hooks for event save and event delete
* Added ability to prevent today's events from showing up in upcoming events listings.
* Added categories to iCal output.
* iCal should return times in local time, not in UTC.
* Bug fix: iCal output not correctly encoded
* Bug fix: mc_next_link filter did not exist.
* Bug fix: placed limit on maximum size of cached calendar data.
* Bug fix: Upcoming events list will no longer occasionally display more items than expected.
* Bug fix: menu icon not aware of custom content locations

= 1.9.8 =

* This is just a convenience update due to a warning appearing in 1.9.7 that I missed.

= 1.9.7 =

* Cache was not cleared when events were approved, rejected, or deleted.
* Fixed bug with slashed characters in time and date formats
* Fixed bug where previous/next links did not work on category pages
* Fixed bug where event description was deleted if edited in groups manager.
* Easydrag.js now respects conditional loading by page ID.
* Small change to upcoming events list: events with an end time specifie and not crossing days will move off the list after they end rather than after they start.

= 1.9.6 =

* Fixed bug in Event Manager where information about whether an event was open for registration saved incorrectly.
* Added raw details_link template tag.
* Fixed Google Maps link error when using Long/Lat coordinates.
* Associated image option was not available if HTML editor was enabled.

= 1.9.5 =

* Bug fix: Caching of Today's events did not account for category limits
* Bug fix: Upcoming events listed by day duplication

= 1.9.4 =

* Bug fix: month-by-day recurring events in upcoming events list
* Bug fix: duplication of events in upcoming events list
* Bug fix: when editing a single event with indefinite recurrences, future events set up without continuing recurrence.
* Function error when data not present fixed.
* Added display of sending name/address for support messages

= 1.9.3 =

* Stylesheet saving can write longer files. Solves problem with occasional truncation of stylesheets.
* Added transient caching for calendar events to improve performance, plus other various performance improvements
* Small html output change.
* 1.9.0 made details boxes draggable; made this optional.
* Added plug-in support request form.
* Added updated French translation to 1.9.2
* Fixed bug with date switcher duplicating/skipping months.
* Updated User's Guide (not included with plug-in)

= 1.9.2 = 

* Bug fix: Fixed sort error returned by calendar if no events are in array.
* Bug fix: Fixed incorrect URLs for icons in custom directory in category key.
* Bug fix: Caption text did not display.
* Added {date} and {time} to details link text templating.
* Bug fix: Fixed {icon} URL in template output. 
* Bug fix: Fixed bug with table layout of dates when weekends are disabled on grid calendar.
* Bug fix: Fixed bug with generation of details link when not using permalinks.
* Bug fix: Fixed bug with HTML editor converting HTML entities.
* Bug fix: Fixed bug where weekly view showed the wrong dates if the current week started in the previous month. 

= 1.9.1 =

* Bug fix: Incorrect title template tag auto-generated if title template is empty.
* Bug fix: Create events permissions broken
* Bug fix: Host list broken in WordPress versions lower than 3.1
* Bug fix: My Calendar not using WordPress defaults for customizable date and time settings if not set by user.
* Bug fix: Turning off calendar icons did not turn off icons in key
* Bug fix: details links used current URL instead of stored URL
* Bug fix: default widget settings not loaded on upgrade.
* Bug fix: next/previous links not working on home page if permalinks not set.
* Bug fix: event title shown in date field in list mode was not for the first event of the day.
* Style change: Minor change to my-calendar.css to adjust for the green background on weekends. (Which showed up as the result of a fix to an HTML problem in 1.8.9.)
* Bug fix/Option add: Added option to remove individual iCal link
* Option add: Added option to conceal first event title/number of events with date in list mode.

= 1.9.0 =

Additions:

* template editing for list, grid, mini, and single event output.
* pop-up box is now draggable.
* date format option for grid mode, week view.
* templating for details link text.
* templating for event URL link text.
* location filtering from shortcode.
* image upload option for events
* day class to calendar date headings and cells
* individual instances of repeating events can be edited
* feature to add multiple occurrences of an event simultaneously. (concept from Dave Heitzman)
* feature to mass edit information for groups of events (concept from Dave Heitzman)
* stored URL for locations (contrib by John Colvin)
* recurring daily events on weekdays only (based on contrib by John Colvin)
* optional templating for all event output formats
* individual event occurrence iCal export
* numerous additional template tags
* Option to use custom location filter fields as data control
* Shortcode to generate list of saved locations
* Network administrators can control whether sub-site calendars contribute only to a central calendar, only to their own calendar, or whether site administrators can make that choice. 
* Upgrade notice information in dashboard for future upgrades.
* implementation of WordPress text diff to compare your styles and scripts against my current released versions
* Option to skip a defined number of events in upcoming events lists.

Bug fixes:

* jump box was displaying in week/grid view.
* some potentially repeatable IDs (code validation).
* 'Administrators see all options' did not work.
* Fixed timestamps on main calendar objects
* Squashed e_notice errors.
* category limiting did not work without permalinks due to GET variable conflict with WordPress core
* Missing nonce in database upgrade routine
* Mini calendar simultaneously displayed single event view when visited.
* Link generation for details view did not work if calendar link parameterized
* Issue with weekdays only calendar if day of week set to start on Sunday
* Issue with retrieval of user-specific settings
* Issue with accessing styles and javascript if My Calendar installed in non-standard directory.
* Problem in Today's Events widget when Holiday restrictions are enabled.

Changes:

* replaced all default icons with 24-bit transparent PNGs
* jumpbox output to automatically scope to the oldest dates in the database.
* iCal output changed to output all events for complete current month
* RSS output to prioritze newly added events
* holiday skipping/fifth week customization moved into event manager function
* new 'close' icon for pop-up box; added close icon and scripting to mini calendar pop-up
* copy in several places; updated template tags.
* location lists sorted by location label (contrib by John Colvin)
* Eliminated calendar heading option
* default style resets no longer stored in global variables, instead stored as files.
* Map links now trigger the driving directions dialog in Google Maps
* New default stylesheet, refresh.css

= 1.8.9 =

* Fixed bug with database upgrade in multi-user additional calendars
* Fixed bug where calendar picked up current month labeling using current day of the month
* Added French translation

= 1.8.8 =

* Fixed bug in locations filtering that disabled feature if user not logged in.
* Re-arranged settings and added notices about options which will be removed in a future release.
* Revised RSS feed to use event permalinks when they are available.

= 1.8.7 =

* One very minor change in 1.8.6 caused some plug-in conflicts, so I rolled that change back. Will find another solution to the problem it solved. This change affects very few users.

= 1.8.6 = 

* Fixed bug with {details} template tag when Upcoming widgets configured as Events
* Location and category filters now do not display forms/lists if there isn't more than one choice.
* Extended details link feature to main calendar output and added to output options.
* Minor changes to time-entry jQuery plug-in to improve usability.
* Updated Japanese translation to 1.8.5
* Added Russian translation to 1.8.5 

= 1.8.5 = 

* Another bug fix to monthly-by-day recurrence. 
* Fixed minor problem with default template not being visible in widget.
* Fixed 'widget title linked' bug.
* Added Turkish translation by Mehmet Ko&231;ali

= 1.8.4 =

* Mini calendar widget had a mis-labeled option field
* Custom User settings for event region didn't function correctly.
* A variety of bug fixes applied to events repeating on a monthly-by-day basis

= 1.8.3 =

* Turned on spam flag toggle, which I had commented out and failed to restore...
* Default return false ('not spam') for privileged users when checking Akismet

= 1.8.2 =

* Fixed bug with {icon} template tag, for real.
* Fixed RSS missing argument
* Fixed empty list rendering in upcoming events widget

= 1.8.1 =

* Fixed bug with region saving on edit of location
* Fixed bug with single-event view receiving date as array
* Fixed bug with {icon} template tag
* Fixed bug with calendar output if user settings are enabled but not applied by user
* Fixed bug with list/grid format toggle
* Fixed bug with upcoming events limited by category names

= 1.8.0 =

* Added event region as a location field
* Added time selector and altered calendar range selector.
* Added visual editor for event description textarea.
* Added templating tag to add a link to the single event view.
* Added option to not display weekends in grid format.
* Added unique ID for each event in calendar.
* Added default sort order option for admin events list.
* Added admin events list to screen while editing or copying event.
* Added shortcode generator for Page and Post editor.
* Added spam protection: New events are now checked through Akismet if installed and configured.
* Added category selection shortcode.
* Added mini calendar widget.
* Added external link class.
* Added list/grid view toggle.
* Added mobile detection so mobile devices receive list format without JavaScript for easier reading.
* Added Upcoming Events widget sort order option.
* Added Option to link widget title to main calendar page.
* Change: Minor reorganization of settings page.
* Change: Altered time input to use non-military format time, added JavaScript time input.
* Change: Moved My Calendar menu items into the content menu.
* Change: When calendar is limited by categories, only the displayed categories are listed in the category key.
* Change: If widget title is left blank, widget will have no title.
* Change: Moved translation files into a subdirectory (/lang/)
* Bug fix: hcal dates
* Bug fix: problem where restoring styles referenced out of date styles
* Bug fix: error in primary stylesheet
* Bug fix: issue with month-by-day recurring events when recurrance set at 0
* Bug fix: issue with end dates when recurrance set at 0
* Bug fix: DB installed to match WPDB chararacter set and collation.
* Bug fix: turn-of-year page navigation in week view.
* Bug fix: entries not remembered in error condition post
* Updated German Translation to version 1.7.0 (Christopher Schauer)
* Updated German Translation to version 1.7.8 (Uwe Jonas)
* Note: during this update cycle, I received two German translations, and am using the most up to date version.
* Added Swedish Translation to version 1.7.8

= 1.7.8 =

* Bug fix: Behaviors page limits lost on settings refresh
* Bug fix: Fix {enddate} shortcode output.
* Bug fix: iCal output improvements
* Modification: RSS and iCal output are disabled entirely when turned off, rather than just hidden.
* Modification: Added styles for days out of current month

= 1.7.7 =

* Bug fix: Upcoming Events widget fault in 'dates' mode.

= 1.7.6 = 

* Bug fix: Upcoming Events widget in days mode was not offsetting time using GMT reference. (Committed silently in 1.7.5)
* Bug fix: Default template not rendered in Today's Events when template left blank
* Bug fix: Slashes not stripped in category key.
* Bug fix: Upcoming Events widget if no upcoming events
* Bug fix: Error with retrieval of Author's ID
* Fixed some non-translatable text strings
* Logic change: Upcoming Events now bases choice on time rather than date (events happening later today are future, rather than only events happening tomorrow or later.)
* Enhancement: respects custom wp-content location definitions

= 1.7.5 =

* Bug fix: Error with upcoming events when selected by dates and holiday skipping enabled.
* Bug fix: Upcoming Events widget title defaulted to 'Today's Events'
* Change: Reversed order of Latitude/Longitude on forms to match Google's implementation.

= 1.7.4 =

* Bug fix: Upcoming events templates ran htmlentities on output

= 1.7.3 = 

* Bug fix: upcoming events substitute text still not appearing in some contexts. 
* Bug fix: Today's event substitute text had assignment in place of comparison
* Bug fix: Event location not saved properly on edit if Location Fields are disabled on input
* Bug fix: Fixed date and time issues in iCal output
* Bug fix: Fixed character set issue in RSS output
* Bug fix: Major problem with Holiday category event delimiting
* Danish translation updated to 1.7.0
* Japanese translation updated to 1.7.1
* Minor documentation and readme.txt updates
* Added additional fallback settings for widgets
* Fixed minor installation issue with version detection.
* Added CSS hook .nextmonth on dates occurring past the end of the currently displayed month.
* Added check for '#' symbol on hex colors in category management.

= 1.7.2 =

* Bug fix: Fixed import from Calendar feature.
* Bug fixed: Upcoming events widget default text fixed
* Italian translation updated to 1.7.0

= 1.7.1 =

* Default setting for custom user location type not set
* Reset for inherit.css styles missing
* Widget shortcodes stripped HTML
* Added a fallback function for exif_imagetype 'cuz some servers don't have it available by default.
* Nonce missing in database upgrade
* Ability to edit text for shortcode fallback (No events text) lost.
* Widget defaults not installed on new installation
* Mini and List jQuery did not prevent default link action
* Changed install action to default User settings to off.

= 1.7.0 =

* Fix in AJAX navigation for IE
* Fix in JavaScript to re-activate close button
* Fixed bug with locations list not registering current location type in form mode
* Fixed bug with upcoming events and today's events output when regions limits were set
* Fixed bug with upcoming events producing incorrect dates for events recurring on a specific day of the month.
* Revision of Widgeting setup to offer multi-widget support (will require you to re-setup your widgets)
* Revision of style editor to use external stylesheets. 
* Revision of style support to add option for custom stylesheets stored outside of plugin directory
* Added: multiple base stylesheets
* Added: Event markup in hCal format
* Added Weekly mode for list and grid view
* Added RSS and iCal exports for upcoming events (enable and disable in settings)
* Added option to block display of an event if there is an event that day which is in a designated 'Holiday' category.
* Added permission setting to allow non-administrators to edit or delete any event.
* Added Czech translation (to 1.6.3)
* Updated Italian and Danish translations
* Security: Implemented nonces

= 1.6.3 =

* Updated jQuery to fix conflicts in previous versions and so behaviors would work with AJAX navigation. Not updated by upgrade; use Behaviors reset to apply. 
* Incorporated option to enable AJAX navigation for next/previous navigation.
* Fixed bug with multi-month display in list format where January could not be displayed.
* Revised settings page for clarity. 
* Fixed some default settings issues.
* Fixed a bug where the locations lists didn't respect the datatype parameter.
* Added templating to event titles for calendar grid or list output.

= 1.6.2 = 

* Fixed broken style editor. (The way it was broken was awfully weird...kinda wonder how I did it!)
* Fixed missing div in calendar list output.
* Removed debugging call which had been left from testing.
* Fixed storage of initial settings for user settings (array did not store probably initially.)
* Added Italian translation by [Sabir Musta](http://mustaphasabir.altervista.org)

= 1.6.1 =

* Bug fix in event saving

= 1.6.0 =

* Feature: User profile defined time zone preference
* Feature: User profile defined location preference
* Feature: Define event host as separate from event author
* Feature: Added ability to hide Prev/Next links as shortcode attribute
* Change: Separated Style editing from JS editing

= 1.5.4 =

* Fixed: Bug with permissions in event approval process.

= 1.5.3 = 

* Fixed: Bug which broke the {category} template tag
* Fixed: Bug which moved extra parameters before the "?" in URLs
* Fixed: Bug which produced an incorrect date with day/month recurring events on dates with no remainder
* Added: Japanese translation by [Daisuke Abe](http://www.alter-ego.jp/)

= 1.5.2 =

* Fixed: Bug where event data wasn't remembered if an error was triggered on submission.

= 1.5.1 =

* Fixed: Bug where events recurring monthly by days appeared on wrong date when month begins on Sunday.
* Fixed: Bug where events recurring monthly by days appeared on dates prior to the scheduled event start.
* Performance improvement: Added SQL join to incorporate category data in event object
* Added quicktag to provide access to category color and icon in widget templates
* Changed link expiration to be associated with the end date of events rather than the beginning date.
* Updated readme plugin description, help files, and screenshots.

= 1.5.0 =

* Added: German translation.
* Updated: Danish translation.
* Added: Administrator notification by email feature [Contributions by Roland]
* Added: Reservations and Approval system for events. [Contributions by Roland]
* Added: Events can be recurring on x day of month, e.g. 3rd Monday of the month.

= 1.4.10 =

* Fixed: Failed to increment internal version pointer in previous version. 
* Fixed: Invalid styles created if category color set to default.
* Fixed: (Performance) Default calendar view attempted to select invalid category.
* Updated: Danish translation.

= 1.4.9 = 

* Fixed: Bug where location edits couldn't be saved if location fields were on and dropdown was off
* Fixed: Bug where latitude and longitude were switched on Google Maps links
* Fixed: Bug where map link would not be provided if no location data was entered except Lat/Long coordinates.

= 1.4.8 =

* Added: Ability to copy events to create a new instance of that event
* Added: Customization of which input elements are visible separate from what output is shown.
* Fixed: Issue where one JS element could not be fully disabled
* Fixed: Internationalization fault with Today's Events showing events from previous day 
* Fixed some assorted text errors and missing internationalization strings.
* Fixed issue where the 'Help' link was added to all plug-in listings.
* Reorganized settings page UI.

= 1.4.7 =

* Fixed: Bug where infinitely recurring events whose first occurrence was in the future were not rendered in upcoming events
* Fixed: Bug where infinitely recurring bi-weekly events only rendered their first event in calendar view
* Added: Option to indicate whether registration for an event is open or closed, with customizable text.
* Added: Option to supply a short description alternative to the full description.

= 1.4.6 = 

* Fixed: Flash of unstyled content prevention scripts weren't disabled when other scripting was disabled.
* Fixed: Categories which started with numerals couldn't have custom styles.
* Fixed: Locations required valid 0 float value to save records on some servers; now supplied by default.

= 1.4.5 = 

* Fixed a bug with editing and adding locations
* Fixed a bug with error messages when adding categories
* Fixed a bug with identification of current day (again?)
* Added Danish translation (Thanks to Jakob Smith)

= 1.4.4 = 

* Fixed a bug where event end times tags were not rendered when blank in widget templates
* Fixed a bug with event adding and updating for Windows IIS
* Fixed a bug with international characters
* Reduced number of SQL queries made.
* Moved JavaScript output to footer.
* Improved error messages.
* Significant edits to basic codebase to improve efficiency.
* Fixed bug where full default styles didn't initially load on new installs.
* Re-organized default styles to make it easier for users to customize colors.

= 1.4.3 = 

* Fixed a bug where event end times were displaying the start time instead when editing.
* Fixed a bug introduced by the mini calendar option which displayed titles twice in list format.
* Fixed a bunch of typos.
* Added a loop which automatically adds the mini calendar styles if you don't already have them.
* Fixed a bug where JS didn't run if the 'show only on certain pages' option was used.
* Added a qualifier for upgrading databases when you haven't added any events.

= 1.4.2 =

* Fixed a bug in the widget display code which caused problems displaying multiple categories.

= 1.4.1 =

* Database upgrade didn't run for some users in 1.4.0. Added manual check and upgrade if necessary.

= 1.4.0 =

* Bug fixed: Today's Events widget was not taking internationalized time as it's argument
* Added end time field for events
* Added option for links to expire after events have occurred.
* Added options for alternate applications of category colors in output.
* Added ability to use My Calendar shortcodes in text widgets.
* Added GPS location option for locations
* Added zoom selection options for map links
* Lengthened maximum length for category and event titles
* Added a close link on opened events details boxes.
* Added an option for a mini calendar display type in shortcode
* Optimized some SQL queries and reduced total number of queries significantly.
* Extended the featured to show CSS only on certain pages to include JavaScript as well.
* Upcoming events widget only allowed up to 99 events to be shown forward or back. Changed to 999.
* Attempted to solve a problem with infinitely recurring events not appearing in upcoming events. Let me know.
* Added setting to change Previous Month/Next Month text.
* Yeah, that's enough for now.

= 1.3.8 = 

* Fixed problem with CSS editing which effectively disabled CSS unless a specific choice had been made for pages to show CSS

= 1.3.7 =

* Aren't you enjoying the daily upgrades? I made a mistake in 1.3.5 which hid text in an incorrect way, causing problems in some contexts.

= 1.3.6 =

* Fixed an issue where not having defined Pages to show CSS resulted in a PHP warning for some configs.

= 1.3.5 =

* Fix for flash of unstyled content issue.
* Added configuration for time text on events with non-specific time.
* Fixed bug where, in list views with multiple months, events occurring on days which did not exist in the previous month were not rendered. (Such as March 30th where previous month was February.)
* Fixed bug where the multi-month view setting for lists caused previous/next events buttons to skip months in calendar view.
* Added option to disable category icons.
* Added option to insert text in calendar caption/title area, appended to the month/year information.
* Fixed a bug where it was not possible to choose the "Show by days" option in the upcoming events widget.
* Updated documentation to match
* Fixed a bug where upcoming events in Days mode did not display correct date
* Added an option to define text to be displayed in place of Today's Events widget if there are no events scheduled.
* Minor changes to default CSS
* Ability to show CSS and JavaScript only on selected pages.

= 1.3.4 =

* Fixed a bug with map link and address display which I forgot to deal with in previous release.

= 1.3.3 = 

* Fixed bug with upgrade path which caused locations database to be created on every activation (also cause of errors with some other plugins). (Thanks to Steven J. Kiernan)
* Made clone object PHP 4 compatible (Thanks to Peder Lindkvist)
* Corrected errors in shortcode functions for today's events
* Corrected rendering of non-specific time events as happening at midnight in widget output

= 1.3.2 = 

* Fixed bugs with unstripped slashes in output
* Fixed a bug where users could not add location information in events if they had not added any recurring locations
* Removed requirement that address string must be five characters to display a link

= 1.3.1 = 

* Corrected incorrect primary key in upgrade path.
* Added version incrementing in upgrade path.

= 1.3.0 = 

* Fixed a CSS class which was applied to an incorrect element.
* Revisions to the Calendar import methods
* Moved style editing to its own page
* Added JavaScript editing to allow for customization of jQuery behaviors.
* Internationalized date formats
* Shortcode support for multiple categories.
* Shortcode support for custom templates in upcoming and today's events
* Added a settings option to eliminate the heading in list format display.
* Fixed a bug which treated the event repetition value as a string on event adding or updating, not allowing some users to use '0' as an event repetition.
* Made events listing sortable in admin view
* Minor revisions in admin UI.
* Added database storage for frequently used venues or event locations.
* Modified JavaScript for list display to automatically expand events scheduled for today.

= 1.2.1 = 

* Corrected a typo which broke the upcoming events widget.

= 1.2.0 = 

* Added shortcodes to support inserting upcoming events and todays events lists into page/post content.
* Added option to restrict upcoming events widgets by category
* More superficial CSS changes
* Added Brazilian Portuguese language files
* Fixed bug where I reversed the future and past variable values for upcoming events widgets
* Fixed bug in multi-user permissions.
* Added feature to look for a custom location for icons to prevent overwriting of custom icons on upgrade.

= 1.1.0 =

* Fixed some problems with Upcoming Events past events not scrolling off; hopefully all!
* Fixed some problems with fuzzy interpretations of the numbers of past/future events displayed in Upcoming Events.
* Added Bi-weekly events
* Added restrictions so that admin level users can edit any events but other users can only edit their own events
* Removed character restrictions on event titles
* Revised default stylesheet 

= 1.0.2 =

* Fixed problems with editing and deleting events or categories in multiblog installation
* Fixed escaping/character set issue
* Fixed issue when blog address and wp address did not match (introduced in 1.0.1)
* Added import method to transfer events and categories from Kieran O'Shea's Calendar plugin

= 1.0.1 =

* Added missing template code for event end dates.
* Changed defaults so that styles and javascript are initially turned on.
* Removed function collisions with Calendar
* Fixed bug where My Calendar didn't respect the timezone offset in identifying the current day.
* Fixed bug where multiblog installations in WP 3.0 were unable to save events and settings.
* Added Spanish translation, courtesy of [Esteban Truelsegaard](http://www.netmdp.com). Thanks!

= 1.0.0 =

* Initial launch.

== Frequently Asked Questions ==

= Hey! Why don't you have any Frequently Asked Questions here! =

Because the majority of users end up on my web site asking for help anyway -- and it's simply more difficult to maintain two copies of my Frequently Asked Questions. Please visit [my web site FAQ](http://www.joedolson.com/articles/my-calendar/faq/) to read my Frequently Asked Questions!

= This plug-in is really complicated. Why can't you personally help me figure out how to use it? =

I can! Just not in person. I've written a User's Guide for My Calendar, which you can [purchase at my web site](https://www.joedolson.com/articles/my-calendar/users-guide/) for $23. ($19 if you're not interested in getting updates.) This helps defray the thousand plus hours I've spent in developing the plug-in and providing support. Please, consider buying the User's Guide or [making a donation](https://www.joedolson.com/donate.php) before asking for support!

= How can my site visitors or members submit events? =

I've written a paid plug-in that adds this feature to My Calendar, called My Calendar: Submissions. You can [buy it at my web site](https://www.joedolson.com/articles/my-calendar/submissions/)!

== Screenshots ==

1. Calendar using calendar list format.
2. Calendar using monthly calendar format.
3. Event management page
4. Category management page
5. Settings page
6. Location management
7. Style editing
8. Mini calendar
9. Script/behavior editing
10. Template editing

== Upgrade Notice ==

= 2.2.12 =
Believe me, it's frustrating to me, too. Bug fix to jQuery time output.