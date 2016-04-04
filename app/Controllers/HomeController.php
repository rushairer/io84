<?php
namespace App\Controllers;

use Controller;
use Log;
use RuntimeException;
use App\Models\Article;
use Illuminate\Database\Capsule\Manager as DB;

/**
 * \HomeController
 */
class HomeController extends Controller {

    public function home() {
        Log::debug("homeController");

        //单表
        //$article = Article::find(1);

        //分表
        $aid = 5;
        $articleModel = new Article([],$aid);
        $article = $articleModel->find($aid);

        //$article2 = DB::table('articles')->where('id',2)->get();
        //var_dump($article2);

        $this->render('home.php',
            [
            'title' => 'My View',
            'article' => $article,
            'foo_bar' => 'this is a foo_bar',
            ]
        );
    }

    public function demo() {
        $user = ['name' => 'aben','id' => '2'];
        $this->json($user);
    }
}
