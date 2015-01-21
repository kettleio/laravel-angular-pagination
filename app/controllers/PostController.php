<?php
class PostController extends BaseController {

	public function json(){  
    	$posts = Post::paginate(5); // 5 is the number of items to show per page
		return Response::json($posts);
	}
	
}