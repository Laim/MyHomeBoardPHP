__Version 3.0.1b (_xx xxx, 2019_)__
- Link Management section changed for future release
    * /links/ changed to /management/links/
    * /management/ currently redirects to /management/links/
- Delete page changed from mod.php to del.php and requires confirmation to complete deletion
- Button colors changed
***
__Version 3.0 (_22 Jun, 2019_)__
- Dark Mode
***
__Version 2.1 (_22 Apr, 2019_)__
- Sub-text added to font-awesome textbox for adding/editing links and headers
- Google Search set to disabled by default
- New 'Introduction' section included for 'first run'
- External search button is set to disabled unless there is text in the search box, allowing you to have multiple search bars on the same page and it not send to your external search every time you press enter.
***
__Version: 2.0 (_09 Feb. 2019_)__
- CHANGELOG.MD created
- Database Configuration added to configuration file
- Configuration file reworded and split down
- Custom navbar background colour added
- CSS added to css.php file in include directory
- Javascript moved to javascript.php file in include directory
- Navigation moved to navigation.php file in include directory
- Check for Update and Change Log added to Navigation under Management option
- Footer moved to footer.php file in include directory
- FontAwesome option added to Link
- Option to have image instead of text on Nav Bar
- Option added to hide article body
- Variables renamed
    * ShowTime renamed to TimeEnabled
    * ShowWeather renamed to WeatherEnabled
    * ShowNews renamed to NewsEnabled
    * ArticleCount renamed to NewsArticleCount
- Search Engine search added
- View All Links / Headers option via Link Management - Thanks Algebra for the design idea since I had a brain fart.
- Delete Links via the Link Management option
- Delete Link Headers via the Link Management option
    * When deleting a header (the dropdown), it will also delete all links under the drop down unless they have been moved to another header already
- Edit Link page added
- Edit Header page added
- Custom widget include added, this won't be wiped by updates
- Added dev flag to code for those who are wanting to use pre-release/in-development versions
    * Version variable renamed
- Add New Link option added
- Add New Hedder option added
- Added option to hide version in copyright footer
- Added option to hide check for update link
- Link / Header updated alert added to /links/ page
- Font Awesome updated to v5.7.1
***
__Version: 1.0 (_13 Jan. 2019_)__
- Initial Release
