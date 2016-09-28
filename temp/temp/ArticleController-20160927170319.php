<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use View;
use App\Services\Pagination;
use App\Repositories\Tag\TagInterface;
use App\Repositories\Article\ArticleInterface;
use App\Repositories\Tag\TagRepository as Tag;
use App\Repositories\Category\CategoryInterface;
use App\Repositories\Category\CategoryRepository as Category;

/**
 * Class ArticleController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class ArticleController extends Controller
{
    protected $article;
    protected $tag;
    protected $category;
    protected $perPage;

    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category)
    {
        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;

        $this->perPage = config('fully.modules.article.per_page');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        $pagiData = $this->article->paginate($request->get('page', 1), $this->perPage, false);
        $articles = Pagination::makeLengthAware($pagiData->items, $pagiData->totalItems, $this->perPage);

        $tags = $this->tag->all();
        $categories = $this->category->all();

        return view('frontend.article.index', compact('articles', 'tags', 'categories'));
    }

    /**
     * @param $slug
     * @return View
     */
    public function show($slug)
    {
        $article = $this->article->getBySlug($slug);

        if ($article == null) {
            return Response::view('errors.missing', [], 404);
        }

        View::composer('frontend/layout/layout', function ($view) use ($article) {

            $view->with('meta_keywords', $article->meta_keywords);
            $view->with('meta_description', $article->meta_description);
        });

        $categories = $this->category->all();
        $tags = $this->tag->all();

        return view('frontend.article.show', compact('article', 'categories', 'tags'));
    }
}
