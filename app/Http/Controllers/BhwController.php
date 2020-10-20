<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group_member;
use App\Committee_member;
use App\Region;
use App\Selected_institution;
use App\Activity;
use App\Report;
use App\Bulletin;
use App\Blog;
use App\Event;
use App\Publication;
use App\Research;
use App\Course;
use App\Photo;
use App\Project;
use App\Slider;
use DB;
use Session;

class BhwController extends Controller
{
	
	public function launch() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.launching', compact(
            'photos',
            'latest_blogs'
        ));
	}
    // Homepage 
    public function index() {
        $events = Event::orderBy('created_at', 'desc')->take(3)->get();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $projects = Project::orderBy('created_at', 'desc')->take(3)->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $first_slide = Slider::orderBy('slide_position', 'asc')->take(1)->get();
        $slides = Slider::orderBy('slide_position', 'asc')->get()->except([1]);
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.index', compact(
            'events',
            'blogs',
            'projects',
            'photos',
            'first_slide',
            'slides',
            'latest_blogs'
        ));
    }


    // Who We Are 
    public function who_we_are() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.who-we-are', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - Background
    public function background() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.background', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - how_bhw_works
    public function how_bhw_works() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.how-bhw-works', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - Working Group
    public function working_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'working-group')->orderBy('member_position')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.working-group', compact(
            'members',
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - Advisory Group
    public function advisory_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'advisory-group')->orderBy('member_position')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.advisory-group', compact(
            'members',
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - Thematic Group
    public function thematic_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'thematic-group')->orderBy('member_position')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.thematic-group', compact(
            'members',
            'photos',
            'latest_blogs'
        ));
    }


    // Who We Are - Secretariat Group
    public function secretariat_group() {
        $members = DB::table('group_members')->where('member_group', '=', 'secretariat-group')->orderBy('member_position')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.who.secretariat-group', compact(
            'members',
            'photos',
            'latest_blogs'
        ));
    }


    public function single_member($id) {
        $single_member = Group_member::find($id);

        $other_members = DB::table('group_members')->where('member_group', '=', $single_member->member_group)->orderBy('member_position')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();

        return view('front.who.single-member', compact(
            'single_member',
            'other_members',
            'photos',
            'latest_blogs'
        ));
    }


    // What We Do
    public function what_we_do() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.what-we-do', compact(
            'photos',
            'latest_blogs'
        ));
    }

    // What We Do - Regions
    public function regions() {
        $regions = DB::table('regions')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.regions.regions', compact(
            'regions',
            'photos',
            'latest_blogs'
        ));
    }

    // What We Do - Single Regions
    public function single_region($id) {
        $region = Region::find($id);
        $ngo = DB::table('ngos')->where('region_id', '=', $region->id)->first();
        $regions = DB::table('regions')->get();
        $c_members = DB::table('committee_members')->where('region_id', '=', $region->id)->get();
        $institutions = DB::table('selected_institutions')->where('region_id', '=', $region->id)->get();
        $activities = DB::table('activities')->where('region_id', '=', $region->id)->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.regions.single-region', compact(
            'region',
            'ngo',
            'regions',
            'c_members',
            'institutions',
            'activities',
            'photos',
            'latest_blogs'
        ));
    }




    // BHW Reports
    public function bhw_reports() {
        $reports = Report::orderBy('id', 'DESC')->where('type', 'bhw-report')->paginate(5);
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.bhw-reports', compact(
            'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }

    public function media_campaign() {
        $reports = Report::orderBy('id', 'DESC')->where('type', 'media-campaign')->paginate(5);
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.media-campaign', compact(
            'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }

    public function media_monitoring() {
        $reports = Report::orderBy('id', 'DESC')->where('type', 'media-monitoring')->paginate(5);
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.media-monitoring', compact(
            'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }

    public function media_synthesis() {
        $reports = Report::orderBy('id', 'DESC')->where('type', 'media-synthesis')->paginate(5);
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.media-synthesis', compact(
            'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }

    public function policy_brief() {
        $reports = Report::orderBy('id', 'DESC')->where('type', 'policy-brief')->paginate(5);
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.policy-brief', compact(
            'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }

    public function reports_all() {
        // $reports = Report::orderBy('id', 'DESC')->get();
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.reports', compact(
            // 'reports',
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }


    // BHW Bulletin
    public function bhw_bulletin() {
        $bulletins = Bulletin::orderBy('id', 'DESC')->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.reports.bhw-bulletin', compact(
            'bulletins',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Research
    public function bhw_research() {
        $research = Research::orderBy('created_at', 'desc')->paginate(8);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.research.researches', compact(
            'research',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Research
    public function bhw_single_research($id) {
        $research = Research::find($id);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.research.single-research', compact(
            'research',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Research
    public function bhw_short_courses() {
        $courses = Course::orderBy('created_at', 'desc')->paginate(9);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.course.short-courses', compact(
            'courses',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Research
    public function bhw_single_course($id) {
        $course = Course::find($id);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.course.single-course', compact(
            'course',
            'latest_blogs',
            'photos'
        ));
    }


    // Bhw Policy Advocacy
    public function bhw_policy_advocacy() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.policy-advocacy', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Networking
    public function bhw_networking() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.networking', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Projects
    public function bhw_projects() {
        $projects = Project::orderBy('created_at', 'desc')->paginate(6);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.project.projects', compact(
            'projects',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Single Project
    public function bhw_single_projects($id) {
        $project = Project::find($id);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.project.single-project', compact(
            'project',
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Strategic Plan
    public function bhw_strategic_plan() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.strategic-plan', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Others
    public function bhw_others() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.what.bhw-others', compact(
            'photos',
            'latest_blogs'
        ));
    }


    // Bhw Publication
    public function bhw_publication() {
        $publications = Publication::orderBy('created_at', 'desc')->paginate(10);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.publication.publications', compact(
            'publications',
            'photos',
            'latest_blogs'
        ));
    }


    // BHW Photo Gallery
    public function photo_gallery() {
        $g_photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->paginate(20);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.photo-gallery', compact(
            'g_photos',
            'photos',
            'latest_blogs'
        ));
    }


    // BHW Blogs
    public function blogs() {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        return view('front.blog.blogs', compact(
            'blogs',
            'photos',
            'latest_blogs'
        ));
    }


    // BHW Single Blog
    public function single_blog($id) {
        $blog = Blog::find($id);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.blog.single-blog', compact(
            'blog',
            'photos',
            'latest_blogs'
        ));
    }

    // BHW Events
    public function events() {
        $events = Event::orderBy('created_at', 'desc')->paginate(6);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.event.events', compact(
            'events',
            'photos',
            'latest_blogs'
        ));
    }


    // BHW Single Event
    public function single_event($id) {
        $event = Event::find($id);
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.event.single-event', compact(
            'event',
            'photos',
            'latest_blogs'
        ));
    }

    // BHW Contact
    public function contact() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.contact', compact(
            'photos',
            'latest_blogs'
        ));
    }

    // BHW Mass Media
    public function mass_media() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.media.mass-media', compact(
            'photos',
            'latest_blogs'
        ));
    }

    // BHW Social Media
    public function social_media() {
        $photos = Photo::orderBy('created_at', 'desc')->where('photo_type', 'gallery')->take(12)->get();
        $latest_blogs = Blog::orderBy('created_at', 'desc')->take(4)->get();
        return view('front.media.social-media', compact(
            'photos',
            'latest_blogs'
        ));
    }

    public function emailsend() {
        return view('front.send_from_email');
    }


}
