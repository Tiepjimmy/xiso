<?php namespace Xiso\Homepage\Components;



use Cms\Classes\ComponentBase;
use Xiso\Homepage\Models\Comment as NewComment;
use Db;
use Illuminate\Database\Eloquent\Model;


class Comment extends  ComponentBase
{
    public $comment;
    public  function  componentDetails()
    {
        // TODO: Implement componentDetails() method.
        return[
                'name' => 'Comment',
                'description' => ' Bình luân của học sinh'
        ];
    }
    public  function onRun()
    {
       $comment = $this->comment = NewComment::all()->take(6);
        $this->comment= $this->page['comment'] = $comment;
    }
}