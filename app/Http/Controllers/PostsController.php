<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller {
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->deletePostImage($post);
        if (PostStatus::deletePostStatus($id)) {
            $this->flushCache($id);
        } else {
            Notification::error('Deleted failed');
        }

        return redirect()->route('article.index');
    }

    /**
     * @param $post
     */
    private function deletePostImage($post)
    {
        if ( !empty($post->pic)) {
            $file = public_path() . '/uploads/' . $post->pic;
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }

    /**
     * @param $id
     */
    private function flushCache($id)
    {
        if (Post::destroy($id)) {
            $message = 'Deleted successfully';
            Notification::success($message);
            Cache::tags(Post::REDIS_ARTICLE_PAGE_TAG)->flush();
            Cache::forget(Post::REDIS_ARTICLE_CACHE . $id);
        } else {

            Notification::error('Deleted failed');
        }
    }
}
