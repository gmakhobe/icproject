<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;
use App\Http\Logic\GetNewsContents;
use App\Http\Logic\NewsChannel;
use App\Http\Logic\TVNewsChannel;
use App\Http\Logic\News;
use App\Http\Logic\NewsArticles;
use App\Http\Logic\NewsBlog;
use App\Http\Logic\NewsPodcasts;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    //View Channel View Searchs
    public function NewsBlogSearch($search)
    {

        $NewsBlogs = NewsBlog::GetNewsBlogSearch($search);
        //print_r($NewsChannels);

        if (count($NewsBlogs)) {

            return json_encode(["status" => 1, "results" => $NewsBlogs]);
        } else {
            return json_encode(["status" => 0]);
        }
    }
    //
    //View news Blog Author
    public function NewsBlogAuthorView($name, $id)
    {
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get Data
        $GetAuthorAllNewsBlogs = NewsBlog::GetAuthorAllNewsBlogs($id, $name);
        $GetAuthorInfo = NewsBlog::GetAuthorInfo($id, $name);
        //print_r($ChannelNewsContent);
        //return ;

        if ($GetAuthorInfo){

            return view('user/news/blog-author-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Author - Blogs", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "GetAuthorAllNewsBlogs"=> $GetAuthorAllNewsBlogs, "GetAuthorInfo"=> $GetAuthorInfo]);

        }else{

            return redirect("/user/news/blog");

        }
    }
    //View news Blog Read
    public function NewsBlogReadView($name, $id)
    {
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get info
        $GetNewsBlogPost = NewsBlog::GetNewsBlogPost($name, $id);
        $ChannelNewsComments = NewsBlog::GetNewsBlogComments($name, $id, 3);
        //print_r($ChannelNewsContent);
        //return ;
        if ($GetNewsBlogPost){

            $OriginalViews = DB::select('SELECT Views FROM newsblogpost WHERE NewsBlogPostId = ?', [$GetNewsBlogPost[0]["NewsBlogId"]]);
            DB::update('UPDATE newsblogpost SET Views = ? WHERE NewsBlogPostId = ?', [++$OriginalViews[0]->Views, $GetNewsBlogPost[0]["NewsBlogId"]]);

            //print_r($GetNewsBlogPost);

            return view('user/news/blog-read-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Blogs", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "GetNewsBlogPost"=> $GetNewsBlogPost, "ChannelNewsComments"=> $ChannelNewsComments]);

        }else{

            return redirect("/user/news/blog");

        }
    }
    //View news Blog
    public function NewsBlogView()
    {
        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get news contents
        $GetLatestNewsBlogPosts = NewsBlog::GetLatestNewsBlogPosts(30);
        $GetLatestNewsBlogs = NewsBlog::GetLatestNewsBlogs(30);
        //print_r($ChannelNewsContent);
        //return ;

        return view('user/news/blog-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "Blogs", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "GetLatestNewsBlogPosts"=> $GetLatestNewsBlogPosts, "GetLatestNewsBlogs"=> $GetLatestNewsBlogs]);
    }
    //View news Read
    public function NewsViewVideo($name, $id)
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get news Content
        $ChannelNewsContent = TVNewsChannel::GetChannelTVNewsContent($name, $id, 1);
        $ChannelNewsComments = TVNewsChannel::GetChannelTVNewsComments($name, $id, 1);
        //print_r($ChannelNewsContent);
        //return ;
        if ($ChannelNewsContent) {

            //print_r($ChannelNewsContent);

            $OriginalViews = DB::select('SELECT Views FROM newsvideos WHERE NVId = ?', [$ChannelNewsContent[0]["Id"]]);
            DB::update('UPDATE newsvideos SET Views = ? WHERE NVId = ?', [++$OriginalViews[0]->Views, $ChannelNewsContent[0]["Id"]]);

            return view('user/news/video-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelNewsContent" => $ChannelNewsContent, "ChannelNewsContent" => $ChannelNewsContent, "NewsId" => $id, "ChannelNewsComments" => $ChannelNewsComments]);
        } else {
            return redirect("/user/dashboard");
        }
    }

    //View Channel Name
    public function ChannelNameView($name, $id, $type)
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get5 info from database

        if (!$type) {
            //Get channel Information
            $NewsChannelInformation = NewsChannel::GetChannelInformation($name, $id, $type);

            if ($NewsChannelInformation) {

                //News Subjects
                $NewsSubjects = GetNewsContents::GetNewsSubjects();
                //News Contents
                $ChannelNewsEconomics = NewsChannel::GetChannelNews(1, $id, 6);
                $ChannelNewsSP = NewsChannel::GetChannelNews(2, $id, 6);
                $ChannelNewsInvestment = NewsChannel::GetChannelNews(3, $id, 6);
                $ChannelNewsTech = NewsChannel::GetChannelNews(4, $id, 6);
                $ChannelNewsFinance = NewsChannel::GetChannelNews(4, $id, 6);
                $ChannelArticles = NewsArticles::GetChannelNewsArticleContent($id, 6);

                //print_r($ChannelArticles);
                //return ;
                return view('user/news/channel-name-news', ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Channel - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelInformation" => $NewsChannelInformation, "VideoName" => $name, "NewsSubjects" => $NewsSubjects, "ChannelNewsEconomics" => $ChannelNewsEconomics, "ChannelNewsSP" => $ChannelNewsSP, "ChannelNewsInvestment" => $ChannelNewsInvestment, "ChannelNewsTech" => $ChannelNewsTech, "ChannelNewsFinance" => $ChannelNewsFinance, "ChannelArticles" => $ChannelArticles]);
            } else {
                return redirect("/user/news/channels");
            }
        } else {

            //Get channel Information
            $NewsChannelInformation = NewsChannel::GetChannelInformation($name, $id, $type);

            if ($NewsChannelInformation) {

                //News Subjects
                $NewsSubjects = GetNewsContents::GetNewsSubjects();
                //Get List of videos
                $ChannelTVNewsEconomics = TVNewsChannel::GetChannelTVNews(1, $id, 6);
                $ChannelTVNewsSP = TVNewsChannel::GetChannelTVNews(2, $id, 6);
                $ChannelTVNewsInvestment = TVNewsChannel::GetChannelTVNews(3, $id, 6);
                $ChannelTVNewsTech = TVNewsChannel::GetChannelTVNews(4, $id, 6);
                $ChannelTVNewsFinance = TVNewsChannel::GetChannelTVNews(5, $id, 6);

                //print_r($NewsChannelInformation);
                //print_r($NewsChannelInformation);
                return view('user/news/channel-name-video', ["Name" => $GLOBALS['AppTitle'], "Title" => "$name - Channel - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelInformation" => $NewsChannelInformation, "ChannelTVNewsEconomics" => $ChannelTVNewsEconomics, "NewsSubjects" => $NewsSubjects, "ChannelNewsEconomics" => [], "ChannelTVNewsSP" => $ChannelTVNewsSP, "ChannelTVNewsInvestment" => $ChannelTVNewsInvestment, "ChannelTVNewsTech" => $ChannelTVNewsTech, "ChannelTVNewsFinance" => $ChannelTVNewsFinance]);
            } else {
                return redirect("/user/news/channels");
            }
        }
    }
    //View Channel View Searchs
    public function ChannelsViewSearch($search, $type)
    {

        $NewsChannels = NewsChannel::GetChannelSearch($search, $type);
        //print_r($NewsChannels);

        if (count($NewsChannels)) {

            return json_encode(["status" => 1, "results" => $NewsChannels]);
        } else {
            return json_encode(["status" => 0]);
        }
    }
    //View Channels
    public function ChannelsView()
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get5 info from database
        $NewsChannels = NewsChannel::GetChannels(0);
        $TVNewsChannels = NewsChannel::GetChannels(1);

        if ($NewsChannels || $TVNewsChannels) {

            return view('user/news/channels', ["Name" => $GLOBALS['AppTitle'], "Title" => "Channels - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelList" => $NewsChannels, "TVNewsChannels" => $TVNewsChannels]);
        } else {
            return redirect("/user/dashboard");
        }
    }
    //View News
    public function NewsView()
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();

        //News Subjects
        $NewsSubjects = GetNewsContents::GetNewsSubjects();
        $EconomicNews = News::GetNews(1, 4);
        $SPNews = News::GetNews(2, 4);
        $InvestmentNews = News::GetNews(3, 4);
        $TechNews = News::GetNews(4, 4);
        $FinanceNews = News::GetNews(5, 4);
        $NewsVideos = News::GetVideos(4);

        //print_r($EconomicNews);
        //return ;

        return view('user/news/news', ["Name" => $GLOBALS['AppTitle'], "Title" => "News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "NewsSubjects" => $NewsSubjects, "EconomicNews" => $EconomicNews, "SPNews" => $SPNews, "InvestmentNews" => $InvestmentNews, "TechNews" => $TechNews, "FinanceNews" => $FinanceNews, "NewsVideos" => $NewsVideos]);
    }
    //View news Read Comment
    public function NewsViewReadComment($comment, $id, $commentind)
    {

        //Properties
        $userInfo = AppSession::sessionGetUserInfo();
        DB::insert('INSERT INTO newscomments(Comment, NewsId, UserId, CommentInd) VALUES(?, ?, ( SELECT UserId FROM users WHERE EmailAddress = ?), ?)', [$comment, $id, $userInfo["Email"], $commentind]);

        return json_encode(["status" => 1]);
    }
    //View news Article Read
    public function NewsViewArticleRead($heading, $id)
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get news Content
        $ChannelNewsContent = NewsArticles::GetChannelArtcleContent($heading, $id, 1);
        $ChannelNewsComments = NewsChannel::GetChannelNewsComments($heading, $id, 2);

        if ($ChannelNewsContent) {

            $OriginalViews = DB::select('SELECT Views FROM newsarticles WHERE ArticleId = ?', [$ChannelNewsContent[0]["NewsId"]]);
            DB::update('UPDATE newsarticles SET Views = ? WHERE ArticleId = ?', [++$OriginalViews[0]->Views, $ChannelNewsContent[0]["NewsId"]]);

            //print_r($ChannelNewsContent);

            return view('user/news/article-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "$heading - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelNewsContent" => $ChannelNewsContent, "ChannelNewsComments" => $ChannelNewsComments, "NewsId" => $id]);
        } else {
            return redirect("/user/dashboard");
        }
    }
    //View news Read
    public function NewsViewRead($heading, $id)
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get news Content
        $ChannelNewsContent = NewsChannel::GetChannelNewsContent($heading, $id, 1);
        $ChannelNewsComments = NewsChannel::GetChannelNewsComments($heading, $id, 0);

        if ($ChannelNewsContent) {

            $OriginalViews = DB::select('SELECT Views FROM news WHERE NewsId = ?', [$ChannelNewsContent[0]["NewsId"]]);
            DB::update('UPDATE news SET Views = ? WHERE NewsId = ?', [++$OriginalViews[0]->Views, $ChannelNewsContent[0]["NewsId"]]);

            return view('user/news/new-view', ["Name" => $GLOBALS['AppTitle'], "Title" => "$heading - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "ChannelNewsContent" => $ChannelNewsContent, "ChannelNewsComments" => $ChannelNewsComments, "NewsId" => $id]);
        } else {
            return redirect("/user/dashboard");
        }
    }
    //View Articles
    public function ArticlesView()
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get Latest Articles with 0 display ind
        $GetLatestArticles = NewsArticles::GetArticlesView(25, 0);
        $GetSubtArticles = NewsArticles::GetArticlesView(3, 1);
        $GetMainArticle = NewsArticles::GetArticlesView(1, 2);

        //print_r($GetSubtArticles);
        //return ;
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Articles - News", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "GetLatestArticles" => $GetLatestArticles, "GetSubtArticles" => $GetSubtArticles, "GetMainArticle" => $GetMainArticle];

        return view('user/news/articles', $properties);
    }
    //View Pdcasts Add View
    public function PodcastAddView($PodcastId)
    {

        $GetIncrementViews = NewsPodcasts::GetIncrementViews($PodcastId, 1);
        return json_encode([ "status"=> $GetIncrementViews ]);

    }
    //View Pdcasts
    public function PodcastView()
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();
        //Get date
        $GetTopPodcasts = NewsPodcasts::GetTopPodcasts(20);
        $GetTopRatedPodcasts = NewsPodcasts::GetTopRatedPodcasts(20);
        $GetLatestPodcasts = NewsPodcasts::GetLatestPodcasts(6);
        
        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Podcasts", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"], "GetTopPodcasts"=> $GetTopPodcasts, "GetTopRatedPodcasts"=> $GetTopRatedPodcasts, "GetLatestPodcasts"=> $GetLatestPodcasts];

        return view('user/news/podcasts', $properties);
    }
    //Where to invest
    public function WhereToInvestView()
    {

        //Properties to be injected
        $userInfo = AppSession::sessionGetUserInfo();
        $userProfilePicture = AppSession::sessionGetUserProfilePicture();

        $properties = ["Name" => $GLOBALS['AppTitle'], "Title" => "Where ToInvest View", "NameAndSurname" => $userInfo["Name"] . " " . $userInfo["Surname"], "ProfilePicture" => $userProfilePicture["Base64"], "IsBase64" => $userProfilePicture["IsBase64"]];

        return view('user/news/where-to-invest', $properties);
    }
}
