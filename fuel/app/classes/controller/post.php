<?php

use Fuel\Core\Controller_Template;
use Fuel\Core\Response;
use Fuel\Core\Session;
use Fuel\Core\View;

class Controller_Post extends Controller_Template
{

    public function action_index()
    {
        $data['posts'] = Model_Post::find('all');
        $this->template->title = "ブログ一覧";
        $this->template->content = View::forge('post/index', $data);
    }

    public function action_view($id = null)
    {
        is_null($id) and Response::redirect('post');

        if (!$data['post'] = Model_Post::find($id)) {
            Session::set_flash('error', 'お求めの記事はありません [# ' . $id . ' ]');
            Response::redirect('post');
        }

        $this->template->title = "ブログ";
        $this->template->content = View::forge('post/view', $data);
    }
}
