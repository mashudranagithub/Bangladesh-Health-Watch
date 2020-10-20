<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'BhwController@index')->name('homepage');

// Who we are view routes
Route::get('/who-we-are', 'BhwController@who_we_are')->name('who-we-are');
Route::get('background', 'BhwController@background')->name('background');
Route::get('how-bhw-works', 'BhwController@how_bhw_works')->name('how-bhw-works');
Route::get('working-group', 'BhwController@working_group')->name('working-group');
Route::get('advisory-group', 'BhwController@advisory_group')->name('advisory-group');
Route::get('thematic-group', 'BhwController@thematic_group')->name('thematic-group');
Route::get('secretariat-group', 'BhwController@secretariat_group')->name('secretariat-group');

Route::get('single-member/{id}', 'BhwController@single_member')->name('single-member');

Route::get('/what-we-do', 'BhwController@what_we_do')->name('what-we-do');

Route::get('/research', 'BhwController@bhw_research')->name('research');
Route::get('single-research/{id}', 'BhwController@bhw_single_research')->name('single-research');

Route::get('/short-courses', 'BhwController@bhw_short_courses')->name('short-courses');
Route::get('/single-course/{id}', 'BhwController@bhw_single_course')->name('single-course');

Route::get('/policy-advocacy', 'BhwController@bhw_policy_advocacy')->name('policy-advocacy');
Route::get('/networking', 'BhwController@bhw_networking')->name('networking');
Route::get('/strategic-plan', 'BhwController@bhw_strategic_plan')->name('strategic-plan');
Route::get('/bhw-others', 'BhwController@bhw_others')->name('bhw-others');

Route::get('projects', 'BhwController@bhw_projects')->name('projects');
Route::get('single-project/{id}', 'BhwController@bhw_single_projects')->name('single-project');


Route::get('/publications', 'BhwController@bhw_publication')->name('publications');

// Region View Routes
Route::get('/regions', 'BhwController@regions')->name('regions');
Route::get('/single-region/{id}', 'BhwController@single_region')->name('single-region');

Route::get('/reports-all', 'BhwController@reports_all')->name('reports-all');
Route::get('/bhw-reports', 'BhwController@bhw_reports')->name('bhw-reports');
Route::get('/bhw-media-campaign', 'BhwController@media_campaign')->name('media-campaign');
Route::get('/bhw-media-monitoring', 'BhwController@media_monitoring')->name('media-monitoring');
Route::get('/bhw-media-synthesis', 'BhwController@media_synthesis')->name('media-synthesis');
Route::get('/policy-brief', 'BhwController@policy_brief')->name('policy-brief');
Route::get('/bhw-bulletin', 'BhwController@bhw_bulletin')->name('bhw-bulletin');

Route::get('/photo-gallery', 'BhwController@photo_gallery')->name('photo-gallery');

Route::get('/blogs', 'BhwController@blogs')->name('blogs');
Route::get('single-blog/{id}', 'BhwController@single_blog')->name('single-blog');

Route::get('/events', 'BhwController@events')->name('events');
Route::get('single-event/{id}', 'BhwController@single_event')->name('single-event');

Route::get('/mass-media', 'BhwController@mass_media')->name('mass-media');
Route::get('/social-media', 'BhwController@social_media')->name('social-media');

Route::get('/contact', 'BhwController@contact')->name('contact');

Route::post('/emailsend', 'BhwController@emailsend')->name('emailsend');

Route::post('/subscribe', 'SubscriptionController@store')->name('subscribe');

Route::get('/launch', 'BhwController@launch')->name('launch');


Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function() {


	Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('verified');

	Route::group(['middleware' => ['role:Super Admin|Admin']], function () {
        Route::resource('roles','RoleController');
	    Route::resource('users','UserController');
	    Route::resource('posts','PostController');
	});

	// Group Member Routes Start
	Route::get('group-members', 'Group_memberController@index')->name('group-members');
	Route::get('group-member/create', 'Group_memberController@create')->name('createGroup-member');
	Route::post('group-member/create', 'Group_memberController@store')->name('storeGroup-member');
	Route::get('group-member/show/{id}', 'Group_memberController@show')->name('showGroup-member');
	Route::get('group-member/edit/{id}', 'Group_memberController@edit')->name('editGroup-member');
	Route::put('group-member/update/{id}', 'Group_memberController@update')->name('updateGroup-member');
	Route::delete('group-member/delete/{id}', 'Group_memberController@destroy')->name('deleteGroup-member');



	// Region Routes Start Here
	Route::get('all-regions', 'RegionController@index')->name('all-regions');
	Route::get('region/create', 'RegionController@create')->name('createRegion');
	Route::post('region/create', 'RegionController@store')->name('storeRegion');
	Route::get('region/edit/{id}', 'RegionController@edit')->name('editRegion');
	Route::put('region/update/{id}', 'RegionController@update')->name('updateRegion');
	Route::delete('region/delete/{id}', 'RegionController@destroy')->name('deleteRegion');


	// NGO Routes Start Here
	Route::get('all-ngo', 'NgoController@index')->name('all-ngo');
	Route::get('ngo/create', 'NgoController@create')->name('createNgo');
	Route::post('ngo/create', 'NgoController@store')->name('storeNgo');
	Route::get('ngo/edit/{id}', 'NgoController@edit')->name('editNgo');
	Route::put('ngo/update/{id}', 'NgoController@update')->name('updateNgo');
	Route::delete('ngo/delete/{id}', 'NgoController@destroy')->name('deleteNgo');



	// Committee Member Routes Start Here
	Route::get('committee-members', 'Committee_memberController@index')->name('committee-members');
	Route::get('committee-member/create', 'Committee_memberController@create')->name('createCommittee-member');
	Route::post('committee-member/create', 'Committee_memberController@store')->name('storeCommittee-member');
	Route::get('committee-member/show/{id}', 'Committee_memberController@show')->name('showCommittee-member');
	Route::get('committee-member/edit/{id}', 'Committee_memberController@edit')->name('editCommittee-member');
	Route::put('committee-member/update/{id}', 'Committee_memberController@update')->name('updateCommittee-member');
	Route::delete('committee-member/delete/{id}', 'Committee_memberController@destroy')->name('deleteCommittee-member');


	// Selected Institutions Routes Start Here
	Route::get('all-institution', 'Selected_institutionsController@index')->name('all-institution');
	Route::get('institution/create', 'Selected_institutionsController@create')->name('createInstitution');
	Route::post('institution/create', 'Selected_institutionsController@store')->name('storeInstitution');
	Route::get('institution/show/{id}', 'Selected_institutionsController@show')->name('showInstitution');
	Route::get('institution/edit/{id}', 'Selected_institutionsController@edit')->name('editInstitution');
	Route::put('institution/update/{id}', 'Selected_institutionsController@update')->name('updateInstitution');
	Route::delete('institution/delete/{id}', 'Selected_institutionsController@destroy')->name('deleteInstitution');

	// Activitiy Routes Start Here
	Route::get('all-activitiy', 'ActivityController@index')->name('all-activity');
	Route::get('activitiy/create', 'ActivityController@create')->name('createActivity');
	Route::post('activitiy/create', 'ActivityController@store')->name('storeActivity');
	Route::get('activitiy/show/{id}', 'ActivityController@show')->name('showActivity');
	Route::get('activitiy/edit/{id}', 'ActivityController@edit')->name('editActivity');
	Route::put('activitiy/update/{id}', 'ActivityController@update')->name('updateActivity');
	Route::delete('activitiy/delete/{id}', 'ActivityController@destroy')->name('deleteActivity');

	// Report Routes Start Here
	Route::get('reports', 'ReportController@index')->name('reports');
	Route::get('report/create', 'ReportController@create')->name('createReport');
	Route::post('report/create', 'ReportController@store')->name('storeReport');
	Route::get('report/show/{id}', 'ReportController@show')->name('showReport');
	Route::get('report/edit/{id}', 'ReportController@edit')->name('editReport');
	Route::put('report/update/{id}', 'ReportController@update')->name('updateReport');
	Route::delete('report/delete/{id}', 'ReportController@destroy')->name('deleteReport');

	// Bulletin Routes Start Here
	Route::get('bulletins', 'BulletinController@index')->name('bulletins');
	Route::get('bulletin/create', 'BulletinController@create')->name('createBulletin');
	Route::post('bulletin/create', 'BulletinController@store')->name('storeBulletin');
	Route::get('bulletin/show/{id}', 'BulletinController@show')->name('showBulletin');
	Route::get('bulletin/edit/{id}', 'BulletinController@edit')->name('editBulletin');
	Route::put('bulletin/update/{id}', 'BulletinController@update')->name('updateBulletin');
	Route::delete('bulletin/delete/{id}', 'BulletinController@destroy')->name('deleteBulletin');


	// Bulletin Routes Start Here
	Route::get('all-blogs', 'BlogController@index')->name('all-blogs');
	Route::get('blog/create', 'BlogController@create')->name('createBlog');
	Route::post('blog/create', 'BlogController@store')->name('storeBlog');
	Route::get('blog/show/{id}', 'BlogController@show')->name('showBlog');
	Route::get('blog/edit/{id}', 'BlogController@edit')->name('editBlog');
	Route::put('blog/update/{id}', 'BlogController@update')->name('updateBlog');
	Route::delete('blog/delete/{id}', 'BlogController@destroy')->name('deleteBlog');



	// Events Routes Start Here
	Route::get('all-events', 'EventController@index')->name('all-events');
	Route::get('event/create', 'EventController@create')->name('createEvent');
	Route::post('event/create', 'EventController@store')->name('storeEvent');
	Route::get('event/show/{id}', 'EventController@show')->name('showEvent');
	Route::get('event/edit/{id}', 'EventController@edit')->name('editEvent');
	Route::put('event/update/{id}', 'EventController@update')->name('updateEvent');
	Route::delete('event/delete/{id}', 'EventController@destroy')->name('deleteEvent');



	// Publication Routes Start Here
	Route::get('all-publications', 'PublicationController@index')->name('all-publications');
	Route::get('publication/create', 'PublicationController@create')->name('createPublication');
	Route::post('publication/create', 'PublicationController@store')->name('storePublication');
	Route::get('publication/show/{id}', 'PublicationController@show')->name('showPublication');
	Route::get('publication/edit/{id}', 'PublicationController@edit')->name('editPublication');
	Route::put('publication/update/{id}', 'PublicationController@update')->name('updatePublication');
	Route::delete('publication/delete/{id}', 'PublicationController@destroy')->name('deletePublication');



	// Research Routes Start Here
	Route::get('all-research', 'ResearchController@index')->name('all-research');
	Route::get('research/create', 'ResearchController@create')->name('createResearch');
	Route::post('research/create', 'ResearchController@store')->name('storeResearch');
	Route::get('research/show/{id}', 'ResearchController@show')->name('showResearch');
	Route::get('research/edit/{id}', 'ResearchController@edit')->name('editResearch');
	Route::put('research/update/{id}', 'ResearchController@update')->name('updateResearch');
	Route::delete('research/delete/{id}', 'ResearchController@destroy')->name('deleteResearch');

	// Courses Routes Start Here
	Route::get('all-courses', 'CourseController@index')->name('all-courses');
	Route::get('course/create', 'CourseController@create')->name('createCourse');
	Route::post('course/create', 'CourseController@store')->name('storeCourse');
	Route::get('course/show/{id}', 'CourseController@show')->name('showCourse');
	Route::get('course/edit/{id}', 'CourseController@edit')->name('editCourse');
	Route::put('course/update/{id}', 'CourseController@update')->name('updateCourse');
	Route::delete('course/delete/{id}', 'CourseController@destroy')->name('deleteCourse');

	// Photo Routes Start Here
	Route::get('all-photos', 'PhotoController@index')->name('all-photos');
	Route::get('photo/create', 'PhotoController@create')->name('createPhoto');
	Route::post('photo/create', 'PhotoController@store')->name('storePhoto');
	Route::get('photo/show/{id}', 'PhotoController@show')->name('showPhoto');
	Route::get('photo/edit/{id}', 'PhotoController@edit')->name('editPhoto');
	Route::put('photo/update/{id}', 'PhotoController@update')->name('updatePhoto');
	Route::delete('photo/delete/{id}', 'PhotoController@destroy')->name('deletePhoto');

	// Project Routes Start Here
	Route::get('all-project', 'ProjectController@index')->name('all-project');
	Route::get('project/create', 'ProjectController@create')->name('createProject');
	Route::post('project/create', 'ProjectController@store')->name('storeProject');
	Route::get('project/show/{id}', 'ProjectController@show')->name('showProject');
	Route::get('project/edit/{id}', 'ProjectController@edit')->name('editProject');
	Route::put('project/update/{id}', 'ProjectController@update')->name('updateProject');
	Route::delete('project/delete/{id}', 'ProjectController@destroy')->name('deleteProject');



	// Slider Routes Start Here
	Route::get('sliders', 'SliderController@index')->name('sliders');
	Route::get('slider/create', 'SliderController@create')->name('createSlider');
	Route::post('slider/create', 'SliderController@store')->name('storeSlider');
	Route::get('slider/show/{id}', 'SliderController@show')->name('showSlider');
	Route::get('slider/edit/{id}', 'SliderController@edit')->name('editSlider');
	Route::put('slider/update/{id}', 'SliderController@update')->name('updateSlider');
	Route::delete('slider/delete/{id}', 'SliderController@destroy')->name('deleteSlider');



	Route::get('/subscribers', 'SubscriptionController@index')->name('subscribers');






});
