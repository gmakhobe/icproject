<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Logic\AppSession;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\json_encode;

class AlertsController extends Controller
{
    //Remove all messages alerts for the user
    public function AlertShutMessagesCenter(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        DB::update('UPDATE Alerts Al SET Seen = 1 WHERE Al.AlertType = 2 AND Al.AlertIndId IN ( SELECT Me.MessageId FROM Messages Me INNER JOIN users Us WHERE Al.AlertType = 2 AND Me.MessageId = Al.AlertIndId AND Me.ToId = ( SELECT UserId FROM users WHERE EmailAddress = ? ) AND Al.Seen = 0 ) ', [$UserInformation['Email']]);

        return 1;
    }

    //Get Number of Alerts and Alert Messages
    public function AlertGetMessageCenterContent(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        //Get number of notifications for the current user
        $db_results_no = DB::select('SELECT COUNT(Me.MessageId) AS "Count" FROM Messages Me INNER JOIN Alerts Al WHERE Al.AlertType = 2 AND Me.MessageId = Al.AlertIndId AND Me.ToId = (SELECT UserId FROM users WHERE EmailAddress = ?) AND Al.Seen = 0', [$UserInformation['Email']]);

        //Get messages for the current user
        $db_results_me = DB::select('SELECT Us.Name AS Name, Us.Surname, Us.ProfilePicture, Me.CreatedDate FROM Messages Me INNER JOIN Alerts Al INNER JOIN users Us WHERE Al.AlertType = 2 AND Me.MessageId = Al.AlertIndId AND Me.ToId = (SELECT UserId FROM users WHERE EmailAddress = ?) AND Us.UserId = Me.FromId AND Al.Seen = 0 ORDER BY Al.CreatedTyme DESC', [ $UserInformation['Email'] ]);

        if (count($db_results_me) == 0){
            return json_encode(["Status"=> 1, "Message"=> "", "Count"=> 0]);
        }
        //Ass array to store response
        $alerts = array();
        //Copy info to an ass arr
        foreach ($db_results_me as $value){
            
            $profilePicture = ($value->ProfilePicture ? $value->ProfilePicture: '/images/user-icon.svg');

            array_push($alerts, ["Name"=> "$value->Name $value->Surname", "Profile"=> $profilePicture, "Time"=> $value->CreatedDate]);
        }

        return json_encode(["Status"=> 1, "Message"=> json_encode($alerts), "Count"=> count($alerts)]);
    }

    //Remove all notifcation alerts for the user
    public function AlertShutAlertCenter(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        DB::update('UPDATE Alerts Al SET Seen = 1 WHERE Al.AlertType = 1 AND Al.AlertIndId IN ( SELECT (No.NotificationId) FROM Notifications No WHERE Al.AlertType = 1 AND No.NotificationId = Al.AlertIndId AND No.ToId = ( SELECT UserId FROM users WHERE EmailAddress = ? ) AND Al.Seen = 0) ', [$UserInformation['Email']]);

        return 1;
    }
    //Get Number of Alerts and Alert Messages
    public function AlertGetAlertCenterContent(){
        //Set session info
        $UserInformation = AppSession::sessionGetUserInfo();
        //Get number of notifications for the current user
        $db_results_no = DB::select('SELECT COUNT(No.NotificationId) AS "Count" FROM Notifications No INNER JOIN Alerts Al WHERE Al.AlertType = 1 AND No.NotificationId = Al.AlertIndId AND No.ToId = (SELECT UserId FROM users WHERE EmailAddress = ?) AND Al.Seen = 0', [$UserInformation['Email']]);

        //Get notifications for the current user
        $db_results_me = DB::select('SELECT No.Heading AS "Heading", No.Message AS "Message", No.FromId AS "From", No.CreatedTime AS "Time" FROM Notifications No INNER JOIN Alerts Al WHERE Al.AlertType = 1 AND No.NotificationId = Al.AlertIndId AND No.ToId = (SELECT UserId FROM users WHERE EmailAddress = ?) AND Al.Seen = 0 ORDER BY Al.CreatedTyme DESC ', [ $UserInformation['Email'] ]);

        if (count($db_results_me) == 0){
            return json_encode(["Status"=> 1, "Message"=> "", "Count"=> 0]);
        }
        //Ass array to store response
        $alerts = array();
        //Copy info to an ass arr
        foreach ($db_results_me as $value){
            array_push($alerts, ["Heading"=> $value->Heading, "Message"=> $value->Message, "From"=> $value->From, "Time"=> $value->Time]);
        }

        return json_encode(["Status"=> 1, "Message"=> json_encode($alerts), "Count"=> count($alerts)]);
    }
}
