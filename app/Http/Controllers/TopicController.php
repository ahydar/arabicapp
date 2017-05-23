<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic;
class TopicController extends Controller
{
    //
    public function index()
    {
      $topics  = Topic::get()->where('topic_id',0);

      for($i=0;$i<count($topics);$i++)
      {
        $topics -> load('topics');
      }
      
      return $topics;
      //return view('topics.list',compact('topics'));
    }
}
